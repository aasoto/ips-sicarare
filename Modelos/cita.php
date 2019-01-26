<?php

class Cita
{

    private $pdo;
    //atributos
    private $cit_id;
    private $cit_paciente;
	private $cit_area;
	private $cit_fecha;
	private $cit_hora;
    private $cit_estado;
    private $cit_estado_pago;
	private $cit_costo;
    private $cit_usermedico;
    private $cit_medico;

    //constructor de la clase
	function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getCit_id() : ?int{
        return $this->cit_id;
    }

    public function setCit_id(int $id){
        $this->cit_id=$id;
    }

    public function getCit_paciente() : ?string{
        return $this->cit_paciente;
    }

    public function setCit_paciente(string $paciente){
        $this->cit_paciente=$paciente;
    }

    public function getCit_area() : ?string{
        return $this->cit_area;
    }

    public function setCit_area(string $area){
        $this->cit_area=$area;
    }

    public function getCit_fecha() : ?string{
        return $this->cit_fecha;
    }

    public function setCit_fecha(string $fecha){
        $this->cit_fecha=$fecha;
    }
    public function getCit_hora() : ?string{
        return $this->cit_hora;
    }

    public function setCit_hora(string $hora){
        $this->cit_hora=$hora;
    }
    public function getCit_estado() : ?string{
        return $this->cit_estado;
    }

    public function setCit_estado(string $estado){
        $this->cit_estado=$estado;
    }
    public function getCit_estado_pago() : ?string{
        return $this->cit_estado_pago;
    }

    public function setCit_estado_pago(string $estado_pago){
        $this->cit_estado_pago=$estado_pago;
    }
    public function getCit_costo() : ?string{
        return $this->cit_costo;
    }

    public function setCit_costo(int $costo){
        $this->cit_costo=$costo;
    }
    public function getCit_usermedico() : ?string{
        return $this->cit_usermedico;
    }

    public function setCit_usermedico(string $usermedico){
        $this->cit_usermedico=$usermedico;
    }

    public function getCit_medico() : ?string{
        return $this->cit_medico;
    }

    public function setCit_medico(string $medico){
        $this->cit_medico=$medico;
    }
    
    public function Listar(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM citas;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function ListarCitaMedico($usuario){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM citas WHERE usermedico = '$usuario';");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function ListarCitaMedico2($usuario, $fecha){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM citas WHERE usermedico = '$usuario' AND  fecha = '$fecha';");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }
    public function ListarPacientes(){
        try{
            $consultapa = $this->pdo->prepare("SELECT numdoc,nom1,nom2,apellido1,apellido2 FROM pacientes;");
            $consultapa->execute();
            return $consultapa->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function ListarMedicos(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM medicos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function Verificar($fecha, $hora, $area){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM citas WHERE fecha='$fecha' AND hora='$hora' AND area='$area';");
            $consulta->execute();
            $consulta->fetch(PDO::FETCH_OBJ);
            if ($consulta->rowCount() > 0) {
                $bandera = 'existe';
                return $bandera;
            } else {
                $bandera = 'vacio';
                return $bandera;
            }

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM citas WHERE id=?;");
            $consulta->execute(array($id));
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            $c = new Cita();
            $c->setCit_id($r->id);
            $c->setCit_paciente($r->paciente);
            $c->setCit_area($r->area);
            $c->setCit_fecha($r->fecha);
            $c->setCit_hora($r->hora);
            $c->setCit_estado($r->estado);
            $c->setCit_estado_pago($r->estado_pago);
            $c->setCit_costo($r->costo);
            $c->setCit_medico($r->medico);
            $c->setCit_usermedico($r->usermedico);

            return $c;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Cita $c){
        try{
            $consulta="INSERT INTO citas(paciente, area, fecha, hora, estado, estado_pago, costo, medico, usermedico) VALUES (?,?,?,?,?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $c->getCit_paciente(),
                        $c->getCit_area(),
                        $c->getCit_fecha(),
                        $c->getCit_hora(),
                        $c->getCit_estado(),
                        $c->getCit_estado_pago(),
                        $c->getCit_costo(),
                        $c->getCit_medico(),
                        $c->getCit_usermedico()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Cita $c){
        try{
            $consulta="UPDATE citas SET 
                paciente=?,
                area=?,
                fecha=?, 
                hora=?, 
                estado=?, 
                estado_pago=?, 
                costo=?, 
                medico=?, 
                usermedico=? 
                WHERE id=?;";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $c->getCit_paciente(),
                        $c->getCit_area(),
                        $c->getCit_fecha(),
                        $c->getCit_hora(),
                        $c->getCit_estado(),
                        $c->getCit_estado_pago(),
                        $c->getCit_costo(),
                        $c->getCit_medico(),
                        $c->getCit_usermedico(),
                        $c->getCit_id()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}

?>