<?php 

namespace Model;

class Usuario extends ActiveRecord{
    //BSD

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre','apellido','email','telefono','admin','confirmado','token','password'];
 
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;
    public $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? null;
        $this->confirmado = $args['confirmado'] ?? null;
        $this->token = $args['token'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    //Mensajes de validacion

    public function validarNuevaCuenta(){
        if($this->nombre == ''){
            self::$alertas['error'][]="El nombre es obligatorio";
        }
        if($this->apellido == ''){
            self::$alertas['error'][]="El apellido es obligatorio";
        }
        if($this->email == ''){
            self::$alertas['error'][]="El Email cliente es obligatorio";
        }
        if($this->password == ''){
            self::$alertas['error'][]="El password cliente es obligatorio";
        }
        if(strlen($this->password)<6){
            self::$alertas['error'][]="El password debe tener como min 6 letras";
        }

        return self::$alertas;
    }

    public function existeUsuario(){
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1" ;

        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][] = "Usuario ya registrado";
        }
        return $resultado;
    }

    public function hashPassword(){
        $this->password = password_hash($this->password,PASSWORD_BCRYPT);
    }
    public function crearToken(){
        $this->token = uniqid();
    }

}