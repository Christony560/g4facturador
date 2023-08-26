<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class detalle extends CI_Controller{
//inicializamos los valores del constructor
    function __construct(){
        parent::__construct();
        $this->load->model('detalleModel');
    }
//funcion index
    public function index(){
        $this->load->view('V_detalle');
    }
//funcion insertar
    public function insertarDetalle(){
        $data = array(
            'detalle_venta_id' => $this->input->post('detalle_venta_id'),
            'detalle_producto_id' => $this->input->post('detalle_producto_id'),
            'detalle_descripcion' => $this->input->post('detalle_descripcion'),
            'detalle_cantidad' => $this->input->post('detalle_cantidad'),
            'detalle_precio_unitario' => $this->input->post('detalle_precio_unitario'),
        );
        $this->detalleModel->insertar($data);
        redirect('detalle/index');
    }
}