
<?php 

class Model_Jobs extends Model
{
	public $table = 'jobs';
	public $primaryKey = 'job_id';
	public $fields = [
		'job_id', 'title', 'description'
	];

	public function get_data()
	{	
		// todo
	}
}

?>