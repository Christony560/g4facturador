<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model{
//inicializamos el constructor
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
//funcion para insertar datos
    public function insertar($data){
        $this->db->insert('venta', $data);
    }
//funcion para obtener datos
    public function get_venta(){
        $this->db->select('*');
        $this->db->from('venta');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }
//funcion para obtener datos por id
    public function get_venta_id($id){
        $this->db->select('*');
        $this->db->from('venta');
        $this->db->where('id', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
//funcion para actualizar datos
    public function actualizar($id, $data){
        $this->db->where('id', $id);
        $this->db->update('venta', $data);
    }
//funcion para eliminar datos
    public function eliminar ($id){
        $this->db->where('id', $id);
        $this->db->delete('venta');
    }

}