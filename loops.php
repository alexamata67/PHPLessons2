<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

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
    </ul>
  </div>
</nav>   
<?php

//While Loop
$x = 1;
//Do while loop
do {
    echo "Hi there<br>";
    $x++;
}
while ($x <= 5);

//For Loop shows how many variables you need.
for ($x = 0; $x <= 3; $x++) {
    echo "Hi<br>";

}    

//Foreach Loop only shows how many loops you include. 
$array = array("Alexa", "Vanessa", "Juliett");
foreach ($array as $loopdata) {
    echo "My name is ".$loopdata. "<br>";


}

?>




</body>
</html>
