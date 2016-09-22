<?php 
class Controller_Main extends Controller
{
<<<<<<< HEAD
	public function action_index()
	{	
=======
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}
	
	public function action_index()
	{	

>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
		$this->view->generate('main_view.php', 'template_view.php');
	}

	public function action_blog()
	{
		echo "blog";
	}

<<<<<<< HEAD
=======
	public function action_select()
	{

		$word = isset($_GET['word']) ? $_GET['word'] : '';
		$word = trim($word);
		$word  = strtolower($word);
		$search = $this->model->runQuery("SELECT * FROM album where album_title LIKE '%$word%' ");


		$this->view->generate('search_view.php','empty_template.php',$search);

	}


>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
	public function action_about()
	{
		
		$this->view->generate('about.php', 'template_view.php');
	}

}


?>