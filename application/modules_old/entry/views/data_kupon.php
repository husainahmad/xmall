<?php
$action = $this->uri->segment(3);

if($action=="start"){ 
	foreach($kupon as $row):
      $arr[] = array( 
           'KuponId' => $row['KuponId'], 
           'MemberId' => $row['MemberId'],
           'NomorKupon' => $row['NomorKupon'] 
       ); 
	endforeach;
    echo json_encode($arr); 

}else{
    $MemberId = $_POST['MemberId']; 
	$pemenang = $this->data_model->get_member_pemenang($MemberId); 
} 

?>