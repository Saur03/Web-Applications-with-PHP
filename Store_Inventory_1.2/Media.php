<?php
/**
* Media Class
**/

class Media {
	protected $id;
	protected $title;
	protected $productionCompany;
	protected $yearReleased;


// Created all getters and Setters methods
	public function setId($id) {
		$this->id= $id;
	}
	
	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function setProductionCompany($productionCompany) {
		$this->productionCompany = $productionCompany;
	}
	
	public function setYearReleased($yearReleased) {
		$this->yearReleased = $yearReleased;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getProductionCompany(){
		return $this->productionCompany;
	}
	
	public function getYearReleased() {
		return $this->yearReleased;
	}
}

?>
