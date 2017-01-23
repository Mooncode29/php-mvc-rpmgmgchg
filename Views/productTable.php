<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Table</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

?>
<table>
	<tr>
		<th>Id</th>
		<th>Nom</th>
		<th>Prix</th>
		<th>Producteurs</th>
		<th>Date de récolte</th>
		<th>Marque</th>
	</tr>
<?php foreach ($products as $keyObj):?>
	<tr>
		<td><?= $keyObj->getProductId();?></td>
		<td><?=$keyObj->getProductName();?></td>
		<td><?=$keyObj->getProductPrice();?></td>
		<td><?=(method_exists($keyObj,'getProductorName'))?$keyObj->getProductorName():"";?></td>
		<td><?=(method_exists($keyObj,'getHarvestedAt'))?$keyObj->getHarvestedAt():"";?></td>
		<td><?=(method_exists($keyObj,'getBrand'))?$keyObj->getBrand():"";?></td>		
	</tr>
<?php endforeach?>
</table>
</body>
</html>