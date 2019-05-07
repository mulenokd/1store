<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

	CModule::IncludeModule("iblock");
	$el = new CIBlockElement;

	$PROP = array();
	$isLikedBefore = false;
	$userID = $USER->GetID();

    $res = CIBlockElement::GetProperty(6, $_GET['id'], "sort", "asc", array("CODE" => "LIKES"));
    while ($ob = $res->GetNext())
    {	
        if ($ob['VALUE'] != $userID) {
        	$PROP['LIKES'][] = $ob['VALUE'];
        } else {
        	$isLikedBefore = true;
        }
    }

    if (!$isLikedBefore) {
    	array_push($PROP['LIKES'], intval($userID)) ;
    }

	$arLoadProductArray = Array(
	  "PROPERTY_VALUES"=> $PROP,
	);

	if($el->Update($_GET['id'], $arLoadProductArray)){
		echo count($PROP['LIKES']);
	}
?>