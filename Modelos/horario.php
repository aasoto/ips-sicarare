<?php

class Horario
{

    private $pdo;
    //atributos
    private $hor_id;
	private $hor_area;
	private $hor_horaini;
	private $hor_horafin;

    //constructor de la clase
	function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getHor_id() : ?int{
        return $this->hor_id;
    }

    public function setHor_id(int $id){
        $this->hor_id=$id;
    }

    public function getHor_area() : ?string{
        return $this->hor_area;
    }

    public function setHor_area(string $area){
        $this->hor_area=$area;
    }

    public function getHor_horaini() : ?string{
        return $this->hor_horaini;
    }

    public function setHor_horaini(string $horaini){
        $this->hor_horaini=$horaini;
    }

    public function getHor_horafin() : ?string{
        return $this->hor_horafin;
    }

    public function setHor_horafin(string $horafin){
        $this->hor_horafin=$horafin;
    }
    
    public function Listar(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM horarios;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function ListarAreas(){
        try{
            $consultapa = $this->pdo->prepare("SELECT * FROM areas;");
            $consultapa->execute();
            return $consultapa->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function Obtener($id){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM horarios WHERE id=?;");
            $consulta->execute(array($id));
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            $h = new Horario();
            $h->setHor_id($r->id);
            $h->setHor_area($r->area_nom);
            $h->setHor_horaini($r->hora_ini);
            $h->setHor_horafin($r->hora_fi);

            return $h;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Horario $h){
        try{
            $consulta="INSERT INTO horarios(area_nom, hora_ini, hora_fi) VALUES (?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $h->getHor_area(),
                        $h->getHor_horaini(),
                        $h->getHor_horafin()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Horario $h){
        try{
            $consulta="UPDATE horarios SET 
                area_nom=?,
                hora_ini=?, 
                hora_fi=?
                WHERE id=?;";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $h->getHor_area(),
                        $h->getHor_horaini(),
                        $h->getHor_horafin(),
                        $h->getHor_id()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}

?>