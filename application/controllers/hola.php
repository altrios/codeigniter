<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hola extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('hola_model');
	}
				public function index (){
				$data['cursos']=$this->hola_model->recibir();
				$this->load->view('hola/x',$data);
				
			}
			public function datos (){
				$data['cursos']=$this->hola_model->recibir();
				$this->load->view('hola/editar',$data);
				
			}
			public function nuevo(){
				$this->load->view('hola/formulario');

			}

			public function enviar(){
				$data = array(
					'nombre'=> $this->input->post('nombre'),
					'videos'=> $this->input->post('videos'),
					);
//				
				$this->hola_model->crearCurso($data);
				$this->index();
			}
			
			public function editar(){
				$data['id']=$this->uri->segment(3);
				$data['curso']=$this->hola_model->obtener($data['id']);
				$this->load->view("hola/editar",$data);
			}
			public function actualizar($id){
				$data=array(
				'nombre'=>$this->input->post('nombre'),
				'videos'=>$this->input->post('videos'),
					);
				$this->hola_model->actualizar($this->uri->segment(3),$data);
				$this->load->view('hola/x',$data);/*
				$id=$this->input->post('id');
				$nombre=$this->input->post('nombre');
				$videos=$this->input->post('videos');
				$actualizar=$this->hola_model->actualizar($id,$nombre,$videos);
				if($actualizar)
				{
					$this->session->set_flashdata('actualizado');
					redirect('hola/x');
				}*/
			}

			
		}
	



?>