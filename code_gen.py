user = ["user_name", "user_pw", "user_loc", 'user_university']
apt = ["apt_name", "apt_rating", "apt_contact"]
addr = ["addr_pin", "addr_name", "addr_crime", "addr_bus", "addr_dist"]
company = ["company_name", "company_rating"]
cond = ["cond_name", "cond_bed", "cond_bath", "cond_amen", "cond_rent"]
loc = ["loc_pin", "loc_apt"]
belong = ["belong_apt", "belong_company"]

def insert_gen(div, name, db_name):
    without_dollar = ""
    with_dollar = ""
    with_or = ""
    for col in div:
        print("$"+col+" = $_POST[\""+col+"\"];")
    for i in range(len(div) - 1):
        without_dollar += "`"+div[i]+"`, "
        with_dollar += "\'$"+div[i]+"\', "
        with_or += "$"+div[i]+" == \"\" || "
    without_dollar += "`"+div[len(div) - 1]+"`"
    with_dollar +=  "\'$"+div[len(div) - 1]+"\'"
    with_or += "$"+div[len(div) - 1]+" == \"\""

    if_part = "if(" + with_or + ") {\n echo \"Empty input! Please try again!\";\n}"
    print(if_part)
    sql = "$sql = \"INSERT INTO `"+name+"`("+without_dollar+") VALUES("+with_dollar+")\";"
    print(sql)
    print("$db = mysql_select_db(\'"+db_name+"\', $conn);")
    print("""if (!$db){
                die (\"Failed: \" . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die(\'Could not insert data: \' . mysql_error());
            }
            echo \"Successfully inserted!\";
            $conn->close();""")

def update_gen(div, name, db_name):
    temp = ""
    for col in div:
        temp += "$" + col + " "
        print("$"+col+" = $_POST[\""+col+"\"];")
    print("$"+name+"_w = $_POST[\""+name+"_where\"];")
    temp2 = ""
    for i in range(len(div) - 1):
        print("if ($"+div[i]+" != \"\") {\n$"+div[i]+" = \""+div[i]+" = \'$"+div[i]+"\',\";\n}")
        temp2 += "$"+div[i]+". \" \" ."
    print("if ($"+div[len(div) - 1]+" != \"\") {\n$"+div[len(div) - 1]+" = \""+div[len(div) - 1]+" = \'$"+div[len(div) - 1]+"\',\";\n}")
    temp2 += "$"+div[len(div) - 1]+";"
    print("if ($"+name+"""_w == \"\") {
                die (\"Failed: condition cannot be empty\");
            }""")
    print("$temp = "+temp2)
    print("$temp = rtrim($temp, \", \");")
    sql = "$sql = \"UPDATE `"+name+"` \" . \"SET $temp \" . \"WHERE $"+name+"_w\";"
    print(sql)
    print("$db = mysql_select_db(\'"+db_name+"\', $conn);")
    print("""if (!$db){
                die (\"Failed: \" . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die(\"Could not update data: \" . mysql_error());
            }
            echo \"Successfully updated!\";
            $conn->close();""")

def delete_gen(div, name, db_name):
    where = "$"+name+"_w"
    print(where + "= $_POST[\""+name+"_where\"];")
    print("if ("+where+""" == \"\") {
            die (\"Failed: condition cannot be empty\");
        }""")
    print("$sql = \"DELETE FROM `"+name+"` \" . \"WHERE "+where+"\";")
    print("$db = mysql_select_db(\'"+db_name+"\', $conn);")
    print("""if (!$db){
            die (\"Failed: \" . mysql_error());
        }
        $result = mysql_query($sql, $conn);
        if(!$result) {
            die(\'Could not delete data: \' . mysql_error());
        }
        echo \"Successfully Deleted!\";
        $conn->close();""")

def select_gen(div, name, db_name):
    for col in div:
        print("$"+col+" = $_POST[\""+col+"_c\"];")
    print("$"+name+"_w = $_POST[\""+name+"_where\"];")
    temp2 = ""
    for i in range(len(div) - 1):
        print("if ($"+div[i]+" != \"\") {\n$"+div[i]+" = \"`"+div[i]+"`,\";\n}")
        temp2 += "$"+div[i]+". \" \" ."
    print("if ($"+div[len(div) - 1]+" != \"\") {\n$"+div[len(div) - 1]+" = \"`"+div[len(div) - 1]+"`,\";\n}")
    temp2 += "$"+div[len(div) - 1]+";"

    print("if ($"+name+"""_w == \"\") {
                die (\"Failed: condition cannot be empty\");
            }""")
    print("$temp = "+temp2)
    print("$temp = rtrim($temp, \", \");")
    sql = "\"SELECT $temp FROM `"+name+"` WHERE $"+name+"_w\";"
    print("$sql = "+sql)
    print("""$db = mysql_select_db(\'sxu46_test\', $conn);
            if (!$db){
                die (\"Failed: \" . mysql_error());
            }
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die(\'Could not get data: \' . mysql_error());
            }""")
    temp = ""
    for col in div:
        temp += "\""+col+" :{$row[\'"+col+"\']} <br>\".\n"
    temp += "\"---------------------------------------------- <br>\";"
    print("while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {\necho\n" + temp + "\n}")
    print("""echo \"Successfully Selected!\";
            $conn->close();""")



print("-----------------------------------------------------------------")
select_gen(user, "user", "sxu46_test")
print("-----------------------------------------------------------------")
select_gen(apt, "apt", "sxu46_test")
print("-----------------------------------------------------------------")
select_gen(addr, "addr", "sxu46_test")
print("-----------------------------------------------------------------")
select_gen(company, "company", "sxu46_test")
print("-----------------------------------------------------------------")
select_gen(cond, "cond", "sxu46_test")
print("-----------------------------------------------------------------")
select_gen(loc, "loc", "sxu46_test")
print("-----------------------------------------------------------------")
select_gen(belong, "belong", "sxu46_test")
print("-----------------------------------------------------------------")
