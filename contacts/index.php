<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
	<!-- <div class="b-breadcrumbs">
		<div class="b-block">
			<a href="/1store/index.php" class="icon-home"></a>
			<a href="#" onclick="return false;">Контакты</a>
		</div>
	</div> -->
	<div class="b-subcategory b-contacts-block">
		<div class="b-block">
			<h1>Контакты</h1>
			<div class="b-1-by-3-blocks">
				<div class="b-block-1">
					<div class="b-category-left-list">
						<ul>
							<li><a href="#">Возврат и обмен товара</a></li>
							<li><a href="#">Как заказать товар</a></li>
							<li><a href="#">Часто задаваемые вопросы</a></li>
							<li><a href="#">Промокоды, купоны, карты</a></li>
							<li><a href="#">Доставка</a></li>
							<li><a href="#">Оплата</a></li>
							<li><a href="#">Бонусная программа</a></li>
							<li><a href="#" class="active">Контакты</a></li>
							<li><a href="#">Сертификаты соответствия</a></li>
						</ul>
					</div>
				</div>
				<div class="b-block-2">
					<h3>Свяжитесь с нами любым удобным способом</h3>
					<h4>По рабочим дням с 10 до 19 Мск</h4>
					<div class="b-contacts-container">
						<div class="b-contacts-left-block">
							<div class="b-contacts-phone b-contacts-left-inner">
								<div class="b-contacts-phone-text">По телефонам:</div>
								<a href="tel:+74959225055" class="b-contacts-phone-link">+ 7 (495) 922 50 55</a>
								<a href="tel:+74956447572" class="b-contacts-phone-link">+ 7 (495) 644 75 72</a>
								<div class="b-contacts-phone-soc">
									<a href="#" class="b-contacts-phone-soc-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/icon-contacts-soc-1.svg');"></a>
									<a href="#" class="b-contacts-phone-soc-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/icon-contacts-soc-2.svg');"></a>
									<a href="#" class="b-contacts-phone-soc-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/icon-contacts-soc-3.svg');"></a>
								</div>
							</div>
							<div class="b-contacts-mail b-contacts-left-inner">
								<div class="b-contacts-mail-text">По электронной почте:</div>
								<a href="mailto:voprosrukovodstvo1@mail.ru" class="b-contacts-mail-link">voprosrukovodstvo1@mail.ru</a>
							</div>
						</div>
						<div class="b-contacts-right-block">
							<div class="b-contacts-right-head">Реквизиты компании</div>
							<div class="b-contacts-right-small">Полное наименование компании</div>
							<div class="b-contacts-right-big">ООО «ПРОГРЕСС»</div>
							<div class="b-contacts-right-small">Юридический, фактический и почтовый адрес:</div>
							<div class="b-contacts-right-big">1227055 г. Москва, ул. Новослободская, д. 14/19, стр. 8, эт. 1, пом. 2, ком. 2 </div>
							<div class="b-contacts-right-small">Телефон:</div>
							<div class="b-contacts-right-big">+7 (495) 922 50 55</div>
							<div class="b-contacts-right-small">ОГРН:</div>
							<div class="b-contacts-right-big">5167746291070</div>
						</div>
					</div>
					<div id="contacts-map" class="b-contacts-map"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="b-contacts-form-block wave-top">
		<div class="b-block">
			<div class="b-contacts-top-form clearfix">
				<div class="b-1-by-3-blocks">
					<div class="b-block-1">
						<div class="b-faq-form-man">
							<div class="b-faq-form-man-img" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/faq.jpg');"></div>
							<div class="b-faq-form-man-name">Анжелика Сирнова</div>
							<div class="b-faq-form-man-post">Менеджер</div>
						</div>
					</div>
					<div class="b-block-2">
						<h4 class="semibold">У вас есть вопрос? </h4>
						<h5 class="semibold">Задайте его, и наш менеджер ответит в течение 10 минут.</h5>
						<div class="b-faq-form">
							<form action="#" method="POST">
								<div class="b-faq-form-textarea">
									<textarea name="faq-question" id="question" rows="4" placeholder="Введите вопрос"></textarea>
								</div>
								<div class="b-faq-form-bottom">
									<a href="#" class="b-btn ajax">Задать вопрос</a>
									<a href="#" class="pink semibold">Зарегистрироваться</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="b-contacts-bottom-form">
				<div class="b-1-by-3-blocks">
					<div class="b-block-1">
						<div class="b-faq-form-man">
							<div class="b-faq-form-man-img" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/i/faq.jpg');"></div>
							<div class="b-faq-form-big-name">
								<div class="b-faq-form-man-name">Екатерина Мирная</div>
								<div class="b-faq-form-man-post">Директор Первого Магазина для&nbsp;Кондитеров</div>
							</div>
						</div>
					</div>
					<div class="b-block-2">
						<h4 class="bold">У вас особый вопрос?</h4>
						<h5 class="semibold">Напишите нашему директору.</h5>
						<div class="b-faq-form">
							<form action="#" method="POST">
								<div class="b-faq-form-input-container">
									<div class="b-faq-form-input">
										<input type="text" id="faq-mail" name="mail" placeholder="Введите ваш e-mail*" required />
									</div>
								</div>
								<div class="b-faq-form-textarea">
									<textarea name="faq-question" id="question" rows="4" placeholder="Чем мы можем быть вам полезны?*" required></textarea>
								</div>
								<div class="b-faq-form-bottom">
									<a href="#" class="b-btn ajax">Получить ответ от директора</a>
									<p>Екатерина свяжется с вами на следующий день.</p>
								</div>
								<div class="b-faq-checkbox">
									<label class="checkbox">
									  <input type="checkbox" value="discount" checked>
									  <span>Я принимаю условия <a href="#" class="dashed">передачи информации</a></span>
									</label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>