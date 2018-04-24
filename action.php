<!DOCTYPE html>
<html>
    
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 100%;
  background-color: #eee;
  z-index:1;
}

.topnav a {
  float: left;
  display: block;
  color: #bbb;
  font-weight: bold;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
 

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #aaa;
  font-size: 17px;
  border: none;
  cursor: pointer;
 
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    font-weight: bold;
    width: 100%;
    margin: 0;
    padding: 14px;
  
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

 

p.top{
    color:black;
    text-align:center;
    font-size:40px;
    margin:30px;
    padding:10px;
    font-family:"Trebuchet MS", Helvetica, sans-serif;
}

form.right{
    float:right;
    display:inline-block;
    margin-right:13%;
    margin-top:6%;
    
}
.buttom{
    background-color: #2196F3; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left:5%;
    margin-top:2%;
    margin-bottom:2%;
    display:inline-block;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.buttom:hover{
    background-color: white; 
    color: black; 
    border: 2px solid #2196F3;
}
.icon{
    opacity:0.5;
    float:left;
    width:15%;
    height:15%
    margin-left:30%;
}
.dropdown {
    margin-top:0px;
    margin-left:5%;
    margin-right:1%;
    margin-bottom:1%;
    float:left;
    width:100px;
    height:100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.top-container {
    background-color:#fff;
    width:100%;
    margin:0;
    padding-top:1%;
    padding-bottom:2%;
   
}
.bi {
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  line-height:200%;
  font-size:=30px;
    
}
input[type=submit]{
    background-color: #2196F3; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left:87%;
    margin-top:0px;
    margin-bottom:5px;
    display:inline-block;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
  }
input[type=submit]:hover {
    background-color: white; 
    color: black; 
    border: 2px solid #2196F3;
}
.level1{
  margin:0;
  background-color:#fff;
  width:100%;
  padding-top:0px;
  padding-bottom:0px;
  padding-left:0px;
  padding-right:0px;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:25px;
  text-align:center;
  float:left;
}
.level2{
  margin:0;
  background-color:#fff;
  width:100%;
  padding-top:0px;
  padding-bottom:0px;
  padding-left:0px;
  padding-right:0px;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:22px;
  text-align:center;
  float:left;
  display: inline;
}
.level1-section{
  text-align:left;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#fff;
  width:100%;
  font-size:30px;
}
.level2-section{
  text-align:left;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#fff;
  width:100%;
  font-size:30px;
}
.level1-comment{
  margin:0;
  background-color:#fff;
  width:100%;
  padding-top:0px;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:25px;
  text-align:center;
  float:left;
}
.level2-comment{
  margin:0;
  background-color:#fff;
  width:100%;
  padding-top:0px;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:25px;
  text-align:center;
  float:left;
}
p.red{
    color:#be4f5d;
    padding-top:15px;
    margin:0px;
}
p.green{
    color:#66c555;
    padding-top:15px;
    margin:0px;
}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 2px solid #2196f3;
    margin-left:5%;
    margin-right:5%;
    padding: 2px;
}
.comment{
    font-family:"Trebuchet MS", Helvetica, sans-serif;
    font-size:20px;
    margin-right:20px;
    text-align:right;
    padding:0px;
    margin-bottom:0px;
}
   </style>
  </head>
<body>
 
<?php
    $dbhost = "localhost:3306";
    $dbuser = "homenowproject_sxu46";
    $dbpass = "Jerry1997!";
    $dbname = "homenowproject_homeNow";
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if($conn -> connect_error) {
      die("Could not connect: " . mysql_error());
    }
    
    //echo $_POST["user_name"].$_POST["user_pw"].$_POST["user_loc"].$_POST["user_university"];
    
 echo  "<div class='topnav'>
  <a class='active' href='http://homenowproject.web.engr.illinois.edu'>HomeNow</a>
  <a href='http://homenowproject.web.engr.illinois.edu/login.html'>Developer</a>
  <div class='search-container'>
    <form action='/action_page.php'>
      <input type='text' placeholder='Search the apartment..' name='search'>
      <button type='submit'><i class='fa fa-search'></i></button>
    </form>
  </div>
</div>
<br><br><br>
";
    if($_POST["action"] == "insert") {
        //Apartment(name, rating, gallery, contact_information)
        if($_POST["table"] == "apt") {
            $apt_name = $_POST["apt_name"];
            $apt_rating = $_POST["apt_rating"];
            $apt_contact = $_POST["apt_contact"];
            $apt_image = $_POST["apt_image"];
            if($apt_name == "" || $apt_rating == "" || $apt_contact == "" || $apt_image == "") {
                echo "Empty input! Please try again!";
            }
            $sql = "INSERT INTO `apt`(`apt_name`, `apt_rating`, `apt_contact`, `apt_image`) VALUES('$apt_name', '$apt_rating', '$apt_contact', '$apt_image')";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not insert data: ' . mysql_error());
            }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Insertion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
            //$conn->close();    
        }
        //Address(map_pin, apartment_name, neighborhood_crime_rate, nearby_bus_station, distance_to_school)
        else if($_POST["table"] == "addr") {
            $addr_name = $_POST["addr_name"];
            $addr_pin = $_POST["addr_pin"];
            $addr_longi = $_POST["addr_longi"];
            $addr_lati = $_POST["addr_lati"];
            if($addr_name == "" || $addr_pin == "" || $addr_longi == "" || $addr_lati == "") {
                echo "Empty input! Please try again!";
            }
            $sql = "INSERT INTO `addr`(`addr_name`, `addr_pin`, `addr_longi`, `addr_lati`) VALUES('$addr_name', '$addr_pin', '$addr_longi', '$addr_lati')";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not insert data: ' . mysql_error());
            }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Insertion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
            //$conn->close();
        }
        //Room(apartment_name, number_of_bathrooms, amenities, number_of_bedrooms, rent)
        else if($_POST["table"] == "cond") {
            $cond_name = $_POST["cond_name"];
            $cond_bed = $_POST["cond_bed"];
            $cond_bath = $_POST["cond_bath"];
            $cond_rent = $_POST["cond_rent"];
            $cond_amen = $_POST["cond_amen"];
            if($cond_name == "" || $cond_bed == "" || $cond_bath == "" || $cond_rent == "" || $cond_amen == "") {
                echo "Empty input! Please try again!";
            }
            $sql = "INSERT INTO `cond`(`cond_name`, `cond_bed`, `cond_bath`, `cond_rent`, `cond_amen`) VALUES('$cond_name', '$cond_bed', '$cond_bath', '$cond_rent', '$cond_amen')";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not insert data: ' . mysql_error());
            }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Insertion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
           // $conn->close();
        }
        else {
            $loc_pin = $_POST["loc_pin"];
            $loc_apt = $_POST["loc_apt"];
            if($loc_pin == "" || $loc_apt == "") {
                echo "Empty input! Please try again!";
            }
            $sql = "INSERT INTO `loc`(`loc_pin`, `loc_apt`) VALUES('$loc_pin', '$loc_apt')";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not insert data: ' . mysql_error());
            }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Insertion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
        }
    }
    else if($_POST["action"] == "update") {
        if($_POST["table"] == "apt") {
            $apt_name = $_POST["apt_name"];
            $apt_rating = $_POST["apt_rating"];
            $apt_contact = $_POST["apt_contact"];
            $apt_image = $_POST["apt_image"];
            $apt_w = $_POST["apt_where"];
            if ($apt_name != "") {
            $apt_name = "apt_name = '$apt_name',";
            }
            if ($apt_rating != "") {
            $apt_rating = "apt_rating = '$apt_rating',";
            }
            if ($apt_contact != "") {
            $apt_contact = "apt_contact = '$apt_contact',";
            }
            if ($apt_image != "") {
            $apt_image = "apt_image = '$apt_image',";
            }
            if ($apt_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $apt_name. " " .$apt_rating. " " .$apt_contact. " " .$apt_image;
            $temp = rtrim($temp, ", ");
            $sql = "UPDATE `apt` " . "SET $temp " . "WHERE $apt_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die("Could not update data: " . mysql_error());
            }
           echo ("<script LANGUAGE='JavaScript'>
                window.alert('Update Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
           // $conn->close();
        }
        else if($_POST["table"] == "addr") {
            $addr_name = $_POST["addr_name"];
            $addr_pin = $_POST["addr_pin"];
            $addr_longi = $_POST["addr_longi"];
            $addr_lati = $_POST["addr_lati"];
            $addr_w = $_POST["addr_where"];
            if ($addr_name != "") {
            $addr_name = "addr_name = '$addr_name',";
            }
            if ($addr_pin != "") {
            $addr_pin = "addr_pin = '$addr_pin',";
            }
            if ($addr_longi != "") {
            $addr_longi = "addr_longi = '$addr_longi',";
            }
            if ($addr_lati != "") {
            $addr_lati = "addr_lati = '$addr_lati',";
            }
            if ($addr_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $addr_name. " " .$addr_pin. " " .$addr_longi. " " .$addr_lati;
            $temp = rtrim($temp, ", ");
            $sql = "UPDATE `addr` " . "SET $temp " . "WHERE $addr_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die("Could not update data: " . mysql_error());
            }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Update Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
           // $conn->close();
        }
        else if($_POST["table"] == "cond") {
            $cond_name = $_POST["cond_name"];
            $cond_bed = $_POST["cond_bed"];
            $cond_bath = $_POST["cond_bath"];
            $cond_rent = $_POST["cond_rent"];
            $cond_amen = $_POST["cond_amen"];
            $cond_w = $_POST["cond_where"];
            if ($cond_name != "") {
            $cond_name = "cond_name = '$cond_name',";
            }
            if ($cond_bed != "") {
            $cond_bed = "cond_bed = '$cond_bed',";
            }
            if ($cond_bath != "") {
            $cond_bath = "cond_bath = '$cond_bath',";
            }
            if ($cond_rent != "") {
            $cond_rent = "cond_rent = '$cond_rent',";
            }
            if ($cond_amen != "") {
            $cond_amen = "cond_amen = '$cond_amen',";
            }
            if ($cond_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $cond_name. " " .$cond_bed. " " .$cond_bath. " " .$cond_rent. " " .$cond_amen;
            $temp = rtrim($temp, ", ");
            $sql = "UPDATE `cond` " . "SET $temp " . "WHERE $cond_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die("Could not update data: " . mysql_error());
            }
            echo "Successfully updated!";
            $conn->close();
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Update Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
           // $conn->close();
        }
        else {
            $loc_pin = $_POST["loc_pin"];
            $loc_apt = $_POST["loc_apt"];
            $loc_w = $_POST["loc_where"];
            if ($loc_pin != "") {
            $loc_pin = "loc_pin = '$loc_pin',";
            }
            if ($loc_apt != "") {
            $loc_apt = "loc_apt = '$loc_apt',";
            }
            if ($loc_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $loc_pin. " " .$loc_apt;
            $temp = rtrim($temp, ", ");
            $sql = "UPDATE `loc` " . "SET $temp " . "WHERE $loc_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die("Could not update data: " . mysql_error());
            }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Update Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
            //$conn->close();    
        }
    }
    else if($_POST["action"] == "delete") {
        if($_POST["table"] == "apt") {
            $apt_w= $_POST["apt_where"];
        if ($apt_w == "") {
            die ("Failed: condition cannot be empty");
        }
        $sql = "DELETE FROM `apt` " . "WHERE $apt_w";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not delete data: ' . mysql_error());
        }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Deletion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
            //$conn->close();
        }
        else if($_POST["table"] == "addr") {
            $addr_w= $_POST["addr_where"];
        if ($addr_w == "") {
            die ("Failed: condition cannot be empty");
        }
        $sql = "DELETE FROM `addr` " . "WHERE $addr_w";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not delete data: ' . mysql_error());
        }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Deletion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
            //$conn->close();    
        }
        else if($_POST["table"] == "cond") {
            $cond_w= $_POST["cond_where"];
        if ($cond_w == "") {
            die ("Failed: condition cannot be empty");
        }
        $sql = "DELETE FROM `cond` " . "WHERE $cond_w";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not delete data: ' . mysql_error());
        }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Deletion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
            //$conn->close();
        }
        else {
            $loc_w= $_POST["loc_where"];
        if ($loc_w == "") {
            die ("Failed: condition cannot be empty");
        }
        $sql = "DELETE FROM `loc` " . "WHERE $loc_w";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not delete data: ' . mysql_error());
        }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Deletion Successful');
                window.location.href='http://homenowproject.web.engr.illinois.edu/data_manager.php';
              </script>");
           // $conn->close();    
        }
    }
    else {
        #if($_POST["action"] == "select")
        if($_POST["table"] == "apt") {
            $apt_name = $_POST["apt_name_c"];
            $apt_rating = $_POST["apt_rating_c"];
            $apt_contact = $_POST["apt_contact_c"];
            $apt_image = $_POST["apt_image_c"];
            $apt_w = $_POST["apt_where"];
            if ($apt_name != "") {
                $apt_name = "`apt_name`,";
            }
            if ($apt_rating != "") {
                $apt_rating = "`apt_rating`,";
            }
            if ($apt_contact != "") {
                $apt_contact = "`apt_contact`,";
            }
            if ($apt_image != "") {
                $apt_image = "`apt_image`,";
            }
            if ($apt_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $apt_name. " " .$apt_rating. " " .$apt_contact. " " .$apt_image;
            $temp = rtrim($temp, ", ");
            $sql = "SELECT $temp FROM `apt` WHERE $apt_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not get data: ' . mysql_error());
            }
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                echo
                "apt_name :{$row['apt_name']} <br>".
                "apt_rating :{$row['apt_rating']} <br>".
                "apt_contact :{$row['apt_contact']} <br>".
                "apt_image :{$row['apt_image']} <br>".
                "---------------------------------------------- <br>";
            }
            echo "Successfully Selected!";
            $conn->close();
        }
        else if($_POST["table"] == "addr") {
            $addr_name = $_POST["addr_name_c"];
            $addr_pin = $_POST["addr_pin_c"];
            $addr_longi = $_POST["addr_longi_c"];
            $addr_lati = $_POST["addr_lati_c"];
            $addr_w = $_POST["addr_where"];
            if ($addr_name != "") {
                $addr_name = "`addr_name`,";
            }
            if ($addr_pin != "") {
                $addr_pin = "`addr_pin`,";
            }
            if ($addr_longi != "") {
                $addr_longi = "`addr_longi`,";
            }
            if ($addr_lati != "") {
                $addr_lati = "`addr_lati`,";
            }
            if ($addr_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $addr_name. " " .$addr_pin. " " .$addr_longi. " " .$addr_lati;
            $temp = rtrim($temp, ", ");
            $sql = "SELECT $temp FROM `addr` WHERE $addr_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not get data: ' . mysql_error());
            }
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                echo
                "addr_name :{$row['addr_name']} <br>".
                "addr_pin :{$row['addr_pin']} <br>".
                "addr_longi :{$row['addr_longi']} <br>".
                "addr_lati :{$row['addr_lati']} <br>".
                "---------------------------------------------- <br>";
            }
            echo "Successfully Selected!";
            $conn->close();
        }
        else if($_POST["table"] == "cond") {
            $cond_name = $_POST["cond_name_c"];
            $cond_bed = $_POST["cond_bed_c"];
            $cond_bath = $_POST["cond_bath_c"];
            $cond_rent = $_POST["cond_rent_c"];
            $cond_amen = $_POST["cond_amen_c"];
            $cond_w = $_POST["cond_where"];
            if ($cond_name != "") {
            $cond_name = "`cond_name`,";
            }
            if ($cond_bed != "") {
            $cond_bed = "`cond_bed`,";
            }
            if ($cond_bath != "") {
            $cond_bath = "`cond_bath`,";
            }
            if ($cond_rent != "") {
            $cond_rent = "`cond_rent`,";
            }
            if ($cond_amen != "") {
            $cond_amen = "`cond_amen`,";
            }
            if ($cond_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $cond_name. " " .$cond_bed. " " .$cond_bath. " " .$cond_rent. " " .$cond_amen;
            $temp = rtrim($temp, ", ");
            $sql = "SELECT $temp FROM `cond` WHERE $cond_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not get data: ' . mysql_error());
            }
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                echo
                "cond_name :{$row['cond_name']} <br>".
                "cond_bed :{$row['cond_bed']} <br>".
                "cond_bath :{$row['cond_bath']} <br>".
                "cond_rent :{$row['cond_rent']} <br>".
                "cond_amen :{$row['cond_amen']} <br>".
                "---------------------------------------------- <br>";
            }
            echo "Successfully Selected!";
            $conn->close();
        }
        else {
            $loc_pin = $_POST["loc_pin_c"];
            $loc_apt = $_POST["loc_apt_c"];
            $loc_w = $_POST["loc_where"];
            if ($loc_pin != "") {
            $loc_pin = "`loc_pin`,";
            }
            if ($loc_apt != "") {
            $loc_apt = "`loc_apt`,";
            }
            if ($loc_w == "") {
                die ("Failed: condition cannot be empty");
            }
            $temp = $loc_pin. " " .$loc_apt;
            $temp = rtrim($temp, ", ");
            $sql = "SELECT $temp FROM `loc` WHERE $loc_w";
            $db = mysql_select_db('homenowproject_homeNow', $conn);
            if (!$db){
                die ("Failed: " . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die('Could not get data: ' . mysql_error());
            }
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                echo
                "loc_pin :{$row['loc_pin']} <br>".
                "loc_apt :{$row['loc_apt']} <br>".
                "---------------------------------------------- <br>";
            }
            echo "Successfully Selected!";
            $conn->close();
        }
        
    }
    echo "<div class=bot><a class='buttom' href='data_manager.php'>Go Back</a></div>";
    $conn->close();
    
?>


</body>
</html>