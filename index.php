<?php 

  class User {

    //the public keyword makes the properties to be accessbile outside the User Class
    //properties are basically variables.

    public $username;
    protected $email;
    public $role = "Member";

    //this contructor function enables the class to instantiated with parameters/arguments, 
    //instead of manually overwriting it after it has been created.
    public function __construct($username,$email){
        $this->username = $username;
        $this->email = $email;
    }

    //classes also have methods which are basically functions, this reffers to what the object can do
    public function addFriend(){
        //the this keyword reffers to the class instance that you are invoking or currently working in
        //it basically points to properties and methods contained in that class.
        return "$this->username Added a friend";
    }

    public function message(){
        return "$this->email sent a new message";
    }

    //getters-> used to retrieve properties whose access is set to private outside the class
    public function getEmail(){
        return $this->email;
    }

    //setters-> used to update a class/object property whose access is private 
    //from outside the class local scope
    public function setEmail($email){
        //by this function we want to update the email
        if(strpos($email, "@") > -1){
            $this->email = $email;

        }
    }


  }


  class AdminUser extends User {

    public $level;
    //this overides the role property inherited from the user class.
    public $role = "Control";

    public function __construct($username,$email,$level){
        $this->level = $level;
        parent::__construct($username,$email);
        //the parent keyword refers to the main class we inherited from, we are accessing the construct function
        //from it
    }

    public function message(){
        return "admin $this->email sent a new message";
    }

  }

//this is called instantiation, they are just instances of the User Class
//uses the construct magic method to create the objects with arguments
$userOne = new User("Morena","Morena@tswanakart.com");
$userTwo = new User("Otsogile","onalepeloo@live.com");
$userThree = new AdminUser("Control","control@reco.online",5);

echo $userOne->role;




?>

<html lang="en">
<head>
  <title>PHP OOP-> Overriding Properties & Methods</title>
</head>
<body>
  
</body>
</html>