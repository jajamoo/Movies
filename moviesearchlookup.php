<?php
if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  
  $search=$_POST['name'];

  //connect  to the database
  $db=mysql_connect  ("localhost", "root",  "") or die ('DB CONNECTION ERROR: ' . mysql_error());

  $mydb=mysql_select_db("moviesDB");

  $sql="SELECT title, genre, actor FROM movies WHERE genre LIKE '%" . $search .  "%' OR title LIKE '%" . $search ."%' OR actor LIKE '%" . $search ."%'";

  
  $result=mysql_query($sql);

  
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

  while($row=mysql_fetch_array($result)){
		  $movieTitle  =$row['title'];
          $movieGenre  =$row['genre'];
          $movieActor=$row['actor'];
          
 
 
  echo "<ul>\n";
  echo "<li>" .$movieTitle . " " . $movieGenre . " " . $movieActor .  "</a></li>\n";
  echo "</ul>";
  }
  

  }
  }
  
  ?>