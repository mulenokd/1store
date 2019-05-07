<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

	CModule::IncludeModule("iblock");
	$el = new CIBlockElement;

	$PROP = array();
	$userID = $USER->GetID();
	$PROP['WORK_ID'] = $_POST['id'];
	$PROP['USER_ID'] = $userID;
	$PROP['PARENT_COMMENT'] = $_POST['parent_comment'];

	$arLoadProductArray = Array(
	  "IBLOCK_ID"      => 7,
	  "PROPERTY_VALUES"=> $PROP,
	  "NAME"           => $_POST["comment_textarea"],
	  "ACTIVE"         => "Y",
	  "DATE_ACTIVE_FROM" => ConvertTimeStamp(time(), "FULL")
	);
	
	if($el->Add($arLoadProductArray)){
		echo "1";
	}
	else{
		echo "0";
	}

?>