<?php
$data = file_get_contents('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=1&limit=40&convert=USD&CMC_PRO_API_KEY=d334b542-6312-4f17-82bf-e67780b9c4d3');
$result = json_decode($data, true);


//var_dump($result);
$data = $result["data"];
//echo $data1["name"];

//$data = $result["data"][0]["quote"]["USD"];
//echo $data["price"];


//echo $data["volume_24h"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Coinmarketcap API</title>
</head>
<body>

	<table>
		<tr>
			<td>
				Name
			</td>
			<td>Price</td>
		</tr>
		<?php
		 foreach ($data as $q) {?>
			<tr>
				<td><?php echo $q['name'] ;?> </td>
				<td><?php echo $q["quote"]["USD"]["price"] ;?> </td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>
