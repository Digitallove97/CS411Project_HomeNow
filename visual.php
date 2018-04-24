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


.icon{
    opacity:0.5;
    float:left;
    width:15%;
    height:15%
    margin-left:30%;
}
.dropdown {
    margin:3%;
    float:left;
    width:480px;
    height:500px;
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
    padding-top:5%;
    padding-bottom:5%;
}
.bi {
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  line-height:300%;
  font-size:20px;
    
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
.level4{
  margin:0%;
  background-color:#fff;
  width:100%;
  padding-top:0px;
  padding-bottom:0px;
  padding-left:0px;
  padding-right:0px;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:60px;
  text-align:center;
  color:#2196F3;
}
.level3-left{
  margin:0;
  background-color:#fff;
  width:40%;
  padding-top:0px;
  padding-bottom:0px;
  padding-left:10%;
  padding-right:0px;
  line-height:150%;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:17px;
  text-align:left;
  float:left;
  display: inline-block;
}
.level3-right{
  margin:0;
  background-color:#fff;
  width:40%;
  padding-top:0px;
  padding-bottom:0px;
  padding-left:10%;
  padding-right:0px;
  line-height:150%;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:17px;
  text-align:left;
  float:right;
  display: inline-block;
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
    height: 10px;
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
    $apartment_name=str_replace("z"," ",$apartment_name);
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
    
    
    $sql = "SELECT apt_rating,apt_contact,apt_image FROM `apt` WHERE apt_name='$apartment_name' ";
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
        $img = $row['apt_image'];
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
         <img class='dropdown' src='$img'>
    <p class=top>{$apartment_name}</p>
    <h2 style='color:#495bb8;'>Basic Information<hr/></h2>
    <div class=bi>
        Rating : $rating<br>
        Rent : $rent<br>
        Number of Beds : $bed<br>
        Number of Baths : $bath<br>
        Contact :$contact<br>
        Location : $location<br>
        </div></div>";
    
    
    
    $sql = "SELECT COUNT(*) as exp FROM `cond` WHERE cond_rent>='$rent'";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
           
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
       $more_expen=$row['exp'];
        
    }
    
    $sql = "SELECT COUNT(*) as total FROM `cond` WHERE cond_rent>=0";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
           
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
       $total=$row['total'];
        
    }
    ################################   Rent   ########################### 
    $rent_rank=$more_expen/$total;
    $rent_rank_percent=number_format( $rent_rank * 100, 2 ) . '%';
    echo "<hr/><div class='level1-section'>
    &nbsp;&nbsp;&nbsp;<i class='fa fa-dollar' style='font-size:28px;color:#495bb8';></i> <span style='color:#495bb8;'>Finacial:</span>
    ";
    if ($rent_rank>0.5){
    echo
        "<div class='level1'>
            
            $apartment_name's rent price ranked as the top<br>
            <p class=green>$rent_rank_percent<p>
            among apartments in the neiborhood
            
        </div>";
    }
    else {
    echo
        "<div class='level1'>
           
            $apartment_name's rent ranked as the<br>
            <p class=red>$rent_rank_percent<p>
            among apartments in the neiborhood
            
        </div>";
    }
   if ($rent_rank>=0.8){
       echo "
       <div class='level1-comment'>
            <p class=comment>Comment:This is a very cheap price among all of your choices<p>
            <hr/>
        </div>
       ";
   }
   if ($rent_rank<0.8 & $rent_rank>=0.5){
       echo "
       <div class='level1-comment'>
            <p class=comment>Comment:Somewhat cheap<p>
            <hr/>
        </div>
       ";
   }
   if ($rent_rank<0.5 & $rent_rank>=0.2){
       echo "
       <div class='level1-comment'>
            <p class=comment>Comment:Somewhat expensive<p>
            <hr/>
        </div>
       ";
   }
   if ($rent_rank<0.2){
       echo "
       <div class='level1-comment'>
            <p class=comment>Comment:This is a very expensive price among all of your choices<p>
            <hr/>
        </div>
       ";
   }
    ################################   Privacy   ########################### 
    $bath_share=$bed/$bath;
    $other_people=$bed-1;
    echo "<div class='level2-section'>
    &nbsp;&nbsp;&nbsp;<i class='fa fa-group' style='font-size:28px;color:#495bb8;'></i>  <span style='color:#495bb8;'>Privacy:</span>
    </div>";
    
    if ($other_people>=3){
        echo"
        <div class='level2'>
        Living in $apartment_name, You will share common areas with<br>
        <p class='red'>$other_people<p>
        other people(person).And on average
        </div>
        ";
    }
    else{
        echo"
        <div class='level2'>
        Living in $apartment_name, You will share common areas with<br>
        <p class='green'>$other_people<p>
        other people(person).And on average
        </div>
        ";
    }
    if ($bath_share>1.5)
     echo
        "<div class='level2'>
            <p class='red'>$bath_share<p>
            people(person) will share a bathroom.
        </div>";
    else{
    echo
        "<div class='level2'>
            <p class='green'>$bath_share<p>
            people(person) will share a bathroom.
        </div>";
    }
    $privacy_rating=$bath_share*2+$bed;
    
    $sql = "SELECT COUNT(*) as better_privacy FROM `cond` WHERE cond_bed/cond_bath*2+cond_bed<='$privacy_rating' AND cond_rent<'$rent'";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
           
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
       $better_privacy=$row['better_privacy'];
    }
    
        echo "
       <div class='level2-comment'>
            <p class=comment>Comment:There are $better_privacy more apartment <br>with better privacy but lower price<p>
        </div>
       ";
       /**
    if ($better>=0){
        $sql = "SELECT cond_name FROM `cond` WHERE cond_bed/cond_bath*2+cond_bed<='$privacy_rating' AND cond_rent<'$rent'";
        $db = mysql_select_db('homenowproject_homeNow', $conn);
        if (!$db){
            die ("Failed: " . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die('Could not get data: ' . mysql_error());
        }
           
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
           echo" <form name='visual' method='post' action='visual.php'>
                    <input type='submit' name=visualization value={$row['cond_name']}>
                    <input type='hidden' name='id' value={$row['cond_name']}>
                    
                </form>";
        }
        
        
    }
    */
    if ($better_privacy > 0 ){
        echo"<form name='better_display' method='post' action='better_display.php'>
                    <input type='submit' name=better_display value='Take a look'>
                    <input type='hidden' name='id' value='$apartment_name'>
                    <input type='hidden' name='section' value='privacy'>
                </form>";
        
    }
    
    echo "<hr/>";
    
       
