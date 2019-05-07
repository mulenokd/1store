<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

global $APPLICATION;

$arFilters = Array(
    array("name" => "watermark", "position" => "center", "size"=>"resize", "coefficient" => 0.9, "alpha_level" => 29, "file" => $_SERVER['DOCUMENT_ROOT']."/upload/wat.png"),
);

$GLOBALS["isToys"] = ($arResult["IBLOCK_SECTION_ID"] == 8)?true:false;
$this->setFrameMode(true);
$APPLICATION->SetPageProperty('title', $arResult["NAME"]);
$APPLICATION->AddHeadString('<link rel="canonical" href="https://nevkusno.ru' . $arResult["DETAIL_PAGE_URL"] . '" />');

?>

<? $renderImage = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], Array("width" => 1000, "height" => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, false, $arFilters ); ?>
<? $bigImage = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], Array("width" => 1600, "height" => 1600), BX_RESIZE_IMAGE_PROPORTIONAL, false, $arFilters ); ?>

<div class="b-detail-item">
	<div class="b-block">
		<div class="b-detail-left-block">
			<div class="b-detail-top-slider">
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-1.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-2.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-4.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-5.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg');"></div>
			</div>
			<div class="b-detail-bottom-slider">
				<div class="b-detail-small-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-1.jpg');"></div>
				<div class="b-detail-small-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-2.jpg');"></div>
				<div class="b-detail-small-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg');"></div>
				<div class="b-detail-small-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-4.jpg');"></div>
				<div class="b-detail-small-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-5.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg');"></div>
			</div>
		</div>
		<div class="b-detail-right-block">
			<h3>Силиконовая форма Multiflex ШИШКИ 3D 5 шт. Foresta110 Silikomart</h3>
			<div class="b-detail-bonus-container">
				<div class="b-detail-bonus green-bonus">-5% при оплате онлайн</div>
				<div class="b-detail-bonus purple-bonus bonus-with-add icon-info">Вернем 50% от стоимости доставки<div class="b-detail-bonus-add">Возврат осуществляется в случае</div></div>
			</div>
			<div class="b-detail-top-slider b-detail-mobile-slider">
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-1.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-2.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-4.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-5.jpg');"></div>
				<div class="b-detail-big-pic" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg');"></div>
			</div>
			<div class="detail-price-container">
				<div class="price-container b-discount-price">
					<p class="old-price icon-rub">1 600</p>
					<p class="new-price pink icon-rub">1 280</p>
					<div class="cheaper-mobile">
						<a href="#" class="pink dashed">Купить этот товар дешевле</a>
					</div>
					<p class="app-price">Эксклюзивные цены в <a href="#" class="pink dashed">приложении</a></p>
				</div>
				<div class="b-detail-discount">
					<div class="b-detail-disount-icon icon-discount-full">-25%</div>
					<div class="discount-time">17 ч : 49 м : 58 с</div>
				</div>
			</div>
			<div class="detail-select-block">
				<div class="b-sort-select">
					<select name="color">
						<option value="popular">Светло-зелёный</option>
						<option value="ASC">Тёмно-зелёный</option>
						<option value="DESC">Жёлтый</option>
					</select>
				</div>
				<div class="b-sort-select">
					<select name="size">
						<option value="popular">15x15 средняя</option>
						<option value="ASC">7x7 маленькая</option>
						<option value="DESC">20x20 большая</option>
					</select>
				</div>
			</div>
			<div class="b-detail-count-block">
				<div class="b-detail-count">
					<a href="#" class="icon-plus"></a>
					<p class="bold">2</p>
					<a href="#" class="icon-minus"></a>
				</div>
				<div class="b-detail-buy b-detail-buy-mobile">
					<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
				</div>
				<a href="#" class="pink dashed cheaper">Купить этот товар дешевле</a>
			</div>
			<div class="b-detail-buy">
				<a href="#" class="b-btn icon-cart"><p>Добавить в корзину</p></a>
				<div class="b-detail-one-click">или <a href="#" class="pink dashed">купить в один клик</a></div>
			</div>
			<div class="b-detail-tabs">
				<div id="b-detail-tabs-slider" class="b-tabs-container b-tabs-container-underline">
					<div class="b-tab active" data-tab="description">Описание</div>
					<div class="b-tab" data-tab="delivery">Доставка</div>
					<div class="b-tab" data-tab="review">Отзывы (10)</div>
					<div class="b-tab" data-tab="recipes">Рецепты с продуктом</div>
				</div>
				<div class="b-tab-item b-tab-about" id="description">
					<div class="detail-description-text">Форма на 5 ячеек для профессионального использования из силикона с пластиковым держателем.</div>
					<div class="detail-description-text"><b>Размеры:</b> диаметр 60 мм , высота 73 мм, объем 108 мл х 5 = 540 мл</div>
					<div class="detail-description-text"><b>Рекомендации по применению:</b> идеально подходят для выпечки, приготовления десертов и пирожных, холодных закусок, заливного, желе. Могут быть использованы в температурном режиме от -60 С до +230 С. После применения формы необходимо тщательно вымыть и просушить.</div>
					<div class="detail-description-text"><b>Внимание!</b> Не ставьте форму непосредственно на источник тепла. Не режьте изделия непосредственно в форме. Не используйте агрессивные моющие средства и жесткие губки. Не используйте форму в микроволновой печи в режиме "гриль". Рекомендации После выпечки нужно дать изделию полностью остыть для лучшего извлечения из формы. Рекомендуется также перед выпечкой предварительно смазывать формы маслом. Для полного устранения следов жира в форме, ее достаточно просто прокипятить в воде 10 минут.</div>
					<div class="detail-description-text"><b>Срок годности:</b> неограничен</div>
					<div class="detail-description-text"><b>Условия хранения:</b> хранить вдали от источников тепла и солнечных лучей при температуре от 15 до 25 °C</div>
				</div>
				<div class="b-tab-item b-tab-about hide" id="delivery">
					<p><b>Размеры:</b> диаметр 60 мм , высота 73 мм, объем 108 мл х 5 = 540 мл<br><br>
					<b>Рекомендации по применению:</b> идеально подходят для выпечки, приготовления десертов и пирожных, холодных закусок, заливного, желе. Могут быть использованы в температурном режиме от -60 С до +230 С. После применения формы необходимо тщательно вымыть и просушить.<br><br>
					<b>Внимание!</b> Не ставьте форму непосредственно на источник тепла. Не режьте изделия непосредственно в форме. Не используйте агрессивные моющие средства и жесткие губки. Не используйте форму в микроволновой печи в режиме "гриль". Рекомендации После выпечки нужно дать изделию полностью остыть для лучшего извлечения из формы. Рекомендуется также перед выпечкой предварительно смазывать формы маслом. Для полного устранения следов жира в форме, ее достаточно просто прокипятить в воде 10 минут.<br><br>
					<b>Срок годности:</b> неограничен<br><br>
					<b>Условия хранения:</b> хранить вдали от источников тепла и солнечных лучей при температуре от 15 до 25 °C<br><br>
					Форма на 5 ячеек для профессионального использования из силикона с пластиковым держателем.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="about-advantages detail-advantages">
	<h2>При покупке этого товара вы получаете</h2>
	<div class="b-block">
		<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-1.svg');">
			<h4>Срочная доставка</h4>
			<p>Сделали заказ до 12 часов?<br>Доставим сегодня</p>
		</div>
		<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-2.svg');">
			<h4>Безопасная оплата</h4>
			<p>При оплате банковской картой на сайте, используется 256-битное шифрование информации</p>
		</div>
		<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-3.svg');">
			<h4>30 дней на обмен</h4>
			<p>Не понравилась покупка?<br>Обменяем без проблем!</p>
		</div>
		<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/detail-adv-1.svg');">
			<h4>Гарантия качества</h4>
			<p>Все товары<br>сертифицированы</p>
		</div>
		<div class="about-advantages-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/about-adv-6.svg');">
			<h4>Скидки и бонусы</h4>
			<p>Двойные бонусы в день<br>рождения</p>
		</div>
	</div>
