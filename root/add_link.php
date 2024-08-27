<?php
if (isset($_POST['link_name']) && isset($_POST['url'])) {
   $linkName = trim($_POST['link_name']);
   $url = trim($_POST['url']);
   // Format: link_name|url
   $newLink = $linkName . "|" . $url . "\n";
   // Append the new link to the file
   file_put_contents('links.txt', $newLink, FILE_APPEND);
   // Redirect back to the index page
   header("Location: links.php");
   exit;
} else {
   echo "No link name or URL provided.";
}
?>