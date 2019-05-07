<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Товары для кондитера, инструменты для кондитера");
$APPLICATION->SetPageProperty("description", "Магазин по продаже товаров для профессионального кондитера");
$APPLICATION->SetTitle("Вкусный магазин для кондитеров и кулинаров");

?>

<div class="b-banners">
	<div class="b-block">
		<div class="b-banner b-banner-1">
			<h4><span class="bold">«Первый магазин» –</span><br>эксклюзивный дистрибьютор в России</h4>
			<img src="<?=SITE_TEMPLATE_PATH?>/i/banner-back-1-info.png">
			<h5>Лидер на рынке <span class="bold">пищевых красителей</span></h5>
			<div class="b-banner-columns">
				<div class="b-banner-column"><h6>30 насыщенных оттенков</h6></div>
				<div class="b-banner-column"><h6>Кошерный и халяльный продукт</h6></div>
			</div>
			<a href="#" class="b-btn">Смотреть каталог</a>
		</div>
		<div class="b-banner b-banner-2">
			<h6><span class="bold">Продавайте</span> свои работы дороже в&nbsp;2&nbsp;раза, уже сегодня управляя домашним бизнесом <span class="bold">с помощью приложения:</span></h6>
			<a href="#" class="b-btn">Узнать&nbsp;подробнее</a>
		</div>
	</div>
