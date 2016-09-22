<?php 
class Controller_project extends Controller
{
	public function __construct()
	{
		$this->model = new Model_project();
		$this->view = new View();
	}

	public function action_index()
	{	
		$res = $this->model->runQuery('Select * from project where 1 Order by project_id desc');
		

		$this->view->generate('project_view.php', 'template_view.php', $res);
	}

	

	public function action_store()
	{
		$this->model->insert($_POST);

		header('Location: /project');

		// ['description' => 'asdsadsad', 'title' => 'asdasdasdsa']

	}

	public function action_edit($id)
	{
		$project = $this->model->update("SELECT * FROM `$this->table` where project_id = $id");
		// stanal job@ databazaic

		// formi mej texadrel jobi tvyalner@ job_id-n het@

		// formi action@ klini /jobs/update/$id

		$this->view->generate('project_view.php', 'template_view.php', $project);

	}

	public function action_delete($id)
	{
		$this->model->delete($id);
	}

}


?>