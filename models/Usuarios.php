<?php

class Usuarios extends model {

    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM usuario";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        }
    }

    public function getUser($id) {
        $array = array();

        $sql = "SELECT * FROM usuario WHERE id = $id";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        }
    }

    public function add($nome, $email) {
        if ($this->emailExists($email) == false) {
            $sql = "INSERT INTO usuario (nome, email) VALUES (:nome, :email)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    private function emailExists($email) {
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id, $nome, $email) {
        if ($this->emailExists($email) == false) {
            $sql = "UPDATE usuario SET nome = :nome, email = :email WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM usuario WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

}
