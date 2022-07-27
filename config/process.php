<?php
    if(!empty($_GET)){
        $id = $_GET['id'];
    }

    if(!empty($id)){
        $query = "SELECT * FROM cinemas WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $contact = $stmt->fetch();
    } else {
        $contacts = [];

        $query = "SELECT * FROM cinemas";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll();
    }

    $conn = null;
?>