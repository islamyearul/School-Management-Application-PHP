<?php

class Admin{
    private $conn;
    public function __construct()
    {
        #database Host, D-user, D-pass, D-name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'school_management_system_2021';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if(!$this->conn){
            die("Database Connection Erroe");
        } 
    }


    public function AdminLogin($data){
        $pssword = md5($data['admin_password']);
        $user = $data['admin_name'];

     $query = "SELECT * FROM admin_info WHERE ad_name = '$user' AND ad_pass = '$pssword'";

        if(mysqli_query($this->conn, $query)){
            $adminInfo = mysqli_query($this->conn, $query);
           $numRow = mysqli_num_rows($adminInfo);
            

           if($numRow > 0){
               $adminData = mysqli_fetch_assoc($adminInfo);
               session_start();
               $_SESSION['sessionID'] = $adminData['id'];            
               $_SESSION['sessionNAME'] = $adminData['ad_name'];
               $_SESSION['sessionImage'] = $adminData['user_image'];
               $_SESSION['sessionRole'] = $adminData['action_role'];
              header("location: dashboard.php");
           }
        }
    }


    public function adminLogout(){
        unset($_SESSION['sessionID']);
        unset($_SESSION['sessionNAME']);
        unset($_SESSION['sessionImage']);
        unset($_SESSION['sessionRole']);
        header("location: index.php");
    }

    
}










?>