</div>
<div class="b-catalog-preview">
	<div class="b-block">
		<div class="b-big-tabs clearfix">
			<div class="b-big-tab-container">
				<h2 class="" data-tab="catalog-new">Новинки</h2>
			</div>
			<div class="b-big-tab-container">
				<h2 class="deactive" data-tab="catalog-lead">Лидеры продаж</h2>
			</div>
			<div class="b-big-tab-container tab-link clearfix">
				<a href="/catalog" class="underline icon-arrow">Смотреть все</a>
			</div>
		</div>
		<? $class1 = ''; ?>
		<? $class2 = 'hide'; ?>
		<? if ($_GET['PAGEN_2']): ?>
			<? $class1 = 'hide'; ?>
			<? $class2 = ''; ?>
		<? endif; ?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section",
			"main",
			Array(
				"ACTION_VARIABLE" => "action",
				"ADD_PICT_PROP" => "MORE_PHOTO",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"ADD_TO_BASKET_ACTION" => "ADD",
				"AJAX_MODE" => "Y",
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
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "ASC",
				"ELEMENT_SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "arrFilter2",
				"HIDE_NOT_AVAILABLE" => "Y",
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
				"OFFERS_SORT_FIELD" => "sort",
				"OFFERS_SORT_FIELD2" => "id",
				"OFFERS_SORT_ORDER" => "desc",
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
				"PAGE_ELEMENT_COUNT" => 4,
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
				"SECTION_CODE" => "",
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
				"SET_TITLE" => "N",
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
				"CLASS" => $class1,
				"LIST_ID" => "catalog-new",
			),
		false,
		Array(
			'ACTIVE_COMPONENT' => 'Y'
		)
		);?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section",
			"main",
			Array(
				"ACTION_VARIABLE" => "action",
				"ADD_PICT_PROP" => "MORE_PHOTO",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"ADD_TO_BASKET_ACTION" => "ADD",
				"AJAX_MODE" => "Y",
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
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "ASC",
				"ELEMENT_SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "arrFilter2",
				"HIDE_NOT_AVAILABLE" => "Y",
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
				"OFFERS_SORT_FIELD" => "sort",
				"OFFERS_SORT_FIELD2" => "id",
				"OFFERS_SORT_ORDER" => "desc",
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
				"PAGE_ELEMENT_COUNT" => 4,
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
				"SECTION_CODE" => "",
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
				"SET_TITLE" => "N",
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
				"CLASS" => $class2,
				"LIST_ID" => "catalog-lead",
			),
		false,
		Array(
			'ACTIVE_COMPONENT' => 'Y'
		)
		);?>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news"
	),
	false
);?>
<div class="b-daily-product">
	<div class="b-block">
		<div class="b-two-blocks">
			<div class="b-block-1 b-two-blocks-item">
				<h2>Товар дня*</h2>
				<h3>от «Первого магазина»</h3>
				<h4>Узнавайте об <span class="bold">акциях и новинках</span> первыми</h4>
				<h4>Подпишитесь на рассылку и покупайте<br>с выгодой для себя</h4>
				<form action="/kitsend.php" class="b-one-string-form">
					<input type="text" placeholder="Введите ваш E-mail">
					<a href="#" class="pink">Подписаться</a>
				</form>
			</div>
			<div class="b-block-2 b-two-blocks-item">
				<? $GLOBALS['arDailyFilter'] = array("PROPERTY_DAILY_VALUE" => "Y"); ?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section",
					"daily",
					Array(
						"ACTION_VARIABLE" => "action",
						"ADD_PICT_PROP" => "MORE_PHOTO",
						"ADD_PROPERTIES_TO_BASKET" => "Y",
						"ADD_SECTIONS_CHAIN" => "Y",
						"ADD_TO_BASKET_ACTION" => "ADD",
						"AJAX_MODE" => "Y",
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
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_TOP_PAGER" => "N",
						"ELEMENT_SORT_FIELD" => "sort",
						"ELEMENT_SORT_FIELD2" => "id",
						"ELEMENT_SORT_ORDER" => "ASC",
						"ELEMENT_SORT_ORDER2" => "DESC",
						"FILTER_NAME" => "arDailyFilter",
						"HIDE_NOT_AVAILABLE" => "Y",
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
						"OFFERS_SORT_FIELD" => "sort",
						"OFFERS_SORT_FIELD2" => "id",
						"OFFERS_SORT_ORDER" => "desc",
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
						"PAGE_ELEMENT_COUNT" => 1,
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
						"SECTION_CODE" => "",
						"SECTION_CODE_PATH" => "",
						"SECTION_ID" => "",
						"SECTION_ID_VARIABLE" => "SECTION_ID",
						"SECTION_URL" => "",
						"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
						"SEF_MODE" => "N",
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "Y",
						"SET_META_KEYWORDS" => "Y",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
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
<div class="b-own-products">
	<div class="b-block">
		<div class="b-own-container clearfix">
			<h2><span class="bold">Собственные бренды — </span>это высокое качество по доступной цене</h2>
			<ul class="b-advantages">
				<li>Всегда в наличии</li>
				<li>Экономно</li>
				<li>Качественно</li>
				<li>Безопасно</li>
				<li>Разумный выбор</li>
			</ul>
			<div class="b-own-products-text left">
				<h4>Кондитерская<br>паста <b>«Наша мастика»</b></h4>
				<p>Мягкая пластичная масса для покрытия тортов или создания разных декоративных украшений для тортов и десертов.</p>
			</div>
			<div class="b-own-products-text right">
				<h4>Кондитерская<br>упаковка <b>«Sweets bear»</b></h4>
				<p>Кондитерская упаковка для ваших&nbsp;сладких десертов.<br>Удобная конструкция, высокое качество и&nbsp;экологичность материалов, выгодные цены.</p>
			</div>	
		</div>
	</div>
</div>
<div class="b-tabs b-catalog-tabs wave-top">
	<div class="b-block">
		<div id="b-catalog-tabs-top-slider" class="b-tabs-container b-tabs-container-underline" >
			<div class="b-tab active" data-tab="gingerbreads">Для пряников</div>
			<div class="b-tab" data-tab="candies">Для конфет</div>
			<div class="b-tab" data-tab="cakepops">Для кейкпопсов</div>
			<div class="b-tab" data-tab="chocolates">Для шоколада</div>
			<div class="b-tab" data-tab="cookies">Для печенья</div>
			<div class="b-tab" data-tab="cupcakes">Для капкейков</div>
			<div class="b-tab" data-tab="makaron">Для макарун</div>
		</div>
		<div class="b-tab-item" id="gingerbreads">
			<div id="b-catalog-tabs-bottom-slider-1" class="b-tabs-container b-tabs-container-dashed">
				<div class="b-tab active" data-tab="gingerbreads-chocolate">Шоколад</div>
				<div class="b-tab" data-tab="gingerbreads-mixes">Сухие смеси</div>
				<div class="b-tab" data-tab="gingerbreads-dyes">Красители</div>
				<div class="b-tab" data-tab="gingerbreads-tools">Инструмент</div>
				<div class="b-tab" data-tab="gingerbreads-capsules">Капсулы бумажные</div>
				<div class="b-tab" data-tab="gingerbreads-forms">Формы для выпечки</div>
				<div class="b-tab" data-tab="gingerbreads-pack">Упаковка</div>
			</div>
			<div class="b-tab-item b-catalog-list" id="gingerbreads-chocolate">
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-1.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Multiflex ЕЖЕВИКА и МАЛИНА 3D Mora Lampone Silikomart</h6>
						<p class="article">Арт. 4023</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">250</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-2.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Multiflex ШИШКИ 3D 5 шт. Foresta110 Silikomart</h6>
						<p class="article">Арт. 8340</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">1 280</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Pavocake БОМБА 3D Bombee Pavoni</h6>
						<p class="article">Арт. 8340</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">850</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-4.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Pavocake САВАРЕН 3D Pavoni</h6>
						<p class="article">Арт. 2301</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">650</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
			</div>
			<div class="b-tab-item b-catalog-list hide" id="gingerbreads-mixes">
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-4.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Pavocake САВАРЕН 3D Pavoni</h6>
						<p class="article">Арт. 2301</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">650</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-1.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Multiflex ЕЖЕВИКА и МАЛИНА 3D Mora Lampone Silikomart</h6>
						<p class="article">Арт. 4023</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">250</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-2.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Multiflex ШИШКИ 3D 5 шт. Foresta110 Silikomart</h6>
						<p class="article">Арт. 8340</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">1 280</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Pavocake БОМБА 3D Bombee Pavoni</h6>
						<p class="article">Арт. 8340</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">850</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="b-btn b-btn-white">Все товары для пряников</a>
		</div>
		<div class="b-tab-item hide" id="candies">
			<div  id="b-catalog-tabs-bottom-slider-2" class="b-tabs-container b-tabs-container-dashed">
				<div class="b-tab" data-tab="gingerbreads-chocolate">Шоколад</div>
				<div class="b-tab" data-tab="gingerbreads-mixes">Сухие смеси</div>
				<div class="b-tab active" data-tab="gingerbreads-dyes">Красители</div>
				<div class="b-tab" data-tab="gingerbreads-tools">Инструмент</div>
				<div class="b-tab" data-tab="gingerbreads-capsules">Капсулы бумажные</div>
				<div class="b-tab" data-tab="gingerbreads-forms">Формы для выпечки</div>
				<div class="b-tab" data-tab="gingerbreads-pack">Упаковка</div>
			</div>
			<div class="b-tab-item b-catalog-list" id="gingerbreads-chocolate">
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-1.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Multiflex ЕЖЕВИКА и МАЛИНА 3D Mora Lampone Silikomart</h6>
						<p class="article">Арт. 4023</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">250</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-2.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Multiflex ШИШКИ 3D 5 шт. Foresta110 Silikomart</h6>
						<p class="article">Арт. 8340</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">1 280</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Pavocake БОМБА 3D Bombee Pavoni</h6>
						<p class="article">Арт. 8340</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">850</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
				<div class="b-catalog-item">
					<div class="b-catalog-back"></div>
					<div class="b-catalog-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/i/catalog-item-4.jpg" alt="">
					</div>
					<div class="b-catalog-item-top">
						<h6>Силиконовая форма Pavocake САВАРЕН 3D Pavoni</h6>
						<p class="article">Арт. 2301</p>
					</div>
					<div class="b-catalog-item-bottom">
						<div class="price-container">
							<p class="price icon-rub">650</p>
						</div>
						<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
						<div class="b-one-click-buy">
							<a href="#" class="dashed pink">Купить в один клик</a>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="b-btn b-btn-white">Все товары для конфет</a>
		</div>
	</div>
</div>
<div class="b-bonus">
	<div class="b-block">
		<div class="b-bonus-img">
			<h2>Бонусная программа</h2>
			<p>от Первого магазина для кондитеров</p>
		</div>
	</div>
</div>
<div class="b-video-block">
	<?
	$arSelect = Array();
	$arFilter = Array("IBLOCK_ID"=> 5);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	$i = 0;
	while($ob = $res->GetNextElement()){
		$arr['FIELDS'][] = $ob->GetFields();
		$arr['PROPS'][] = $ob->GetProperties();
	}

	$arFilter = array();
	$arLinks = array();

	foreach ($arr['FIELDS'] as $key => $value) {
		array_push($arLinks, $value['NAME']);
	}

	foreach ($arr['PROPS'] as $key => $value) {
		array_push($arFilter, intval($value['item']["VALUE"]));
	}

	$GLOBALS['arVideoFilter'] = array("=ID" => $arFilter);

	?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		"video",
		Array(
			"ACTION_VARIABLE" => "action",
			"ADD_PICT_PROP" => "MORE_PHOTO",
			"ADD_PROPERTIES_TO_BASKET" => "Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"ADD_TO_BASKET_ACTION" => "ADD",
			"AJAX_MODE" => "Y",
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
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_FIELD2" => "id",
			"ELEMENT_SORT_ORDER" => "ASC",
			"ELEMENT_SORT_ORDER2" => "DESC",
			"FILTER_NAME" => "arVideoFilter",
			"HIDE_NOT_AVAILABLE" => "Y",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "catalog",
			"IBLOCK_TYPE_ID" => "catalog",
			"INCLUDE_SUBSECTIONS" => "A",
			"LABEL_PROP" => "SALELEADER",
			"LINE_ELEMENT_COUNT" => "3",
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
			"OFFERS_SORT_FIELD" => "sort",
			"OFFERS_SORT_FIELD2" => "id",
			"OFFERS_SORT_ORDER" => "desc",
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
			"PAGE_ELEMENT_COUNT" => 3,
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
			"SECTION_CODE" => "",
			"SECTION_CODE_PATH" => "",
			"SECTION_ID" => "",
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
			"SEF_MODE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
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
			"CLASS" => " ",
			"LINKS" => $arLinks,
		),
	false,
	Array(
		'ACTIVE_COMPONENT' => 'Y'
	)
	);?>
