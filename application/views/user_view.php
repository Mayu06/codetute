<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Company Name</th>
	</tr>
	<?php
	//var_dump($userArray);
		foreach ($userArray as $key => $value) {
			//echo "<pre>";
			//print_r($value);
			//echo "</pre>";

			//echo "<tr>
					//<td>".$value['id']."</td>
					//<td>".$value['name']."</td>
					//<td>".$value['company']."</td>
				//</tr>";

			echo "<tr>
					<td>".$value->id."</td>
					<td>".$value->name."</td>
					<td>".$value->company."</td>
				</tr>";
		} 
	?>
	<!--<tr>
		<td><?= $userArray['name']; ?></td>
		<td><?= $userArray['company']; ?></td> 
	</tr>-->
</table>
</body>
</html>

<?php
echo "<pre>";
//print_r($userArray);
echo "</pre>";
?>