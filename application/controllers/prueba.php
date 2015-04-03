<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout("template");
	}

	public function index($lang = false)
	{

		if ($lang  && $lang == "en") {
			$this->lang->load("home", "english");
		}

		if (!$lang or $lang == "es") {
			$this->lang->load("home", "spanish");
		}

		/*$this->lang->load("home", "spanish");*/
		$this->layout->setTitle("Otro título que queremos cargar para este método");
		$this->layout->view('index');
	}

}
