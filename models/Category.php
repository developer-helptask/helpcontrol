<?php
class Category extends model{
public function __construct() {
	parent::__construct();
}

	public function getAll(){
		$array = array();

		$sql = "SELECT * FROM category";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function get($id){
		$array = array();

		$sql =  "SELECT * FROM category WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}
		return $array;
	}


	public function add($name,$status){
		$sql = "INSERT INTO category (name,status) VALUES (:name,:status)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':name', $name);
		$sql->bindValue(':status', $status);
		$sql->execute();
	}

	public function edit($name, $id){
		$sql =  "UPDATE category SET name = :name WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':name', $name);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	public function delete($id){
		$sql = "DELETE FROM category WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}
}