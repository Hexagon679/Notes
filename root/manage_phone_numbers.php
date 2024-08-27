<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/notes512x512.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://kit.fontawesome.com/d5ba36a855.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" />
<title>Manage Phone Numbers</title>
</head>
<body>
<div id="topNav">
<img src="images/AutoZone_logo.png" alt="AutoZone Logo">
      <a class="link-style" href="links.php">
        <button>Links</button>
      </a>

      <a class="link-style" href="phone_numbers.php"
        ><button>Phone Numbers</button></a
      >

      <a class="link-style" href="useful_tips.php"
        ><button>Useful Tips</button></a
      >

      <a class="link-style" href="credentials.php"
        ><button>Credentials</button></a
      >

      <a class="link-style" href="notepad.php"><button>Notepad</button></a>
    </div>

<h1>Manage Phone Numbers</h1>
<ul id="phone-list">
<?php
           if (file_exists("phone_numbers.txt")) {
               $phoneNumbers = file_get_contents("phone_numbers.txt");
               $phoneArray = explode("\n", trim($phoneNumbers));
               // Create an associative array with the name as the key for sorting
               $sortedPhones = [];
               foreach ($phoneArray as $index => $phone) {
                   if (!empty($phone)) {
                       list($name, $number) = explode("|", $phone);
                       $sortedPhones[$name] = ['number' => $number, 'index' => $index];  // Store in associative array
                   }
               }
               // Sort by name (keys)
               ksort($sortedPhones);
               // Display sorted phone numbers
               foreach ($sortedPhones as $name => $data) {
                   $number = $data['number'];
                   $index = $data['index'];
                   echo "<p>
                           <b>$name: </b>$number <br>
<a href='remove_phone.php?index=$index' id='removeLink' onclick='return confirm(\"Are you sure you want to remove this phone number?\");'>
                               Remove<i class='fa fa-trash'></i>
</a>
</p>";
               }
           } else {
               echo "No phone numbers available.";
           }
       ?>
</ul>
<br>
<a href="phone_numbers.php">Back</a>
</body>
</html>