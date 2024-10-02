
<?php
session_start();

if (!isset($_SESSION["productos"])){

  $_SESSION["productos"] = array("drink", "milk");
  $_SESSION["productos"]["drink"] = 0;
  $_SESSION["productos"]["milk"] = 0;

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
<h1> Supermarket management </h1>

<form action="/PracticaIntroPHP/ExerciseSession01.php" method='POST'>

    Worker name: <input type='text' name="workname" required> 

    <h3> Choose product </h3>

    <select name='product' required>
      <option value='drink'>Soft Drink</option>
      <option value='milk'>Milk</option>
    </select>

    <h3> Product quantity: </h3>

    <input type="number" name="cantprod" required>
    <br><br>
    <input type="submit" value="Add" name="Add">
    <input type="submit" value="Remove" name="Remove">
    <input type="reset" value="Reset">

</form>

<h3> Inventary </h3>
  <?php
  if (isset($_POST["workname"]) && isset($_POST["product"])){

    $error1 = false;
    $error2 = false;

    if (isset($_POST["Add"])){
      
      switch ($_POST["product"]){
        case "drink":
          
          $_SESSION["productos"]["drink"] += $_POST["cantprod"];

        break;
        case "milk":

          $_SESSION["productos"]["milk"] += $_POST["cantprod"];

        break;

      }

    } else if (isset($_POST["Remove"])){
      
      switch ($_POST["product"]){
        case "drink":

          if ($_SESSION["productos"]["drink"] - $_POST["cantprod"] < 0){
            
            $error1 = true;

          } else {
            $_SESSION["productos"]["drink"] -= $_POST["cantprod"];
          }

        break;
        case "milk":

          if ($_SESSION["productos"]["milk"] - $_POST["cantprod"] < 0){

            $error2 = true;

          } else {
            $_SESSION["productos"]["milk"] -= $_POST["cantprod"];
          }

        break;

      }

    }

    echo "Worker: ".$_POST["workname"];
    echo "<br> <br> Units Milk: ".$_SESSION["productos"]["milk"]."  <br> <br> Units Soft Drink: ".$_SESSION["productos"]["drink"];
    if ($error1){
      echo "<h3> !! ERROR !! QUANTITY OF SOFT DRINK LESS THAN 0 </h3> ";
    }
    if ($error2){
      echo "<h3> !! ERROR !! QUANTITY OF MILK LESS THAN 0 </h3> ";
    }

  }

  ?>
</body>
</html>

