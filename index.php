<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Eingabe</title>
</head>
<body>
    <h1>Text eingeben und anzeigen</h1>
    <form action="process.php" method="POST">
        <label for="textInput">Text eingeben:</label><br>
        <input type="text" id="textInput" name="textInput" required><br><br>
        <input type="submit" value="Absenden">
    </form>

    <?php
    if (isset($_GET['text'])) {
        echo "<h2>Der eingegebene Text ist:</h2>";
        echo "<p>" . htmlspecialchars($_GET['text']) . "</p>";
    }
    ?>
</body>
</html>
