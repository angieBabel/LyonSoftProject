<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class uploader extends CI_Controller
{

function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('m_lyons');
  }
//inicio de sesion
 /* public function sesion(){
      $user=$this->input->POST('nombre');
      $pass=$this->input->POST('contrasenia');
      $usuario=$this->m_eColonia->validarUsuario($user,$pass);
      /*$admon=$this->m_eColonia->validarUsuarioAdmon($user,$pass);*/

     /* if (!empty($usuario))
      {
        $datos=array('email'=>$usuario[0]['email'],
                      'nombre'=>$usuario[0]['nombre'],
                      'pass'=>$usuario[0]['password']);
        $this->session->set_userdata($datos);
        redirect('welcome/ambiental');
      }else
      {$this->load->view('login');
      }
  }*/

/*public function cierraSesion(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nombre');
        $this->session->unset_userdata('pass');
        $this->session->sess_destroy();
        $this->load->view('login');
}*/
//Altas
  public function altaProducto(){
    $this->form_validation->set_message('is_unique', 'El campo %s ya esta registrado');
    $this->form_validation->set_message('required','El campo %s es requerido');
    $this->form_validation->set_rules('descripcion', 'Descrpipcion', 'required|is_unique[articulos.descripcion]');

    //$this->form_validation->set_rules('correo','Correo','required|valid_email');
      if ($this->form_validation->run() == FALSE)
      {
         //Acción a tomar si existe un error el en la validación
        redirect('welcome/matAltaProductos');
      }
      else
      {
         //Acción a tomas si no existe ningun error
            $clave=$this->input->POST('clave');
            $descripcion=$this->input->POST('descripcion');
            $ucosto=$this->input->POST('ucosto');
            $umedidas=$this->input->POST('umedidas');
            $tallas=$this->input->POST('tallas');
            $fecha = date('Y-m-d');
            $minimo=$this->input->POST('minimo');
            $maximo=$this->input->POST('maximo');
            $tentrega=$this->input->POST('tentrega');
            $sku1=$this->input->POST('sku1');
            $sku2=$this->input->POST('sku2');

            $this->m_lyons->altaproducto($clave,$descripcion,
            $ucosto,$umedidas,$fecha,$tallas,$minimo,$maximo,$tentrega,$sku1,$sku2);
            redirect('welcome/matProductos');
      }


    }


   public function altaProveedor(){

  }

  public function altaAlmacen(){
    $clave=$this->input->POST('clave');
    $descripcion=$this->input->POST('descripcion');
    $fecha = date('Y-m-d');

    $this->m_lyons->altaalmacen($clave,$descripcion,$fecha);
    redirect('welcome/matAlmacenes');
  }

  public function altaTalla(){
    $clave=$this->input->POST('clave');
    $corrida=$this->input->POST('corrida');
    $letra=$this->input->POST('letra');
    $descripcion=$this->input->POST('descripcion');
    $t1=$this->input->POST('t-1');
    $t2=$this->input->POST('t-2');
    $t3=$this->input->POST('t-3');
    $t4=$this->input->POST('t-4');
    $t5=$this->input->POST('t-5');
    $t6=$this->input->POST('t-6');
    $t7=$this->input->POST('t-7');
    $t8=$this->input->POST('t-8');
    $t9=$this->input->POST('t-9');
    $t10=$this->input->POST('t-10');
    $t11=$this->input->POST('t-11');
    $t12=$this->input->POST('t-12');
    $t13=$this->input->POST('t-13');
    $t14=$this->input->POST('t-14');
    $t15=$this->input->POST('t-15');

    $this->m_lyons->altatalla($clave,$corrida,$letra,$t1,$t2,$t3,$t4,$t5,$t6,
      $t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14,$t15,$descripcion);
    redirect('welcome/matTallas');

  }

  public function altaUmedida(){
    $clave=$this->input->POST('clave');
    $descripcion=$this->input->POST('descripcion');
    $factor=$this->input->POST('factor');
    $fecha = date('Y-m-d');

    $this->m_lyons->altaumedida($clave,$descripcion,$factor,$fecha);
    redirect('welcome/matUnidadesdeMedida');
  }