</div>
<div class="b-gallery-preview wave-top wave-bottom">
	<div class="b-block">
		<div class="b-1-by-3-blocks">
			<div class="b-block-1">
				<h2>Покажи и&nbsp;расскажи</h2>
				<p>Вдохновляйтесь работами других покупателей и делитесь своими</p>
				<a href="/gallery" class="b-btn b-btn-white">В галерею</a>
			</div>
			<div class="b-block-2">
				<h4>Случайные работы</h4>
				<div class="b-1-by-3-container">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list", 
						"gallery", 
						array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array(
								0 => "",
								1 => "",
							),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "6",
							"IBLOCK_TYPE" => "content",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"INCLUDE_SUBSECTIONS" => "Y",
							"MESSAGE_404" => "",
							"NEWS_COUNT" => "3",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => "main",
							"PAGER_TITLE" => "Новости",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array(
								0 => "PHOTOS",
								1 => "",
							),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SORT_BY1" => "RAND",
							"SORT_BY2" => "SORT",
							"SORT_ORDER1" => "DESC",
							"SORT_ORDER2" => "ASC",
							"STRICT_SECTION_CHECK" => "N",
							"COMPONENT_TEMPLATE" => "news"
						),
						false
					);?>
				</div>
				<a href="#b-popup-add-work" class="b-btn b-btn-full-white fancy">Загрузить свою работу</a>
			</div>
		</div>
	</div>
