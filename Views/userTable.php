<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Table</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>

<table class="ui table">
	<tr>
		<th>Id</th>
		<th>email</th>
		<th>creé le</th>
	</tr>
<?php foreach ($users as $client):?>
	<tr>
		<td><?= $client->getId();?></td>
		<td><?=$client->getEmail();?></td>
		<td><?=$client->getCreatedAt();?></td>
	</tr>
<?php endforeach?>
</table>
</body>
</html>