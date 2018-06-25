<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'modules/contato_site/libraries/component/contato/ContatoData.php';
include_once APPPATH.'modules/contato_site/libraries/component/contato/ContatoComponent.php';
include_once APPPATH.'modules/contato_site/libraries/ContatoCardData.php';
include_once APPPATH.'modules/contato_site/libraries/ContatoCard.php';

class Contato_Site_Model extends MY_Model{

	public function getContatoCard(){
        // exemplo de instanciação manual de objeto
        $title = 'Avaliação Final - Módulos'; 
        $content = 'Módulo de Avaliação Final - Formulário de Contato.';
        $data = new ContatoCardData($title, $content);
        $data->setLink('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCvn5hG33ZcmkUUEKNI-nPVsVSYcODXBsRXx6LG6l879rV5DMkg');
        
        $this->load->library('ContatoCard', $data, 'card');

        return $this->card->getHTML();
    }
	
	public function get_jumbo(){
		$title = 'Avaliação Final - 2018'; 
        $content = 'I just want to say how much I realy, realy love this discipline. I almost cry from so much happiness!.';

        $data = new ContatoData(1);
        $jumb = new ContatoComponent($data);
        return $jumb->getHTML();
    }

    

       
}