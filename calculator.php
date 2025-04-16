<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>

body {
background-color:rgb(216, 145, 189);
}


</style>  

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Index</a> 
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="operators.php">Operators</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="datatypes.php">Data Types</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="conditionals.php">Conditionals</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="calendar.php">Calendar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="loops.php">Loops</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="arrays.php">Arrays</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="functions.php">Functions</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="superglobals.php">Super Globals</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="calculator.php">Calculator</a>
      </li>
    </ul>
  </div>
</nav>
  
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