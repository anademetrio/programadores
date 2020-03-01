<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programadores extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Programadores';

		$this->load->model('programadores_model','programadores');

		$data['programadores'] = $this->programadores->getProgramadores();

		$this->load->view('subtemplates/header', $data);
		$this->load->view('lista_programadores', $data);
		$this->load->view('subtemplates/footer');


	}

	public function add() {
		
		$data['title'] = 'Novo Programador';

		$this->load->model('programadores_model','programadores');
		$this->load->model('cargos_model','cargos');

		$data['cargos'] = $this->cargos->getCargos();

		$this->load->view('subtemplates/header', $data);
		$this->load->view('add_programadores');
		$this->load->view('subtemplates/footer');
	}

	public function editar($id = null) {

		if($id == null) {
			redirect('/');
		}

		$data['title'] = 'Editar Programador';

		$this->load->model('programadores_model','programadores');

		$this->load->model('cargos_model','cargos');

		$data['cargos'] = $this->cargos->getCargos();

		$data['programador'] = $this->programadores->getProgramador($id);

		$this->load->view('subtemplates/header', $data);
		$this->load->view('edit_programadores', $data);
		$this->load->view('subtemplates/footer');
	}

	public function apagar($id = null) {
		if($id == null) {
			redirect('/');
		}

		$this->load->model('programadores_model','programadores');

		$query = $this->programadores->getProgramador($id);

		if($query != null) {
			$data = $this->programadores->apagarProgramador($id);
		}

		echo json_encode($data);
	}
	public function salvar() {
		$this->load->model('programadores_model','programadores');

		$dados['nome'] = $this->input->post('nome');
		$dados['idade'] = $this->input->post('idade');
		$dados['cidade'] = $this->input->post('cidade');
		$dados['email'] = $this->input->post('email');
		$dados['cargo'] = $this->input->post('cargo');
		$dados['experiencia'] = $this->input->post('experiencia');

		if($this->input->post('id') != null){

			$data = $this->programadores->editProgramador($dados, $this->input->post('id'));

		} else {
			$data = $this->programadores->addProgramador($dados);

		}
	
		echo json_encode($data);
	}
}
