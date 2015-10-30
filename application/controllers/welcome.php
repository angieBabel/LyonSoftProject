<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()//pagina principal
	{
		$this->load->view('login');
	}
	public function panelPrincipal(){
		$this->load->view('index');

	}
	//Carga de opciones de Materiales
	public function panelMateriales(){
		$this->load->view('panelMateriales');
	}

			public function matProductos(){
						$this->load->view('matProductos');
					}
					//Opciones de productos
							public function matAltaProductos(){
								$this->load->view('matAltaProductos');
							}

							public function matAltaProveedores(){
								$this->load->view('matAltaProveedores');
							}
							public function matAltaAlmacenes(){
								$this->load->view('matAltaAlmacenes');
							}


					public function matProveedores(){
						$this->load->view('matProveedores');
					}
					public function matAlmacenes(){
						$this->load->view('matAlmacenes');

					}
					public function matTallas(){
						$this->load->view('matTallas');

					}

//panel
			//opciones panel
						//funciones de opcion




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
