<?php
	include 'database.php';
	$query = "SELECT * FROM pickuplines";
	$pickuplines = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Sock Market Inventory </title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Pick-Up Lines</h1>

<!-- this form is handled by the PHP file named in the action attribute -->

<table>
	<!-- table column headings -->
	<tr>
	  <th>Name</th>
	  <th>Pick-Up line</th>
	  <th>Situation</th>
	  <th>Did it Work?</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
<?php while ($row = mysqli_fetch_assoc($pickuplines)) :  ?>

<tr>
  <td><?php echo stripslashes($row['name']); ?></td>
  <td><?php echo $row['pickup']; ?></td>
  <td><?php echo $row['situation']; ?></td>
  <td><?php echo $row['success']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<!-- close the form -->

<p class="middle"><a href="enter_new_record.php">Add a new sock record</a></p>

</div> <!-- close container -->
</body>
</html>
