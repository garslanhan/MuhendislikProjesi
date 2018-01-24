<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=sql", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>