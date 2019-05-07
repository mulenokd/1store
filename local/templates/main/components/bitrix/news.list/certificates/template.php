<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<? if(count($arResult["ITEMS"])): ?>
	<h3>Наша продукция имеет действующие<br>сертификаты качества</h3>
	<div class="b-certificates-list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 267, "height" => 378), BX_RESIZE_IMAGE_EXACT, false, $arFilters );
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="b-certificates-item fancy-img">
				<div class="b-certificate-img-cont icon-zoom">
					<img class="b-certificate-img" src="<?=$renderImage['src']?>">
				</div>
				<div class="b-certificate-name"><?=$arItem["NAME"]?></div>
			</a>
		<?endforeach;?>
	</div>
<? endif; ?>