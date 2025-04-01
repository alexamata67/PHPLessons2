<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Title of the Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
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
<button name="submit" value="submit" type="submit">Calculate</button>
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