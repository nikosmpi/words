<?php 
$letters = explode(' ', file_get_contents('dict.txt'));
$remove = mb_strtoupper($_POST['remove']);
$letter1 = mb_strtoupper($_POST['letter1']);
$letter2 = mb_strtoupper($_POST['letter2']);
$letter3 = mb_strtoupper($_POST['letter3']);
$letter4 = mb_strtoupper($_POST['letter4']);
$letter5 = mb_strtoupper($_POST['letter5']);
$returnArray = array();
foreach($letters as $lt) {
	$ltr = mb_str_split($lt, 1);
	if(count($ltr) > 0) {
		$let1 = (($letter1 === $ltr[0] || $letter1 === '') && !in_array($ltr[0], mb_str_split($remove, 1)));
		$let2 = (($letter2 === $ltr[1] || $letter1 === '') && !in_array($ltr[1], mb_str_split($remove, 1)));
		$let3 = (($letter3 === $ltr[2] || $letter1 === '') && !in_array($ltr[2], mb_str_split($remove, 1)));
		$let4 = (($letter4 === $ltr[3] || $letter1 === '') && !in_array($ltr[3], mb_str_split($remove, 1)));
		$let5 = (($letter5 === $ltr[4] || $letter1 === '') && !in_array($ltr[4], mb_str_split($remove, 1)));
		if($let1 && $let2 && $let3 && $let4 && $let5) {
			$returnArray[] = $lt;
		}

	}
}
echo json_encode($returnArray);