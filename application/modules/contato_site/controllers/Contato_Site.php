<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contato_Site extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Contato_Site_Model', 'model');
        $this->menu_itens = $this->model->get_menu_itens();
    }

    /**
     * Página inicial do módulo; exibe sua funcionalidade principal. Além desta, um
     * módulo pode ter outras páginas, de acordo com sua finalidade. O importante é
     * lembrar que um módulo deve estar focado em fazer, bem feito e de forma flexível, 
     * apenas uma tarefa.
     */
    public function index(){
        
        $html = 'Página Inicial - Formulário de Contato';
        $this->show($html);
    }

    /**
     * Página de configuração do conteúdo exibido nas páginas de funcionalidades do módulo
     */
    public function edit(){
        $html = 'Editando Informações';
        $this->show($html);
    }

    public function card(){
        $this->load->model('Contato_Site_Model', 'home');
        $html = $this->home ->getContatoCard();
        $this->show($html);

    }

    public function form(){
        $html = $this->load->view('fale', null, true);
        $this->show($html);
    }
}