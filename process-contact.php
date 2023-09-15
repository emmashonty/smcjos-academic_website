<?php
    include 'plugins/crud/lib/Database.php';

    include 'plugins/crud/classes/Uploader.php';
    
    $db = new Database();
    $up = new Uploader(); 
  
  $errors  = array();
  $data    = array();

    if(($_SERVER['REQUEST_METHOD']=='POST')){
      
       
            $msg = $up->insertContact($_POST);
            if ($msg == 'Success') {
                $data['success'] = true;
                $data['message'] = "Your Message has been received. We will review and ge back to you soon.\n Thank you!";
            }else{
                $data['success'] = false;
                $data['errors']  = $msg;
            }
    
    }else{
        $msg = "An Error Occured";

        $data['success'] = false;
        $data['errors']  = $msg;

    }
    
    echo json_encode($data);
?>
