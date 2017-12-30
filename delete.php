<?php 
$connection = mysql_connect('localhost','root',''); //establish connection to db
$selected = mysql_select_db('portfolio', $connection); //select db

$delete_record = $_GET['delete'];
$delete_query = "Delete from comments where cID = '$delete_record'";
$execute = mysql_query($delete_query);
if ($execute)
{
echo "Record deleted";
echo'<script>window.open("index.php?Deleted=Recored Deleted Successfully","_self")</script>';

}
?>