<?php
/* Family Test cases generated on: 2010-08-28 15:08:12 : 1283021112*/
App::import('Model', 'Family');

class FamilyTestCase extends CakeTestCase {
	var $fixtures = array('app.family');

	function startTest() {
		$this->Family =& ClassRegistry::init('Family');
	}

	function endTest() {
		unset($this->Family);
		ClassRegistry::flush();
	}

}
?>