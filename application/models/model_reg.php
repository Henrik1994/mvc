<?php 
class Model_reg extends Model
{
	public $table = 'users';
	public $primaryKey = 'user_id';
	public $fields = [
		'user_name', 'password'
	];

	public function get_data()
	{	
		// todo
	}
}




?>