</div>
<div class="b-last-item-block b-last-detail wave-top">
	<div class="b-block">
		<h2>Вместе с этим товаром покупают</h2>
		<div class="b-catalog-slider">
			<div class="b-catalog-item">
				<a href="#" class="item-link"></a>
				<div class="b-catalog-back"></div>
				<div class="b-catalog-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-1.jpg');">
				</div>
				<div class="b-catalog-item-top">
					<h6>Силиконовая форма Multiflex ЕЖЕВИКА и МАЛИНА 3D Mora Lampone Silikomart</h6>
					<p class="article">Арт. 4023</p>
					<p class="description">Мешок силиконовый, производство Китай. Предназначен для работы с кремом. Необходимо использования кондитерских насадок. </p>
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
				<a href="#" class="item-link"></a>
				<div class="b-catalog-back"></div>
				<div class="b-catalog-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-2.jpg');">
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
				<a href="#" class="item-link"></a>
				<div class="b-catalog-back"></div>
				<div class="b-catalog-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-3.jpg');">
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
				<a href="#" class="item-link"></a>
				<div class="b-catalog-back"></div>
				<div class="b-catalog-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-4.jpg');">
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
			<div class="b-catalog-item discount-item">
				<a href="#" class="item-link"></a>
				<div class="b-catalog-back"></div>
				<div class="b-catalog-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-5.jpg');">
					<div class="catalog-item-discount icon-discount-full"><p>-15%</p></div>
				</div>
				<div class="b-catalog-item-top">
					<h6>Силиконовая форма Tortaflex ИГРА Game1200 Silikomart</h6>
					<p class="article">Арт. 2563</p>
				</div>
				<div class="b-catalog-item-bottom">
					<div class="price-container b-discount-price">
						<p class="old-price icon-rub">1 600</p>
						<p class="new-price pink icon-rub">1 280</p>
					</div>
					<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
					<div class="b-one-click-buy">
						<a href="#" class="dashed pink">Купить в один клик</a>
					</div>
				</div>
			</div>
			<div class="b-catalog-item">
				<a href="#" class="item-link"></a>
				<div class="b-catalog-back"></div>
				<div class="b-catalog-img" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/i/catalog-item-6.jpg');">
				</div>
				<div class="b-catalog-item-top">
					<h6>Силиконовая форма Tortaflex ВОРТЕКС Vortex Silikomart</h6>
					<p class="article">Арт. 7838</p>
				</div>
				<div class="b-catalog-item-bottom">
					<div class="price-container">
						<p class="price icon-rub">2 130</p>
					</div>
					<a href="#" class="b-btn icon-cart"><p>В корзину</p></a>
					<div class="b-one-click-buy">
						<a href="#" class="dashed pink">Купить в один клик</a>
					</div>
				</div>
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

