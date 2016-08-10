<?php 

class Model
{
	public function get_data()
	{

	}
	
	public $table;
	public $primaryKey;
	public $fields;
	
	protected function connect(){

		$link = mysqli_connect('localhost', 'root', '','test');
		if (!$link) {
		    die('Could not connect: ' . mysql_error());
		}
		return $link;
		
	}

	public function runQuery ($query)
	{
		$result = [];
		$connect = $this->connect();

		$res = mysqli_query($connect, $query);
		
		if($res === true) {
			return ;
		} else if($res === false) {
			var_dump(mysqli_error($connect));
			return;
		}
		while($data = mysqli_fetch_assoc($res))
		{
		  	$result[] = $data;
		}

		return $result;
	}

	// sarqel 4 hat funcia, voronq kogtven runQuery-ic dbi mej popoxutyan hamar
	public function delete($id)
	{
		return $this->runQuery('Delete from `'.$this->table.'` where `'.$this->primaryKey.'` = '.$id);
	}

	/**
	 * 
	 * @param $data array 
	 * @return bool
	 */
	public function insert($data)
	{
		
		$fields = implode($this->fields, ',');

		$query = "INSERT INTO `$this->table` ( $fields) VALUES (";

		foreach ($this->fields as $value) {
			if(isset($data[$value])) {
				$query .= "'".$data[$value]."',";
			} else {
				$query .= "NULL,";
			}
		}

		$query = substr($query, 0, strlen($query) -1);

		$query .= ' )';

		// INSERT INTO `jobs` (job_id, title, description) VALUES ();
		
		return $this->runQuery($query);

		// INSERT INTO `jobs` (`job_id`, `title`, `description`) VALUES (NULL, 'atamnatexnik', 'pahanjvum e', );
	}
	/**
	* @param id int 
	* @param $data array 
	* @return bool
	*
	*/
	public function update($id, $data)
	{
		$query = "UPDATE `$this->table` SET ";
		
		 foreach ($this->fields as $value) {
		 	if(isset($data[$value])){
		 		$query .= $value." = '".$data[$value]."'," ;

		 	}		 	
		}

		$query = substr($query, 0, strlen($query) -1);

		$query .=  " WHERE job_id = $id";

		// UPDATE `jobs` SET `title` = 'test asd', `description` = 'test descriptionasd asd as das' WHERE `jobs`.`job_id` = 8;
	}	
	/**
	 * 
	 * @param $data array 
	 * @return bool
	 */

	public function select($data)
	{

	}

}

?>