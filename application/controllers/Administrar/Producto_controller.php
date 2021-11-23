<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Producto_Model');
        $this->load->model('Categoria_Model');

    }//Final Construct


	public function index(){
        
        $datos = array(
           'productos'=> $this->Producto_Model->ObtenerProductos(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/producto/listar_producto', $datos);
		$this->load->view('layouts/footer');

	}//final index

    public function agregar_producto(){

        $datos = array(
            'categorias'=> $this->Categoria_Model->ObtenerCategoriaActivas(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/producto/agregar_producto',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Agregar Categoria

    public function editar_producto($id){
        $datos['productos']=$this->Producto_Model->ObtenerProductosxID($id);
        $datos['categorias']=$this->Categoria_Model->ObtenerCategoriaActivas();
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/producto/editar_producto',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Editar Categoria

    public function registrar_productos(){

      $nombre = $this->input->post("nombreN");
      $descripcion = $this->input->post("descripcionN");
      $precio = $this->input ->post("precioN");
      $stock = $this->input->post("stockN");
      $categoria = $this->input ->post("categoriaN");
      $estado = $this->input->post("estadoN");

      $this->form_validation->set_rules("nombreN","Nombre","required|regex_match[/^[a-zA-ZñÑáéíóú]*$/]|is_unique[categorias.Nombre]");
      $this->form_validation->set_rules("descripcionN","Descripcion","required|<regex_match[/^[a-zA-ZñÑáéíóú]*$/]|");
      $this ->form_validation ->set_rules("precioN","precio","requiered");
      $this ->form_validation ->set_rules("stockN","Stock","requiered");
      $this ->form_validation ->set_rules("categoriaN","categoria","requiered");
      $this->form_validation->set_rules("estadoN","Estado","required");

      if($this->form_validation->run()){
          $datos = array(

          'nombre'=>$nombre,
          'descripcion'=>$descripcion,
          'precio'=>$precio,
          'stock'=>$stock,
          'categoria'=>$categoria,
          'estado'=>$estado,
          );
          if($this->Producto_Model->guardar($datos)){
              redirect(base_url()."Administrar/Producto_controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Producto_controller");
          }
      }
      else{
        $this-> index();
      }

    }//Final registrar categoria

    public function actualizar_productos(){

        $id_productos = $this ->input->post("id_productos");
        $nombre = $this->input->post("nombreN");
        $descripcion = $this->input->post("descripcionN");
        $precio = $this->input ->post("precioN");
        $stock = $this->input->post("stockN");
        $categoria = $this->input ->post("categoriaN");
        $estado = $this->input->post("estadoN");
  
        
        $this->form_validation->set_rules("descripcionN","descripcion","required|<regex_match[/^[a-zA-ZñÑáéíóú]*$/]|");
        $this ->form_validation ->set_rules("precioN","precio","requiered");
        $this ->form_validation ->set_rules("StockN","stock","requiered");
        $this->form_validation->set_rules("estadoN","estado","required");
  
        if($this->form_validation->run()){
            $datos = array(
  
            'id_productos'=>$id_productos,
            'nombre'=>$nombre,
            'descripcion'=>$descripcion,
            'precio'=>$precio,
            'stock'=>$stock,
            'categoria'=>$categoria,
            'estado'=>$estado,
            );
            if($this->Producto_Model->guardar($datos)){
                redirect(base_url()."Administrar/Producto_controller");
            }else{
                $this->session->set_flashdata("Error","No se pudo guardar la informacion");
                redirect(base_url()."Administrar/Producto_controller");
            }
        }
        else{
          $this-> index();
        }
  
      }
}//Final del Controlador