</div>
<div class="b-bottom-catalog">
	<div class="b-block">
		<div id="b-bottom-tabs-slider" class="b-tabs-container b-tabs-container-underline">
			<div class="b-tab active" data-tab="about">О магазине</div>
			<div class="b-tab" data-tab="inventory">Инвентарь</div>
			<div class="b-tab" data-tab="regs">Ингредиенты</div>
			<div class="b-tab" data-tab="colors">Красители</div>
			<div class="b-tab" data-tab="brands">Бренды</div>
			<div class="b-tab" data-tab="forms">Формы</div>
		</div>
		<div class="b-tab-item b-tab-about" id="about">
			<div class="b-2-by-1-blocks">
				<div class="b-block-1">
					<p>Самый большой интернет-магазин кондитерского инвентаря и ингредиентов. Мы предлагаем только то, что используем сами. В каталоге нашего магазина вы найдете товары для профессионалов и для домашней выпечки.<br><br>
					Самый большой интернет-магазин кондитерского инвентаря и ингредиентов. Мы предлагаем только то, что используем сами. В каталоге нашего магазина вы найдете товары для профессионалов и для домашней выпечки. Самый большой интернет-магазин кондитерского инвентаря и ингредиентов.</p>
				</div>
				<div class="b-block-2">
					<h3>Сделаем сайт лучше!</h3>
					<h6>Ответьте всего на 5 вопросов</h6>
					<a href="#" class="b-btn b-btn-white">Пройти опрос</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="about-advantages-preview">
	<div class="b-block">
		<div class="about-advantages">
			<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-1.svg');">
				<h4>Удобная доставка</h4>
				<p>Сделали заказ до 14 часов?<br>Доставим завтра</p>
			</div>
			<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-2.svg');">
				<h4>Безопасная оплата</h4>
				<p>Более 20 способов оплаты<br>через зашифрованное соединение</p>
			</div>
			<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-3.svg');">
				<h4>30 дней на обмен</h4>
				<p>Не понравилась покупка?<br>Обменяем без проблем!</p>
			</div>
			<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-4.svg');">
				<h4>Ассортимент</h4>
				<p>В наличии на складе<br>более 7 000 наименований</p>
			</div>
			<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-5.svg');">
				<h4>Пункты самовывозом</h4>
				<p>Более 2 000 пунктов<br>самовывоза</p>
			</div>
			<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-6.svg');">
				<h4>Лучшие цены</h4>
				<p>Нашли дешевле? Сообщите нам.<br>Покупай больше, плати меньше!</p>
			</div>
		</div>
	</div>
</div>
<div class="b-sub-block">
	<div class="b-block">
		<h2 class="sub-title">Узнавайте об <b>акциях и новинках</b> первыми</h2>
		<h5>Подпишитесь на рассылку и покупайте с выгодой для себя</h5>
		<form action="/kitsend.php" class="b-one-string-form">
			<input type="text" placeholder="Введите ваш E-mail">
			<a href="#" class="pink">Подписаться</a>
		</form>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>