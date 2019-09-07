<?php

class User {
    protected $username;
    protected $password;
    protected $first_name;
    protected $last_name;
    protected $address;
    protected $birthDate;


    public function __construct($username, $password, $first_name,$last_name,$address,$birthDate)
    {
        $this->username = $username;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->address = $address;
        $this->birthDate = $birthDate;
    }
    
    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

     /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

       /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

     /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }
    
}

class users {


    private $connexion;

    /**
     * Blogs constructor.
     * @param $connexion
     */
    public function __construct()
    {
        $servername="localhost";
        $username = "root";
        $password = "";
try{
    $this->connexion = new PDO("mysql:host=$servername;dbname=evaluation",$username,$password);
    $this->connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
    } }



    public function ajouterUser(User $User) {
      try{  $db = $this->connexion->prepare('INSERT into user (`username`, `password`, `first_name`, `last_name`, `address`, `birthDate`,) values ("'.$User->getUsername().'","'.$User->getPassword().'","'.$User->getFirst_name().'","'.$User->getLast_name().'","'.$User->getAddress().'","'.$User->getBirthDate().'")');
            $db->execute();
            header('Location: Login.php');
        }catch(Exception $e) {
                echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
                header('Location: Inscription.php');
            }
    }


public function testLogin($username,$password){
    $db = $this->connexion->prepare('SELECT COUNT(*) FROM `user` WHERE `username` ="'.$username.'"');
try {
    $db->execute();
    $result = $db->fetch();
    if($result['COUNT(*)'] > 0){
        $db2 = $this->connexion->prepare('SELECT `password` FROM `user` WHERE `username` ="'.$username.'"');
        try {
            $db2->execute();
            $result = $db2->fetch();
            if($result['password'] == $password){
session_start();
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;
                header('Location: Acceuil.php'); 
            }else{
                header('Location: login.php');
           } }catch(Exception $e) {
            echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
        }
    }else{
        header('Location: login.php');
echo "namedoesntexist";
}

} catch(Exception $e) {
    echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
}
}



    function __destruct() {
        $this->connexion = null;
    }

   
}


?>