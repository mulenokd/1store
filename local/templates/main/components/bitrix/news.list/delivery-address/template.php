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

<? $curPage = $APPLICATION->GetCurPage(); ?>
<? $isMain = ( $curPage == "/" )?true:false; ?>

<? if(count($arResult["ITEMS"])): ?>
	<? $i = 0; ?>
	<? foreach($arResult["ITEMS"] as $arItem): ?>
		<div class="b-popup-edit-container" id="address-container">
			<? if ($i == 0): ?>
				<div class="b-popup-h4">Адрес доставки</div>
			<? else: ?>
				<a href="#" class="b-popup-h4 b-popup-edit-add icon-minus">Адрес доставки</a>
			<? endif; ?>
			<div class="b-popup-edit-block">
				<div class="b-input-string">
					<input type="text" class="b-popup-input" name="addr[<?=$i?>][INDEX]" placeholder="Индекс" value="<?=$arItem["PROPERTIES"]["INDEX"]["VALUE"]?>" required/>
				</div>
				<div class="b-input-string">
					<input type="text" class="b-popup-input" name="addr[<?=$i?>][REGION]" placeholder="Область" value="<?=$arItem["PROPERTIES"]["REGION"]["VALUE"]?>" required/>
				</div>
				<div class="b-input-string">
					<input type="text" class="b-popup-input" name="addr[<?=$i?>][CITY]" placeholder="Город" value="<?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?>" required/>
				</div>
				<div class="b-input-string">
					<input type="text" class="b-popup-input" name="addr[<?=$i?>][STREET]" placeholder="Улица" value="<?=$arItem["PROPERTIES"]["STREET"]["VALUE"]?>" required/>
				</div>
				<div class="b-input-string">
					<input type="phone" class="b-popup-input" name="addr[<?=$i?>][HOUSE]" placeholder="Дом" value="<?=$arItem["PROPERTIES"]["HOUSE"]["VALUE"]?>" required/>
				</div>
				<div class="b-input-string">
					<input type="phone" class="b-popup-input" name="addr[<?=$i?>][FLAT]" placeholder="Квартира" value="<?=$arItem["PROPERTIES"]["FLAT"]["VALUE"]?>" required/>
				</div>
				<input type="hidden" class="address-item-id" name="addr[<?=$i?>][id]" value="<?=$arItem["ID"]?>">
			</div>
		</div>
		<? $i++; ?>
	<? endforeach; ?>
	<a href="#" class="b-popup-h4 b-popup-edit-add icon-plus" data-clone="<?=$i?>">Добавить адрес</a>
<? endif; ?>