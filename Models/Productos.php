<?php

namespace models;


class Productos {

    public function __construct(
        private int $id,
        private int $categoria_id,
        private string $nombre,
        private string $descripcion,
        private float $precio,
        private int $stock,
        private float $oferta,
        private string $fecha,
        private string $imagen,


    ){
    }
    

public function getId(){
    return $this->id;
}
public function setId($id){
    $this->id = $id;
    return $this;
}
public function getCategoria_id(){
    return $this->categoria_id;
}
public function setCategoria_id($categoria_id){
    $this->categoria_id = $categoria_id;
    return $this;
}
public function getNombre(){
    return $this->nombre;
}
public function setNombre($nombre){
    $this->nombre = $nombre;
    return $this;
}
public function getDescripcion(){
    return $this->descripcion;
}
public function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
    return $this;
}
public function getPrecio(){
    return $this->precio;
}
public function setPrecio($precio){
    $this->precio = $precio;
    return $this;
}
public function getStock(){
    return $this->stock;
}
public function setStock($stock){
    $this->stock = $stock;
    return $this;
}
public function getOferta(){
    return $this->oferta;
}
public function setOferta($oferta){
    $this->oferta = $oferta;
    return $this;
}
public function getFecha(){
    return $this->fecha;
}
public function setFecha($fecha){
    $this->fecha = $fecha;
    return $this;
}
public function getImagen(){
    return $this->imagen;
}
public function setImagen($imagen){
    $this->imagen = $imagen;
    return $this;
}

public static function fromArray(array $data): Productos{
    return new Productos(
        $data['id'],
        $data['categoria_id'],
        $data['nombre'],
        $data['descripcion'],
        $data['precio'],
        $data['stock'],
        $data['oferta'],
        $data['fecha'],
        $data['imagen']
    );
}


}