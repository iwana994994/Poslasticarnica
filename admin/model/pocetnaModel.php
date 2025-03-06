<?php


function getCount($totalUsers){

    global $con;
$query = "SELECT * FROM $totalUsers WHERE role='user'";
$query_run = mysqli_query($con,$query);

if($query_run){
    $countTotal = mysqli_num_rows($query_run);

    return $countTotal;
}else{
    return 'Nesto nije u redu !';
}
}
function getCountAdmin($totalAdmin){

    global $con;
    $query = "SELECT * FROM $totalAdmin WHERE role='admin'";
    $query_run = mysqli_query($con,$query);
    
    if($query_run){
        $countTotal = mysqli_num_rows($query_run);
    
        return $countTotal;
    }else{
        return 'Nesto nije u redu !';
    }
    }
    function getCountNews($totalNews){

        global $con;
        $query = "SELECT * FROM $totalNews ";
        $query_run = mysqli_query($con,$query);
        
        if($query_run){
            $countTotal = mysqli_num_rows($query_run);
        
            return $countTotal;
        }else{
            return 'Nesto nije u redu !';
        }
        }
 function getCountMessage($totalMessage){

            global $con;
            $query = "SELECT * FROM $totalMessage";
            $query_run = mysqli_query($con,$query);
            
            if($query_run){
                $countTotal = mysqli_num_rows($query_run);
            
                return $countTotal;
            }else{
                return 'Nesto nije u redu !';
            }
            }  
function getCountProduct($totalProducts){

                global $con;
                $query = "SELECT * FROM $totalProducts";
                $query_run = mysqli_query($con,$query);
                
                if($query_run){
                    $countTotal = mysqli_num_rows($query_run);
                
                    return $countTotal;
                }else{
                    return 'Nesto nije u redu !';
                }
                }    






?>