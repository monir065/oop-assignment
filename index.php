
<!-- Create classes to represent geometric shapes -->
<?php
class calculation{
  function triangle_area(){
    $land=7;
    $hight=15;
    $result = 0.5 * $land * $hight;
    return  $result;
  }
  function circle_area(){
    $r=5;
    $result = 3.1415 * $r * $r;
    return  $result;
  }
  function rectangles_area(){
    $length=7;
    $width=13;
    $result = $length * $width;
    return  $result;
  }
}
?>
<!-- Create classes to represent geometric shapes -->

<!-- Develop a logging system using interfaces -->
 <?php 
 interface Login {
  public function namePass();
 }
 class User implements Login{
    public function namePass() {
      $name= 'monir';
      $password ='123456';
     if(isset($_POST['submit'])){
      $user_name = $_POST['user_name'];
      $pass = $_POST['pass'];
      if( $user_name == $name AND $pass == $password){
        echo 'Login Successfull.';
      }else{
        echo 'Login Failed';
      }
     }
    }
 }
 ?>
<!-- Develop a logging system using interfaces -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Create classes to represent geometric shapes</h2>
  <?php 
  $monir = new calculation();
  echo 'Triangle area is: '. $monir->triangle_area() . ' ';
  echo 'Circle area is: '. $monir->circle_area() . ' ';
  echo 'Rectangles area is:'. $monir->rectangles_area();
  ?>
<br><br>

<h2>Develop a logging system using interfaces</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <label for="user_name">User name:</label><br>
  <input type="text" id="user_name" name="user_name"><br>
  <label for="pass">Password:</label><br>
  <input type="password" id="pass" name="pass"><br><br>
  <input type="submit" name="submit" value="Submit">
  <div>
    <?php 
    $user = new User;
    echo $user->namePass();
    ?>
  </div>
</form> 

</body>
</html>



