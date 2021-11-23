<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_Model extends CI_Model {

    public function guardar($datos){
        return $this->db->insert("clientes",$datos);
    }//Final de Guardar

    public function ObtenerCliente(){
        $resultados = $this->db->get("clientes");
        return $resultados->result();
    }//Final Obtener cliente

    public function ObtenerClienteActivo(){
        $this->db->where("estado","1");
        $resultados = $this->db->get("clientes");
        return $resultados->result();
    }//Final Obtener cliente Activo

    public function ObtenerClientexID($id){
        $this->db->where("id_cliente",$id);
        $resultados = $this->db->get("clientes",$id);
        return $resultados->row();
    }//Final Obtener cliente

    public function Actualizar_Cliente($id,$datos){
        $this->db->where("id_cliente",$id);
        return $this->db->update("clientes",$datos);
    }//Final Actualizar

}//Final del Modelo