<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

	CModule::IncludeModule("iblock");
	$el = new CIBlockElement;

	$PROP = array();
	$arFile = array();

	foreach ($_POST as $key => $value) {
		if(substr($key, 0, 4) == "work"){
			array_push($arFile, array("VALUE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"].'/upload/tmp/'.$value),"DESCRIPTION"=>""));
		}
	}


	$ENUM_ID = '81'; // id значения свойства(Y)
	$PROP["PHOTOS"] = $arFile;
	$PROP["AUTHOR"]["VALUE"] = $USER->GetID();
	if ($_POST['no-comment'] == "on") {
		$PROP["DISALLOW_COMMENTS"] = array("VALUE" => $ENUM_ID);
	}

	$arParams = array("replace_space"=>"-","replace_other"=>"-");
	$name = Cutil::translit($_POST["name"],"ru",$arParams);

	$arLoadProductArray = Array(
	  "MODIFIED_BY"    => $USER->GetID(),
	  "IBLOCK_ID"      => 6,
	  "PROPERTY_VALUES"=> $PROP,
	  "NAME"           => $_POST["name"],
	  "CODE"		   => $name,
	  "ACTIVE"         => "Y",
	  "PREVIEW_TEXT"   => $_POST['text'],
	  "DATE_ACTIVE_FROM" => ConvertTimeStamp(time(), "FULL")
	);

	if($el->Add($arLoadProductArray)){
		echo "1";
	}
	else{
		echo "0";
	}
?>