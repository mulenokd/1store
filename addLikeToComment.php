<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

	CModule::IncludeModule("iblock");
	$el = new CIBlockElement;

	$PROP = array();
	$isLikedBefore = false;
	$isDislikedBefore = false;
	$userID = $USER->GetID();
	$mark = $_GET['mark'];

	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
	$arFilter = Array("ID"=>$_GET['id'], "IBLOCK_ID"=>7);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement())
	{
		$item = $ob->GetProperties();
	}

	if (is_array($item['LIKES']['VALUE'])){
		foreach ($item['LIKES']['VALUE'] as $key => $user) {
			if ($user == $userID) {
	        	$isLikedBefore = true;
	        }
		}
	} 

	if (is_array($item['DISLIKES']['VALUE'])){
		foreach ($item['DISLIKES']['VALUE'] as $key => $user) {
			if ($user == $userID) {
	        	$isDislikedBefore = true;
	        }
		}
	} 

	if (!$isLikedBefore && !$isDislikedBefore) {
		$item[$mark]['VALUE'][] = $userID;
    	// var_dump("1");
    } elseif (!$isLikedBefore && $isDislikedBefore && $mark == "LIKES") {
    	$item['LIKES']['VALUE'][] = $userID;
    	foreach ($item['DISLIKES']['VALUE'] as $key => $value) {
    		if ($value == $userID) {
    			array_splice($item['DISLIKES']['VALUE'], $key, 1);
    		}
    	}
    	// var_dump("2");
    } elseif($isLikedBefore && !$isDislikedBefore && $mark == "DISLIKES") {
    	$item['DISLIKES']['VALUE'][] = $userID;
    	foreach ($item['LIKES']['VALUE'] as $key => $value) {
    		if ($value == $userID) {
    			array_splice($item['LIKES']['VALUE'], $key, 1);
    		}
    	}
    	array_splice($item['LIKES']['VALUE'], $userID, 1);
    	// var_dump("3");
    } elseif ($isLikedBefore && !$isDislikedBefore && $mark == "LIKES") {
    	foreach ($item['LIKES']['VALUE'] as $key => $value) {
    		if ($value == $userID) {
    			array_splice($item['LIKES']['VALUE'], $key, 1);
    		}
    	}
    	// var_dump('4');
    } elseif (!$isLikedBefore && $isDislikedBefore && $mark == "DISLIKES") {
    	foreach ($item['DISLIKES']['VALUE'] as $key => $value) {
    		if ($value == $userID) {
    			array_splice($item['DISLIKES']['VALUE'], $key, 1);
    		}
    	}
    	// var_dump('5');
    }

    var_dump('isLikedBefore');
    var_dump($isLikedBefore);
	var_dump('isDislikedBefore');
	var_dump($isDislikedBefore);

    var_dump("dislikes");
    var_dump($item['DISLIKES']['VALUE']);
    var_dump("likes");
    var_dump($item['LIKES']['VALUE']);

    if(count($item['LIKES']['VALUE']) == 0){
    	$item['LIKES']['VALUE'] = false;
    }
    if(count($item['DISLIKES']['VALUE']) == 0){
    	$item['DISLIKES']['VALUE'] = false;
    }

	CIBlockElement::SetPropertyValuesEx($_GET['id'], false, array("LIKES" => $item['LIKES']['VALUE'], 'DISLIKES' => $item['DISLIKES']['VALUE']));



?>