<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('m_Lyons');

	}

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
						$data = array(
								'productos'=>$this->m_Lyons->get_productos(),
							);
						$this->load->view('matProductos',$data);
					}
					//Opciones de productos
							public function matAltaProductos(){
								$this->load->view('matAltaProductos');
							}


			public function matProveedores(){
				$this->load->view('matProveedores');
			}
					//opciones proveedores
						public function matAltaProveedores(){
								$this->load->view('matAltaProveedores');
							}

			public function matAlmacenes(){
				$data = array(
					'almacen'=>$this->m_Lyons->get_almacen()
					);
				$this->load->view('matAlmacenes',$data);

			}
			//opciones almacenes
						public function matAltaAlmacenes(){
							$this->load->view('matAltaAlmacenes');
						}

			public function matTallas(){
				$this->load->view('matTallas');
			}
			//opciones tallas
						public function matAltaTallas(){
							$this->load->view('matAltaTallas');
						}

			public function matUnidadesdeMedida(){
				$data = array(
								'unimedida'=>$this->m_Lyons->get_umedidas(),
							);
				$this->load->view('matUnidadesdeMedida',$data);
			}
			//opciones tallas
						public function matAltaUnidadesdeMedida(){
							$this->load->view('matAltaUnidadesdeMedida');
						}

//panel
			//opciones panel
						//funciones de opcion




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
