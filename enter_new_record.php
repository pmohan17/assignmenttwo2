<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Pickup Line- Add </title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<div id="container">

<h1>Pickup Line: Share a New One!</h1>

<p class="middle"><a href="inventory_update.php">View All PickUp Lines</a></p>

<div id="lines">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="pickupform" method="post" autocomplete="off">

  <label for="name">Name </label>
	<input type="text" name="name" id="name" maxlength="20" required>

  <label for="pickup">PickUp Line </label>
	<input type="text" name="pickup" id="pickup" maxlength="250" required>

  <label for="situation">What happened </label>
	<input type="text" name="situation" id="situation" maxlength="500" required>

  <label for="success">Did it work? </label>
  <select name="success" id="success" required>
      <option value=""> Select one </option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
  </select>

	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->

</div> <!-- close #socks -->

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
<script src="js/jquery.min.js"> </script>
<script src="js/enter.js"></script>
</body>
</html>
