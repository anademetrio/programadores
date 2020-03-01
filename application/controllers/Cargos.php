<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Cargos';

		$this->load->model('cargos_model','cargos');

		$data['cargos'] = $this->cargos->getCargos();

		$this->load->view('subtemplates/header', $data);
		$this->load->view('lista_cargos', $data);
		$this->load->view('subtemplates/footer');


	}

	public function apagar($id = null) {
		if($id == null) {
			redirect('/');
		}

		$this->load->model('cargos_model','cargos');

		$query = $this->cargos->getCargo($id);

		if($query != null) {
			$data = $this->cargos->apagarCargo($id);
		}

		echo json_encode($data);
	}
	public function salvar() {
		$this->load->model('cargos_model','cargos');

		$dados['cargo'] = $this->input->post('cargo');

		if($this->input->post('id') != null){

			$data = $this->cargos->editCargo($dados, $this->input->post('id'));

		} else {
			$data = $this->cargos->addCargo($dados);

		}
	
		echo json_encode($data);
	}
}
