<?php
class admin extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('admin');
    }

    // public function index(){
    //     //echo "Home page";

    //     $users = $this->userModel->getUsers();

    //     $data = [
    //         'title' => 'Home page',
    //         'users' => $users
    //     ];
    //     $this->view('pages/index',$data);
    // }

    public function 119Operator()
    {
        $this->view('pages/admin/create119OperatorAccount');
    }
}

?>