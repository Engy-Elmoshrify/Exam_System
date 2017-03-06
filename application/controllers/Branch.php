<?php
class Branch extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('answer_model');
        $this->load->helper('url_helper');
    }
 
    public function international()
    {
    
        $this->load->view('branch/International-customers');
    
    }
   public function refund()
    {
    
        $this->load->view('branch/refund');
    
    }
  
  public function membership()
    {
    
        $this->load->view('branch/membership');
    
    }
    public function links()
    {
    
        $this->load->view('branch/links');
    
    }
     public function cons()
    {
    
        $this->load->view('branch/cons');
    
    }
     public function offers()
    {
    
        $this->load->view('branch/offers');
    
    }
     public function training()
    {
    
        $this->load->view('branch/training');
    
    }
     public function news()
    {
    
        $this->load->view('branch/news');
    
    }
 public function services()
    {
    
        $this->load->view('branch/services');
    
    }


}