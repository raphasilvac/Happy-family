<?php
/* Families Test cases generated on: 2010-08-28 15:08:24 : 1283021124*/
App::import('Controller', 'Families');

class TestFamiliesController extends FamiliesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FamiliesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.family');

	function startTest() {
		$this->Families =& new TestFamiliesController();
		$this->Families->constructClasses();
	}

	function endTest() {
		unset($this->Families);
		ClassRegistry::flush();
	}

}
?>