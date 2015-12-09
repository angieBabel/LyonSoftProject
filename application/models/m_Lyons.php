<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_lyons extends CI_Model{
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
  public function getuproducto()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('articulos');
    return $query->result_array();
   }

  public function get_productos(){
     return $this->db->select('articulos.clave as arclave, articulos.descripcion as ardescripcion,
      tbmedidas.descripcion as medescripcion,articulos.costo as arcosto,articulos.maximo as armaximo,
      articulos.minimo as arminimo,articulos.clavecor as arclavecor,articulos.tentrega as artentrega')
                ->from('articulos')
                ->join('tbmedidas','articulos.idmedida=tbmedidas.clave','left')
                ->where('articulos.estatus',1)
                ->get()
                ->result_array();
  }

  public function get_producto($id){
    return $this->db->from('articulos')
                ->where('clave',$id)
                ->get()
                ->result_array();
  }
  /*
  public function getUProveedor()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('articulos');
    return $query->result_array();
   }
    public function get_proveedores(){
      return $this->db->from('proveedores')
                  ->get()
                  ->result_array();
    }*/
  public function getualmacen()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('tbalmacen');
    return $query->result_array();
   }

  public function get_almacen(){
    return $this->db->from('tbalmacen')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }
  public function get_almacenn($id){
    return $this->db->from('tbalmacen')
                ->where('clave',$id)
                ->get()
                ->result_array();
  }

  public function getutalla()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('tallas');
    return $query->result_array();
   }

  public function get_tallas(){
    return $this->db->from('tallas')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }
  public function get_talla($id){
    return $this->db->from('tallas')
                ->where('clave',$id)
                ->get()
                ->result_array();
  }
  public function getuumedidas()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('tbmedidas');
    return $query->result_array();
   }

  public function get_umedidas(){
    return $this->db->from('tbmedidas')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }
  public function get_umedida($id){
    return $this->db->from('tbmedidas')
                ->where('clave',$id)
                ->get()
                ->result_array();
  }

//Altas
  public function altaproducto($clave,$descripcion,$ucosto,$umedidas,$fecha,
    $tallas,$minimo,$maximo,$tentrega,$sku1,$sku2){
    $prueba='prueba';
    $estatus='1';
    $this->db->set('clave',$clave)
            ->set('descripcion',$descripcion)
            ->set('costo',$ucosto)
            ->set('idmedida',$umedidas)
            ->set('clavecor',$tallas)
            ->set('fecha',$fecha)
            ->set('unicode',$prueba)//unicode pendiente
            ->set('minimo',$minimo)
            ->set('maximo',$maximo)
            ->set('sku1',$sku1)
            ->set('sku2',$sku2)
            ->set('usuario',$prueba)//pendiente
            ->set('tentrega',$tentrega)
            ->set('estatus',$estatus)
            ->insert('articulos');
  }

  public function altaproveedor(){

  }

  public function altaalmacen($clave,$descripcion,$fecha){
    $estatus='1';
    $this->db->set('clave',$clave)
            ->set('descripcion',$descripcion)
            ->set('fecha',$fecha)
            ->set('estatus',$estatus)
            ->insert('tbalmacen');
  }

  public function altatalla($clave,$corrida,$letra,$t1,$t2,$t3,$t4,$t5,$t6,
      $t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14,$t15,$descripcion){
    $estatus='1';
      $this->db->set('clave',$clave)
            ->set('corrida',$corrida)
            ->set('letra',$letra)
            ->set('cor1',$t1)
            ->set('cor2',$t2)
            ->set('cor3',$t3)
            ->set('cor4',$t4)
            ->set('cor5',$t5)
            ->set('cor6',$t6)
            ->set('cor7',$t7)
            ->set('cor8',$t8)
            ->set('cor9',$t9)
            ->set('cor10',$t10)
            ->set('cor11',$t11)
            ->set('cor12',$t12)
            ->set('cor13',$t13)
            ->set('cor14',$t14)
            ->set('cor15',$t15)
            ->set('descripcion',$descripcion)
            ->set('estatus',$estatus)
            ->insert('tallas');

  }

  public function altaUmedida($clave,$descripcion,$factor){
    $estatus='1';
    $this->db->set('clave',$clave)
            ->set('descripcion',$descripcion)
            ->set('factor_tbmedida',$factor)
            ->set('estatus',$estatus)
            ->insert('tbmedidas');
  }


//Desactivar campos
  public function desactivaproducto($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('articulos');
  }

  public function desactivaproveedor(){

  }

  public function desactivaalmacen($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('tbalmacen');

  }

  public function desactivatalla($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('tallas');

  }

  public function desactivaumedida($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('tbmedidas');

  }

//Actualizar
  public function actualizaproducto($clave,$descripcion,$ucosto,$umedidas,$fecha,
    $tallas,$minimo,$maximo,$tentrega,$sku1,$sku2){
     $prueba="prueba";
    $estatus='1';
    $this->db>set('descripcion',$descripcion)
            ->set('costo',$ucosto)
            ->set('idmedida',$umedidas)
            ->set('clavecor',$tallas)
            ->set('fecha',$fecha)
            ->set('unicode',$prueba)//unicode pendiente
            ->set('minimo',$minimo)
            ->set('maximo',$maximo)
            ->set('sku1',$sku1)
            ->set('sku2',$sku2)
            ->set('usuario',$prueba)//pendiente
            ->set('tentrega',$tentrega)
            ->set('estatus',$estatus)
            ->where('clave',$clave)
            ->update('articulos');
  }

  public function actualizaalmacen($clave,$descripcion,$fecha){
    $estatus='1';
    $this->db->set('descripcion',$descripcion)
            ->set('fecha',$fecha)
            ->set('estatus',$estatus)
            ->where('clave',$clave)
            ->update('tbalmacen');
  }

  public function actualizatalla($clave,$corrida,$letra,$t1,$t2,$t3,$t4,$t5,$t6,
      $t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14,$t15,$descripcion){
    $estatus='1';
      $this->db->set('corrida',$corrida)
            ->set('letra',$letra)
            ->set('cor1',$t1)
            ->set('cor2',$t2)
            ->set('cor3',$t3)
            ->set('cor4',$t4)
            ->set('cor5',$t5)
            ->set('cor6',$t6)
            ->set('cor7',$t7)
            ->set('cor8',$t8)
            ->set('cor9',$t9)
            ->set('cor10',$t10)
            ->set('cor11',$t11)
            ->set('cor12',$t12)
            ->set('cor13',$t13)
            ->set('cor14',$t14)
            ->set('cor15',$t15)
            ->set('descripcion',$descripcion)
            ->set('estatus',$estatus)
            ->where('clave',$clave)
            ->update('tallas');
  }

  public function actualizaumedida($clave,$descripcion,$factor){
    $estatus='1';
    $this->db->set('descripcion',$descripcion)
            ->set('factor_tbmedida',$factor)
            ->set('estatus',$estatus)
            ->where('clave',$clave)
            ->update('tbmedidas');
  }



}
