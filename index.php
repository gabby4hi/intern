<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		This is my first page of the internship test........
	</title>
</head>
<body>

<?php 
$query = "SELECT * FROM intern";
$result = mysqli_query($con, $query);
$results = mysqli_fetch_array($result);


 
//echo $results[1];

echo $results['first_Name'];
?>
	
	<button class='btn-primary'> Click me to view more about me </button>

</body>
</html>
