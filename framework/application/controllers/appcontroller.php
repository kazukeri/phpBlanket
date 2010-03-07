<?php

class AppController extends Controller {



	function on_start() {
		
		$wynik = $this->Section->couchQuery('all2',array("descending"=>"true"));
		$this->set('layout_sections',$wynik);
	}


}
