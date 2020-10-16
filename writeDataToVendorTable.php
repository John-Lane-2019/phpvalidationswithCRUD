
<?php

function WriteDataToVendorTable($vendorNumber,$vendorName,$addressOne,$addressTwo,$city,$province,$postCode,$country,$phone,$fax){

    $sql = "insert into Vendors (VendorNo, VendorName, Address1, Address2, City, Prov, PostCode, Country, Phone, Fax) VALUES ('" . $vendorNumber . "', '" . $vendorName . "', '" . $addressOne . "', '" . $addressTwo . "', '" . $city . "', '" . $province . "', '" . $postCode . "', '" . $country . "', '" . $phone . "', '" . $fax . "' )";
    include('connection.php');

    $dbConnection = ConnectToDatabase();    

    $preparedSQL = $dbConnection->prepare($sql);

    $preparedSQL->execute();
}
?>