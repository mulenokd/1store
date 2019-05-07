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
<div class="b-subcategory wave-bottom">
	<div class="b-block">
		<h1><?$APPLICATION->ShowTitle();?></h1>
		<div class="b-1-by-3-blocks">
			<div class="b-block-1">
				<?
				$res = CIBlockSection::GetByID($GLOBALS["SECTION_ID"]);
				$ar_res = $res->GetNext();
				?>
				<div class="b-category-left-list">
					<ul>
						<li><a href="#">Кондитерские мешки</a></li>
						<li><a href="#">Насадки кондитерские</a></li>
						<li><a href="#">Насадка тюльран</a></li>
						<li><a href="#">Насадки для айсинга</a></li>
						<li><a href="#">Насадка роза</a></li>
						<li><a href="#">Насадка сфера</a></li>
						<li><a href="#">Наборы кондитерских насадок</a></li>
						<li><a href="#">Насадки Вилтон</a></li>
						<li><a href="#">Кондитерские шприцы</a></li>
						<li><a href="#">Переходники для насадок</a></li>
						<li><a href="#">Подставки для мешков</a></li>
						<li><a href="#">Специальные насадки</a></li>
						<li><a href="#">Круглые насадки</a></li>
						<li><a href="#">Насадки цветы</a></li>
						<li><a href="#">Насадки открытая звезда</a></li>
					</ul>
				</div>
			</div>
			<div class="b-block-2">
				<? if($ar_res['PICTURE']): ?>
					<?$renderImage = CFile::ResizeImageGet($ar_res['PICTURE'], Array("width" => 847, "height" => 262), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, $arFilters ); ?>
				<div class="b-subcategory-back" style="background-image: url(<?=$renderImage['src']?>);"></div>
				<?endif;?>
				<?if( count($arResult["SECTIONS"]) ): ?>
					<div class="b-category-list">
						<?foreach($arResult["SECTIONS"] as $key => $arItem):
							$arFilter = array('SECTION_ID' => intval($arItem['ID']));
							$rsSect = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter);
							$arSect = array();
							while ($arSect[] = $rsSect->GetNext()){};
							$isEmpty = 'empty-item';
							if (count($arSect) > 1) {$isEmpty = '';}
							?>
							<div class="b-catalog-item b-category-item">
								<? if($arItem['PICTURE']['SRC']): ?>
									<? $renderImage = CFile::ResizeImageGet($arItem['PICTURE'], Array("width" => 267, "height" => 178), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, $arFilters ); ?>
									<a href="<?=detailPageUrl($arItem["SECTION_PAGE_URL"])?>" class="b-catalog-img" style="background-image:url('<?=$renderImage['src']?>');"></a>
								<? else: ?>
									<a href="<?=detailPageUrl($arItem["SECTION_PAGE_URL"])?>" class="b-catalog-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/about-img.jpg');"></a>
								<? endif; ?>
								<div class="b-catalog-item-top <?=$isEmpty?>">
									<div class="b-category-item-back"></div>
									<div class="b-category-item-outer">
										<h6><a href="<?=detailPageUrl($arItem["SECTION_PAGE_URL"])?>"><?=$arItem['NAME']?></a></h6>
										<p class="b-category-count icon-tick">(<?=count($arSect)-1?>)</p>
									</div>
									<div class="b-category-item-inner">
										<ul>
											<?foreach ($arSect as $section):?>
												<li><a href="<?=detailPageUrl($section["SECTION_PAGE_URL"])?>"><?=$section['NAME']?></a></li>
											<?endforeach;?>
										</ul>
									</div>
								</div>
							</div>
						<?endforeach;?>
					</div>
				<?endif;?>
				<div class="b-catalog-preview b-subcategory-catalog-preview pagination-container">
					<div class="b-sort">
						<form action="" method="GET" class="b-catalog-form">
							<div class="b-sort-container">
								<div class="b-sort-item b-sort-type">
									<p><b>Сортировать по:</b></p>
									<div class="b-sort-select">
										<select name="sort">
											<option value="NAME">Алфавиту</option>
											<option value="PROPERTY_PRICE">PROPERTY_PRICE</option>
											<option value="PRICE">PRICE</option>
										</select>
										<input type="hidden" name="section_id" value="<?=$GLOBALS["SECTION_ID"]?>">
									</div>
								</div>
								<div class="b-sort-item b-sort-discount">
									<label class="checkbox">
									  <input type="checkbox" name="discount">
									  <span>Только со скидкой</span>
									</label>
								</div>
								<div class="b-sort-item b-sort-wholesale">
									<label class="checkbox">
									  <input type="checkbox" name="wholesale">
									  <span>Купить оптом</span>
									</label>
								</div>
							</div>
							<div class="b-sort-container">
								<div class="b-sort-item b-sort-count">
									<p><b>Показывать по:</b></p>
									<div class="b-sort-select">
										<select name="count">
											<option value="4">4</option>
											<option value="8">8</option>
											<option value="12">12</option>
										</select>
									</div>
								</div>
								<div class="b-sort-item b-sort-view">
									<a href="#" class="sort-icon icon-sort-2 active" data-style="small-tile"></a>
									<a href="#" class="sort-icon icon-list" data-style="list"></a>
								</div>
							</div>
						</form>
					</div>
					<?
					if ($_GET['discount']) {
						$arDiscounts = getDiscountProducts();
						$GLOBALS["arrDiscountFilter"][] = Array(
							"LOGIC"=>"OR",
							Array("ID" =>$arDiscounts["PRODUCTS"]),
							Array("SECTION_ID" => $arDiscounts["SECTIONS"], "INCLUDE_SUBSECTIONS" => "Y"),
						);
					}
					?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:catalog.section",
						"main",
						Array(
							"ACTION_VARIABLE" => "action",
							"ADD_PICT_PROP" => "MORE_PHOTO",
							"ADD_PROPERTIES_TO_BASKET" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"ADD_TO_BASKET_ACTION" => "ADD",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "Y",
							"AJAX_OPTION_JUMP" => "Y",
							"AJAX_OPTION_STYLE" => "Y",
							"BACKGROUND_IMAGE" => "-",
							"BASKET_URL" => "/personal/cart/",
							"BROWSER_TITLE" => "-",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "N",
							"COMPONENT_TEMPLATE" => ".default",
							"CONVERT_CURRENCY" => "N",
							"DETAIL_URL" => "",
							"DISABLE_INIT_JS_IN_COMPONENT" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"ELEMENT_SORT_FIELD" => isset($_GET['sort'])?$_GET['sort']:$_REQUEST["ORDER_FIELD"],
							"ELEMENT_SORT_FIELD2" => "id",
							"ELEMENT_SORT_ORDER" => $_REQUEST["ORDER_TYPE"],
							"ELEMENT_SORT_ORDER2" => "DESC",
							"FILTER_NAME" => "arrDiscountFilter",
							"HIDE_NOT_AVAILABLE" => "N",
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "catalog",
							"IBLOCK_TYPE_ID" => "catalog",
							"INCLUDE_SUBSECTIONS" => "A",
							"LABEL_PROP" => "SALELEADER",
							"LINE_ELEMENT_COUNT" => "1",
							"MESSAGE_404" => "",
							"MESS_BTN_ADD_TO_BASKET" => "В корзину",
							"MESS_BTN_BUY" => "Купить",
							"MESS_BTN_DETAIL" => "Подробнее",
							"MESS_BTN_SUBSCRIBE" => "Подписаться",
							"MESS_NOT_AVAILABLE" => "Заказ по телефону",
							"META_DESCRIPTION" => "-",
							"META_KEYWORDS" => "-",
							"OFFERS_CART_PROPERTIES" => array(0=>"COLOR_REF",1=>"SIZES_CLOTHES",),
							"OFFERS_FIELD_CODE" => array(0=>"",1=>"",),
							"OFFERS_LIMIT" => "5",
							"OFFERS_PROPERTY_CODE" => array(0=>"COLOR_REF",1=>"SIZES_CLOTHES",2=>"SIZES_SHOES",3=>"",),
							"OFFERS_SORT_FIELD" => isset($_GET['sort'])?$_GET['sort']:"sort",
							"OFFERS_SORT_FIELD2" => "id",
							"OFFERS_SORT_ORDER" => "asc",
							"OFFERS_SORT_ORDER2" => "desc",
							"OFFER_ADD_PICT_PROP" => "-",
							"OFFER_TREE_PROPS" => array(0=>"COLOR_REF",1=>"SIZES_SHOES",2=>"SIZES_CLOTHES",),
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "Y",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => "main",
							"PAGER_TITLE" => "Товары",
							"PAGE_ELEMENT_COUNT" => isset($_GET['count'])?$_GET['count']:4,
							"PARTIAL_PRODUCT_PROPERTIES" => "N",
							"PRICE_CODE" => array(0=>"PRICE",),
							"PRICE_VAT_INCLUDE" => "N",
							"PRODUCT_DISPLAY_MODE" => "N",
							"PRODUCT_ID_VARIABLE" => "id",
							"PRODUCT_PROPERTIES" => array(),
							"PRODUCT_PROPS_VARIABLE" => "prop",
							"PRODUCT_QUANTITY_VARIABLE" => "",
							"PRODUCT_SUBSCRIPTION" => "N",
							"PROPERTY_CODE" => array(0=>"",1=>"",),
							"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
							"SECTION_CODE_PATH" => "",
							"SECTION_ID" => "",
							"SECTION_ID_VARIABLE" => "SECTION_ID",
							"SECTION_URL" => "",
							"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
							"SEF_MODE" => "N",
							"SET_BROWSER_TITLE" => "Y",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "Y",
							"SHOW_404" => "N",
							"SHOW_ALL_WO_SECTION" => "Y",
							"SHOW_CLOSE_POPUP" => "N",
							"SHOW_DISCOUNT_PERCENT" => "N",
							"SHOW_OLD_PRICE" => "N",
							"SHOW_PRICE_COUNT" => "1",
							"TEMPLATE_THEME" => "site",
							"USE_MAIN_ELEMENT_SECTION" => "N",
							"USE_PRICE_COUNT" => "N",
							"USE_PRODUCT_QUANTITY" => "N",
							"WITH_REVIEWS" => ($isFirst)?"Y":"N",
							"WITH_CALLBACK" => ($isLast)?"Y":"N",
						),
					false,
					Array(
						'ACTIVE_COMPONENT' => 'Y'
					)
					);?>
				</div>
			</div>
		</div>
	</div>
</div>