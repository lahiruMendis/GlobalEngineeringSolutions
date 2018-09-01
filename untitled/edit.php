<?php
$bill = $_GET['bill'];
$code = $_GET['code'];
$name = $_GET['name'];
$price = $_GET['price'];
$quan = $_GET['quan'];
$inDate = $_GET['inDate'];

echo $inDate;
$inNo = $_GET['inNo'];

$con = new mysqli('localhost','root','1234','stock');
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "UPDATE bill SET ItemCode='".$code."', Iname='".$name."', price='".$price."', quan='".$quan."', date='".$inDate."', InvNo='".$inNo."' WHERE billId='".$bill."'";
if ($con->query($sql)===TRUE){


    echo $bill;
    echo $code;
    echo $name;

    echo "Updated Successfully";
}
else{

    echo "Error" .$sql."<br>".$con->error;
}

