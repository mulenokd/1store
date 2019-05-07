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
	<h3>Ответы на самые популярные вопросы</h3>
	<div class="b-faq-list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 107, "height" => 107), BX_RESIZE_IMAGE_EXACT, false, $arFilters );
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="b-faq-item <?if (isset($arItem["PREVIEW_PICTURE"])):?>with-img<?else:?>no-img<?endif;?>">
				<div class="b-faq-header"><?=$arItem['NAME']?>
					<div class="b-faq-header-icon">
						<div class="b-faq-header-icon-line"></div>
						<div class="b-faq-header-icon-line"></div>
					</div>
				</div>
				<div class="b-faq-content">
					<?if (isset($arItem["PREVIEW_PICTURE"])):?>
					<div class="b-faq-img" style="background-image:url('<?=$renderImage['src']?>')"></div>
					<?endif;?>
					<div class="b-faq-item-text"><?=$arItem['PREVIEW_TEXT']?></div>
				</div>
			</div>
		<?endforeach;?>
	</div>
<? endif; ?>