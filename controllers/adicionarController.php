<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adicionar
 *
 * @author danil
 */
class adicionarController extends controller {

    public function index() {
        
    }

    public function adicionar() {
        $dados = array('error' => '');

        if (!empty($_GET['error'])) {
            $dados['error'] = $_GET['error'];
        }

        $this->loadTemplate('adicionar', $dados);
    }

    public function add_save() {
        if (!empty($_POST['nome'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            $u = new Usuarios();
            if ($u->add($nome, $email)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: " . BASE_URL . "adicionar/adicionar?error=exist");
            }
        } else {
            header("Location: " . BASE_URL . "adicionar");
        }
    }

}
