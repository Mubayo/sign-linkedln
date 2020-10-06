<?php
session_start();
    /*$host="localhost";
    $user="root";
    $password="";
    $db="uch";*/
    include('database_constants.php');
    $connect=mysqli_connect(DB_host,DB_user,DB_pass);
    mysqli_select_db($connect,DB_database);
    
    if (isset($_POST['email'])){
    
        $uname = $_POST['email'];
        $password = $_POST['password'];
        
//      $passwordhash=md5($password);  
        
        
        $adminsql = "select * from login where email='".$uname."' AND pass ='".$password."' limit 1";
        //$adminsql2 = "select * from admin where email='".$mail."' AND password ='".$password."' limit 1";
//        $adminMail= "select email from admin where username='".$uname."' AND password ='".$passwordhash."' ";
        
        $check_admin =mysqli_query($connect,$adminsql);
        //$check_admin2 =mysqli_query($adminsql2);
        $get = mysqli_fetch_array($check_admin);
        if(isset($_POST['email'])){
            $_SESSION[ 'login_mail' ]=$uname;    
        }
            if(mysqli_num_rows ($check_admin)==1){
                
                    header('location:../meetings.php');
        }
        else{
             header('location:error.php?message=wrong password');
            //exit();
        }
    }
    
?>