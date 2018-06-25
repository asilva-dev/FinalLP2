<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContatoComponent{

    private $data;
    private $image_align;
    private $center_text;

    public function __construct(ContatoData $data){
        $this->data = $data;
        $this->center_text = $data->center_text ? 'text-center' : '';
        $this->image_align = $data->image_align == 2 ? 'float-right' : ($data->image_align == 1 ? 'float-left' : '');
    }

    public function getHTML(){
        return '<div class="jumbotron '.$this->center_text.'  ">
                    <div class="container">
                       <form name="meu_form">
 
                            <h1>Entre em contato</h1>
                     
                            <p class="nome">
                                <input type="text" id="nomeid" required="required" name="nome" />
                                <label for="nome">Nome</label>
                            </p>
                            <p class="fone">
                                <input type="text" id="foneid" name="fone" />
                                <label for="fone">Fone</label>
                     
                            </p>
                            <p>
                                <input type="email" id="emailid" name="email" />
                                <label for="email">Email</label>
                            </p>
                            <p>
                                <textarea placeholder="Deixe sua opnião"></textarea>
                            </p>
                            <p class="submit">
                                <input type="submit" onclick="Enviar();" value="Enviar" />
                            </p>
                     
                        </form>
                    </div>                
                </div>';
    }

}