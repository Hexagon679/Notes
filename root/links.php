<!doctype html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <head>
    <script src="https://kit.fontawesome.com/d5ba36a855.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/notes512x512.png" />
    <link rel="stylesheet" href="style.css" />
    <title>Links</title>
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


<div id="links">
      
  <ul id="link-list">
        <?php
            if (file_exists("links.txt")) {
                $links = file_get_contents("links.txt");
                $linksArray = explode("\n", trim($links));

                // Create an associative array with the link name as the key for sorting
                $sortedLinks = [];
                foreach ($linksArray as $link) {
                    if (!empty($link)) {
                        list($linkName, $url) = explode("|", $link);
                        $sortedLinks[$linkName] = $url;  // Store in associative array
                    }
                }

                // Sort by link name (keys)
                ksort($sortedLinks);

                // Display sorted links
                foreach ($sortedLinks as $linkName => $url) {
                    echo "<li><a href='$url' target='_blank' >$linkName</a></li>";
                }
            } else {
                echo "No links available.";
            }
        ?>
    </ul>
</div>
<button class="notepadButton" onclick="window.location.href='add_link.html'">Add a link</button>
<button class="notepadButton" onclick="window.location.href='manage_links.php'">Manage Links</button>
  </body>
</html>