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
img {
    
}

form.right{
    float:right;
    display:inline-block;
    margin-right:13%;
    margin-top:13%;
    
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
    width:180px;
    height:190px;
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
    font-size:18px;
   
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
    $apartment_name=$_POST["id"];
    $apartment_name=rtrim($apartment_name,"/");
   echo  "<div class='topnav'>
  <a class='active' href='http://homenowproject.web.engr.illinois.edu'>HomeNow</a>
  <a href='http://homenowproject.web.engr.illinois.edu/login.html'>Developer</a>
  <div class='search-container'>
    <form name='topnav' method='post' action='better_display.php'>
      <input type='text' placeholder='Search the apartment..' name='name'>
      <button type='submit'><i class='fa fa-search'></i></button>
      <input type='hidden' name='section' value='search'>
    </form>
  </div>
</div>
";
   
    $apt_name = "`apt_name`,";
    $apt_rating = "`apt_rating`,";
    $apt_contact = "`apt_contact`,";
    $apt_info = $apt_name. " " .$apt_rating. " " .$apt_contact;
    
    
    
    $apt_info = rtrim($apt_info, ", ");
    $sql = "SELECT $apt_info FROM `apt` WHERE apt_name='$apartment_name' ";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        
        $rating = $row['apt_rating']; 
        $contact= $row['apt_contact'];
       
    }
            
            
    $loc_pin = "`loc_pin`,";
    $loc_apt = "`loc_apt`,";
    $loc_info = $loc_pin. " " .$loc_apt;
    $loc_info = rtrim($loc_info, ", ");
    $sql = "SELECT $loc_info FROM `loc` WHERE loc_apt='$apartment_name' ";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $location =$row['loc_pin'];
    }
    
    
    
    $cond_rent = "`cond_rent`,";
    $cond_bed = "`cond_bed`,";
    $cond_bath = "`cond_bath`,";
    $cond_amen = "`cond_amen`,";
    $temp = $cond_rent. " " .$cond_bed. " " .$cond_bath. " " .$cond_amen;
    $temp = rtrim($temp, ", ");
    $sql = "SELECT $temp FROM `cond` WHERE cond_name='$apartment_name'";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
           
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
       $rent=$row['cond_rent'];
       $bed=$row['cond_bed'];
       $bath=$row['cond_bath'];
       $amen=$row['cond_amen'];
        
    }
    
   
    
echo
        "<div class='top-container'>
    <h2 style='color:#495bb8;margin-left:10%;margin-bottom:1%;'><br><br>Result</h2><hr/></div>";
    
    $bath_share=$bed/$bath;
    $privacy_rating=$bath_share*2+$bed;
$section=$_POST["section"];

############################### Privacy #####################################
############################### Privacy #####################################
############################### Privacy #####################################
############################### Privacy #####################################
############################### Privacy #####################################
############################### Privacy #####################################
############################### Privacy #####################################

if ($section=="privacy"){
        $sql = "SELECT cond_name,cond_rent FROM `cond` WHERE cond_bed/cond_bath*2+cond_bed<='$privacy_rating' AND cond_rent<'$rent'";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not get data: ' . mysql_error());
        }
       
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $better_apt=$row["cond_name"];
        $better_rent=$row["cond_rent"];
        $sql = "SELECT loc_pin FROM `loc` WHERE loc_apt='$better_apt' ";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_1 = mysql_query($sql, $conn);
        if(!$result_1) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_1, MYSQL_ASSOC)) {
            $better_location =$row['loc_pin'];
        }
        
        $sql = "SELECT apt_rating,apt_contact,apt_image FROM `apt` WHERE apt_name='$better_apt' ";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_2 = mysql_query($sql, $conn);
        if(!$result_2) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_2, MYSQL_ASSOC)) {
            $better_rating = $row['apt_rating']; 
            $better_contact= $row['apt_contact'];
            $better_img=$row['apt_image'];
        }
        
        
        $encode_name=str_replace(" ","z",$better_apt);
        echo
        "<div class='top-container'>
         <img class='dropdown' src='$better_img'>
    <div class=bi>
        <form class='right' name='visual' method='post' action='visual.php'>
                    <input type='submit' name=visualization value='See detail'>
                    <input type='hidden' name='id' value=$encode_name>
                </form>
        Name : $better_apt<br>
        Rating : $better_rating<br>
        Rent : $better_rent<br>
        
        Contact :$better_contact<br>
        Location : $better_location<br>
        </div></div><hr/>";     
        }
    
}

