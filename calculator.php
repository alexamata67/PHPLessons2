<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  
<form>
<input type="text" name ="Number1" placeholder="Number1">
<input type="text" name ="Number2" placeholder="Number2">
<select name="operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
</select>
<br>
<button name="submit" value="submit" type="submit">Claculate</button>
</form>
<p>The answer is:</P>
<?php
     if (isset($_GET['submit'])) {
       $result1 = $_GET['Number1'];
       $result2 = $_GET['Number2'];
       $operator = $_GET['operator'];
       switch ($operator) {
           case "None":
              echo "You need to select a method";
              break;
           case "Add":
              echo $result1 + $result2;
              break;
            case "Subtract":
               echo $result1 - $result2;
               break;
            case "Multiply":
               echo $result1 * $result2;
               break;
            case "Divide":
               echo $result1 / $result2;
               break;           

       }
}

?>



  </body>
</html>