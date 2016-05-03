
<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Movies!</title>
</head>
<body>
 
<form method="post" action="">
<label>Title</label>
<input type="text" name="title" />
<br />
<label>Genre</label>
<input type="text" name="genre" />
<br />
<label>Actor</label>
<input type="text" name="actor" />
<br />
 
<br />
<input type="submit" value="Add Movie">
</form>
 <?php include 'db.php'?>
 <?php


  $title=$_POST['title'];
$genre=$_POST['genre'];
$actor=$_POST['actor'];


mysqli_query($connect,"INSERT INTO movies(title,genre,actor)
				VALUES('$title','$genre','$actor')");
				
if(mysqli_affected_rows($connect) > 0){
	echo "<p>Movie Added</p>";
	echo "<a href='searchdisplay.php'>Search for movies!</a>";
} else {
	echo "Movie NOT Added<br />";
	echo mysqli_error ($connect);
}
?>
 
</body>
<p><body> 
	    <h3>Movies search</h3> 
	    <p>You  may search by genre, title, or actor!</p> 
	    <form  method="post" action="moviesearchlookup.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit1" value="Search"> 
	    </form> 
	  </body> 
	</html> 
	</p> 
</html>


 
