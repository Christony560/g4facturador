<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Venta extends CI_Controller{
// INICIALIZAMOS LOS VALORES DEL CONSTRUCTOR
    function __construct(){
        parent::__construct();
        $this->load->model('Venta_model');

    }
//FUNCION INDEX
    public function index(){
        $this->load->model('clienteModel'); // Carga el modelo de clientes
        $data['clientes'] = $this->clienteModel->getClientes(); // Obtén los datos de clientes
        // Agrega otros datos necesarios a $data
        $this->load->view('V_venta', $data); 
    }
//FUNCION INSERTAR
    public function insertar(){
        $data = array(
            'fecha' => $this->input->post('fecha'),
            'cliente' => $this->input->post('cliente'),
            'producto' => $this->input->post('producto'),
            'cantidad' => $this->input->post('cantidad'),
            'precio' => $this->input->post('precio'),
            'total' => $this->input->post('total')
        );
        $this->Venta_model->insertar($data);
        redirect('Venta/index');
    }

}