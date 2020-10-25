<?php 

  class User {

    //the public keyword makes the properties to be accessbile outside the User Class
    //properties are basically variables.

    public $username = 'Morena';
    public $email = 'morena@tswanakart.com';

    //classes also have methods which are basically functions, this reffers to what the object can do
    public function addFriend(){
        //the this keyword reffers to the class instance that you are invoking or currently working in
        //it basically points to properties and methods contained in that class.
        return "$this->username Added a friend";
    }
  }

  //this is called instantiation, they are just instances of the User Class
  $userOne = new User();
  $userTwo = new User();

  //to access a class properties from its instance we use an arrow ->
  echo $userOne->username . "<br>";
  echo $userOne->email . "<br>";

  //accessing methods is the same as accesing properties and invoking the function as you normally would
  echo $userOne->addFriend() . "<br>";


  //you can always override instance property values by aaccessing and assigning new ones

  $userTwo->username = "Otsogile";
  $userTwo->email = "onalepeloo@live.com";

  echo $userTwo->username . "<br>";
  echo $userTwo->email . "<br>";
  echo $userTwo->addFriend() . "<br>";


  //shows all variables/properties that a class has
  //pass the class as a string to the function
  //print_r(get_class_vars("User"));

  //gets all methods a class has
  //print_r(get_class_methods("User"));

?>

<html lang="en">
<head>
  <title>PHP OOP-> Properties and Methods</title>
</head>
<body>
  
</body>
</html>