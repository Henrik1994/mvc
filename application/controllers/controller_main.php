<?php 
class Controller_Main extends Controller
{
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}
	
	public function action_index()
	{	

		$this->view->generate('main_view.php', 'template_view.php');
	}

	public function action_blog()
	{
		echo "blog";
	}

	public function action_select()
	{

		$word = isset($_GET['word']) ? $_GET['word'] : '';
		$word = trim($word);
		$word  = strtolower($word);
		$search = $this->model->runQuery("SELECT * FROM album where album_title LIKE '%$word%' ");


		$this->view->generate('search_view.php','empty_template.php',$search);

	}


	public function action_about()
	{
		
		$this->view->generate('about.php', 'template_view.php');
	}

}


?>