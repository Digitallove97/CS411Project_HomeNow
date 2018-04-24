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
    width:25%;
    height:20%px;
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
    margin-top:5%;
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

    #echo "<div class=top>Database Condition: Connecting to database...</div>";
    $dbhost = "localhost:3306";
    $dbuser = "homenowproject_sxu46";
    $dbpass = "Jerry1997!";
    $dbname = "homenowproject_homeNow";
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if($conn -> connect_error) {
      die("Could not connect: " . mysql_error());
    }
    #echo "<div class=top>Connected successfully! <br></div>";
    echo "<br><br><br><br>";
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



    if( $_POST["num_bedroom"] ) {
      $num_bedroom = $_POST["num_bedroom"];
      if ($num_bedroom == "any"){
          $num_bedroom_lower = 0;
          $num_bedroom_upper = 10000;  # unlimited constraint
      } 
      if ($num_bedroom == "1"){
          $num_bedroom_lower = 1;
          $num_bedroom_upper = 1;
      }
      if ($num_bedroom == "2"){
          $num_bedroom_lower = 2;
          $num_bedroom_upper = 2;
      }
      if ($num_bedroom == "3"){
          $num_bedroom_lower = 3;
          $num_bedroom_upper = 3;
      }
      if ($num_bedroom == "4"){
          $num_bedroom_lower = 4;
          $num_bedroom_upper = 4;
      }
      if ($num_bedroom == "more"){
          $num_bedroom_lower = 5;
          $num_bedroom_upper = 10000; # unlimited
      }
      #echo "$num_bedroom_lower <br>";
      #echo "$num_bedroom_upper <br>";
   }
   
   if( $_POST["num_bathroom"] ) {
      $num_bathroom = $_POST["num_bathroom"];
      if ($num_bathroom == "any"){
          $num_bathroom_lower = 0; 
          $num_bathroom_upper = 10000;  # unlimited constraint
      }
      if ($num_bathroom == "1"){
          $num_bathroom_lower = 1; 
          $num_bathroom_upper = 1;  
      }
      if ($num_bathroom == "2"){
          $num_bathroom_lower = 2; 
          $num_bathroom_upper = 2;  
      }
      if ($num_bathroom == "more"){
          $num_bathroom_lower = 3; 
          $num_bathroom_upper = 10000;  # unlimited constraint
      }
      #echo "$num_bathroom_lower <br>";
      #echo "$num_bathroom_upper <br>";
   }
   if( $_POST["monthly_rent"] ) {
      $monthly_rent = $_POST["monthly_rent"];
      if ($monthly_rent == "any"){
          $monthly_rent_lower = 0;
          $monthly_rent_upper = 10000;  # unlimited constraint
      }
      if ($monthly_rent == "500"){
          $monthly_rent_lower = 0;  # unlimited
          $monthly_rent_upper = 500;
      }
      if ($monthly_rent == "650"){
          $monthly_rent_lower = 500;
          $monthly_rent_upper = 650;
      }
      if ($monthly_rent == "800"){
          $monthly_rent_lower = 650;
          $monthly_rent_upper = 800;
      }
      if ($monthly_rent == "1000"){
          $monthly_rent_lower = 800;
          $monthly_rent_upper = 1000;
      }
      if ($monthly_rent == ">1000"){
          $monthly_rent_lower = 1000;
          $monthly_rent_upper = 10000; # unlimited
      }
      #echo "$monthly_rent_lower <br>";
      #echo "$monthly_rent_upper <br>";
   }
   
   $sql = "SELECT * FROM cond WHERE cond_bed >= '$num_bedroom_lower' AND cond_bed <= '$num_bedroom_upper' AND cond_bath >= '$num_bathroom_lower' AND cond_bath <= '$num_bathroom_upper' AND cond_rent >= '$monthly_rent_lower' AND cond_rent <= '$monthly_rent_upper'";
   
   $db = mysql_select_db('homenowproject_homeNow', $conn);
   if (!$db){
        die ("Failed: " . mysql_error());
    }
   $result = mysql_query($sql, $conn);
   if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        
        $name = $row['cond_name']; 
        $amen= $row['cond_amen'];
        $num_bed = $row['cond_bed'];
        $num_bath = $row ['cond_bath'];
        $rent = $row['cond_rent'];
        #echo "cond_name: " . $name. " amenities: " . $amen. " bedroom number : " .  $num_bed. " bathroom number: " . $num_bath. " rent: " . $rent;
        
        $sql = "SELECT loc_pin FROM loc WHERE loc_apt = '$name'";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_1 = mysql_query($sql, $conn);
        if(!$result_1) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_1, MYSQL_ASSOC)) {
            $loc_pin = $row['loc_pin'];
        }
        
       $sql = "SELECT * FROM `apt` WHERE apt_name='$name' ";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result_2 = mysql_query($sql, $conn);
        if(!$result_2) {
            die('Could not get data: ' . mysql_error());
        }
        while ($row = mysql_fetch_array($result_2, MYSQL_ASSOC)) {
            $rating = $row['apt_rating']; 
            $contact= $row['apt_contact'];
            $image = $row['apt_image'];
        }
        
        #$sql = "SELECT belong_company FROM belong WHERE belong_apt='$name'";
        #$db = mysql_select_db('homenowproject_homeNow', $conn);
        #if (!$db){
        #    die ("Failed: " . mysql_error());
        #}
        #$result_3 = mysql_query($sql, $conn);
        #if(!$result_3) {
        #    die('Could not get data: ' . mysql_error());
        #}
        #while ($row = mysql_fetch_array($result_3, MYSQL_ASSOC)) {
        #    $company=$row['belong_company'];
        #}  
        
        #echo "cond_name: " . $name. " amenities: " . $amen. " bedroom number : " .  $num_bed. " bathroom number: " . $num_bath. " rent: " . $rent. " location: " . $loc_pin. "<br>";
        
        $encode_name=str_replace(" ","z",$name);
        echo
        "<div class='top-container'>
         <img class='dropdown' src='$image' style='width:300px;height:225px'>
    <div class=bi>
        <form class='right' name='visual' method='post' action='visual.php'>
                    <input type='submit' name=visualization value='See detail'>
                    <input type='hidden' name='id' value=$encode_name>
                </form>
        
        
        Name : $name<br>
        Rating : $rating<br>
        Bedroom Number: $num_bed <br>
        Bathroom Number: $num_bath <br>
        Rent : $rent<br>
        Contact :$contact<br>
        Location : $loc_pin<br>
        </div></div><hr/>";  
       
    }
    
  
$conn->close();
 
    
?>
  </body>
  
</html>
