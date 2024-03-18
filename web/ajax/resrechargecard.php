<?php
//check thẻ và cộng tiền cho khách
define('VinhCacDai20CM',true);
include("../config.php");
if(!$_SERVER['REQUEST_METHOD'] === 'POST') die();
$json['check'] = true;
$json['info'] = 'Card Fail.';
$_POST = json_decode(file_get_contents('php://input'), true);
$taskid = $_POST['TaskId'];
$Pin = $_POST['Pin'];
$Seri = $_POST['Seri'];
$CardValue = $_POST['CardValue'];
$Success = $_POST['Success'];
if($Success){
	$getcardinfo = $mysql->where(array('TaskId' => $taskid,'Type' => 0))->limit(1)->get('logscardcham');
	if($mysql->num_rows()> 0 ){
		$username = $getcardinfo['UserName'];
		$mysql->where(array('TaskId' => $taskid,'Type' => 0))->update('logscardcham', array('Type' => 1,'Money' => $CardValue));//update log card đúng hay sai
		$mysql->where(array('Account' => $username))->addtorow('logscardcham', array('Money' => intval($CardValue)));//query cộng tiền cho khách
	}
}else{
	//Card Fail
	$mysql->where(array('TaskId' => $taskid,'Type' => 0))->update('logscardcham', array('Type' => 3,'Money' => 0));
}
echo json_encode($json);
?>