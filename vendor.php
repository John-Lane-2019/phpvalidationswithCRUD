<?php
if (!empty($_POST)) {
    $errors = "";
    $vendorNumber = $_POST['vendor_number'];
    $vendorName = $_POST['vendor_name'];
    $addressOne = $_POST['address_one'];
    $addressTwo = $_POST['address_two'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postCode = $_POST['postcode'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];

    if (empty($vendorNumber) || !is_numeric($vendorNumber)) {
        $errors .= "Please enter a valid vendor number.<br>";
    }

    if (empty($vendorName)) {
        $errors .= "Please enter a valid vendor name with no punctuation.<br>";
    }

    if (empty($addressOne)) {
        $errors .= "Please enter the vendor's first address.<br>";
    }

    if (empty($addressTwo)) {
        $errors .= "Please enter the vendor's second address.<br>";
    }

    if (empty($city)) {
        $errors .= "Please enter the vendor's city.<br>";
    }

    if (empty($postCode)) {
        $errors .= "Please enter the vendor's postal code.<br>";
    }

    if (empty($country)) {
        $errors .= "Please enter the vendor's country.<br>";
    }

    if (empty($phone) || !is_numeric($phone)) {
        $errors .= "Please enter the vendor's phone number.<br>"; //if delimiting chars or white spaces are added, error thrown
    }

    if (empty($fax) || !is_numeric($fax)) {
        $errors .= "Please enter the vendor's fax number.<br>"; //if delimiting chars or white spaces are added, error thrown
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parts</title>
    <link rel="stylesheet" href="assignment4.css" />
</head>

<body>
    <h1>VENDORS</h1>

    <form name="vendor_form" method="POST" onsubmit="return formSubmit();" action="">

        <label> Vendor Number:</label>
        <input type="text" name="vendor_number"><br><br>

        <label>Vendor Name:</label>
        <input type="text" name="vendor_name"><br><br>

        <label>Address 1:</label>
        <input type="text" name="address_one"><br><br>

        <label>Address 2:</label>
        <input type="text" name="address_two"><br><br>

        <label>City:</label>
        <input type="text" name="city"><br><br>

        <label>Province: </label>
        <select name="province">
            <option value="Ontario">Ontario</option>
            <option value="Quebec">Quebec</option>
            <option value="Alberta">Alberta</option>
        </select><br><br><br>

        <label>Postal Code: </label>
        <input type="text" placeholder="X9X 9X9" name="postcode"><br><br>

        <label>Country:</label>
        <input type="text" name="country"><br><br>

        <label>Phone:</label>
        <input type="text" placeholder="123-123-1234" name="phone"><br><br>

        <label>Fax:</label>
        <input type="text" name="fax"><br><br>

        <input type="submit" value="Submit" style="width: 50%; height: 50px; font-size: 25px">
    </form>

    <div id="errorOutput">
        <?php 
        if (!empty($errors)) 
        {

            echo $errors;
        } 
        
        elseif (isset($vendorNumber) && isset($vendorName) && isset($addressOne) && isset($addressTwo) && isset($city) && isset($province) && isset($postCode) && isset($country) && isset($phone) && isset($fax)) 
        {
            echo "Input Summary:<br><br>
                Vendor Number: $vendorNumber<br>
                Vendor Name: $vendorName<br>
                Address One: $addressOne<br>
                Address Two: $addressTwo<br>
                City: $city<br>
                Province: $province<br>
                Postal Code: $postCode<br>
                Country: $country<br>
                Phone: $phone<br>
                Fax: $fax<br>
        ";
        require('writeDataToVendorTable.php');
        WriteDataToVendorTable($vendorNumber,$vendorName,$addressOne,$addressTwo,$city,$province,$postCode,$country,$phone,$fax);
        }
        ?>
    </div>
</body>
</html>