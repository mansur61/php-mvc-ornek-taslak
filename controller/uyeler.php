
<?php
class Uyeler extends Controller{ 

    public function index(){
        //echo "üyeler index metodu";

        $usersModel = $this->model('users');
        $users = $usersModel->getAllUsers();
        $this->view('uyeler', [
            'users' => $users
         ]
        );
    }
    public function post(){
        print_r($_POST);
    }
}

?>