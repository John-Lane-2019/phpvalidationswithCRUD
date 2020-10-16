<?php

function CreateVendorTableHeader()
{
	echo "<h1>Vendor Information</h1>";
	$text = "";
	$text .= "<tr id='tableHeader'>";
	$text .= "<th>Vendor Number</th>";
	$text .= "<th>Vendor Name</th>";
	$text .= "<th>Address One</th>";
	$text .= "<th>Address Two</th>";
	$text .= "<th>City</th>";
	$text .= "<th>Province</th>";
	$text .= "<th>Postal Code</th>";
	$text .= "<th>Country</th>";
	$text .= "<th>Phone Number</th>";
	$text .= "<th>Fax Number</th>";
	$text .= "</tr>";

	echo $text;

}

	include("connection.php");

	function FillVendorTable()
	{

		$tableBodyText = "";

		$connection = ConnectToDatabase();

		$querySelect = "SELECT VendorNo,VendorName,Address1,Address2,City,Prov,PostCode,Country,Phone,Fax FROM Vendors";
		$preparedQuerySelect = $connection -> prepare($querySelect);
		$preparedQuerySelect -> execute();

		while ($row = $preparedQuerySelect -> fetch())
		{

			$vendorNo = number_format($row['VendorNo'],0);
			$vendorName = $row['VendorName'];
			$addressOne = $row['Address1'];
			$addressTwo = $row['Address2'];
			$city = $row['City'];
			$prov = $row['Prov'];
			$postCode = $row['PostCode'];
			$country = $row['Country'];
			$phone = $row['Phone'];
			$fax = $row['Fax'];

			$tableBodyText .= "<tr>";
			$tableBodyText .= "<td>$vendorNo</td>";
			$tableBodyText .= "<td class='text'>$vendorName</td>";
			$tableBodyText .= "<td>$addressOne</td>";
			$tableBodyText .= "<td>$addressTwo</td>";
			$tableBodyText .= "<td>$city</td>";
			$tableBodyText .= "<td>$prov</td>";
			$tableBodyText .= "<td>$postCode</td>";
			$tableBodyText .= "<td>$country</td>";
			$tableBodyText .= "<td>$phone</td>";
			$tableBodyText .= "<td>$fax</td>";
			$tableBodyText .= "</tr>";

		}

		echo $tableBodyText;
	}

	
?>