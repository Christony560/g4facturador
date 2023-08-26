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
            'venta_fecha' => $this->input->post('fecha'),
            'venta_cliente_id' => $this->input->post('cliente'),
            'venta_MetodoPago_id' => $this->input->post('metodo_pago'),
        );
        $venta_id = $this->Venta_model->insertar($data);
        $this->db->insert_id();


        redirect('detalle/index/'.$venta_id);
    }

}