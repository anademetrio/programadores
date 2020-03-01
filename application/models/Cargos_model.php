<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos_model extends CI_Model {

	public function getCargos() {
		$query = $this->db->get('cargos');

		return $query->result();
	}

	public function getCargo($id = null) {

		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get('cargos');

		return $query->result();
	}

	public function addCargo($data) {
		if($data != NULL) {
			$this->db->insert('cargos', $data);
			return array('success' => 'Cadastro realizado com sucesso!');
		} else {
			return array('error' => 'Nao foi possivel realizar o cadastro!');
		}
	}

	public function editCargo($data = NULL, $id = null) {
		if($data != NULL && $id != null) {
			$this->db->update('cargos', $data, array('id' => $id));
			return array('success' => 'Registro atualizado com sucesso!');
		} else {
			return array('error' => 'Nao foi possivel realizar a operacao!');
		}
	}

	public function apagarCargo($id = null) {
		if($id != null) {
			$this->db->delete('cargos', array('id' => $id));
			return array('success' => 'Registro deletado com sucesso!');
		} else {
			return array('error' => 'Nao foi possivel realizar a operacao!');
		}
	}
}
