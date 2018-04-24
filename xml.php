<?php
function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

// Opens a connection to a MySQL server
$dbhost = "localhost:3306";
$dbuser = "homenowproject_sxu46";
$dbpass = "Jerry1997!";
$dbname = "homenowproject_lol";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
  die('Not connected : ' . mysqli_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db($dbname, $conn);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM addr_2 WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<addr>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // Add to XML document node
  echo '<addr ';
  echo 'name="' . parseToXML($row['COL 2']) . '" ';
  echo 'address="' . parseToXML($row['COL 1']) . '" ';
  echo 'lat="' . $row['COL 6'] . '" ';
  echo 'lng="' . $row['COL 7'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</addr>';

?>