<div class="b-detail clearfix">
	<div class="b-detail-left">
		<a href="<?=$bigImage["src"]?>" class="fancy-img"><img src="<?=$renderImage["src"]?>"></a>
		<div class="b-stars-detail">
			<div class="b-stars b-stars-<?=$arResult["AVERAGE_RATING"]?>">
				<div class="b-star"></div>
				<div class="b-star"></div>
				<div class="b-star"></div>
				<div class="b-star"></div>
				<div class="b-star"></div>
			</div>
			<div class="b-reviews-count">
				<p><?=$arResult["COUNT_REVIEWS"]?> <?=plural_form($arResult["COUNT_REVIEWS"], array("отзыв", "отзыва", "отзывов"))?></p>
			</div>
			<div class="b-add-review-btn">
				<a href="#b-review-form" class="b-btn b-brown-btn fancy item-review-btn" data-id="<?=$arResult["ID"]?>" ><span>Оставить отзыв</span></a>
			</div>
		</div>
	</div>
	<div class="b-detail-right">
		<? if($arResult["PROPERTIES"]["COUNTRY"]["VALUE"]): ?>
			<div class="b-detail-country"><?=$arResult["PROPERTIES"]["COUNTRY"]["VALUE"]?></div>
		<? endif; ?>
		<div class="b-catalog-item-bottom b-detail-price">
			<div class="price-container">
				<? if( $arResult["PRICES"]["PRICE"]["DISCOUNT_VALUE"] != $arResult["PRICES"]["PRICE"]["VALUE"] ): ?>
					<div class="b-discount-price">
						<div class="old-price icon-rub"><?=number_format( $arResult["PRICES"]["PRICE"]["VALUE"], 0, ',', ' ' )?></div>
						<div class="new-price icon-rub"><?=number_format( $arResult["PRICES"]["PRICE"]["DISCOUNT_VALUE"], 0, ',', ' ' )?></div>
					</div>
				<? else: ?>
					<p class="price b-dynamic-price icon-rub"><?=number_format( $arResult["PRICES"]["PRICE"]["VALUE"], 0, ',', ' ' )?></p>
					<? if( count($arResult["ITEM_PRICES"]) > 1 ): ?>
						<? foreach ($arResult["ITEM_PRICES"] as $kp => $price): ?>
							<? if( $kp == 0 ) continue; ?>
							<div class="b-discount-price b-dynamic-price b-dynamic-discount-price" style="display:none;" data-from="<?=$price["QUANTITY_FROM"]?>">
								<div class="old-price icon-rub"><?=number_format( $arResult["PRICES"]["PRICE"]["VALUE"], 0, ',', ' ' )?></div>
								<div class="new-price icon-rub"><?=number_format( $price["PRICE"], 0, ',', ' ' )?></div>
							</div>
						<? endforeach; ?>
					<? endif; ?>
				<? endif; ?>
			</div>
			<? if( count($arResult["ITEM_PRICES"]) > 1 ): ?>
				<div class="b-wholesale-price">
					<!-- Оптом дешевле<br> -->
					<? foreach ($arResult["ITEM_PRICES"] as $kp => $price): ?>
						<? if( $kp == 0 ) continue; ?>
						от <?=$price["QUANTITY_FROM"]?> шт. – <span class="price icon-rub"><?=number_format( $price["PRICE"], 0, ',', ' ' )?></span><br>
					<? endforeach; ?>
				</div>
			<? endif; ?>
			<div class="b-detail-count b-basket-count-cont<? if( isset($arResult["BASKET"]) ): ?> b-item-in-basket<? endif; ?>">
				<? if( $arResult["CATALOG_QUANTITY"] ): ?>
					<div class="b-basket-count">
						<div class="b-input-cont">
							<a href="#" class="icon-minus b-change-quantity" data-side="-"></a>
							<a href="#" class="icon-plus b-change-quantity" data-side="+"></a>
							<input type="text" name="quantity" data-min="1" data-max="<?=$arResult["CATALOG_QUANTITY"]?>" data-id="<?=$arResult["ID"]?>" class="b-quantity-input" maxlength="3" oninput="this.value = this.value.replace(/\D/g, '')" value="<?=( (isset($arResult["BASKET"]))?$arResult["BASKET"]["QUANTITY"]:1 )?>">
						</div>
					</div>
					<a href="/ajax/?partial=1&ELEMENT_ID=<?=$arResult["ID"]?>&action=ADD2BASKET" class="b-btn icon-cart b-btn-to-cart"><span>В корзину</span></a>
					<div class="b-error-max-count">Доступно для заказа: <?=$arResult["CATALOG_QUANTITY"]?> шт.</div>
				<? else: ?>
					<div class="b-catalog-item-empty">Нет в наличии</div>
					<div class="b-catalog-item-empty-text">Вы можете оставить заявку на данный товар.<br>Когда товар будет в наличии, Вам придет автоматическое письмо на почту.</div>
					<?$APPLICATION->IncludeComponent(
					    "bitrix:catalog.product.subscribe",
					    "main",
					    Array(
					        "BUTTON_CLASS" => "b-btn b-green-btn",
					        "BUTTON_ID" => $arResult["ID"],
					        "CACHE_TIME" => "3600",
					        "CACHE_TYPE" => "A",
					        "PRODUCT_ID" => $arResult["ID"]
					    )
					);?>
				<? endif; ?>
			</div>
		</div>
		<div class="b-text">
			<div class="b-detail-text limit">
				<div class="b-detail-text-wrap">
					<div class="b-subtitle">Описание:</div>
					<?=$arResult["DETAIL_TEXT"]?>
				</div>
			</div>
			<a href='#' class="b-detail-text-more">Читать полностью</a>

			<? if($arResult["PROPERTIES"]["COMPOSITION"]["VALUE"]): ?>
				<div class="b-opacity">
					<div class="b-subtitle">Состав:</div>
					<p><?=$arResult["PROPERTIES"]["COMPOSITION"]["VALUE"]?></p>
				</div>
			<? endif; ?>

			<? if($arResult["PROPERTIES"]["ENERGY"]["VALUE"]): ?>
				<div class="b-opacity">
					<div class="b-subtitle">Энергетическая ценность:</div>
					<p><?=$arResult["PROPERTIES"]["ENERGY"]["VALUE"]?></p>
				</div>
			<? endif; ?>

			<? foreach ($arResult["AMOUNT"] as $store): ?>
				<p><a href="/magazin/" class="b-green-link"><?=$store["STORE_NAME"]?></a> – в наличии на текущее утро<br><?=number_format( ceil($arResult["PRICES"]["PRICE"]["VALUE"]*1.07), 0, ',', ' ' )?> руб.</p>
			<? endforeach; ?>
		</div>
	</div>
