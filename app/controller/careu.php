<?php
class careu extends Controller
{
    public function __construct()
    {
        
        $this->userModel = $this->model('data');
    }

    public function index()
    {
        //echo "Home page";

        // $users = $this->userModel->getUsers();

        // $data = [
        //     'title' => 'Home page',
        //     'users' => $users
        // ];
        $this->view('pages/index');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this->view('pages/index');
    }

    public function home()
    {

        session_start();
        $_SESSION['userName']=$_POST['username'];
        $userInfo=$this->userModel->getUser($_POST['username'],$_POST['password']);

        if($userInfo)
        {   
            if(strpos($_POST['username'], "admin"))
            {
                $this->view('pages/includes/adminheader');
                $this->view('pages/admin/home');
                $this->view('pages/includes/footer');
            }
            else if(strpos($_POST['username'], "119"))
            {
                $this->view('pages/includes/119OperatorHeader');
                $this->view('pages/119Operator/home');
                $this->view('pages/includes/footer');
            }
            else if(strpos($_POST['username'], "1990"))
            {
                $this->view('pages/includes/1990OperatorHeader');
                $this->view('pages/1990Operator/home');
                $this->view('pages/includes/footer');
            }   
        }
        else
        {
            $this->view('pages/index');
            session_destroy();
        }
    }

// ADMIN CONTROLLER FUNCTIONS-----------------------------------------------------------------------------------------------

    public function homepageadmin()
    {
        $this->view('pages/includes/adminheader');
        $this->view('pages/admin/home');
        $this->view('pages/includes/footer');
    }

    public function operator119()
    {
        $this->view('pages/includes/adminheader');
        $this->view('pages/admin/create119OperatorAccount');
        $this->view('pages/includes/footer');
    }

    public function operator1990()
    {
        $this->view('pages/includes/adminheader');
        $this->view('pages/admin/create1990OperatorAccount');
        $this->view('pages/includes/footer');
    }

    public function editprofileadmin()
    {
        session_start();
        $adminInfo=$this->userModel->getAdmin($_SESSION['userName']);
        $data = ['admin' => $adminInfo];

        if($adminInfo)
        {
            $this->view('pages/includes/adminheader');
            $this->view('pages/admin/editProfileAdmin',$data);
            $this->view('pages/includes/footer');
        }
    }

    public function updateprofileadmin()
    {
        session_start();
        $result=$this->userModel->updateAdmin($_POST['firstName'],$_POST['lastName'],$_SESSION['userName'],$_POST['password1']);

        if($result)
        {
            $this->view('pages/includes/adminheader');
            $this->view('pages/admin/home');
            $this->view('pages/includes/footer');
        }
        else
        {
            echo $_SESSION['userName'];
        }
    }

    public function usermanagement()
    {
        $this->view('pages/includes/adminheader');
        $this->view('pages/admin/userManagement');
        $this->view('pages/includes/footer');
    }

    public function userrequests()
    {
        $this->view('pages/admin/userRequests');
    }

    public function userbrief()
    {
        $this->view('pages/admin/userBrief');
    }

    public function userprofile()
    {
        $this->view('pages/includes/adminheader');
        $this->view('pages/admin/userProfile');
        $this->view('pages/includes/footer'); 
    }

    public function viewuserrequest()
    {
        $requestInfo=$this->userModel->getUserRequest($_GET['rid']);
        $data = ['admin' => $requestInfo];

        if($requestInfo)
        {
            $this->view('pages/includes/adminheader');
            $this->view('pages/admin/viewUserRequest',$data);
            $this->view('pages/includes/footer'); 
        }
        else
        {
            echo $_GET['rid'];
        }
    }

    public function viewreportsadmin()
    {
        $this->view('pages/includes/adminheader');
        $this->view('pages/admin/reports');
        $this->view('pages/includes/footer');
    }

// 119 OPERATOR CONTROLLER FUNCTIONS-----------------------------------------------------------------------------------------

    public function homepage119()
    {
        $this->view('pages/includes/119OperatorHeader');
        $this->view('pages/119Operator/home');
        $this->view('pages/includes/footer');
    }

