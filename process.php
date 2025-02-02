<?php
if (isset($_POST['textInput'])) {
    $inputText = htmlspecialchars($_POST['textInput']);  // Sicherheitsvorkehrung gegen XSS-Angriffe
    header("Location: index.php?text=" . urlencode($inputText));  // Weiterleitung zur Startseite mit dem eingegebenen Text
    exit;
}
?>
