<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numbers = $_POST["numbers"];
    $names = $_POST["names"];
    $pwd = $_POST["pwd"];
    $emails = $_POST["emails"];
   
    try{
     require_once "dbh.inc.php";
     $query = "INSERT INTO zipcode (numbers, names, pwd, emails) VALUES
     (?, ?, ?, ?);";

     $stmt = $pdo->prepare($query);
     
     $stmt->execute([$numbers, $names, $pwd, $emails]);
    

     $pdo = null;
     $pdo = null;
  
     header("Location: ../done.php");

     die();


    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}