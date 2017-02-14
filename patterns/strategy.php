<?php
interface Buy
{
  function filter( $record );
}
 
class SelectBuy implements Buy
{
  private $_name;
 
  public function __construct( $name )
  {
    $this->_name = $name;
  }
 
  public function filter( $record )
  {
    return strcmp( $this->_name, $record ) <= 0;
  }
}
 
class RandomBuy implements Buy
{
  public function filter( $record )
  {
    return rand( 0, 1 ) <= 0.5;
  }
}
 
class CarList
{
  private $_list = array();
 
  public function __construct( $names )
  {
    if ( $names != null )
    {
      foreach( $names as $name )
      {
        $this->_list []= $name;
      }
    }
  }
 
  public function add( $name )
  {
    $this->_list []= $name;
  }
 
  public function find( $filter )
  {
    $recs = array();
    foreach( $this->_list as $car )
    {
      if ( $filter->filter( $car ) )
        $recs []= $car;
    }
    return $recs;
  }
}
 
$cars = new CarList( array( "Bentley", "Chrysler", "Mercedes", "Vox" ) );
$f1 = $cars->find( new SelectBuy( "K" ) );
print_r( $f1 );
 
$f2 = $cars->find( new RandomBuy() );
print_r( $f2 );
?>