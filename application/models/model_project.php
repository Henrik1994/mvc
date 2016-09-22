
<?php 

class Model_Project extends Model
{
	public $table = 'project';
	public $primaryKey = 'project_id';
	public $fields = [
		'project_id', 'project_title', 'project_desc'
	];

	public function get_data()
	{	
		// todo
	}
}

?>