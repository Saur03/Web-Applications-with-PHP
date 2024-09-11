<?php

class Movie {
	public $id;
	public $title;
	public $productionCompany;
	public $yearReleased;
	public $director;
	
	public function __construct ($id, $title, $productionCompany, $yearReleased, $director ){
		$this->id = $id;
		$this->title = $title;
		$this->productionCompany = $productionCompany;
		$this->yearReleased = $yearReleased;
		$this->director = $director;
	}
	
	public function create($dbc) {
		$query = "INSERT into `movies` values " . 
		"('0', '$this->title', '$this->productionCompany', " . 
		"'$this->yearReleased', '$this->director')";
		$result = $dbc->sqlQuery($query);
		return $result;
	}
	
	public static function all($dbc) {
		$query = "SELECT * from `movies`";
		$results = $dbc->fetchArray($query);
		return $results;
	}
}

?>
