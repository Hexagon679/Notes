<!doctype html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <head>
    <link rel="icon" type="image/x-icon" href="images/notes512x512.png" />
    <link rel="stylesheet" href="style.css" />
    <title>Notepad</title>
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

      <a class="link-style" href="phone_numbers.php"
        ><button>Follow Ups</button></a
      >

    </div>
    <h2>Notes</h2>
    <p>Write whatever you want</p>
    <button
      class="notepadButton"
      onclick="document.getElementById( 
            'myInput').value = ''"
    >
      Click here to clear
    </button>
    <textarea id="myInput"></textarea>
  </body>
</html>