<?php

class Usuario{

    private $pdo;
    //atributos

    private $usu_id;
    private $usu_tipo_doc;
	private $usu_numdoc;
	private $usu_nom1;
	private $usu_nom2;
    private $usu_apellido1;
    private $usu_apellido2;
	private $usu_sexo;
    private $usu_fec_nac;
    private $usu_e_mail;
    private $usu_user;
    private $usu_rol;
    private $usu_password;

    function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getUsu_id() : ?int{
        return $this->usu_id;
    }

    public function getUsu_tipo_doc() : ?string{
        return $this->usu_tipo_doc;
    }

    public function setUsu_tipo_doc(string $tipo_doc){
        $this->usu_tipo_doc=$tipo_doc;
    }

    public function getUsu_numdoc() : ?int{
        return $this->usu_numdoc;
    }

    public function setUsu_numdoc(int $numdoc){
        $this->usu_numdoc=$numdoc;
    }

    public function getUsu_nom1() : ?string{
        return $this->usu_nom1;
    }

    public function setUsu_nom1(string $nom1){
        $this->usu_nom1=$nom1;
    }

    public function getUsu_nom2() : ?string{
        return $this->usu_nom2;
    }

    public function setUsu_nom2(string $nom2){
        $this->usu_nom2=$nom2;
    }

    public function getUsu_apellido1() : ?string{
        return $this->usu_apellido1;
    }

    public function setUsu_apellido1(string $apellido1){
        $this->usu_apellido1=$apellido1;
    }

    public function getUsu_apellido2() : ?string{
        return $this->usu_apellido2;
    }

    public function setUsu_apellido2(string $apellido2){
        $this->usu_apellido2=$apellido2;
    }

    public function getUsu_sexo() : ?string{
        return $this->usu_sexo;
    }

    public function setUsu_sexo(string $sexo){
        $this->usu_sexo=$sexo;
    }

    public function getUsu_fec_nac() : ?string{
        return $this->usu_fec_nac;
    }

    public function setUsu_fec_nac(string $fec_nac){
        $this->usu_fec_nac=$fec_nac;
    }

    public function getUsu_e_mail() : ?string{
        return $this->usu_e_mail;
    }

    public function setUsu_e_mail(string $e_mail){
        $this->usu_e_mail=$e_mail;
    }

    public function getUsu_user() : ?string{
        return $this->usu_user;
    }

    public function setUsu_user(string $user){
        $this->usu_user=$user;
    }

    public function getUsu_rol() : ?string{
        return $this->usu_rol;
    }

    public function setUsu_rol(string $rol){
        $this->usu_rol=$rol;
    }

    public function getUsu_password() : ?string{
        return $this->usu_password;
    }

    public function setUsu_password(string $password){
        $this->usu_password=$password;
    }

    public function Listar(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM usuarios;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function ListarRol(){
        try{
            $consultapa = $this->pdo->prepare("SELECT * FROM tipo_rol;");
            $consultapa->execute();
            return $consultapa->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function Actualizar(Usuario $m){
        try{
            $consulta="UPDATE usuarios set password=?, where id=?";
            $this->pdo->prepare($consulta)->execute(array($m->getUsu_password,$m->getUsu_id));
        }catch()Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Usuario $u){
        try{
            $consulta="INSERT INTO usuarios(tipo_doc, num_doc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail, user, rol, password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $u->getUsu_tipo_doc(),
                        $u->getUsu_numdoc(),
                        $u->getUsu_nom1(),
                        $u->getUsu_nom2(),
                        $u->getUsu_apellido1(),
                        $u->getUsu_apellido2(),
                        $u->getUsu_sexo(),
                        $u->getUsu_fec_nac(),
                        $u->getUsu_e_mail(),
                        $u->getUsu_user(),
                        $u->getUsu_rol(),
                        $u->getUsu_password()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}

?>