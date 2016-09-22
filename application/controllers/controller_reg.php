<?php 
class Controller_reg extends Controller
{
	public function __construct()
	{
		$this->model = new Model_reg();
		$this->view = new View();
	}

	public function action_index()
	{
		$this->view->generate('reg_view.php', 'template_view.php');
	}

	

	public function action_store()
	{	
		$_POST['password'] = md5($_POST['password']);

		var_dump($_POST); 
		$this->model->insert($_POST);

		//$_SESSION["user_name"] = $_POST["user_name"];

		header('Location: /');

		// ['description' => 'asdsadsad', 'title' => 'asdasdasdsa']

	}


	public function action_login()
	{

		var_dump("SELECT * from users where login = '".$_POST['login']."' and password = '".md5($_POST['password']) ."'"); 
		$res = $this->model->runQuery("SELECT * from users where login = '".$_POST['login']."' and password = '".md5($_POST['password']) ."'");
<<<<<<< HEAD
		var_dump($res);
		if(count($res) > 0){
			$_SESSION["user_name"] = $_POST['login'];	
=======

		if(count($res) > 0){
			$_SESSION["user_name"] = $_POST['login'];	

			$_SESSION['user_permission'] = $res[0]["permission"];
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
		} else {
			$_SESSION["user_name"] = '';
		}

<<<<<<< HEAD
=======
		

>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
		header('Location: /');

		// ['description' => 'asdsadsad', 'title' => 'asdasdasdsa']

	}

	public function action_edit($id)
	{
		$job = $this->model->update("SELECT * FROM `$this->table` where job_id = $id");
		// stanal job@ databazaic

		// formi mej texadrel jobi tvyalner@ job_id-n het@

		// formi action@ klini /jobs/update/$id

		$this->view->generate('job_view.php', 'template_view.php', $job);

	}

	public function action_delete($id)
	{
		$this->model->delete($id);
	}

	public function action_update($id)
	{
		$this->model->update($id, $_POST);
	}	

	public function action_logout(){
		
		unset($_SESSION['user_name']);
<<<<<<< HEAD
=======
		unset($_SESSION['user_permission']);
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
		header('Location: /');
	}
}



?>