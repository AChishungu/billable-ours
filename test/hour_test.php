<?php
//hours_form_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

	  function testCorrectdata() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

    $this->setField("hours", "1.5");
		$this->setField("rate", "40");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You input 1 hours at a rate of $40 and your pay is $40");
	}
	
 	
	

}
