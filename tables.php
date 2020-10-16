<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" href="assignment4.css"/>

	<?php
		require("vendorTableData.php");
		require("PartTableData.php");
	?>

</head>

<body>
	<table>

		<?php
			CreatePartTableHeader();
			FillPartTable();

		?>
	</table>
	
	<table>

		<?php

			 CreateVendorTableHeader();
			 FillVendorTable();

		?>
	</table>
</body> 

</html>


