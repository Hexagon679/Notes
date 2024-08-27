<!doctype html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <head>
    <link rel="icon" type="image/x-icon" href="images/notes512x512.png" />
    <link rel="stylesheet" href="style.css" />
    <title>Phone Numbers</title>
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
    <ul id="phone-list">
<?php
           if (file_exists("phone_numbers.txt")) {
               $phoneNumbers = file_get_contents("phone_numbers.txt");
               $phoneArray = explode("\n", trim($phoneNumbers));
               // Create an associative array with the name as the key for sorting
               $sortedPhones = [];
               foreach ($phoneArray as $phone) {
                   if (!empty($phone)) {
                       list($name, $number) = explode("|", $phone);
                       $sortedPhones[$name] = $number;  // Store in associative array
                   }
               }
               // Sort by name (keys)
               ksort($sortedPhones);
               // Display sorted phone numbers
               foreach ($sortedPhones as $name => $number) {
                   echo "<p><b>$name: </b>$number</p>";
               }
           } else {
               echo "No phone numbers available.";
           }
       ?>
</ul>
<br>
<button class="notepadButton" onclick="window.location.href='add_phone.html'">Add Phone Number</button>
<button class="notepadButton" onclick="window.location.href='manage_phone_numbers.php'">Manage Phone Numbers</button>

  </body>
</html>