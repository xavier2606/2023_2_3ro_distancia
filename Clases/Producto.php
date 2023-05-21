<?php

class Producto
{
    //Campos
    private string $nombre;
    private $categorias=array();
    private string $precio;
    private string $venta;
    //Constructor
    public function __construct(string $argNombre,string $argPrecio,string $argVenta)
    {
        $this->setNombre($argNombre);    
        $this->setPrecio($argPrecio);
        $this->setVenta($argVenta); 
        
    }
    //Propiedades - GET
    public function getNombre():string { return $this->nombre; }
    public function getPrecio():string { return $this->precio; }
    public function getVenta():string { return $this->venta; }
    public function getCategorias():array { return $this->categorias; }
    //Propiedades - SET
    //Se puede utilizar para limpiar el dato que viene
    //o también para validar
    public function setNombre(string $argValor):void
    {
        
        if (empty($argValor)) {
            throw new Exception("El nombre del producto no puede quedar vacío.");
        }
        elseif (strlen($argValor)>20) {
            throw new Exception("El nombre del producto no debe tener mas de 20 caracteres.");
        }
        else {
            $this->nombre=strtoupper($argValor);
        }
    }
    public function setPrecio(string $argValor):void
    {
        if ($argValor<=0){
            throw new Exception("El precio del producto debe tener ser mayor a 0");
        }elseif ($argValor>999){
            throw new Exception("El precio del producto debe tener ser menor a 999");
        }else{
            $this->precio=$argValor;
        }
    }
    public function setVenta(string $argValor):void {
        if (strtoupper($argValor)!='SI' && strtoupper($argValor)!='NO' ){
            throw new Exception("El valor de venta al publico debe ser SI o NO");
        }else{
            $this->venta=$argValor;
        }
    }
    public function setCategorias (array $argValor){
        if (count($argValor)==0){
            throw new Exception("Debe elegir al menos una categoria para poder guadar el producto");
        }else{
            $categorias=Categoria::verCategorias();
            foreach ($categorias as $categoria){
                if(in_array($categoria->getNombre(),$argValor)){
                    array_push($this->categorias,$categoria);
                };
            }
        }
        
    }
    //Métodos
    public function insertar()
    {
        echo $this->getNombre() . ' fue insertado satisfactoriamente';
    }

    

}

?>