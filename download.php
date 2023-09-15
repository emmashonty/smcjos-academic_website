<?php
    include 'plugins/crud/lib/Database.php';

    include 'plugins/crud/classes/Uploader.php';
    
    $db = new Database();
    $up = new Uploader(); 
  
  $errors  = array();
  $data    = array();

    if(($_SERVER['REQUEST_METHOD']=='GET')){
      

        if ($_GET['file'] == 'form') {
       
            $msg = $up->insertDownload('form','visitor');
            if ($msg == 'Success') {
                $data['success'] = true;
            }else{
                $data['success'] = false;
                $data['errors']  = $msg;
            }

        }else {
            $msg = $ud->insertDownload($_GET['file'],'visitor');
            if ($msg == 'Success') {
                $data['success'] = true;
            }else{
                $data['success'] = false;
                $data['errors']  = $msg;
            }
        }
    
    }else{
        $msg = "An Error Occured";

        $data['success'] = false;
        $data['errors']  = $msg;

    }
    
    echo json_encode($data);
?>
