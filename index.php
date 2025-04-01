<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Title of the Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   
  <form method="GET">
    <input type="text" name="class">
    <button>SUBMIT</button>
</form>  

  <?php
      //Gets the name of the class from the URL into the input 
      $name = $_GET['class'];
      //Finishes the sentence from class name 
      echo $name. " is my favorite class!";
  ?>
</body>
</html>