    public function recent119()
    {
        $this->view('pages/includes/119OperatorHeader');
        $this->view('pages/119Operator/recentRequests');
        $this->view('pages/includes/footer');
    }

    public function viewnewrequest119()
    {
        $this->view('pages/includes/119OperatorHeader');
        $this->view('pages/119Operator/viewNewRequest');
        $this->view('pages/includes/footer');
    }

    public function allrequests119()
    {
        $this->view('pages/includes/119OperatorHeader');
        $this->view('pages/119Operator/allrequests');
        $this->view('pages/includes/footer');
    }

    public function viewrequest119()
    {
        $this->view('pages/includes/119OperatorHeader');
        $this->view('pages/119Operator/viewRequest');
        $this->view('pages/includes/footer');
    }

    public function editprofileoperator119()
    {
        session_start();
        $operatorInfo=$this->userModel->getOperator119($_SESSION['userName']);
        $data = ['admin' => $operatorInfo];

        if($operatorInfo)
        {
            $this->view('pages/includes/119OperatorHeader');
            $this->view('pages/119Operator/editProfileOperator119',$data);
            $this->view('pages/includes/footer');
        }
    }

    public function updateprofileoperator119()
    {
        session_start();
        $result=$this->userModel->updateOperator119($_POST['firstName'],$_POST['lastName'],$_SESSION['userName'],$_POST['password1']);

        if($result)
        {
            $this->view('pages/includes/119OperatorHeader');
            $this->view('pages/119Operator/home');
            $this->view('pages/includes/footer');
        }
        else
        {
            echo $_SESSION['userName'];
        }
    }

    public function viewreportsoperator119()
    {
        $this->view('pages/includes/119OperatorHeader');
        $this->view('pages/119Operator/reports');
        $this->view('pages/includes/footer');
    }

// 1990 OPERATOR CONTROLLER FUNCTIONS-----------------------------------------------------------------------------------------

    public function homepage1990()
    {
        $this->view('pages/includes/1990OperatorHeader');
        $this->view('pages/1990Operator/home');
        $this->view('pages/includes/footer');
    }

    public function recent1990()
    {
        $this->view('pages/includes/1990OperatorHeader');
        $this->view('pages/1990Operator/recentRequests');
        $this->view('pages/includes/footer');
    }

    public function viewnewrequest1990()
    {
        $this->view('pages/includes/1990OperatorHeader');
        $this->view('pages/1990Operator/viewNewRequest');
        $this->view('pages/includes/footer');
    }

    public function allrequests1990()
    {
        $this->view('pages/includes/1990OperatorHeader');
        $this->view('pages/1990Operator/allrequests');
        $this->view('pages/includes/footer');
    }

    public function viewrequest1990()
    {
        $this->view('pages/includes/1990OperatorHeader');
        $this->view('pages/1990Operator/viewRequest');
        $this->view('pages/includes/footer');
    }

    public function editprofileoperator1990()
    {
        session_start();
        $operatorInfo=$this->userModel->getOperator119($_SESSION['userName']);
        $data = ['admin' => $operatorInfo];

        if($operatorInfo)
        {
            $this->view('pages/includes/1990OperatorHeader');
            $this->view('pages/1990Operator/editProfileOperator1990',$data);
            $this->view('pages/includes/footer');
        }
    }

    public function updateprofileoperator1990()
    {
        session_start();
        $result=$this->userModel->updateOperator119($_POST['firstName'],$_POST['lastName'],$_SESSION['userName'],$_POST['password1']);

        if($result)
        {
            $this->view('pages/includes/119OperatorHeader');
            $this->view('pages/119Operator/home');
            $this->view('pages/includes/footer');
        }
        else
        {
            echo $_SESSION['userName'];
        }
    }

    public function viewreportsoperator1990()
    {
        $this->view('pages/includes/1990OperatorHeader');
        $this->view('pages/1990Operator/reports');
        $this->view('pages/includes/footer');
    } 
}

?>