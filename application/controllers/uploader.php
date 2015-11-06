<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class uploader extends CI_Controller
{

function __construct(){
    parent::__construct();

    $this->load->model('m_Lyons');
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

      $this->m_Lyons->altaProducto($clave,$descripcion,
      $ucosto,$umedidas,$fecha,$tallas,$minimo,$maximo,$tentrega,$sku1,$sku2);
     redirect('welcome/matProductos');
    }



   public function altaProveedor(){

  }

  public function altaAlmacen(){
    $clave=$this->input->POST('clave');
    $descripcion=$this->input->POST('descripcion');
    $fecha = date('Y-m-d');

    $this->m_Lyons->altaAlmacen($clave,$descripcion,$fecha);
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

    $this->m_Lyons->altaTalla($clave,$corrida,$letra,$t1,$t2,$t3,$t4,$t5,$t6,
      $t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14,$t15,$descripcion);
    redirect('welcome/matTallas');

  }

  public function altaUmedida(){
    $clave=$this->input->POST('clave');
    $descripcion=$this->input->POST('descripcion');
    $factor=$this->input->POST('factor');
    $fecha = date('Y-m-d');

    $this->m_Lyons->altaUmedida($clave,$descripcion,$factor,$fecha);
    redirect('welcome/matUnidadesdeMedida');


  }
//Desactivar
  function desactivaProducto($id)
  {
    $this->m_Lyons->desactivaProducto($id);
    redirect('welcome/matProductos');
  }



}



