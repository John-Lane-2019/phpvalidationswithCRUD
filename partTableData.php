<?php
//echo "<h1>Parts</h1>";
function CreatePartTableHeader()
{
    echo "<h1>Parts</h1>";
	$text = "";
	$text .= "<tr id= 'tableHeader'>";
	$text .= "<th>Part ID</th>";
    $text .= "<th>Vendor Number</th>";
    $text .= "<th>Description</th>";
    $text .= "<th>On Hand</th>";
    $text .= "<th>On Order</th>";
    $text .= "<th>Cost</th>";
    $text .= "<th>List Price</th>";
    $text .= "</tr>";

	echo $text;
}

    //include("connection.php");
	function FillPartTable()
	{
        
		$tableBodyText = "";

		$connection = ConnectToDatabase();

		$querySelect = "SELECT PartID,VendorNo,Description,OnHand,OnOrder,Cost,ListPrice FROM Parts";
		$preparedQuerySelect = $connection -> prepare($querySelect);
		$preparedQuerySelect -> execute();

		while ($row = $preparedQuerySelect -> fetch())
		{
			$partID = number_format($row['PartID'],0);
			$vendorNumber = $row['VendorNo'];
			$description = $row['Description'];
			$onHand = $row['OnHand'];
			$onOrder = $row['OnOrder'];
			$cost = $row['Cost'];
			$listPrice = $row['ListPrice'];

			$tableBodyText .= "<tr>";
			$tableBodyText .= "<td>$partID</td>";
			$tableBodyText .= "<td class='text'>$vendorNumber</td>";
			$tableBodyText .= "<td>$description</td>";
			$tableBodyText .= "<td>$onHand</td>";
			$tableBodyText .= "<td>$onOrder</td>";
			$tableBodyText .= "<td>$cost</td>";
			$tableBodyText .= "<td>$listPrice</td>";
			$tableBodyText .= "</tr>";
		}

		echo $tableBodyText;
	}
