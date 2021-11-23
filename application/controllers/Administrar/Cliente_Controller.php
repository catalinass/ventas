<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Cliente_Model');

    }//Final Construct

	public function index(){
        
        $datos = array(
            'clientes'=> $this->Cliente_Model->ObtenerCliente(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Cliente/listar_cliente',$datos);
		$this->load->view('layouts/footer');

	}//final index

    public function agregar_cliente(){
        $datos = array(
            'clientes'=> $this->Cliente_Model->ObtenerCliente(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Cliente/agregar_cliente',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Agregar Cliente

    public function editar_cliente($id){
        $datos['cliente'] = $this->Cliente_Model->ObtenerClientexID($id);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Cliente/editar_cliente',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Editar cliente

    public function registrar_cliente(){
        
      $identificacion = $this->input->post("identificacionN");
      $nombre = $this->input->post("nombreN");
      $primer_apellido = $this->input->post("primerapellidoN");
      $segundo_apellido = $this->input->post("segundoapellidoN");
      $telefono = $this->input->post("telefonoN");
      $empresa = $this->input->post("empresaN");
      $estado = $this->input->post("estadoN");

      $this->form_validation->set_rules("identificacionN","Identificacion",
      "required");
      $this->form_validation->set_rules("nombreN","Nombre",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("primerapellidoN","Primer_Apellido",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("segundoapellidoN","Segundo_Apellido",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("telefonoN","Telefono",
      "required");
      $this->form_validation->set_rules("empresaN","Empresa",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("estadoN","Estado","required");

      if($this->form_validation->run()){
          $datos = array(
          'identificacion'=>$identificacion,    
          'Nombre'=>$nombre,
          'Primer_Apellido'=>$primer_apellido,
          'Segundo_Apellido'=>$segundo_apellido,
          'Telefono'=>$telefono,
          'Empresa'=>$empresa,
          'Estado'=>$estado,
          );
          if($this->Cliente_Model->guardar($datos)){
              redirect(base_url()."Administrar/Cliente_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Cliente_Controller/agregar_cliente");
          }
      }
      else{
        $this->agregar_cliente();
      }

    }
//Final registrar Cliente

    public function actualizar_cliente(){
      $id = $this->input->post("idN");
      $identificacionAnt=$this->input->post("identificacionN");
      $identificacion=$this->input->post("identificacionN");
      $nombre = $this->input->post("nombreN");
      $primer_apellido = $this->input->post("primerapellidoN");
      $segundo_apellido = $this->input->post("segundoapellidoN");
      $telefono = $this->input->post("telefonoN");
      $empresa = $this->input->post("empresaN");
      $estado = $this->input->post("estadoN");
      
      if($nombre==$identificacionAnt){
        $this->form_validation->set_rules("IdentificacionN","Identificacion",
      "required");
      }else{
        $this->form_validation->set_rules("IdentificacionN","Identificacion",
        "required");
      }
      $this->form_validation->set_rules("nombreN","Nombre",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("primerapellidoN","Primer_Apellido",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("segundoapellidoN","Segundo_Apellido",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("telefonoN","Telefono",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("empresaN","Empresa",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("estadoN","Estado","required");

      if($this->form_validation->run()){
          $datos = array(
            'Identificacion'=>$identificacion,    
            'Nombre'=>$nombre,
            'Primer_Apellido'=>$primer_apellido,
            'Segundo_Apellido'=>$segundo_apellido,
            'Telefono'=>$telefono,
            'Empresa'=>$empresa,
            'Estado'=>$estado,
          );
          if($this->Cliente_Model->Actualizar_Cliente($id,$datos)){
              redirect(base_url()."Administrar/Cliente_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Cliente_Controller/editar_Cliente".$id);
          }
      }
      else{
        $this->editar_cliente($id);
      }
    //Final actualizar Cliente
    }
    public function eliminar_Cliente($id){
        $datos = array (
            'estado'=>'0',
        );
        $this->Cliente_Model->Actualizar_Cliente($id,$datos);
        redirect(base_url()."Administrar/Cliente_Controller");

    }//Eliminar Cliente

}//Final del Controlador