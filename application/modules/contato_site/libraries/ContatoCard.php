<?php 

/**
 * Classe que gera o html de um componente Card do MDBootstrap
 */
class ContatoCard{

  private $data;

  public function __construct(ContatoCardData $data){
    $this->data = $data;
  }

  /**
   * Retorna o HTML que produz o card
   */
  public function getHTML(){
    return '<div class="row mt-2 justify-content-md-center"><div class="card col-md-5">

      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="'.$this->data->getLink().'" alt="'.$this->data->getAlt().'">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">'.$this->data->getTitle().'</h4>
        <!-- Text -->
        <p class="card-text">'.$this->data->getContent().'</p>
        <!-- Button -->
        <a href="#" class="btn btn-primary">'.$this->data->getLabel().'</a>
    
      </div>    
    </div></div>';
  }

}