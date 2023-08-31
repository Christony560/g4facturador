<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TicketController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('TicketModel');
        require_once(APPPATH.'libraries/fpdf/fpdf.php');
      
    }

    public function index(){
        $data['detalles'] = $this->TicketModel->getDetalle();
        $this->load->view('V_ticket', $data);
    }
    
   
    
}




?>