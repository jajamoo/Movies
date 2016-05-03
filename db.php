
<?php
$connect=mysqli_connect('localhost','root','','moviesDB');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>