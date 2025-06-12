<?php

class Comment{

    function Create($id_post, $id_user, $date_update, $status, $context) {

        try {

            $conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO tb_comment 
                (id_post, id_user, date_update, status, context) 
                VALUES 
                (:ID_POST, :ID_USER, :DATE_UPDATE, :STATUS, :CONTEXT)");

            $stmt->bindParam(":ID_POST", $id_post);
            $stmt->bindParam(":ID_USER", $id_user);
            $stmt->bindParam(":DATE_UPDATE", $date_update);
            $stmt->bindParam(":STATUS", $status);
            $stmt->bindParam(":CONTEXT", $context);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }

    }

    function Edit($id_comment, $id_post, $id_user, $date_update, $status, $context) {

        try {

            $conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("UPDATE tb_comment SET 
                id_post = :ID_POST, 
                id_user = :ID_USER, 
                date_update = :DATE_UPDATE, 
                status = :STATUS, 
                context = :CONTEXT 
                WHERE id_comment = :ID_COMMENT");

            $stmt->bindParam(":ID_POST", $id_post);
            $stmt->bindParam(":ID_USER", $id_user);
            $stmt->bindParam(":DATE_UPDATE", $date_update);
            $stmt->bindParam(":STATUS", $status);
            $stmt->bindParam(":CONTEXT", $context);
            $stmt->bindParam(":ID_COMMENT", $id_comment);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }

    }

    function Delete($id_comment) {

        try {

            $conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("DELETE FROM tb_comment WHERE id_comment = :ID_COMMENT");
            $stmt->bindParam(":ID_COMMENT", $id_comment);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }

    }

    function DeleteAllPost($id_post) {

        try {

            $conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("DELETE FROM tb_comment WHERE id_post = :ID_POST");
            $stmt->bindParam(":ID_POST", $id_post);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }

    }
    
    function DeleteAll() {

        try {

            $conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Atenção: Esta query apaga todos os registros da tabela!
            $stmt = $conn->prepare("DELETE FROM tb_comment");

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }

    }

}

?>