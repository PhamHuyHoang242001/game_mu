<?php
//send card qua DOITHECAO6789 và lưu log (chưa check thẻ đúng sai)
define('VinhCacDai20CM',true);
include("../config.php");
if(!isset($_SESSION['user'])){
	die();
}
/*
ecard: 1
cardmoney: 300000
passcard: 200000000000
serialcard: 011111111000000000
*/
$Telco = CleanText($_POST["typecard"]);
$Amount = CleanText($_POST["cardmoney"]);
$Serial = CleanText($_POST["serialcard"]);
$Code = CleanText($_POST["passcard"]);
$json['code'] = 1;
$json['msg'] = 'Lỗi hệ thống.';
$cardtype = 0;
switch(intval($Telco)){
	case 1:
	$cardName = 'Viettel';
	$TxtCard = 'VTT';
	$cardtype = 1;
	break;
	case 2:
	$cardName = 'Vinaphone';
	$TxtCard = 'VNP';
	$cardtype = 3;
	break;
	case 3:
	$cardName = 'Mobifone';
	$TxtCard = 'VMS';
	$cardtype = 2;
	break;	
	case 6:
	$cardName = 'ZING';
	$TxtCard = 'ZING';
	$cardtype = 7;
	break;
	default:
	$json['code']=1;
	$json['msg'] = 'Loại thẻ không hợp lệ.';
	$cardtype = 0;
	break;
}
if(strlen($Code) < 5 || strlen($Code) < 5 || !is_numeric($Amount)){
	$json['code'] = 1;
	$json['msg'] = 'Dữ liệu không hợp lệ.';
}
if($json['code']){
		$username = $_SESSION['user'];
		$param = array(
		'ApiKey' => '4ee23c1edcbafdfa678bea64b659122f';//CONFIG API DOITHECAO6789
		'Pin' => $Code,
		'Seri' => $Serial,
		'CardType' => $cardtype,
		'CardValue' => $Amount
		);
		$url = 'https://doithecao6789.com/api/card';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type=application/json'));
		curl_setopt($ch, CURLOPT_POST, count($param));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $param); 
		$rs = curl_exec($ch);
		curl_close($ch);
		$jsondeco = json_decode($rs);
		if($jsondeco->Code == 1){
		$taskid = $jsondeco->TaskID;
		$mysql->insert('logscardcham', array('UserName' => $username, 'UserSet' => 'doithecao6789', 'Type' => 0, 'NameCard' => $cardName, 'VND' => 0, 'Money' => $Amount, 'Seri' => $Serial, 'Pin' => $Code, 'Time' => date("Y-m-d,h:m:s"), 'TaskId' => $taskid));
		$json['code'] = 0;
		$json['msg'] = 'Thẻ đã được gửi lên hệ thống, vui lòng chờ duyệt';
	}else{
		//$result->msg = $jsondeco->Message;
		$json['code'] = 99;
		$json['msg'] = $jsondeco->Message;
		}
	
}
echo json_encode($json);
?>