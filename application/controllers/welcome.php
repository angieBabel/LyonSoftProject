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
								$data= array(
										'ultimoProducto'=>$this->m_Lyons->getUProducto(),
										'unimedidas'=>$this->m_Lyons->get_umedidas(),
										'tallas'=>$this->m_Lyons->get_tallas(),
									);
								$this->load->view('matAltaProductos',$data);
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
							$data = array(
							'ultimoAlmacen'=>$this->m_Lyons->getUAlmacen(),
							);
							$this->load->view('matAltaAlmacenes',$data);
						}

			public function matTallas(){
				$data = array(
					'tallas'=>$this->m_Lyons->get_tallas()
					);
				$this->load->view('matTallas',$data);
			}
			//opciones tallas
						public function matAltaTallas(){
							$data=array (
								'ultimaTalla'=>$this->m_Lyons->getUTalla(),
							);
							$this->load->view('matAltaTallas',$data);
						}

			public function matUnidadesdeMedida(){
				$data = array(
								'unimedida'=>$this->m_Lyons->get_umedidas(),
							);
				$this->load->view('matUnidadesdeMedida',$data);
			}
			//opciones tallas
						public function matAltaUnidadesdeMedida(){
							$data = array(
							'ultimaUMedida'=>$this->m_Lyons->getUumedidas(),
							);
							$this->load->view('matAltaUnidadesdeMedida',$data);
						}

//panel
			//opciones panel
						//funciones de opcion




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
