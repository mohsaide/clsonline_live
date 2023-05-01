<?php

// <!-- --------------------------------- -->

// <!-- this api used return system stats  -->

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


    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
     
        try
        {
            // Query which return random 5 rates & feedbacks 
            $sql = "select 'UNIVERSITIY' ITEM , 'subscribed with us.' DESCR ,  count(id) COUNT from university 
            union 
            select 'USER' ITEM , 'join our community.' DESCR ,  count(id) COUNT from user 
            union  
            select 'PROGRAM' ITEM , 'are offered in the system.' DESCR ,  count( distinct name ) COUNT from program  ;";
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