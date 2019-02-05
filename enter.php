<?php include 'database.php'; ?>

<?php
// This is the "prepared statement" version of this file.
if (isset($_POST['name']) && isset($_POST['pickup'])) {
  $name = sanitizeMySQL($conn, $_POST['name']);
    $pickup = sanitizeMySQL($conn, $_POST['pickup']);
    $situation = sanitizeMySQL($conn, $_POST['situation']);
    $success = sanitizeMySQL($conn, $_POST['success']);
  $query = "INSERT INTO pickuplines (name, pickup, situation, success)
       VALUES (?, ?, ?, ?)";
   if ( $stmt = mysqli_prepare($conn, $query) ) {
            // bind the values to replace the 6 question marks
            // note that 6 letters in 'sssids' MUST MATCH data types in table
            // Type specification chars:
            // i - integer, s - string , d - double (decimal), b - blob
            mysqli_stmt_bind_param($stmt, 'ssss',
            $name,
            $pickup,
            $situation,
            $success,
            );
            mysqli_stmt_execute($stmt);
                // close the prepared statement
                mysqli_stmt_close($stmt);
                // close db connection
                mysqli_close($conn);
            } // end of prepare if-statement
        } else {
            echo "Failed to enter!";
        } // end of isset if-statement
        // erase any HTML tags and then escape all quotes
        // this is used on each value that came from the HTML form
        function sanitizeMySQL($conn, $var) {
            $var = strip_tags($var);
            $var = mysqli_real_escape_string($conn, $var);
            return $var;
        }
        ?>
