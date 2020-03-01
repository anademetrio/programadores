<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programadores_model extends CI_Model {

	public function getProgramadores() {
		$query = $this->db->query('SELECT p.id, p.nome, p.cidade, p.idade, p.experiencia, p.email, c.cargo
		FROM programadores AS p
		JOIN cargos AS c ON c.id = p.cargo');

		return $query->result();
	}
	public function getProgramador($id = null) {

		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get('programadores');

		return $query->result();
	}

	public function addProgramador($data = NULL) {
		if($data != NULL) {
			$this->db->insert('programadores', $data);
			return array('success' => 'Cadastro realizado com sucesso!');
		} else {
			return array('error' => 'Nao foi possivel realizar o cadastro!');
		}
	}

	public function editProgramador($data = NULL, $id = null) {
		if($data != NULL && $id != null) {
			$this->db->update('programadores', $data, array('id' => $id));
			return array('success' => 'Registro atualizado com sucesso!');
		} else {
			return array('error' => 'Nao foi possivel realizar a operacao!');
		}
	}

	public function apagarProgramador($id = null) {
		if($id != null) {
			$this->db->delete('programadores', array('id' => $id));
			return array('success' => 'Registro deletado com sucesso!');
		} else {
			return array('error' => 'Nao foi possivel realizar a operacao!');
		}
	}
}
