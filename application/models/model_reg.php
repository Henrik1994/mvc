<?php 
class Model_reg extends Model
{
	public $table = 'users';
	public $primaryKey = 'id';
	public $fields = [
		'name','surname','email','login','password'
	];

	public function get_data()
	{	
		// todo
	}
}




?>