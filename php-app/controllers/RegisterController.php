<?php 

require_once 'UserModel.php';

class Register extends Controller {
    private $userModel;

    public function __construct($conexion) {
        parent::__construct();
        $this->userModel = new UserModel($conexion);
    }

    public function index() {
        $this->view->render('register/index');
    }

    public function registrarUsuario($usuario, $email, $password) {
        if (!$this->userModel->usuarioExistente($usuario) && !$this->userModel->emailExistente($email)) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            return $this->userModel->insert($usuario, $email, $passwordHash);
        } else {
            return false;
        }
    }
}
?>