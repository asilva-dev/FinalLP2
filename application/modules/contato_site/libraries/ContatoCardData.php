<?php 

/**
 * Classe que encapsula os dados a serem exibidos no 
 * cartão de boas vindas (ContatoCard)
 */
class ContatoCardData{

   private $alt = '';
   private $link = '';
   private $title = '';
   private $label = '';
   private $content = '';

   public function __construct($title, $content){
      // inicialize os atributos mínimos
      $this->title = $title;
      $this->content = $content;
   }

   // crie os setters para os atributos "opcionais"...
   // naturalmente, essas informações poderiam vir de um bd, ok? :)
   public function setAlt($alt){
      $this->alt = $alt;
   }

   public function setLink($link){
      $this->link = $link;
   }

   public function setLabel($label){
      $this->label = $label;
   }

   // crie os getters para os atributos que precisam ser acessados de fora da classe
   public function getAlt(){
      return $this->alt;
   }

   public function getLink(){
      return $this->link;
   }

   public function getTitle(){
      return $this->title;
   }

   public function getLabel(){
      return $this->label;
   }

   public function getContent(){
      return $this->content;
   }

}