//Desactivar
  public function desactivaProducto($id)
  {
    $id = $_GET['id'];
    $this->m_lyons->desactivaproducto($id);
    redirect('welcome/matProductos');
  }

  public function desactivaProveedor($id)
  {
    $id = $_GET['id'];
    $this->m_lyons->desactivaproveedor($id);
    redirect('welcome/matProveedores');
  }

  public function desactivaAlmacen($id)
  {
    $id = $_GET['id'];
    $this->m_lyons->desactivaalmacen($id);
    redirect('welcome/matAlmacenes');
  }

  public function desactivaTalla($id)
  {
    $id = $_GET['id'];
    $this->m_lyons->desactivatalla($id);
    redirect('welcome/matTallas');
  }

  public function desactivaUmedida($id)
  {
    $id = $_GET['id'];
    $this->m_lyons->desactivaumedida($id);
    redirect('welcome/matUnidadesdeMedida');
  }

//Editar
  public function editaProducto(){
    $id = $_GET['id'];
    $datos_producto=$this->m_lyons->get_producto($id);
    $datos['producto']=$datos_producto[0];
    $datos['unimedidas']=$this->m_lyons->get_umedidas();
    $datos['tallas']=$this->m_lyons->get_tallas();
    $this->load->view('matEditaProducto',$datos);
  }

  public function actualizaProducto(){
      $clave=$this->input->POST('id');
      $descripcion=$this->input->POST('descripcion');
      $ucosto=$this->input->POST('ucosto');
      $umedidas=$this->input->POST('umedidas');
      $tallas=$this->input->POST('tallas');
      $fecha = date('Y-m-d');
      $minimo=$this->input->POST('minimo');
      $maximo=$this->input->POST('maximo');
      $tentrega=$this->input->POST('tentrega');
      $sku1=$this->input->POST('sku1');
      $sku2=$this->input->POST('sku2');

      $this->m_lyons->actualizaproducto($clave,$descripcion,
      $ucosto,$umedidas,$fecha,$tallas,$minimo,$maximo,$tentrega,$sku1,$sku2);
     redirect('welcome/matProductos');
  }


  public function editaProveedor(){
    $id = $_GET['id'];
    $datos_evento=$this->m_lyons->get_proveedor($id);
    $datos['proveedor']=$datos_evento[0];
    $this->load->view('matEditaProveedor',$datos);
  }

  public function editaAlmacen(){
    $id = $_GET['id'];
    $datos_almacen=$this->m_lyons->get_almacenn($id);
    $datos['almacen']=$datos_almacen[0];

    $this->load->view('matEditaAlmacen',$datos);
  }

  public function actualizaAlmacen(){
    $clave=$this->input->POST('id');
    $descripcion=$this->input->POST('descripcion');
    $fecha = date('Y-m-d');
    $this->m_lyons->actualizaalmacen($clave,$descripcion,$fecha);
    redirect('welcome/matAlmacenes');
  }

  public function editaTalla(){
    $id = $_GET['id'];
    $datos_talla=$this->m_lyons->get_talla($id);
    $datos['talla']=$datos_talla[0];

    $this->load->view('matEditaTalla',$datos);
  }
  public function actualizaTalla(){
    $clave=$this->input->POST('id');
    $corrida=$this->input->POST('corrida');
    $letra=$this->input->POST('letra');
    $descripcion=$this->input->POST('descripcion');
    $t1=$this->input->POST('t-1');
    $t2=$this->input->POST('t-2');
    $t3=$this->input->POST('t-3');
    $t4=$this->input->POST('t-4');
    $t5=$this->input->POST('t-5');
    $t6=$this->input->POST('t-6');
    $t7=$this->input->POST('t-7');
    $t8=$this->input->POST('t-8');
    $t9=$this->input->POST('t-9');
    $t10=$this->input->POST('t-10');
    $t11=$this->input->POST('t-11');
    $t12=$this->input->POST('t-12');
    $t13=$this->input->POST('t-13');
    $t14=$this->input->POST('t-14');
    $t15=$this->input->POST('t-15');

    $this->m_lyons->actualizatalla($clave,$corrida,$letra,$t1,$t2,$t3,$t4,$t5,$t6,
      $t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14,$t15,$descripcion);
    redirect('welcome/matTallas');

  }

  public function editaUmedida(){
    $id = $_GET['id'];
    $datos_umedida=$this->m_lyons->get_umedida($id);
    $datos['umedida']=$datos_umedida[0];

    $this->load->view('matEditaUmedida',$datos);
  }
  public function actualizaUmedida(){
    $clave=$this->input->POST('id');
    $descripcion=$this->input->POST('descripcion');
    $factor=$this->input->POST('factor');
    $fecha = date('Y-m-d');

    $this->m_lyons->actualizaumedida($clave,$descripcion,$factor,$fecha);
    redirect('welcome/matUnidadesdeMedida');
  }

}
