<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CreativePeople</title>
		<?php
			require_once "php/check_mobile.php";
			if ( check_mobile() ) {
				?>
					<link rel="stylesheet" type="text/css" href="styles/mobile/style.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/card.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/cashback.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/credit.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/footer.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/header.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/mobile.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/promo.css">
				<?php
			}
			else {
				?>
					<link rel="stylesheet" type="text/css" href="styles/style.css">
					<link rel="stylesheet" type="text/css" href="styles/card.css">
					<link rel="stylesheet" type="text/css" href="styles/cashback.css">
					<link rel="stylesheet" type="text/css" href="styles/credit.css">
					<link rel="stylesheet" type="text/css" href="styles/footer.css">
					<link rel="stylesheet" type="text/css" href="styles/header.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile.css">
					<link rel="stylesheet" type="text/css" href="styles/promo.css">
				<?php
			}
		?>
	</head>
	<body>
		<header>
			<div class="logos">
				<img src="images/raiff_logo.svg">
				<img src="images/visa_Logo.svg">
			</div>
			<div class="contact">
				<img src="images/phone.svg">
				<p class="number">8 800 770-75-62</p>
				<p class="free">Бесплатно по России</p>
			</div>
		</header>
		<div id="promo">
			<div class="promo_info">
				<img src="images/sticker_mobile.svg" id="sticker_mob">
				<img src="images/sticker.svg" id="sticker_desk">
				<p class="title">Кредитная карта с кэшбэком</p>
				<p class="percent"><span>1,5</span>%</p>
				<a href="#card"><button class="promo_button">Оформить онлайн</button></a>
			</div>
		</div>
		<a href="#card"><button id="button_mobile">Оформить онлайн</button></a>
		<div id="cashback">
			<div class="container">
				<div class="text_items">
					<div class="item">
						<p class="title"><span>1,5</span>%</p>
						<p class="description">кэшбэк рублями</p>
					</div>
					<div class="item">
						<p class="title"><span>0₽</span></p>
						<p class="description">обслуживание</p>
					</div>
					<div class="item">
						<p class="title">до <span>52</span> дней</p>
						<p class="description">без процентов</p>
					</div>
					<div class="item">
						<p class="title">до <span>600</span> тыс. ₽</p>
						<p class="description">кредитный лимит</p>
						<p class="description_mob">и 52 дня без %</p>
					</div>
				</div>
			</div>
			<p class="cashback_title">
				Кэшбэк 1,5% 
				без ограничений
			</p>
			<div class="card_items">
				<img src="images/cashback1.svg">
				<img src="images/cashback2.svg">
				<img src="images/cashback3.svg">
			</div>
		</div>
		<div id="credit">
			<p class="title">Возьмите дополнительный кредит</p>
			<p class="title_mob">Дополнительный кредит на любые цели</p>
			<p class="subtitle">Кредит на любые цели. Получите решение за 2 минуты</p>
			<p class="subtitle_mob">Получите решение за 2 минуты</p>
			<div class="credit_block">
				<div class="left_part">
					<div class="item">
						<div class="text">
							<p class="question">Какая сумма нужна?</p>
							<p class="result" id="result_sum">500 000 ₽</p>
						</div>
						<input 
							type="range" 
							min="90000" 
							max="2000000" 
							step="1" 
							value="500000" 
							oninput="document.querySelector('#result_sum').innerText = this.value + ' ₽'"> 
						<div class="range">
							<p class="min">90 000 ₽</p>
							<p class="max">2 000 000 ₽</p>
						</div>
					</div>
					<div class="item">
						<div class="text">
							<p class="question">На какой срок?</p>
							<p class="result" id="result_mes">36 мес.</p>
						</div>
						<input 
							type="range" 
							min="13" 
							max="60" 
							step="1" 
							value="36"
							oninput="document.querySelector('#result_mes').innerText = this.value + ' мес.'" 
						> 
						<div class="range">
							<p class="min">13 мес.</p>
							<p class="max">60 мес.</p>
						</div>
					</div>
					<p class="addition">Расчет платежа приведен с учетом финансовой защиты. Не является офертой.</p>
				</div>
				<div class="right_part">
					<div class="item">
						<p class="result">10,99%</p>
						<p class="description">ваша ставка</p>
					</div>
					<div class="item">
						<p class="result">14 265 ₽</p>
						<p class="description">ежемесячный платёж</p>
					</div>
					<button class="credit_button">Получить кредит</button>
					<p class="addition_mob">Расчет платежа приведен с учетом финансовой защиты. Не является офертой.</p>
				</div>
			</div>
		</div>
		<div id="card">
			<p class="title">Оформите карту онлайн</p>
			<div class="text_card">
				<img src="images/card1.svg">
				<img src="images/card2.svg">
				<img src="images/card3.svg">
			</div>
			<div class="card_form">
				<p class="info">Форма заявки на кредитную карту</p>
			</div>
		</div>
		<div id="mobile">
			<p class="title">Удобный мобильный банк</p>
			<p class="subtitle">Пользуйтесь услугами онлайн 
				без визита в отделение
			</p>
			<div class="mobile_scrolling">
				<svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="arrow" xmlns="http://www.w3.org/2000/svg">
					<path d="M28 0H14C10.2903 0.0107117 6.73553 1.48915 4.11234 4.11234C1.48915 6.73553 0.0107117 10.2903 0 14V28C0.0107117 31.7097 1.48915 35.2645 4.11234 37.8877C6.73553 40.5109 10.2903 41.9893 14 42H28C31.7097 41.9893 35.2645 40.5109 37.8877 37.8877C40.5109 35.2645 41.9893 31.7097 42 28V14C41.9893 10.2903 40.5109 6.73553 37.8877 4.11234C35.2645 1.48915 31.7097 0.0107117 28 0V0Z" fill="#FEE600"/>
					<path d="M29.1666 22.0207H16.7411L22.4433 27.7232V29.1666H20.9998L12.8333 20.9999L21 12.8333H22.4434V14.2767L16.7411 19.9791H29.1666V22.0207Z" fill="#2B2D33"/>
				</svg>
				<div class="scroll">
					<img src="images/phone1.svg">
					<img src="images/phone2.svg">
					<img src="images/phone3.svg">
					<img src="images/phone4.svg">
				</div>
				<svg width="42" height="42" viewBox="0 0 42 42" class="arrow" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14 0H28C31.7097 0.0107117 35.2645 1.48915 37.8877 4.11234C40.5109 6.73553 41.9893 10.2903 42 14V28C41.9893 31.7097 40.5109 35.2645 37.8877 37.8877C35.2645 40.5109 31.7097 41.9893 28 42H14C10.2903 41.9893 6.73553 40.5109 4.11234 37.8877C1.48915 35.2645 0.0107117 31.7097 0 28L0 14C0.0107117 10.2903 1.48915 6.73553 4.11234 4.11234C6.73553 1.48915 10.2903 0.0107117 14 0V0Z" fill="#FEE600"/>
					<path d="M12.8333 22.0207H25.2589L19.5567 27.7232V29.1666H21.0001L29.1666 20.9999L21 12.8333H19.5565V14.2767L25.2589 19.9791H12.8333V22.0207Z" fill="#2B2D33"/>
				</svg>
				<img src="images/dots.svg" class="dots" id="dots">
			</div>
			<a href="#card"><button class="mobile_button">Оформить карту онлайн</button></a>
		</div>
		<footer>
			<div class="madeby">
				<div class="container">
					<p class="company_name">© АО «Райффайзенбанк»</p>
					<p class="company_data">Генеральная лицензия Банка России № 3292 от 17.02.2015. Юридический адрес: 129090, Москва, ул. Троицкая, д. 17, стр. 1</p>
				</div>
			</div>
			<div class="scroll_info">
				Кэшбэк – возврат средств. Кэшбэк начисляется на любые покупки, совершенные по карте VISA Кэшбэк на всё, в размере 1,5 % от суммы расходной операции. Начисленный за календарный месяц кэшбэк выплачивается рублями на счет клиента в течение 7 рабочих дней после окончания соответствующего календарного месяца. Кэшбэк не начисляется за совершение некоторых видов операций согласно правилам программы, размещенным на сайте raif.ru. <br><br>
				Сроки проведения акции «Бесплатная кредитная карта «Кэшбэк на всё» для существующих и новых клиентов АО «Райффайзенбанк» — с 01.06.20 по 31.08.20. Информация об организаторе акции, о правилах ее проведения, количестве призов или выигрышей по результатам такой акции, сроках, месте и порядке их получения размещена на на raif.ru или по 8 800 770 09 08. <br><br>
				В течение льготного периода до 52 дней, проценты по кредиту не начисляются на безналичные операции при условии своевременного внесения минимальных платежей и полного погашения задолженности последнего отчетного периода. Ставка 19-49% годовых определяется индивидуально по результатам оценки кредитоспособности клиента и категории совершаемых клиентом операций по карте. Лимит кредита возобновляемый 15 000-600 000 руб., срок действия лимита не ограничен сроком действия кредитной карты. <br><br>
				Кредитный договор действует до момента исполнения сторонами своих обязательств. Комиссии: за процессинг по картам, подключенным к программе лояльности: не взимается по акции/ вне акции 1490 руб. в год по основной карте, 500 рублей в год по дополнительной карте; за выдачу наличных в банкоматах банка и банков-партнеров – 3% от суммы снятия+300 руб/ в иных банкоматах – 3,9 % + 300 руб.; за переводы на карты банка/на карты других банков — 3% от суммы перевода+300 руб.; за квази-кэш-операции—3% от суммы операции + 300 руб.; за сервис «уведомление об операциях» - 60 руб. по основной/45 руб. по дополнительной карте в мес.; за совершение операции за рубежом в валюте, отличной от валюты счета — 1,65% от суммы операции; за внесение наличных денежных средств через кассу банка — 100 руб. (при внесении до 10 000 руб.). <br><br>
				Банк принимает решение о предоставлении кредита на основании всей полученной информации и требований к заемщику. Действительно на 01.06.20. АО «Райффайзенбанк» 0+
			</div>
		</footer>
	</body>
</html>