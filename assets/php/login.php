<?php

// <!-- --------------------------------- -->

// <!-- this api used to check i user exist and return auth user_id and member_id  -->

// <!-- Email , password -->

// <!-- --------------------------------- -->

header('Content-Type: application/json');
error_reporting(E_ALL & ~E_WARNING);

 try
{

    $host = "162.241.24.137";
    $username = "clsonlin_SYSTEM";
    $password = "SYSTEM_2022";
    $dbname = "clsonlin_core";
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {

         try
        {

            $check_query= "select * from user 
                           where email = '".$_POST['email']."' and password = '".$_POST['password']."' and deleted != 0 ;" ;
            
            $check = mysqli_query($conn, $check_query);

            
            if (mysqli_num_rows($check) == 1) {



                $cred_check= "select user_id  from user_auth where user_id in ( select id from user
                             where email = '".$_POST['email']."' and password = '".$_POST['password']."') ;" ;
                
                $result2 = mysqli_query($conn, $cred_check);
    
                
                if (mysqli_num_rows($result2) == 1) 
                {
                   
                    $set_auth = "update user_auth set value ='".bin2hex(random_bytes(100))."' , expired_date =  date_add(now() , interval 30 minute)
                    where user_id = (select user.id from user 
                    where user.email = '".$_POST['email']."' ) ;" ;
                    mysqli_query($conn, $set_auth);

                }
                else
                {
 
                    $set_auth = "INSERT INTO user_auth ( user_id, value , expired_date) VALUES 
                                 ( ( select id from user where email = '".$_POST['email']."' ) , '".bin2hex(random_bytes(100))."' ,  date_add(now() , interval 30 minute) );" ;
                    mysqli_query($conn, $set_auth);  

                }

                $main_details= "select user.id UserId , university_member.id MemberId , value AuthToken from user 
                left join university_member on university_member.user_id = user.id and university_member.status ='ACTIVE'
                left join user_auth on user_auth.user_id = user.id
                where user.email = '".$_POST['email']."' and password = '".$_POST['password']."' and deleted!=0 ;" ;
                $result = mysqli_query($conn, $main_details);
                $row = mysqli_fetch_assoc($result);
                
                header('HTTP/1.1 200 SUCCESS');
                $response['status'] = '200_SUCCESS';
                session_start();
                $_SESSION['AuthToken']  =  $row['AuthToken'] ; 
                $_SESSION['UserId']  =  $row['UserId'] ;  
                $_SESSION['MemberId']  = $row['MemberId'] ;
                
                $response['data'] = array("success_flag" => 1 , 'AuthToken' => $row['AuthToken'] , 'UserId' =>  $row['UserId'] , 'MemberId' =>   $row['MemberId'] );
                echo json_encode($response) ; 
                exit(); 

            }
            else
            {

                header('HTTP/1.1 200 SUCCESS');
                $response['status'] = '200_SUCCESS';
                $response['data'] = array("success_flag" => 2  );
                echo json_encode($response) ; 
                exit();  
            }


        }
        catch (\Throwable $post_logic)
        {
            header('HTTP/1.1 400 Bad Request');
            $response['status'] =  str_replace( 'ERROR' , $post_logic->getMessage() , '400_Bad_Request ( POST logic fault --> ERROR )');
            $response['data'] = array("success_flag" => 0) ;
            echo json_encode($response) ; 
            exit();  
        }
       
    }
    else 
    {
        header('HTTP/1.1 400 Bad Request');
        $response['status'] = '400_Bad_Request ( UNDEFINED RESTFUL METHOD )' ;
        $response['data'] = array("success_flag" => 0);
        echo json_encode($response) ; 
        exit();
    }
    

}
 catch (\Throwable $conn)
{
    header('HTTP/1.1 500 Internal Server Error');
    $response['status'] = str_replace( 'ERROR' , $conn->getMessage() , '500_Internal_Server_Error ( ERROR )') ;
    $response['data'] = array("success_flag" => 0);
    echo json_encode($response) ;  
    exit();
}


?>