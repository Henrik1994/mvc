<?php 

class Model_Main extends Model
{
	public $table = 'search';
	public $primaryKey = 's_id';
	public $fields = [
		's_id', 's_title', 's_img'
	];

	public function get_data()
	{	
		// todo
	}
}

?>