<?php
session_start();

if (!isset($_SESSION["threenums"])){

  $_SESSION["threenums"] = array(10, 20, 30);

}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Numbers</title>
</head>
<body>
    
    <h1>Modify array saved in session</h1>
    
    <form  method= "post">
        Position to modify: 
        <select name="position">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <br> <br>

        New Value: <input type="number" name="value">
        <br><br>

        <input type="submit" name="Modify" value="Modify">
        <input type="submit" name="Average" value="Average">
        <input type="reset" name="Reset" value="Reset">
        

    </form>

<?php

if (isset($_POST["Modify"])) {

    if (!empty($_POST["value"]) || $_POST["value"] == 0) {

        switch ($_POST["position"]){
            case "0":
                $_SESSION["threenums"][0] = $_POST["value"];
            break;
            case "1":
                $_SESSION["threenums"][1] = $_POST["value"];
            break;
            case "2":
                $_SESSION["threenums"][2] = $_POST["value"];
            break;
        }

    }

} 

echo " <br> Current array: ".$_SESSION["threenums"][0]." | ".$_SESSION["threenums"][1]." | ".$_SESSION["threenums"][2]."<br> <br>";


if (isset($_POST["Average"])){

    $avg = array_sum($_SESSION["threenums"]) / count($_SESSION["threenums"]);

    echo "Average: ".round($avg,2);

}

?>

</body>
</html>
