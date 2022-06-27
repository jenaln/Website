<?php
$ID=filter_input(INPUT_POST,'ID');
$username=filter_input(INPUT_POST,'username');
$Order_list=filter_input(INPUT_POST,'Order_list');
$Suggestion_Comment=filter_input(INPUT_POST,'Suggestion_Comment');
$Amount=filter_input(INPUT_POST,'Amount');
if(!empty($username))
{
	if(!empty($Order_list))
	{
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="test_db";

//create connection
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
die('Connect Error ('.mysql_connect_errno().')'.mysqli_connect_error());
}
else{

	$sql="INSERT INTO order_customers (ID,username,Order_list,Suggestion_Comment,Amount)values ('$ID','$username','$Order_list','$Suggestion_Comment','$Amount')";
	if($conn->query($sql)){

	echo"New order is inserted successfully!!";
}
else{

	echo"Error:". $sql. "<br>". $conn->error;
}

$conn->close();
}

} 

else{

	echo "Orde list should not be empty";
	die();
}
}

else{
	echo "Username should not be empty";
	die();
}
?>