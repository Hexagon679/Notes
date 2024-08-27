<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/notes512x512.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/d5ba36a855.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Manage Links</title>
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

    <h1>Manage Links</h1>
<ul id="link-list">
        <?php
            if (file_exists("links.txt")) {
                $links = file_get_contents("links.txt");
                $linksArray = explode("\n", trim($links));

                // Create an associative array with the link name as the key for sorting
                $sortedLinks = [];
                foreach ($linksArray as $index => $link) {
                    if (!empty($link)) {
                        list($linkName, $url) = explode("|", $link);
                        $sortedLinks[$linkName] = ['url' => $url, 'index' => $index];  // Store in associative array
                    }
                }

                // Sort by link name (keys)
                ksort($sortedLinks);

                // Display sorted links
                foreach ($sortedLinks as $linkName => $data) {
                    $url = $data['url'];
                    $index = $data['index'];
                    echo "<li>
                            $linkName ($url)
                            <a href='remove_link.php?index=$index' id='removeLink' onclick='return confirm(\"Are you sure you want to remove this link?\");'>Remove <i class='fa fa-trash'></i></a>
                          </li>";
                }
            } else {
                echo "No links available.";
            }
        ?>
  </ul>
    <a href="links.php">Back</a>
</body>
</html>
