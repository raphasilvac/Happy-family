<?php


class FamiliesController extends AppController
{
	public $name = "Families";
	public $scaffold;
	
	
	public function index()
	{
		$actorsFolder = IMAGES . "actors";
		
		if (!is_dir($actorsFolder)){
			mkdir($actorsFolder, 775, true);
		}
		
		$actorsImages = new Folder($actorsFolder);
		$this->set("actorsImages", json_encode(end($actorsImages->read(true, true))));
	}
}
