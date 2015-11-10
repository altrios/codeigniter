<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hola_model extends CI_Model{
	function __construct(){
	parent::__construct();
	$this->load->database();
}
 function crearCurso($data){
 	
 	$this->db->insert('cursos',array('nombre'=>$data['nombre'],'videos'=>$data['videos']));
	
}
 function recibir(){
				$query = $this->db->get('cursos');
				if($query->num_rows()>0)return $query;
					else return false;
			}
function obtener($id){
	$this->db->where('id',$id);
	$query = $this->db->get('cursos');
	/*if($query->num_rows()>0) return=$query;
	else return false;*/
	$fila=$query->row();
	return $fila;


}
function actualizar($datos){
	$data=array(
	'nombre'=>$nombre,
	'videos'=>$videos
	);
	$this->db->where('id',$datos['id']);
	$query=$this->db->update('cursos',$data);
}
}




?>