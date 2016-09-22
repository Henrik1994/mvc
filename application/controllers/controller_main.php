<?php 
class Controller_Main extends Controller
{
	public function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}

	public function action_blog()
	{
		echo "blog";
	}

	public function action_about()
	{
		
		$this->view->generate('about.php', 'template_view.php');
	}

}


?>