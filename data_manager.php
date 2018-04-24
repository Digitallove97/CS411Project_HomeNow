<!DOCTYPE html>
<html>
<body>
<style>
#apt_input,
#addr_input,
#cond_input,
#located_input{
    display: none;
}
#apt_none,
#addr_none,
#cond_none,
#located_none{
    display: none;
}

#apt_w,
#addr_w,
#cond_w,
#located_w{
    display: none;
}

#apt_sub,
#addr_sub,
#cond_sub,
#located_sub{ 
    display: none;
}

#apt_checkbox,
#addr_checkbox,
#cond_checkbox,
#located_checkbox{
    display: none;
}
a:link, a:visited {
    color: white;
    font-size: 20px;
    text-align: right;
    font-family: "Arial", Sans-serif;
    margin-top:20px;
    text-decoration: none;

  }
 a:hover{
    color:gold;
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
    font-size: 16px;
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
  input[type=text] {
    width: 18%;
    padding: 5px 5px;
    margin: 8px 10px;
    font-size: 13px;
    box-sizing: border-box;
    border: 2px solid Cyan;
    border-radius: 4px;
    font-family: "Arial", Sans-serif;
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
    display:inline-block;
    text-align:center;
    font-family: "Arial", Sans-serif;
  }
  input[type=submit]:hover{
      background-color:DarkTurquoise;
  }
  input[type=reset]:hover{
      background-color:DarkTurquoise;
  }
  select {
     box-sizing: border-box;
      display: inline-block;
      width: 20%;
      padding: 5px 10px;
      margin: 8px 10px;
      font-size: 13px;
      box-sizing: border-box;
      border: 2px solid Cyan;
      border-radius: 4px;
      font-family: "Arial", Sans-serif;
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
   p.h {
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
 p.x {
  color: WhiteSmoke;
  text-align: end;
  font-family:cursive;
  //font-style:italic;
 }
</style>
<br><br><br>
<br>
<p class=h>HomeNow Developer</p>
<br>
<p class=x>“-----Most of the world will make decisions by either guessing or using their guts. They will be either lucky or wrong.”</p>
<br><br><br>
<div class=mid>
<form>
    SQL Method:
    <select name="action" id="a">
        <option value="insert">insert</option>
        <option value="update">update</option>
        <option value="delete">delete</option>
        <option value="select">select</option>
    </select>
    Table Name:
    <select name="table" id="t">
        
        <option value="apt">apt</option>
        <option value="addr">addr</option>
        <option value="cond">cond</option>
        <option value="located">loc</option>
    </select>
    <button type="button" onclick="display()">Submit</button>
</form>

    <form action="action.php" method="post">
        <div id="apt_checkbox">
            Apartment Name
            <input type="checkbox" name="apt_name_c" value="Apartment Name">
            Apartment Rating
            <input type="checkbox" name="apt_rating_c" value="Apartment Rating">
            Contact
            <input type="checkbox" name="apt_contact_c" value="Contact">
            Image URL
            <input type="checkbox" name="apt_image_c" value="Image URL">
            
        </div>
        <div id="apt_input">
            Apartment Name
            <input type="text" name="apt_name">
            Apartment Rating
            <input type="text" name="apt_rating">
            Contact
            <input type="text" name="apt_contact">
            Image URL
            <input type="text" name="apt_image">
            
        </div>
        <div id="apt_none">
            Table
            <input type="text" name="table" id="apt_t">
            Action
            <input type="text" name="action" id="apt_a">
        </div>
        <div id="apt_w">
            Condition
            <input type="text" name="apt_where">
        </div>
        <input type="submit" id="apt_sub">
    </form>



    <form action="action.php" method="post">
        <div id="addr_checkbox">
            Address
            <input type="checkbox" name="addr_pin_c" value="Address">
            Apartment Name
            <input type="checkbox" name="addr_name_c" value="Apartment Name">
            Longitude
            <input type="checkbox" name="addr_longi_c" value="Longitude">
            Latitude
            <input type="checkbox" name="addr_lati_c" value="Latitude">
        </div>
        <div id="addr_input">
            Address
            <input type="text" name="addr_pin">
            Apartment Name
            <input type="text" name="addr_name">
            Longitude
            <input type="text" name="addr_longi">
            Latitude
            <input type="text" name="addr_lati">
            
        </div>
        <div id="addr_none">
            Table
            <input type="text" name="table" id="addr_t">
            Action
            <input type="text" name="action" id="addr_a">
        </div>
        <div id="addr_w">
            Condition
            <input type="text" name="addr_where">
        </div>
        <input type="submit" id="addr_sub">
    </form>


    <form action="action.php" method="post">
        <div id="cond_checkbox">
            Apartment Name
            <input type="checkbox" name="cond_name_c" value="Apartment Name">
            Number of Bedrooms
            <input type="checkbox" name="cond_bed_c" value="Number of Bedrooms">
            Number of Bathrooms
            <input type="checkbox" name="cond_bath_c" value="Number of Bathrooms">
            Amenities
            <input type="checkbox" name="cond_amen_c" value="Amenities">
            Rent
            <input type="checkbox" name="cond_rent_c" value="Rent">
        </div>
        <div id="cond_input">
            Apartment Name
            <input type="text" name="cond_name">
            Number of Bedrooms
            <input type="text" name="cond_bed">
            Number of Bathrooms
            <input type="text" name="cond_bath">
            Amenities
            <input type="text" name="cond_amen">
            Rent
            <input type="text" name="cond_rent">
        </div>
        <div id="cond_none">
            Table
            <input type="text" name="table" id="cond_t">
            Action
            <input type="text" name="action" id="cond_a">
        </div>
        <div id="cond_w">
            Condition
            <input type="text" name="cond_where">
        </div>
        <input type="submit" id="cond_sub">
    </form>
    
    
    <form action="action.php" method="post">
        <div id="located_checkbox">
            Address Map_pin
            <input type="checkbox" name="loc_pin_c">
            Apartment Name
            <input type="checkbox" name="loc_apt_c">
            
        </div>
        <div id="located_input">
            Address Map_pin
            <input type="text" name="loc_pin">
            Apartment Name
            <input type="text" name="loc_apt">
            
        </div>
        <div id="located_none">
            Table
            <input type="text" name="table" id="located_t">
            Action
            <input type="text" name="action" id="located_a">
        </div>
        <div id="located_w">
            Condition
            <input type="text" name="loc_where">
        </div>
        <input type="submit" id="located_sub">
    </form>
</div>



<script>
function display() {
    var action, table;

    // Get the value of the input field
    action = document.getElementById("a").value;
    table = document.getElementById("t").value;
    
    document.getElementById("apt_input").style.display = "none";
    document.getElementById("addr_input").style.display = "none";
    document.getElementById("cond_input").style.display = "none";
    document.getElementById("apt_w").style.display = "none";
    document.getElementById("addr_w").style.display = "none";
    document.getElementById("cond_w").style.display = "none";
    document.getElementById("apt_sub").style.display = "none";
    document.getElementById("addr_sub").style.display = "none";
    document.getElementById("cond_sub").style.display = "none";
    document.getElementById("apt_checkbox").style.display = "none";
    document.getElementById("addr_checkbox").style.display = "none";
    document.getElementById("cond_checkbox").style.display = "none";
    document.getElementById("located_sub").style.display = "none";
    document.getElementById("located_w").style.display = "none";
    document.getElementById("located_input").style.display = "none";
    document.getElementById("located_checkbox").style.display = "none";
    
    
    if (table == "apt") {
        document.getElementById("apt_a").value = action;
        document.getElementById("apt_t").value = table;
        if (action == "insert") {
            document.getElementById("apt_input").style.display = "block";
            document.getElementById("apt_sub").style.display = "block";
        }
        else if (action == "select") {
            document.getElementById("apt_checkbox").style.display = "block";
            document.getElementById("apt_w").style.display = "block";
            document.getElementById("apt_sub").style.display = "block";
        }
        else if (action == "delete") {
            document.getElementById("apt_w").style.display = "block";
            document.getElementById("apt_sub").style.display = "block";
        }
        else {
            document.getElementById("apt_input").style.display = "block";
            document.getElementById("apt_w").style.display = "block";
            document.getElementById("apt_sub").style.display = "block";
        }
    }
    else if (table == "addr") {
        document.getElementById("addr_a").value = action;
        document.getElementById("addr_t").value = table;
        if (action == "insert") {
            document.getElementById("addr_input").style.display = "block";
            document.getElementById("addr_sub").style.display = "block";
        }
        else if (action == "select") {
            document.getElementById("addr_checkbox").style.display = "block";
            document.getElementById("addr_w").style.display = "block";
            document.getElementById("addr_sub").style.display = "block";
        }
        else if (action == "delete") {
            document.getElementById("addr_w").style.display = "block";
            document.getElementById("addr_sub").style.display = "block";
        }
        else {
            document.getElementById("addr_input").style.display = "block";
            document.getElementById("addr_w").style.display = "block";
            document.getElementById("addr_sub").style.display = "block";
        }
    }
    else if (table == "cond"){
        document.getElementById("cond_a").value = action;
        document.getElementById("cond_t").value = table;
        if (action == "insert") {
            document.getElementById("cond_input").style.display = "block";
            document.getElementById("cond_sub").style.display = "block";

        }
        else if (action == "select") {
            document.getElementById("cond_checkbox").style.display = "block";
            document.getElementById("cond_w").style.display = "block";
            document.getElementById("cond_sub").style.display = "block";
        }
        else if (action == "delete") {
            document.getElementById("cond_w").style.display = "block";
            document.getElementById("cond_sub").style.display = "block";
        }
        else {
            document.getElementById("cond_input").style.display = "block";
            document.getElementById("cond_w").style.display = "block";
            document.getElementById("cond_sub").style.display = "block";
        }
    }
    else {
        document.getElementById("located_a").value = action;
        document.getElementById("located_t").value = table;
        if (action == "insert") {
            document.getElementById("located_input").style.display = "block";
            document.getElementById("located_sub").style.display = "block";

        }
        else if (action == "select") {
            document.getElementById("located_checkbox").style.display = "block";
            document.getElementById("located_w").style.display = "block";
            document.getElementById("located_sub").style.display = "block";
        }
        else if (action == "delete") {
            document.getElementById("located_w").style.display = "block";
            document.getElementById("located_sub").style.display = "block";
        }
        else {
            document.getElementById("located_input").style.display = "block";
            document.getElementById("located_w").style.display = "block";
            document.getElementById("located_sub").style.display = "block";
        }
    }
}
</script>


    
</body>
</html>