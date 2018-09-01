<!--
/**
 * Created by PhpStorm.
 * User: Lahiru Mendis
 * Date: 01/09/2018
 * Time: 12:01 PM
 */
-->

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="viewBill.css">


</head>
<body>

<?php


// Create connection
$conn = new mysqli('localhost','root','1234','stock');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bill";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id=\"customers\"> <tr> <th>Bill ID</th> <th>Item Code </th> <th>Item Name</th> <th>Price</th> <th>Quantity</th> <th>Date</th> <th>Supplier Name</th> <th>Invoice No</th> <th>Remarks</th> <th>Action</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["billId"]. "</td><td>" . $row["ItemCode"]. "</td>  <td>" . $row["Iname"]. "</td><td>" . $row["price"]. "</td> <td>" . $row["quan"]. "</td> <td>" . $row["date"]. "</td><td>" . $row["Sname"]. "</td> <td>" . $row["InvNo"]. "</td> <td>" . $row["remarks"]. "</td> <td><a href='updateBill.php?billId=".$row['billId']."'  ><button> Update</button></a>  <button>Delete</button> </td> </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>