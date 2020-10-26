<?php 

class Weather {

  //for this kind of properties and methods you can access them directly using the class
  //you do not have to create an instance of that class
  //you put the static keyowrd after the access level keyword

  public static $tempConditions = ["Cold","Mild","Warm"];

  public static function celciousToFarenheit($c){

    return $c * 9 / 5 + 32;

  }


  public static function determineTempCondition($f){

    //because $this is used to point to an instance of a class, to access static properties and methods
    //we use self keyword with ::. It points to the class itself
    if($f < 40){
      //its cold
      return self::$tempConditions[0];

    } else if ($f < 70){
      //its  mild
      return self::$tempConditions[1];

    } else {
      //its warm
      return self::$tempConditions[2];
    }

  }


}

//for accessing static properties and methods we use :: instead of ->
//you do not put a dollar sign infront of the class either
echo Weather::$tempConditions[0] . "<br>";

//accessing a method
echo Weather::celciousToFarenheit(20) . "<br>";

//accessing a method
echo Weather::determineTempCondition(90) . "<br>";

?>

<html lang="en">
<head>
  <title>PHP OOP-> Static Properties And Methods</title>
</head>
<body>
  
</body>
</html>