</div>
<? 
	$GLOBALS["arProductReviews"] = array(
		"PROPERTY_PRODUCT_ID" => $arResult["ID"]
	); 
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT","","DATE_CREATE"),
		"FILTER_NAME" => "arProductReviews",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("PRODUCT_ID", "USER_ID"),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC"
	)
);?> 
<?
if( $arResult["PROPERTIES"]["SIMILAR"]["VALUE"] ){
	$GLOBALS["arrFilterSimilar"] = array(
		"ID" => getSimilarFilter($arResult["ID"], $GLOBALS["SECTION_ID"], 16, $arResult["PROPERTIES"]["SIMILAR"]["VALUE"]),
	);
}else{
	$GLOBALS["arrFilterSimilar"] = array(
		"ID" => getSimilarFilter($arResult["ID"], $GLOBALS["SECTION_ID"], 16),
	);
}
?>
<div class="b-detail-items">
	<h3>Похожие товары</h3>
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
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_SORT_FIELD" => "",
			"ELEMENT_SORT_FIELD2" => "id",
			"ELEMENT_SORT_ORDER" => "",
			"ELEMENT_SORT_ORDER2" => "DESC",
			"FILTER_NAME" => "arrFilterSimilar",
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
			"OFFERS_SORT_FIELD" => "sort",
			"OFFERS_SORT_FIELD2" => "id",
			"OFFERS_SORT_ORDER" => "desc",
			"OFFERS_SORT_ORDER2" => "desc",
			"OFFER_ADD_PICT_PROP" => "-",
			"OFFER_TREE_PROPS" => array(0=>"COLOR_REF",1=>"SIZES_SHOES",2=>"SIZES_CLOTHES",),
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "main",
			"PAGER_TITLE" => "Товары",
			"PAGE_ELEMENT_COUNT" => 100,
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
			"SECTION_ID_VARIABLE" => "",
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
			"WITH_REVIEWS" => "N",
			"WITH_CALLBACK" => "N",
			"CLASS" => "b-catalog-slider",
			"CUSTOM_ORDER" => $arResult["PROPERTIES"]["SIMILAR"]["VALUE"]
		),
	false,
	Array(
		'ACTIVE_COMPONENT' => 'Y'
	)
	);?>
</div>
<? if( $recently = getRecently($arResult["ID"]) ): ?>
	<div class="b-detail-items">
		<h3>Вы недавно смотрели</h3>
		<?
		$GLOBALS["arrFilterRecently"] = array(
			"ID" => $recently
		);
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
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => $_REQUEST["ORDER_FIELD"],
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => $_REQUEST["ORDER_TYPE"],
				"ELEMENT_SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "arrFilterRecently",
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
				"PAGE_ELEMENT_COUNT" => 16,
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
				"WITH_REVIEWS" => "N",
				"WITH_CALLBACK" => "N",
				"CLASS" => "b-catalog-slider",
				"CUSTOM_ORDER" => $recently,
			),
		false,
		Array(
			'ACTIVE_COMPONENT' => 'Y'
		)
		);?>
	</div>
<? endif; ?>