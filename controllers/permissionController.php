<?php 
class permissionController extends controller{



public function index(){
	$data = array();
		$u = new Users();
	$u->setLoggedUser();
	$company = new Companies($u->getCompany());

	$data['company_name'] = $company->getName();
	$data['user_name'] = $u->getName();

	if($u->hasPermission('permissions_view')){
		$permissions =  new Permissions();
		$data['permissions_list'] = $permissions->getList($u->getCompany());
		$data['permissions_groups_list'] = $permissions->getGroupList($u->getCompany());
		$this->loadTemplate('permissions', $data);
	} else {
		header("Location: ".BASE_URL);
	}
}


public function add(){
	$data = array();
	$u = new Users();
	$u->setLoggedUser();
	$company = new Companies($u->getCompany());

	$data['company_name'] = $company->getName();
	$data['user_name'] = $u->getName();

	if($u->hasPermission('permissions_view')){
		$permissions =  new Permissions();

		if(isset($_POST['name']) && !empty($_POST['name'])){
			$pname = addslashes($_POST['name']);
			$permissions->add($pname, $u->getCompany());
			header("Location: ".BASE_URL."permission");
		}

		$this->loadTemplate('permission_add', $data);
	} else {
		header("Location: ".BASE_URL);
	}
}



public function add_group(){
	$data = array();
	$u = new Users();
	$u->setLoggedUser();
	$company = new Companies($u->getCompany());

	$data['company_name'] = $company->getName();
	$data['user_name'] = $u->getName();

	if($u->hasPermission('permissions_view')){
		$permissions =  new Permissions();

		if(isset($_POST['name']) && !empty($_POST['name'])){
			$pname = addslashes($_POST['name']);
			$permissions->add($pname, $u->getCompany());
			header("Location: ".BASE_URL."permission");
		}

		
		$data['permissions_list'] = $permissions->getList($u->getCompany());

		$this->loadTemplate('permission_addgroup', $data);
	} else {
		header("Location: ".BASE_URL);
	}
}



public function delete($id){
	$data = array();
	$u = new Users();
	$u->setLoggedUser();
	$company = new Companies($u->getCompany());
	$data['company_name'] = $company->getName();
	$data['user_name'] = $u->getName();

	if($u->hasPermission('permissions_view')){
		$permissions =  new Permissions();
		$permissions->delete($id);
		header("Location: ".BASE_URL."permission");
	} else {
		header("Location: ".BASE_URL);
	}
}

}