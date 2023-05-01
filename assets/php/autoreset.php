<?php

// <!-- --------------------------------- -->

// <!-- this api used reset user password and snet it to email -->

// <!-- take user email as parameter  -->

// <!-- --------------------------------- -->


header('Content-Type: application/json');
error_reporting(E_ALL & ~E_WARNING);

 try
{

    include 'connection.php'; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {

         try
        {
           if ( !isset($_POST['email']) )
           {
          

            header('HTTP/1.1 400 Bad Request');
            $response['status'] = '400_Bad_Request';
            $response['data'] =  array("success_flag" => 0);
            echo json_encode($response) ; 
            exit(); 

           }
           else
           {
            if ( mysqli_num_rows(mysqli_query( $conn , 'select id from user where email ="'.$_POST['email'].'" ; ')) > 0 )
            {


                           // generate new pass 
                           
                           $new_pass = bin2hex(random_bytes(20));

                           // update in db 

                           $query = 'update user set password = "'.$new_pass.'"  where email = "'.$_POST['email'].'" ;' ;
                           mysqli_query($conn, $query);  

                          // send to email

                        //   $mail_headers = "From: no-reply@clsonline.org\r\n" .
                        //   "Reply-To: no-reply@clsonline.org\r\n" .
                        //   "X-Mailer: PHP/" . phpversion();

                        //   mail( $_POST['email']  , ' CLS - New Password'  , 'New password is ( "'.$new_pass.'" ) , make sure to don\'t share it with another one.' , $mail_headers) ;


                            header('HTTP/1.1 200 SUCCESS');
                            $response['status'] = '200_SUCCESS';
                            $response['data'] = array("success_flag" => 1  );
                            echo json_encode($response) ; 
                            exit();  
            }
            else
            {
                header('HTTP/1.1 200 SUCCESS');
                            $response['status'] = '200_SUCCESS';
                            $response['data'] = array("success_flag" => 0 );
                            echo json_encode($response) ; 
                            exit();  
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