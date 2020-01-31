<?php

class homeController extends controller {

    public function index() {
        $dados = array();

        $u = new Usuarios();

        $dados = array('lista' => $u->getAll());
        $this->loadTemplate("home", $dados);    //carrega a view do home
    }

}
