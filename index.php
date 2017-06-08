<!DOCTYPE html>
<html lang="en-US">

<!-- style sheet -->

<link href="main.css" media="all" rel="stylesheet" type="text/css">


<!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<div ng-app="">
  <p>Name : <input type="text" ng-model="name1"></p>
  <h1>Hello {{name1}}</h1>
</div>


<!-- PHP with Mysql -->
<?php

  echo "This is a mix of angular, sass and php!";
  
  $link = mysql_connect('localhost', 'root', '');
  if (!$link) {
      die('Could not connect: ' . mysql_error());
  }
  else {
      $db_selected = mysql_select_db('testdb', $link) or die(mysql_error());
      
      $query = "select * from test";
      $result = @mysql_query ($query);
      while ($r = @mysql_fetch_array ($result)){
          $comment = stripslashes ($r['comment']);
          echo $comment."<BR>";
      }
  }
  
  mysql_close($link);
  
?>


<!-- JSON -->
<p id="demo"></p>

<script>
var myObj = {
  "name":"John",
  "age":30,
  "cars": {
    "car1":"Ford",
    "car2":"BMW",
    "car3":"Fiat"
  }
}
document.getElementById("demo").innerHTML += myObj.cars.car2 + "<br>";
//or:
// delete myObj.cars.car1;
document.getElementById("demo").innerHTML += myObj.cars["car1"];
</script>


<!-- JS test -->

<script language="javascript">
  console.log("error11!")
  console.error("Failed to load blog.js")
  
</script>
</body>
</html>




