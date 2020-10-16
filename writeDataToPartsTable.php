<?php 
function WriteDataToPartsTable($partID,$vendorNumber,$description,$onHand,$onOrder,$cost,$listPrice){

    $sql = "insert into Parts (PartID, VendorNo, Description, OnHand, OnOrder, Cost, ListPrice) VALUES ('".$partID."','".$vendorNumber."','".$description."','".$onHand."','".$onOrder."','".$cost."','".$listPrice."')";
    include('connection.php');

    $dbConnection = ConnectToDatabase();

    $preparedSQL = $dbConnection->prepare($sql);

    $preparedSQL->execute();
}
?>