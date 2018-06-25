<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/util/CI_Object.php';


class ContatoData extends CI_Object{

    public function __construct($id){
        parent::__construct();
        $this->load_data($id);
    }

    private function load_data($id){
        $rs = $this->db->get_where('Contato_Site', array('id' => $id));

        foreach ($rs->row() as $key => $value) {
            $this->$key = $value;
        }

        $this->{'center_text'} = $this->modconfig->mod_contato_centered_text;
        $this->{'image_align'} = $this->modconfig->mod_contato_image_align;
    }
}