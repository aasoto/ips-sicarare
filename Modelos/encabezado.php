<?php

class Encabezado
{

    private $pdo;
    //atributos
    private $en_nom1;
	private $en_apellido1;
    private $en_rol;
    private $en_area;

    //constructor de la clase
	function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getEn_nom1() : ?string{
        return $this->en_nom1;
    }

    public function setEn_nom1(string $nom1){
        $this->en_nom1=$nom1;
    }

    public function getEn_apellido1() : ?string{
        return $this->en_apellido1;
    }

    public function setEn_apellido1(string $apellido1){
        $this->en_apellido1=$apellido1;
    }

    public function getEn_rol() : ?string{
        return $this->en_rol;
    }

    public function setEn_rol(string $rol){
        $this->en_rol=$rol;
    }

    public function getEn_area() : ?string{
        return $this->en_area;
    }

    public function setEn_area(string $area){
        $this->en_area=$area;
    }

    public function Obtener($usuario){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM usuarios WHERE user=?;");
            $consulta->execute(array($usuario));
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            if ($r == null){
                $consulta2 = $this->pdo->prepare("SELECT * FROM medicos WHERE user=?;");
                $consulta2->execute(array($usuario));
                $r = $consulta2->fetch(PDO::FETCH_OBJ);
                $e = new Encabezado();
                $e->setEn_nom1($r->nom1);
                $e->setEn_apellido1($r->apellido1);
                $e->setEn_area($r->area);
            }else{
                $e = new Encabezado();
                $e->setEn_nom1($r->nom1);
                $e->setEn_apellido1($r->apellido1);
                $e->setEn_rol($r->rol);
            }
            
            return $e;

        }catch(Exception $er){
            die($er->getMessage());
        }
    }

}

?>