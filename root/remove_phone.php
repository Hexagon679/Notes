<?php
if (isset($_GET['index'])) {
   $index = (int)$_GET['index'];
   if (file_exists("phone_numbers.txt")) {
       $phoneNumbers = file_get_contents("phone_numbers.txt");
       $phoneArray = explode("\n", trim($phoneNumbers));
       if (isset($phoneArray[$index])) {
           unset($phoneArray[$index]);
           file_put_contents("phone_numbers.txt", implode("\n", $phoneArray));
       }
   }
   // Redirect back to manage phone numbers page
   header("Location: manage_phone_numbers.php");
   exit;
} else {
   echo "No phone number specified for removal.";
}
?>