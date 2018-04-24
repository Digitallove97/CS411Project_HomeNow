<?php
header('Content-type: text/plain');
$dbhost = "localhost:3306";
$dbuser = "homenowproject_sxu46";
$dbpass = "Jerry1997!";
$dbname = "homenowproject_homeNow";
$connection= mysql_connect($dbhost, $dbuser, $dbpass);
// Opens a connection to a mySQL server
if (!$connection) {
  die('Not connected : ' . mysql_error());
}
// Set the active mySQL database
$db_selected = mysql_select_db($dbname, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}
// json output - insert table name below after "FROM"
$query = 'SELECT * FROM addr, cond, apt WHERE addr_name = cond_name AND apt_name = addr_name';
$dbquery = mysql_query($query);
if(! $dbquery )
{
  die('Could not get data: ' . mysql_error());
}
// Parse the dbquery into geojson 
// ================================================
// ================================================
// Return markers as GeoJSON
$geojson = array(
   'type'      => 'FeatureCollection',
   'features'  => array()
);
while($row = mysql_fetch_assoc($dbquery)) {
    $feature = array(
        'type' => 'Feature', 
      'geometry' => array(
        'type' => 'Point',
        'coordinates' => array((float)$row['addr_lati'], (float)$row['addr_longi'])
            ),
      'properties' => array(
            'bed' =>$row['cond_bed'],
            'bath' => $row['cond_bath'],
            'price' => $row['cond_rent'],
            'name' => $row['addr_name'],
            'address' =>$row['addr_pin'],
            'contact' => $row['apt_contact'],
            'picture' => $row['apt_image']
            
            
        //Other fields here, end without a comma
            )
        );
    array_push($geojson['features'], $feature);
};
mysql_close($connection);
// // Return routing result
    header("Content-Type:application/json",true);
    echo json_encode($geojson);
?>