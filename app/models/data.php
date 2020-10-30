<?php
    class data
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getUser($userName,$password)
        {
            $this->db->query("SELECT userName,password FROM admins WHERE userName='{$userName}' AND password='{$password}'");
            $result = $this->db->resultSet();
            return $result;
        }

// ADMIN MODEL FUNCTIONS---------------------------------------------------------------------------------------------------

        public function getAdmin($username)
        {
            $this->db->query("SELECT firstName,lastName,password FROM admins WHERE userName='{$username}'");
            $result = $this->db->resultSet();
            return $result;
        }

        public function updateAdmin($firstname,$lastname,$username,$password)
        {
            $connection = mysqli_connect('localhost','root','','careu');

            $query="UPDATE admins SET firstName='{$firstname}',lastName='{$lastname}',password='{$password}' WHERE userName='{$username}'";
            $adminInfo=mysqli_query($connection,$query);

            if($adminInfo> 0)
            {   
                return true;
            }
            else
            {
                return false;
            }
            // if($this->db->query("UPDATE admins SET firstName='{$firstname}',lastName='{$lastname}',password='{$password}' WHERE userName='{$username}'"))
            // {
            //     return true;
            // }
            // else
            // {
            //     return false;
            // }
        }

        public function getUserRequest($requestID)
        {
            $this->db->query("SELECT firstName,lastName,email,phoneNumber,userName,password,NIC,address,relative1,relativePhone1,relative2,relativePhone2,relative3,relativePhone3
            FROM requests
            WHERE requestID='{$requestID}'");

            $result = $this->db->resultSet();
            return $result;
        }

// 119 OPERATOR MODEL FUCTIONS------------------------------------------------------------------------------------------------

        public function getOperator119($username)
        {
            $this->db->query("SELECT firstName,lastName,password FROM admins WHERE userName='{$username}'");
            $result = $this->db->resultSet();
            return $result;
        }

        public function updateOperator119($firstname,$lastname,$username,$password)
        {
            $connection = mysqli_connect('localhost','root','','careu');

            $query="UPDATE admins SET firstName='{$firstname}',lastName='{$lastname}',password='{$password}' WHERE userName='{$username}'";
            $adminInfo=mysqli_query($connection,$query);

            if($adminInfo> 0)
            {   
                return true;
            }
            else
            {
                return false;
            }
            // if($this->db->query("UPDATE admins SET firstName='{$firstname}',lastName='{$lastname}',password='{$password}' WHERE userName='{$username}'"))
            // {
            //     return true;
            // }
            // else
            // {
            //     return false;
            // }
        }

// 1990 OPERATOR MODEL FUCTIONS------------------------------------------------------------------------------------------------

        public function getOperator1990($username)
        {
            $this->db->query("SELECT firstName,lastName,password FROM admins WHERE userName='{$username}'");
            $result = $this->db->resultSet();
            return $result;
        }

        public function updateOperator1990($firstname,$lastname,$username,$password)
        {
            $connection = mysqli_connect('localhost','root','','careu');

            $query="UPDATE admins SET firstName='{$firstname}',lastName='{$lastname}',password='{$password}' WHERE userName='{$username}'";
            $adminInfo=mysqli_query($connection,$query);

            if($adminInfo> 0)
            {   
                return true;
            }
            else
            {
                return false;
            }
                // if($this->db->query("UPDATE admins SET firstName='{$firstname}',lastName='{$lastname}',password='{$password}' WHERE userName='{$username}'"))
                // {
                //     return true;
                // }
                // else
                // {
                //     return false;
                // }
            // }
        }
    }
?>