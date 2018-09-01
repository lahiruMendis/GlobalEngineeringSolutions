<?php
/**
 * Created by PhpStorm.
 * User: Lahiru Mendis
 * Date: 31/08/2018
 * Time: 12:34 PM
 */

$con = mysqli_connect ('localhost','root','1234','stock');


    if($con)
    {
        echo "Connection Successfully";
    }
    else
    {
        echo "Error ! Can't Connect Database";

    }

?>