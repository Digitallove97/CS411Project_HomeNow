<html>
<head>
  <style>
  a:link, a:visited {

    color: white;
    font-size: 20px;
    text-align: right;
    font-family: "Arial", Sans-serif;
    margin-top:20px;
    text-decoration: none;

  }
  div.bot {
    position: absolute;
    bottom: 0px;
    right: 0;
    width: 100%;
    text-align: center;
    padding-bottom:  30px;
    padding-top: 50px;
    background-color:Turquoise ;
}
  div.mid {
    margin:auto;
    width: 60%;
    text-align: center;
    //border: 3px solid white;
    padding: 10px;
    color: black;
    font-size: 15px;
    font-family: "Arial", Sans-serif;
    background:#fff;
    opacity:0.9;
  }
  input[type=search] {
    width: 40%;
    padding: 10px 20px;
    margin: 8px 10px;
    box-sizing: border-box;
    border: 2px solid Cyan;
    border-radius: 4px;
  }

  input[type=reset]{
    background-color: MediumTurquoise ;
    color: white;
    padding: 6px 8px;
    text-align: center;
    font-size: 15px;
    width:30%;
    font-family: "Arial", Sans-serif;
  }
  input[type=submit]{
    background-color: MediumTurquoise ;
    color: white;
    padding: 6px 8px;
    text-align: center;
    font-size: 15px;
    width:30%;
    font-family: "Arial", Sans-serif;
  }
  input[type=submit]:hover{
      background-color:DarkTurquoise;
  }
  input[type=reset]:hover{
      background-color:DarkTurquoise;
  }
  select {
      width: 12%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
  }
  button {
    background-color: MediumTurquoise ;
    color: white;
    padding: 6px 8px;
    text-align: center;
    font-size: 15px;
    font-family: "Arial", Sans-serif;
  }
  button:hover {
    background-color: DarkTurquoise;
  }
   p {
     text-align: center;
     color: WhiteSmoke;
     font-size: 80px;
     margin: auto;
     font-family: "Arial", Sans-serif;
   }
   input {
     width: 10%

     padding: 12px 20px;
     margin: 8px 0;
   }
  html { 
  background: url(background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
   </style>
 </head>
<body>

<?php
if ($_POST["fname"] != "TEAM"){
    echo "You are not one of us. Please go back. ";
    echo '<a href="http://homenowproject.web.engr.illinois.edu/index.html">Click here</a>';
}
else {
    echo '<a href="http://homenowproject.web.engr.illinois.edu/data_manager.php">Data Manager Page</a>';
}
?>
</body>
</html>
