<h3> What's Cookin'</h3>

<br> The latest cooking news<br>

<?php
$con= mysql_connect("localhost","tester","test") or die ('Could not connect to database server');
mysql_select_db("recipe", $con) or die ('Sorry could not connect to specified database');
$query= "SELECT title,date,article FROM news ORDER BY date DESC limit 0,2";
$result= mysql_query($query) or die ('Sorry, could not get news articles');
while ($row=mysql_fetch_array($result, MYSQL_ASSOC))
{
$date= $row['date'];
$title= $row['title'];
$article= $row['article'];
echo "<br>$date- <b>$title</b><br>$article<br><br>";
}
?>
