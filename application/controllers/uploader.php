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
//Alta de actividades de talleres, eventos o en ecotecnias
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

  }

  public function altaUmedida(){

  }


}



