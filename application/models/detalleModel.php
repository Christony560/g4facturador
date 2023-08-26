<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class DetalleModel extends CI_Model{
    //inicializamos los valores del constructor
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    //funcion insertar
    public function insertar($data){
        $this->db->insert('detalle', array(
            'detalle_venta_id' => $data['venta_id'],
            'detalle_producto_id' => $data['producto_id'],
            'detalle_cantidad' => $data['cantidad'],
            'detalle_precio' => $data['precio'],
            'detalle_subtotal' => $data['subtotal'],
        ));
    }
}
?>