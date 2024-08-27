<?php
if (isset($_POST['name']) && isset($_POST['number'])) {
   $name = trim($_POST['name']);
   $number = trim($_POST['number']);
   // Validate the input
   if (!empty($name) && !empty($number)) {
       $entry = $name . "|" . $number . "\n";
       // Save to file
       file_put_contents("phone_numbers.txt", $entry, FILE_APPEND);
       // Redirect to manage phone numbers page
       header("Location: phone_numbers.php");
       exit;
   } else {
       echo "Both fields are required.";
   }
} else {
   echo "No data provided.";
}
?>