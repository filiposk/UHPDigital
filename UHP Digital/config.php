<?php
$titleAPP="Business card";


$conn = new PDO("mysql:host=localhost;dbname=CardBase", "filip", "filip");
        $conn->exec("set names utf8");