<?php 
class Controller_album extends Controller
{
	public function __construct()
	{
		$this->model = new Model_album();
		$this->view = new View();
	}

	public function action_index()
	{	
		$res = $this->model->runQuery('Select * from project where 1 Order by project_id desc');
		

		$this->view->generate('album_view.php', 'template_view.php', $res);
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

		$this->view->generate('album_view.php', 'template_view.php', $project);

	}

	public function action_delete($id)
	{
		$this->model->delete($id);
	}

	public function action_single($id)
	{

		$album = $this->model->runQuery("SELECT * FROM album Where album_id = $id");



		$this->view->generate("album_view.php", "template_view.php", $album[0] );



	}
	public function action_videos($id)
	{
		$videos  = $this->model->runQuery("SELECT * FROM videos WHERE album_id  = $id");

		$this->view->generate("videos_view.php", "empty_template.php", $videos);
	}

	public function action_img($id)
	{
		$img  = $this->model->runQuery("SELECT * FROM img WHERE album_id = $id");

		$this->view->generate("img_view.php", "empty_template.php", $img);
	}

}


?>