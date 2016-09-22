<?php 

class Model_img extends Model
{
	public $table = 'img';
	public $primaryKey = 'img_id';
	public $fields = [
		'img_id', 'img_title', 'img_src'
	];

	public function get_data()
	{	
		// todo
	}
}

?>