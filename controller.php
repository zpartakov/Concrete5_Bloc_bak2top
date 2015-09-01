<?php
defined('C5_EXECUTE') or die("Access Denied.");

class Bak2topBlockController extends BlockController {
	//class ChesspgnBlockController extends Concrete5_Controller_Block_Html {
	
	public function getBlockTypeDescription() {
		return t("Scroll to top of the page");
	}
	
	public function getBlockTypeName() {
		return t("bak2top");
	}
	
	
	public function view(){
	
	}
}
