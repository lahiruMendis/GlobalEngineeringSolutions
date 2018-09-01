<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stockB.css">

</head>
<body>

<div class="container">
    <form action="edit.php" method="get">

<?php
/**
 * Created by PhpStorm.
 * User: Lahiru Mendis
 * Date: 01/09/2018
 * Time: 1:57 PM
 */

//Git test

$billId = intval($_GET['billId']);
echo $billId;
$con = new mysqli('localhost', 'root', '1234', 'stock');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT * FROM  bill WHERE billId='$billId'";

$result = $con->query($sql);

if($result->num_rows > 0){

    while ($row = $result ->fetch_assoc()) {


?>

        <label for="bill">Bill ID</label>
        <input type="text" name="bill" value="<?php echo $row["billId"];?>" readonly>

        <label for="code">Item Code</label>
        <input type="text" name="code" value="<?php echo $row["ItemCode"];?>">

        <label for="name">Item Name</label>
        <input type="text" id="name" name="name" value="<?php echo $row["Iname"];?>">

        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="<?php echo $row["price"];?>">

        <label for="quan">Quantity</label>
        <input type="text" id="quan" name="quan" value="<?php echo $row["quan"];?>">

        <label for="inDate">Invoice Date</label>
        <br><input type="date" name="inDate" value="<?php echo $row["date"];?>">

        <?php
        $get=@mysql_query("SELECT sName FROM supplier");

        $option = '';
        while($row = @mysql_fetch_assoc($get))
        {
            $option .= '<option value = "'.$row['sName'].'">'.$row['sName'].'</option>';

            ?>
        <br><label for="supplier">Supplier Name</label>
        <select id="supplier" name="supplier" value="<?php echo $row["Sname"];?>">

            <option><?php echo $option; ?></option>

        </select>
                                                                            <?php } ?>


        <br><label for="inNo">Invoice No</label>
        <input type="text" id="inNo" name="inNo" value="<?php echo $row["InvNo"];?>">


        <label for="remarks">Remarks</label>
        <input id="remarks" name="remarks" value="<?php echo $row["remarks"];?>" readonly>





        <input type="submit" value="Submit">
<?php
}
    }
else
{
    echo "0 Results";
}
$con->close();
?>

    </form>
</body>
</html>
