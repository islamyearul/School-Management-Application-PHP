<?php
class AdminYearul{
    private $conn;
    public function __construct(){
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = "";
         $dbname = 'school_management_system_2021';
         $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

         if(! $this->conn){
             die("Database Connection Error");
         }
    } 

    public function addUser($data){
        $errors = array();
        $user_name = $data['user_name'];
        $user_eamil = $data['user_eamil'];
        $user_password = md5($data['user_password']);
        $user_role = $data['user_role'];
            $userIMGname = $_FILES['user_image']['name'];
            $userTMPname = $_FILES['user_image']['tmp_name'];
                $arr = explode('.', $userIMGname);
                $file_ext = strtolower(end($arr));   
                $extensions= array("pdf","doc","docx", "jpg", "jepg", "png");

            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a jpg, jepg, png file.";           
             }
             if(empty($errors)==true){
                $addUserQuery = "INSERT INTO admin_info (ad_name, ad_email, ad_pass, action_role, user_image) VALUE ('$user_name','$user_eamil','$user_password','$user_role', '$userIMGname')";
                 if( mysqli_query($this->conn, $addUserQuery)){
                    move_uploaded_file($userTMPname,"upload/".$userIMGname);
                    return "Data Added Success";
                    exit();
                 }
             }else{
                foreach ($errors as $item) {
                   return $item."<br>";
                   exit();  
                }
             } 
    }









}



?>