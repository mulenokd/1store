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
	<? if( $isMain ): ?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<? if ($arItem["PREVIEW_PICTURE"]) {
				$renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 267, "height" => 189), BX_RESIZE_IMAGE_PROPORTIONAL, false, $arFilters ); 
			} else {
				$renderImage['src'] = "".SITE_TEMPLATE_PATH."/i/certificate.jpg";
			} 
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="b-1-by-3-item">
				<? if(is_array($arItem["PROPERTIES"]["PHOTOS"]["VALUE"])): ?>
					<?$renderImage = CFile::ResizeImageGet($arItem["PROPERTIES"]["PHOTOS"]["VALUE"][0], Array("width" => 534, "height" => 534), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, $arFilters ); ?>
				<div class="gallery-preview-img" style="background-image:url('<?=$renderImage['src']?>');"></div>
				<? else: ?>
				<div class="gallery-preview-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/works-4.jpg');"></div>
				<? endif; ?>
				<div class="b-like icon-like">
					<?if (is_array($arItem["PROPERTIES"]["LIKES"]["VALUE"])){
						echo count($arItem["PROPERTIES"]["LIKES"]["VALUE"]);
					} else {
						echo 0;
					}
					?>
				</div>
			</div>
		<?endforeach;?>
	<? else: ?>
		<div class="b-works-list pagination-list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<? if ($arItem["PREVIEW_PICTURE"]) {
					$renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 267, "height" => 189), BX_RESIZE_IMAGE_PROPORTIONAL, false, $arFilters ); 
				} else {
					$renderImage['src'] = "".SITE_TEMPLATE_PATH."/i/certificate.jpg";
				} 
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="b-works-item-container">
					<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="b-works-item">
						<? if(is_array($arItem["PROPERTIES"]["PHOTOS"]["VALUE"])): ?>
							<?$renderImage = CFile::ResizeImageGet($arItem["PROPERTIES"]["PHOTOS"]["VALUE"][0], Array("width" => 534, "height" => 534), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, $arFilters ); ?>
						<div class="b-works-back" style="background-image:url('<?=$renderImage['src']?>');"></div>
						<? else: ?>
						<div class="b-works-back" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/works-4.jpg');"></div>
						<? endif; ?>
						<div class="b-works-back-gradient"></div>
						<div class="b-works-item-icons">
							<div class="b-works-item-icon icon-photo">
								<?if (is_array($arItem["PROPERTIES"]["PHOTOS"]["VALUE"])){
									echo count($arItem["PROPERTIES"]["PHOTOS"]["VALUE"]);
								} else {
									echo 0;
								}
								?>
							</div>
							<div class="b-works-item-icon icon-works-like">
								<?if (is_array($arItem["PROPERTIES"]["LIKES"]["VALUE"])){
									echo count($arItem["PROPERTIES"]["LIKES"]["VALUE"]);
								} else {
									echo 0;
								}
								?>
							</div>
							<div class="b-works-item-icon icon-comment">
								<?
									$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
									$arFilter = Array("IBLOCK_ID"=>7, "ACTIVE"=>"Y", "PROPERTY_WORK_ID" => $arItem['ID']);
									$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
									$commentCount = 0;
									while($ob = $res->GetNextElement())
									{
										$commentCount++;
									}
									echo $commentCount;
								?>
							</div>
						</div>
					</a>
					<div class="b-work-name"><?=$arItem['NAME']?></div>
				</div>
			<? endforeach; ?>
		</div>
		<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
			<div class="b-load-more-container">
			<?=$arResult["NAV_STRING"];?>
			</div>
		<?endif;?>
	<? endif; ?>
<? endif; ?>