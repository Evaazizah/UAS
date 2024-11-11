<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $flight = htmlspecialchars($_POST['flight']);
    
}