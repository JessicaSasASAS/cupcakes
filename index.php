<?php
//turn on error reporting
ini_set ('display_errors', 1);
error_reporting(E_ALL);
$cupcakes= ["grasshopper"=> "The Grasshopper","maple"=> "Whiskey Maple Bacon", "carrot"=> "Carrot Walnut"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
<h1>Cupcakes!</h1>
<form>
    <input type="text" name="name" value="Your Name">
    <fieldset>
        <legend>Flavors:</legend>
        <?php
        foreach($cupcakes as $flavor => $flavor_dets)
        {
            echo "<input type ='checkbox' name ='flavors' value = '$flavor'>$flavor_dets";
            echo '<br>';
        }
        ?>
    </fieldset>
    <input type="button" value="Submit Order">
</form>

</body>
</html>