################################   Reputation   ###########################    
    echo "<div class='level2-section'>
    &nbsp;&nbsp;&nbsp;<i class='fa fa-certificate' style='font-size:28px;color:#495bb8;'></i>  <span style='color:#495bb8;'>Reputation:</span>
    </div>";
    
   $sql = "SELECT COUNT(*) as better_rating FROM `apt`  WHERE  apt_rating>'$rating'";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
           
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
       $better_rating=$row['better_rating'];
    }
    $rating_rank=$better_rating/$total;
    $rating_rank_percent=number_format( $rating_rank * 100, 2 ) . '%';

    if ($rating>=3){
        echo "
        <div class='level2'> 
        $apartment_name is rated as <p class=green>$rating<p> 
        by the public, and is the top
        </div>
        ";
    }  
    else{
        echo "
        <div class='level2'> 
        $apartment_name is rated as <p class=red>$rating<p> 
        by the public. and is the top
        </div>
        ";
    }
    
    if ($rating_rank<$rent_rank){
        echo "
        <div class='level2'> 
        <p class=green>$rating_rank_percent<p> 
        among all of the apartments
        </div>
        ";
    }
    else{
      echo "
        <div class='level2'> 
        <p class=red>$rating_rank_percent<p> 
        among all of the apartments
        </div>
        ";  
    }
    
    $reputation_score=$rating;
    $sql = "SELECT COUNT(*) as better_rep FROM `apt`,`cond`  WHERE apt_rating>='$reputation_score' AND apt_name=cond_name AND cond_rent<'$rent'";
    $db = mysql_select_db('homenowproject_homeNow', $conn);
    if (!$db){
        die ("Failed: " . mysql_error());
    }
    $result = mysql_query($sql, $conn);
    if(!$result) {
        die('Could not get data: ' . mysql_error());
    }
           
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
       $better_rep=$row['better_rep'];
    }
     echo "
       <div class='level2-comment'>
            <p class=comment>Comment:There are $better_rep more apartment <br>with better reputation but lower price<p>
         
        </div>
       ";
    if ($better_rep > 0 ){
        echo" <form name='visual' method='post' action='better_display.php'>
                    <input type='submit' name=visualization value='Take a look'>
                    <input type='hidden' name='id' value='$apartment_name'>
                    <input type='hidden' name='section' value='reputation'>
                </form>";
    }
    echo "<hr/>";
    
    ############################ Amenities #####################################
    ############################ Amenities #####################################
    ############################ Amenities #####################################
    ############################ Amenities #####################################
    ############################ Amenities #####################################
    echo "<div class='level2-section'>
    &nbsp;&nbsp;&nbsp;<i class='fa fa-bed' style='font-size:28px;color:#495bb8;'></i>  <span style='color:#495bb8;'>Amenities and Features:</span>
    </div>";
    
    $amenities=$amen;
    $amenities = explode(", ", $amenities);
    $c=count($amenities);
    if ($c%2==1) {$c=$c-1;}
    $i=0;
    for (; $i<$c/2;$i++){
        echo "
        <div class='level3-left'>
        &bull;&nbsp;$amenities[$i]
        </div>";
    }
    for (;$i<$c;$i++){
        echo "
        <div class='level3-right'>
        &bull;&nbsp;$amenities[$i]
        </div>";
    }
    
    if ($c>=30){
        echo "
       <div class='level2-comment'>
            <p class=comment>Comment:This apartment has a lot amenities. <br>Living in here must be comfortable and convenient.<p>
        </div>
       ";
    }
    if ($c>=15 & $c<30){
        echo "
       <div class='level2-comment'>
            <p class=comment>Comment:This apartment has a consirable amount of amenities. <br>Not so bad, but not so good.<p>
        </div>
       ";
    }
    if ($c<15){
        echo "
       <div class='level2-comment'>
            <p class=comment>Comment:Not so much amenities. <br>Be careful because you may regret when you move in.<p>
        </div>
       ";
    }
    
    echo "<hr/>";
    
    
    ############################ Score #####################################
    ############################ Score #####################################
    ############################ Score #####################################
    ############################ Score #####################################
    ############################ Score #####################################
    echo "<div class='level2-section'>
    &nbsp;&nbsp;&nbsp;<i class='fa fa-thumbs-up' style='font-size:28px;color:#495bb8;'></i>  <span style='color:#495bb8;'>HomeNow Score:</span>
    </div>";
    $main_score=((1-$better_privacy/$total)*100+(1-$better_rep/$total)*100+$c/40*100)/3;
    $main_socre=$main_score-(1-$rent_rank)*20;
    $main_score=round($main_score);
    echo "<div class='level4'>
    <br>$main_score<br><br>
    </div>";
    
    
    echo "<hr/>";
    ?>
    
   </body>
   </html>