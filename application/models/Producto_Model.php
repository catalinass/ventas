<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_Model extends CI_Model {

    public function guardar($datos){
        return $this->db->insert('productos',$datos);
    }//Final de Guardar

    public function ObtenerProductos(){
        $this->db->select("p.*,c.nombre as categoria");
        $this->db->from("productos p");
        $this->db->join('categorias c','p.id_categoria = c.id_categorias');
        $resultados = $this->db->get();
        if($resultados->num_rows() >0){
            return $resultados->result();
        }else{
            return false;
        }
    }//Final Obtener Categoria

    public function ObtenerProductosActivos(){
        $this->db->where("estado","1");
        $resultados = $this->db->get("productos");
        return $resultados->result();
    }//Final Obtener Categoria Activas

    public function ObtenerProductosxID($id){
        $this->db->where("id_productos",$id);
        $resultados = $this->db->get("productos");
        return $resultados->row();
    }//Final Obtener Categoria

    public function Actualizar_productos($id,$datos){
         $this->db->where("id_productos",$id);
        return $this->db->update("productos",$datos);
    }//Final Actualizar

}//Final del Modelo