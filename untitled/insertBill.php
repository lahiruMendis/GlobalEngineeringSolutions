<?php
/**
 * Created by PhpStorm.
 * User: Lahiru Mendis
 * Date: 31/08/2018
 * Time: 6:27 PM
 */

if (isset($_GET['code']) && isset($_GET['name']) && isset($_GET['code']) ) {
    //do something
    $code = $_GET['code'];

    $name = $_GET['name'];

    $price = $_GET['price'];

    $quan = $_GET['quan'];

    $inDate = $_GET['inDate'];

    $supplier = $_GET['supplier'];

    $inNo = $_GET['inNo'];

    $remarks = $_GET['remarks'];



    $con = new mysqli('localhost', 'root', '1234', 'stock');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO bill(ItemCode, Iname, price, quan, date, Sname, InvNo, remarks) VALUES ('$code','$name','$price','$quan','$inDate','$supplier', '$inNo','$remarks')";

    if ($con->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('submitted successfully!');    window.location.href='stockBill.php'; </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }



}
else
    echo "not set";

?>