<?php 

  class User {

    //the public keyword makes the properties to be accessbile outside the User Class
    //properties are basically variables.
    
    public $username;
    public $email;

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
  }

  //this is called instantiation, they are just instances of the User Class
  //uses the construct magic method to create the objects with arguments
  $userOne = new User("Morena","Morena@tswanakart.com");
  $userTwo = new User("Otsogile","onalepeloo@live.com");

  //to access a class properties from its instance we use an arrow ->
  echo $userOne->username . "<br>";
  echo $userOne->email . "<br>";

  echo $userOne->addFriend() . "<br>";


  echo $userTwo->username . "<br>";
  echo $userTwo->email . "<br>";
  echo $userTwo->addFriend() . "<br>";


?>

<html lang="en">
<head>
  <title>PHP OOP-> Properties and Methods</title>
</head>
<body>
  
</body>
</html>