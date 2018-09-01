<?php
/**
 * Created by PhpStorm.
 * User: Lahiru Mendis
 * Date: 31/08/2018
 * Time: 12:32 PM
 */

$con = @mysql_connect("localhost","root","1234");
$db = @mysql_select_db("stock",$con);
$get=@mysql_query("SELECT sName FROM supplier");

$option = '';
while($row = @mysql_fetch_assoc($get))
{
    $option .= '<option value = "'.$row['sName'].'">'.$row['sName'].'</option>';

}

/*$result2 =  mysqli_query($connect, $query);

$options = "";
while ($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}*/

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stockB.css">

</head>
<body>

<div align="center" >
    <h2><b>Add Biling Details</h2>
</div>


<div class="container">
    <form action="insertBill.php" method="get">
        <label for="code">Item Code</label>
        <input type="text"  name="code" placeholder="Item Code..">

        <label for="name">Item Name</label>
        <input type="text" id="name" name="name" placeholder="Item Name">

        <label for="price">Price</label>
        <input type="text" id="price" name="price" placeholder="Invoice Price">

        <label for="quan">Quantity</label>
        <input type="text" id="quan" name="quan" placeholder="Quantity">

        <label for="inDate">Invoice Date</label>
        <br><input type="date" name="inDate">

        <br><label for="supplier">Supplier Name</label>
        <select id="supplier" name="supplier">

            <option><?php echo $option; ?></option>

        </select>

       <!--<select>
            if (isset($row2[1])){

            }
        </select> -->

        <label for="inNo">Invoice No</label>
        <input type="text" id="inNo" name="inNo" placeholder="Invoice No">


        <label for="remarks">Remarks</label>
        <textarea id="remarks" name="remarks" placeholder="Write Your Special Remarks.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
