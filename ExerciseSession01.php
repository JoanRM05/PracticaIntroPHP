
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

<h1> Inventary </h1>
  <?php
  if (isset($_POST["workname"]) && isset($_POST["product"])){

    if (isset($_POST["Add"])){
      
      switch ($_POST["product"]){
        case "drink":
          
          $_SESSION["productos"]["drink"] += $_POST["cantprod"];

        break;
        case "milk":

          $_SESSION["productos"]["milk"] += $_POST["cantprod"];

        break;

      }

      echo "<span> Worker: ".$_POST["workname"]." 
      <br> <br> Units Milk: ".$_SESSION["productos"]["milk"]."
      <br> <br> Units Soft Drink: ".$_SESSION["productos"]["drink"]."
      </span>";
      
    } else if (isset($_POST["Add"])){
      
      switch ($_POST["product"]){
        case "drink":
          
          $_SESSION["productos"]["drink"] += $_POST["cantprod"];

        break;
        case "milk":

          $_SESSION["productos"]["milk"] += $_POST["cantprod"];

        break;

      }

      echo "<span> Worker: ".$_POST["workname"]." 
      <br> <br> Units Milk: ".$_SESSION["productos"]["milk"]."
      <br> <br> Units Soft Drink: ".$_SESSION["productos"]["drink"]."
      </span>";
    }




  }
    



  ?>
</body>
</html>

