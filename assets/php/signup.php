<?php

// <!-- --------------------------------- -->

// <!-- this api used add new user into system   -->

// <!-- take user main details to be added as parameters  -->

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
           if ( !isset($_POST['DOB']) || !isset($_POST['gender']) || !isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['address']) || !isset($_POST['password']) || !isset($_POST['confirm_password']))
           {
          

            header('HTTP/1.1 200 SUCCESS');
            $response['status'] = '200_SUCCESS';
            $response['data'] =  array("success_flag" => 1 , "message"=>"All form fields should be filled." );
            echo json_encode($response) ; 
            exit(); 

           }
           else
           {

            if ( mysqli_num_rows(mysqli_query($conn , 'select id from user where email ="'.$_POST['email'].'" ; ')) > 0 )
            {

                            header('HTTP/1.1 200 SUCCESS');
                            $response['status'] = '200_SUCCESS';
                            $response['data'] = array("success_flag" => 1 , "message"=>"Email is already used in system." );
                            echo json_encode($response) ; 
                            exit();  
            }
            else
            {
              

                    if ( mysqli_num_rows(mysqli_query($conn , 'select id from user where phone ="'.$_POST['phone'].'" ; ')) > 0 )
                    {
        
                        header('HTTP/1.1 200 SUCCESS');
                        $response['status'] = '200_SUCCESS';
                        $response['data'] = array("success_flag" => 1 , "message"=>"Phone is already used in system." );
                        echo json_encode($response) ; 
                        exit();  
                    }
                    else
                    {
                        
                        if($_POST['password']!= $_POST['confirm_password'])
                        {
                            header('HTTP/1.1 200 SUCCESS');
                            $response['status'] = '200_SUCCESS';
                            $response['data'] = array("success_flag" => 1 , "message"=>"Passwords do not match." );
                            echo json_encode($response) ; 
                            exit();  
                        }
                        else
                        {
                            if ( mysqli_num_rows(mysqli_query($conn , 'select id from city where id = '.$_POST['address'].' ; ')) > 0 )
                            {
                                                         

                                        $add = "INSERT INTO user (first_name, last_name, email, phone ,password, gender, dob, city_id, image , created_at, deleted)
                                        VALUES ( '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."', '".$_POST['phone']."' , '".$_POST['password']."' , '".$_POST['gender']."' , '".$_POST['DOB']."'  , '".$_POST['address']."' , 'default.png'  , now() , '0' );";

                                        mysqli_query($conn , $add);
                                        header('HTTP/1.1 200 SUCCESS');
                                        $response['status'] = '200_SUCCESS';
                                        $response['data'] = array("success_flag" => 1 , "message"=>"SUCCESS" );
                                        echo json_encode($response) ; 
                                        exit(); 

                                    
                            }
                            else
                            {

                            header('HTTP/1.1 200 SUCCESS');
                            $response['status'] = '200_SUCCESS';
                            $response['data'] = array("success_flag" => 1 , "message"=>"Address is Invalid." );
                            echo json_encode($response) ; 
                            exit(); 

                            }
                            
                        }
                        
                        
                    }

            }

        }


        }
        catch (\Throwable $post_logic)
        {
            header('HTTP/1.1 500 Internal Server Error');
            $response['status'] = str_replace( 'ERROR' , $post_logic->getMessage() , '500_Internal_Server_Error ( ERROR )') ;
            $response['data'] = array("success_flag" => 0 ) ;
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
    $response['data'] = array("success_flag" => 0 );
    echo json_encode($response) ;  
    exit();
}


?>