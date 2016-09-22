
<?php 

class Model_album extends Model
{
	public $table = 'album';
	public $primaryKey = 'album_id';
	public $fields = [
		'album_id',  'album_title'
	];

	public function get_data()
	{	
		// todo
	}
}

?>