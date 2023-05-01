<?

// <!-- --------------------------------- -->

// <!-- this api used to send email from system to aonther enduser  -->

// <!-- to , sub , message -->

// Validation needed 

// <!-- --------------------------------- -->

    header('Content-Type: application/json');


   if ($_SERVER['REQUEST_METHOD'] === 'POST')
   {
       if ( $_POST['secret_code'] == 'SECRET_TOKEN')
       {
            if (!isset($_POST['subject']) || !isset($_POST['to']) || !isset($_POST['message']) )
            {
                  header('HTTP/1.1 400 Bad Request');
                  $response['status'] = '400_Bad_Request1' ;
                  echo json_encode($response) ; 
            }
            else
            {
                  $headers = "From: no-reply@clsonline.org\r\n" .
                              "Reply-To: no-reply@clsonline.org\r\n" .
                              "X-Mailer: PHP/" . phpversion();
                  mail( $_POST['to'] , $_POST['subject']  , $_POST['message'] , $headers) ;
                  
                  header('HTTP/1.1 200 SUCCESS');
                  $response['status'] = '200_SUCCESS';
                  echo json_encode($response) ; 
            }

       }
       else
       {
          
             header('HTTP/1.1 401 Unauthorized');
             $response['status'] = '401_Unauthorized';
             echo json_encode($response) ;  
           
       }
     
   }
   else
   {
        header('HTTP/1.1 400 Bad Request');
        $response['status'] = '400_Bad_Request' ;
        echo json_encode($response) ; 
   }
    
?>