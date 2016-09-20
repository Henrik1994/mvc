<?php 
class Controller_dashboard extends Controller
{
	function __construct()
	{
		
		$this->view = new View();
	}
	
	public function action_index()
	{	

		$this->view->generate('dashboard_view.php', 'template_view.php');
	}

	public function action_album_dash()
	{
		$this->view->generate('album_dash_view.php', 'template_view.php');
	}

	public function action_events()
	{

			$this->view->generate('events_view.php', 'template_view.php');


	}


	public function action_about()
	{
		
			$this->view->generate('news_view.php', 'template_view.php');

	}

}


?>