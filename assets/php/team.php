<?php

// <!-- --------------------------------- -->

// <!-- this api used return team details  -->

// <!-- No parameter take -->

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
            echo 'post'; 
           // post logic 
        }
         catch (\Throwable $post_logic)
        {
            header('HTTP/1.1 400 Bad Request');
            $response['status'] =  str_replace( 'ERROR' , $post_logic->getMessage() , '400_Bad_Request ( POST logic fault --> ERROR )');
            $response['data'] = array() ;
            echo json_encode($response) ; 
            exit();  
        }
       
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
     
        try
        {
            // Query which return random 5 rates & feedbacks 
            $sql = "select full_name NAME , image IMAGE , role ROLE , linkedin_link LINKEDIN , instagram_link INSTGRAM , facebook_link FACEBOOK , twitter_link TWITER  from team ;";
            $result = mysqli_query($conn, $sql);


            // Check if a records were found
            if ($result->num_rows > 0)
            {
                // Fetch the results into an array
                $rates = array();
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $rates[] = $row;
                }


                // Send a response back to the client
                header('HTTP/1.1 200 SUCCESS');
                $response['status'] = '200_SUCCESS';
                $response['data'] = $rates ;
                echo json_encode($response) ; 
                exit();  

            }
            else {

                // If no records were found, send an error response
                header('HTTP/1.1 200 No Content');
                $response['status'] = '200_NO_CONTENT';
                $response['data'] = array() ;
                echo json_encode($response); 
                exit(); 
            }

        }
         catch (\Throwable $get_logic)
        {
            header('HTTP/1.1 400 Bad Request');
            $response['status'] =  str_replace( 'ERROR' , $get_logic->getMessage() , '400_Bad_Request ( GET logic fault --> ERROR )');
            $response['data'] = array() ;
            echo json_encode($response) ; 
            exit();  
        }

    }
    else 
    {
        header('HTTP/1.1 400 Bad Request');
        $response['status'] = '400_Bad_Request ( UNDEFINED RESTFUL METHOD )' ;
        $response['data'] = array() ;
        echo json_encode($response) ; 
        exit();
    }
    


}
 catch (\Throwable $conn)
{
    header('HTTP/1.1 500 Internal Server Error');
    $response['status'] = str_replace( 'ERROR' , $conn->getMessage() , '500_Internal_Server_Error ( ERROR )') ;
    $response['data'] = array() ;
    echo json_encode($response) ;  
    exit();
}


?>