############################### Reputation #####################################
############################### Reputation #####################################
############################### Reputation #####################################
############################### Reputation #####################################
############################### Reputation #####################################

$reputation_score=$rating;
if ($section=="reputation"){
        $sql = "SELECT apt_name,cond_rent FROM `apt`,`cond`  WHERE apt_name=cond_name AND apt_rating>='$reputation_score' AND cond_rent<'$rent'";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not get data: ' . mysql_error());
        }
       
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $better_apt=$row["apt_name"];
        $better_rent=$row["cond_rent"];
        $sql = "SELECT loc_pin FROM `loc` WHERE loc_apt='$better_apt' ";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_1 = mysql_query($sql, $conn);
        if(!$result_1) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_1, MYSQL_ASSOC)) {
            $better_location =$row['loc_pin'];
        }
        
        $sql = "SELECT apt_rating,apt_contact,apt_image FROM `apt` WHERE apt_name='$better_apt' ";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_2 = mysql_query($sql, $conn);
        if(!$result_2) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_2, MYSQL_ASSOC)) {
            $better_rating = $row['apt_rating']; 
            $better_contact= $row['apt_contact'];
            $better_image=$row['apt_image'];
        }
        
       
        
        $encode_name=str_replace(" ","z",$better_apt);
        echo
        "<div class='top-container'>
         <img class='dropdown' src='$better_image'>
    <div class=bi>
        <form class='right' name='visual' method='post' action='visual.php'>
                    <input type='submit' name=visualization value='See detail'>
                    <input type='hidden' name='id' value=$encode_name>
                </form>
        Name : $better_apt<br>
        Rating : $better_rating<br>
        Rent : $better_rent<br>
        Contact :$better_contact<br>
        Location : $better_location<br>
        </div></div><hr/>";     
        }
    
}
############################### Search #####################################
############################### Search #####################################
############################### Search #####################################
############################### Search #####################################
if ($section=="search"){
    $pattern=$_POST["name"];
    $pattern=rtrim($pattern,"/");
    $sql = "SELECT apt_name,cond_rent FROM `apt`,`cond`  WHERE apt_name LIKE '$pattern%' AND cond_name=apt_name";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not get data: ' . mysql_error());
        }
       
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $better_apt=$row["apt_name"];
        $better_rent=$row["cond_rent"];
        
        $sql = "SELECT loc_pin FROM `loc` WHERE loc_apt='$better_apt' ";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_1 = mysql_query($sql, $conn);
        if(!$result_1) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_1, MYSQL_ASSOC)) {
            $better_location =$row['loc_pin'];
        }
        
        $sql = "SELECT apt_rating,apt_contact,apt_image FROM `apt` WHERE apt_name='$better_apt' ";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_2 = mysql_query($sql, $conn);
        if(!$result_2) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_2, MYSQL_ASSOC)) {
            $better_rating = $row['apt_rating']; 
            $better_contact= $row['apt_contact'];
            $better_image=$row['apt_image'];
        }
        
        
        $encode_name=str_replace(" ","z",$better_apt);
        if ($better_rating!=''){
        echo
        "<div class='top-container'>
         <img class='dropdown' src='$better_image'>
    <div class=bi>
        <form class='right' name='visual' method='post' action='visual.php'>
                    <input type='submit' name=visualization value='See detail'>
                    <input type='hidden' name='id' value=$encode_name>
                </form>
        Name : $better_apt<br>
        Rating : $better_rating<br>
        Rent : $better_rent<br>
        Contact :$better_contact<br>
        Location : $better_location<br>
        </div></div><hr/>";     
        }
        }
}


?>
      </body>
   </html>