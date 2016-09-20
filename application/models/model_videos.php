<?php 

class Model_videos extends Model
{
	public $table = 'videos';
	public $primaryKey = 'v_id';
	public $fields = [
		'v_id','v_title','v_link',
	];

	public function get_data()
	{	
		// todo
	}
}

?>