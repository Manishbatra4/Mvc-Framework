<?php

class Users extends Controllers
{
    protected $user;

    public function __construct()
    {
        $this->user = $this->model('User');
    }

    public function info($id){
        $info = User::where('id','=',$id)->first();
        $this->view('User.info', ['page_id' => 6, 'info' => $info]);
    }

    public function login()
    {
        $errormsg = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            extract($_POST);


            $user = $this->user->where('email', '=', $email)->first();
            if (!$user) {
                $errormsg = "User Does not Exist";
                $this->view('User.login', ['page_id' => 4, 'error' => $errormsg]);
            } else {
                if ($user->count() >= 1) {
                    if (password_verify($password, $user->password)) {
                        $_SESSION['user_id'] = $user->id;
                        redirect('Home/index');
                    } else {
                        $errormsg = "Invalid Password";
                        $this->view('User.login', ['page_id' => 4, 'error' => $errormsg]);
                    }
                } else {
                    redirect('users/login');
                }
            }

        } else {
            $this->view('User.login', ['page_id' => 4, 'error' => $errormsg]);
        }
    }

    public
    function register()
    {
        $errormsg = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            extract($_POST);

            if (($this->user->where('email', '=', trim($email))->get())->count() > 0) {
                $errormsg = "Email Already Exist";
            }

            $password = password_hash($password, PASSWORD_DEFAULT);

            $this->user->create([
                'fullname' => trim($fullname),
                'email' => trim($email),
                'username' => trim($username),
                'password' => trim($password),
            ]);

            redirect('users/login');
        } else {
            $this->view('User.register', ['page_id' => 5, 'error' => $errormsg]);
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION["user_id"]);
        redirect('users/login');
    }
}