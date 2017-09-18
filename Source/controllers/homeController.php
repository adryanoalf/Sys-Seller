<?php
class homeController extends controller{
    public function index(){
        if(!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin'])){
            header('Location:'.BASE_URL."/login");
        }
        $u = new Usuarios();
        $dados = $u->getDados($_SESSION['cLogin']);
        $dados = array(
            'titulo' => 'HomePage',
            'nome' => $dados['nome']
        );
        $this->loadTemplate('home', $dados);
    }
}