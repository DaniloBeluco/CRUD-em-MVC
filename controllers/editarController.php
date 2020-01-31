<?php

class editarController extends controller {

    public function index() {
        
    }

    public function editar($id) {

        $dados = array('error' => '');

        if (isset($_POST['nome']) && (!empty($_POST['nome']))) {

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);


            $u = new Usuarios();
            if ($u->edit($id, $nome, $email)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: " . BASE_URL . "?error=exist");
            }
        }


        $u = new Usuarios();
        $dados['user'] = $u->getUser($id);

        $this->loadTemplate('editar', $dados);
    }

    public function deletar($id) {
        $u = new Usuarios();
        $u->delete($id);
        header("Location: ".BASE_URL);
    }

}
