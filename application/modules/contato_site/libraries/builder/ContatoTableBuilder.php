<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/TableBuilder.php';

class ContatoTableBuilder extends TableBuilder{

    public function __construct(){
        parent::__construct('Contato_Site');
    }

    function get_fields(){
        $fields['nome'] = array('type' => 'VARCHAR', 'constraint' =>  50);
        $fields['telefone'] = array('type' => 'INT', 'constraint' =>  150);
        $fields['email'] = array('type' => 'VARCHAR', 'constraint' =>  500);
        $fields['mensagem'] = array('type' => 'VARCHAR', 'constraint' =>  250);

        return $fields;
    }

    function get_data(){
        // para inserir um registro na tabela Contato_Site...
        $data[] = array(
            'nome' => 'Marcia Fernanda da Silva', 
            'telefone' => '976273717', 
            'email' => 'mandikali25@gmail.com',
            'mensagem' => 'Olá, gostaria de saber se aceitam encomendas'
        );

        return $data;
    }

}