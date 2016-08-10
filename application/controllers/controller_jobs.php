<?php 
class Controller_Jobs extends Controller
{
	public function __construct()
	{
		$this->model = new Model_jobs();
		$this->view = new View();
	}

	public function action_index()
	{	
		$res = $this->model->runQuery('Select * from jobs where 1 Order by job_id desc');
		

		$this->view->generate('jobs_view.php', 'template_view.php', $res);
	}

	

	public function action_store()
	{
		$this->model->insert($_POST);

		header('Location: /jobs');

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
}


?>