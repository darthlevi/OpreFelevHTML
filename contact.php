<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h1>Köszi, hogy írtál $name!</h1>";
    echo "<p>Megkaptuk az üzeneted.</p>";
} else {
    header("Location: contact.html");
    exit();
}
?>