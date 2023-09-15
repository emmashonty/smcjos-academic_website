<?php   
	include 'plugins/crud/lib/Database.php';

	include 'plugins/crud/classes/Selector.php';
	include 'plugins/crud/classes/Counter.php';
	
	$db = new Database();
	$fm = new Format();
	$sl = new Selector();
	$ct = new Counter(); 
    
    $data = array();

	$totalStaff = $ct->countExcluding('staff','status','deleted');
	$data['totalStaff'] = $totalStaff;


	$getClasses = $sl->selectByFieldDesc('funfacts','field','Classes');
	if ($getClasses) {
	    $valueC = $getClasses->fetch_assoc();
	    $data['totalClasses'] = $valueC['value'];
	}else{
	    $data['totalClasses'] = 0;
	}

	$getStudents = $sl->selectByFieldDesc('funfacts','field','Students');
	if ($getStudents) {
	    $valueS = $getStudents->fetch_assoc();
	    $data['totalStudents'] = $valueS['value'];
	}else{
	    $data['totalStudents'] = 0;
	}

	$getGraduates = $sl->selectByFieldDesc('funfacts','field','Graduates');
	if ($getGraduates) {
	    $valueG = $getGraduates->fetch_assoc();
	    $data['totalGraduates'] = $valueG['value'];
	}else{
	    $data['totalGraduates'] = 0;
	}

echo json_encode($data);

?>