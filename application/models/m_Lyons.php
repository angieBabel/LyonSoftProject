<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Lyons extends CI_Model{
  function __construct(){
    parent::__construct();
  }
//Validar usuario
  /*public function validarUsuario($user,$pass){
        $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $this->db->where('password',$pass);
        $query=$this->db->get('colono');
        return $query->result_array();
  }*/
  public function validarUsuario($cuenta,$clave){
    $this->db->where('email',$cuenta);
    $this->db->where('password',$clave);
    $query=$this->db->get('colono');
    return $query->result_array();
   }
  /*public function validarUsuarioAdmon($user,$pass){
        $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $this->db->where('password',$pass);
        $query=$this->db->get('admon');
        return $query->result_array();
  }*/

//obtención de datos de la base de datos
  public function get_productos(){
     return $this->db->from('articulos')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }
  /*
    public function get_proveedores(){
      return $this->db->from('proveedores')
                  ->get()
                  ->result_array();
    }*/

  public function get_almacen(){
    return $this->db->from('tbalmacen')
                ->where('activo',1)
                ->get()
                ->result_array();
  }

  public function get_tallas(){
    return $this->db->from('tallas')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }

  public function get_umedidas(){
    return $this->db->from('tbmedidas')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }

//Altas
  public function altaProducto(){

  }

  public function altaProveedor(){

  }

  public function altaAlmacen(){

  }

  public function altaTalla(){

  }

  public function altaUmedida(){

  }


//Desactivar campos
  public function desactivaProducto($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('articulos');
  }

  public function desactivaProveedor(){

  }

  public function desactivaAlmacen(){

  }

  public function desactivaTallas(){

  }

  public function desactivaUmedida(){

  }

}
