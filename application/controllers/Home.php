<?php

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
    
    // 

  }

  public function index(){
    // load views
    $this->load->view('templates/header.php');
    $this->load->view('home.php');
    $this->load->view('templates/footer.php');

  }


}