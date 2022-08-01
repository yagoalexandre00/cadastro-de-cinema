<?php
    session_start();

    include_once("connection.php");
    include_once("url.php");
    
    $data = $_POST;

    if(!empty($data)){ 
        
        if($data["type"] === "edit"){ // UPDATE 
            $nome = $data["nome"];
            $cidade = $data["cidade"];
            $cnpj = $data["cnpj"];
            $qtdSalas = $data["quantidade_salas"];
            $id = $data["id"];
            $query = "UPDATE cinemas 
                      SET nome = :nome, cidade = :cidade, cnpj = :cnpj, quantidade_salas = :quantidade_salas
                      WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cidade", $cidade);
            $stmt->bindParam(":cnpj", $cnpj);
            $stmt->bindParam(":quantidade_salas", $qtdSalas);
           
            try {        
                $stmt->execute();

            } catch (PDOException $e){
                echo "Erro: $e";
            }
        }

        if($data["type"] === "create"){ // CREATE
            $nome = $data["nome"];
            $cidade = $data["cidade"];
            $cnpj = $data["cnpj"];
            $qtdSalas = $data["quantidade_salas"];

            $query = "INSERT INTO cinemas (nome, cidade, cnpj, quantidade_salas) VALUES (:nome, :cidade, :cnpj, :quantidade_salas)";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cidade", $cidade);
            $stmt->bindParam(":cnpj", $cnpj);
            $stmt->bindParam(":quantidade_salas", $qtdSalas);

            try {        
                $stmt->execute();

            } catch (PDOException $e){
                echo "Erro: $e";
            }
        }
        header("Location:" . $BASE_URL . "../index.php");      
    } else {            // READ
        if(!empty($_GET)){
            $id = $_GET["id"];
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
    }

    $conn = null;
?>