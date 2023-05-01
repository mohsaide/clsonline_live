<?php


    header('Content-Type: application/json');


   if ($_SERVER['REQUEST_METHOD'] === 'POST')
   {
       if ( $_POST['secret_code'] == 'SECRET_TOKEN')
       {
            if (!isset($_POST['subject']) || !isset($_POST['to']) || !isset($_POST['message']) || !isset($_POST['sys_src']) )
            {
                  header('HTTP/1.1 400 Bad Request');
                  $response['status'] = '400_Bad_Request' ;
                  echo json_encode($response) ; 
                  exit();
            }
            else
            {     
                  $to = $_POST['to'];
                  if( $_POST['sys_src'] == 1)
                  {
                        $to = 'mohammad2001saide@gmail.com';    
                  }

                  $headers = "From: no-reply@clsonline.org\r\n" .
                              "Reply-To: no-reply@clsonline.org\r\n" .
                              "X-Mailer: PHP/" . phpversion();
                  mail( $to , $_POST['subject']  , $_POST['message'] , $headers) ;
                  
                  header('HTTP/1.1 200 SUCCESS');
                  $response['status'] = '200_SUCCESS';
                  echo json_encode($response) ; 
                  exit();
            }

       }
       else
       {
          
             header('HTTP/1.1 401 Unauthorized');
             $response['status'] = '401_Unauthorized';
             echo json_encode($response) ;  
             exit();
           
       }
     
   }
   else
   {
        header('HTTP/1.1 400 Bad Request');
        $response['status'] = '400_Bad_Request' ;
        echo json_encode($response) ; 
        exit();
   }
    
?>