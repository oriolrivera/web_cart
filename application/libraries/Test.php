<?php 
if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Test
{
	/**
	 * @var object Instancia CodeIgniter
	 */
	private $CI;

	public function __construct()
	{
		$this->CI		=& get_instance();

	}

	public function saludo()
	{
		return "saludo desde mi librería";	
	}
}