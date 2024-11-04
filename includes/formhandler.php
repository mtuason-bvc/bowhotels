<?php

//If the page is accessed via a post 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //we use htmlspecialchars for input sanitzation
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    //we just want to exit if they did not provide a name or email address and not insert to the database
    if (empty($name) || empty($email)){
        header("Location: ../contact.html");
        exit();
    }

    try {
        
        require_once "dbh.inc.php";
        $query = "INSERT INTO contact (full_name, email, phone, user_message)
        VALUES (:name, :email, :phone, :message);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":message", $message);
        $stmt->execute();
        // $stmt->execute([$name, $email, $phone, $message]);
        $pdo = null;
        $stmt = null;
        header("Location: ../contact.html");
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else{
    header("Location: ../contact.html");
}