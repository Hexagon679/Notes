<?php
if (isset($_GET['index'])) {
    $indexToRemove = intval($_GET['index']);

    // Read all lines from the file
    $links = file("links.txt", FILE_IGNORE_NEW_LINES);

    // Remove the specific link by index
    if (isset($links[$indexToRemove])) {
        unset($links[$indexToRemove]);
    }

    // Save the updated list back to the file
    file_put_contents("links.txt", implode("\n", $links));

    // Redirect back to the manage links page
    header("Location: manage_links.php");
    exit;
} else {
    echo "No link index provided.";
}
?>
