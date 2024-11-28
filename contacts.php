<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>contact pagina</h1>

<?php
include "navbar.php"
?>

<form>
    <label for="Name">naam:</label><br>
    <input type="text" id="Naam"><br><br>
    <label for="Email">Email:</label><br>
    <input type="text" id="Email"><br><br>
    <label for="message">Bericht:</label><br>
    <input type="text" id="message"><br><br>
    <button onclick="">Send</button>
</form>



    <?php
include "footer.php"
?>
    
</body>
</html>