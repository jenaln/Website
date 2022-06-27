<?php
mysql_connect("localhost","root");
if(mysql_query("CREATE DATABASE test_db"))
{
echo "Database test_db Successfully Created!";
}
else{
    echo mysql.error();

?>