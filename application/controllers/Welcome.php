<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model("Post");
		// $resultado=$this->Post->getPost();

		$resultado=$this->Post->consulta();
		print_r($resultado);


		//echo "$resultado";
		//print_r($resultado);
	
		// foreach($resultado as $file){
        //     echo ",".$file->descripcion;
        // }


		$this->load->view('welcome_message',$resultado);

	}
}
