<?php
  session_start();
 include_once('header.html');
?>
<link rel='stylesheet' type='text/css' href='services.css'>
<div id="container">

  <div class="descriptionDarkBG">
    <div class="descriptionDarkBGbody">
      <form action="send_order.php" method="post">
      <h2>Свяжитесь с нами по любому вопросу</h2>
      <p>
          <label>Тип заявки</label><br>
          <input name="type" type="text" size="20" maxlength="20">
      </p>
      <p>
          <label>Название сайта / Заявки</label><br>
          <input name="title" type="text" size="20" maxlength="25">
      </p>
      <p>
          <label>Описание</label><br>
          <textarea id="description" name="description"></textarea>
      </p>
      <p>
          <input type="submit" name="submit" value="Отправить заявку">
      </p>
      </form>
    </div>
  </div>

 <div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz141">Создание сайтов</h2>
 <div class="toggle_container hidden" id="zakaz141in" >
 <div class="block">
 <div class="block14zakaz">
 <div class="width50">
 <h3>Сайт Страница</h3>
 <img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz3.png" alt="создание сайта страницы"><b>Страница - самый недорогой вид одностраничного сайта.</b> Подходит, если Вам нужно заявить о своей компании, описать всего один товар или услугу. Либо как первый сайт, который потребует минимум времени для запуска. В дальнейшем возможен переход на любой тариф.<br>
 <div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
 <div class="width25">
 <i><b>Стоимость "под ключ" <a href="#inline" class="inline" data-modaal-scope="modaal_1648430386794d52575e916c27"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
 <span>14 700 рублей<br>
 <i>Срок разработки и запуска</i><br>
 15 рабочих дней</span><br>
 <i><b>Ускоренная разработка</b></i><br>
 <span>+30% к стоимости<br>
 срок 5 рабочих дней</span>
 </div>
<div class="width25">
 <h2>Заказать / Консультация</h2>
 <p>Мы свяжемся с вами через почту</p>
 
 
 <?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
 <div class="lr_form7">Заказать Сайт Страницу</div>
  
  
 <input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

 <div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
 <div class="lr_form11_hide">
 <div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
 <div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
 </div>

 <div class="lr_form6">Общая стоимость: 14700 руб.</div>
 <div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
 <input type="hidden" name="f_label" value="Заказать Сайт Страницу"><input type="hidden" name="f_cena" value="14700">
 </form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>

</div>
</div>
<div class="block14zakaz">
 <div class="width50">
 <h3>Landing Page (Посадочная страница)</h3>
 <img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz2.png" alt="создание сайта landing page (посадочная страница)"><b>Лендинг (посадочная страница или landing page) - это возможность показать посетителю уникальное товарное предложение (УТП), описание компании, сертификаты, дипломы, награды, отзывы клиентов, контакты и легко осуществить заказ с помощью всего одной (!) страницы.</b>
 Посадочная страница разрабатывается как основной или дополнительный сайт компании. Лэндинги отлично подходят для проведения рекламной кампании на конкретный товар или услугу с уникальной (низкой) ценой и привлечения на сайт целевой аудитории из контекстной рекламы (Яндекс.Директ, Google AdWords), социальных сетей или E-mail рассылок.
 Благодаря разработанной маркетологами структуре и использованию "триггеров", оказывающих воздействие на базовые инстинкты человека, такая посадочная страница побуждает посетителя к совершению целевого действия (оформлению заявки или звонка "здесь и сейчас"). Позволяет повысить конверсию посетителей в покупателей относительно использования "классического" сайта.
 Готовое решение Landing page от веб-студии "Рэдлайн" позволяет заполнить блоки страницы собственными текстами, картинками, описанием услуг или товаров, не меняя структуры. Не предусматривает возможность изменить дизайн сайта, но позволяет оформить в фирменном стиле компании.<br>
 <div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
 <div class="width25"> 
 <i><b>Стоимость "под ключ" <a href="#inline" class="inline" data-modaal-scope="modaal_1648430386794b5d67ee6ac9d2"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
 <span>от 14 700 рублей<br>
 <i>Срок разработки и запуска</i><br>
 15 рабочих дней</span><br>
 <i><b>Ускоренная разработка</b></i><br>
 <span>+30% к стоимости<br>
 срок 5 рабочих дней</span>
 </div>
 <div class="width25">
 <h2>Заказать / Консультация</h2>
 <p>Мы свяжемся с вами через почту</p>
 
 
  <?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
    <div class="lr_form7">Заказать Landing Page</div>
     
     
    <input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

    <div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
    <div class="lr_form11_hide">
    <div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
    <div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
    </div>

    <div class="lr_form6">Общая стоимость: 14700 руб.</div>
    <div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
    <input type="hidden" name="f_label" value="Заказать Landing Page"><input type="hidden" name="f_cena" value="14700">
  </form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
 </div>
</div>

<div class="block14zakaz">
<div class="width50">
<h3>Сайт Визитка</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz.png" alt="создание сайта визитки">Подходит для тех, кому недостаточно 1-й страницы для описания деятельности компании, но требуется не более 5-ти страниц с возможностью в последствии расширять сайт до неограниченного размера за счет наличия системы управления! На сайте можно разместить информацию о компании, услугах или продукции, опубликовать прайс-лист, контакты.
Позволяет создать <b>полноценный сайт при минимальных затратах на системе управления и с уникальным дизайном в фирменном стиле компании</b> на основе предложенных вариантов дизайна.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867959fe74dfe28ed4"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>17 700 рублей<br>
<i>Срок разработки и запуска</i><br>
25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок 10 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Сайт Визитку</div>
 
 
<input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 17700 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Сайт Визитку"><input type="hidden" name="f_cena" value="17700"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50" id="biznes-sait">
<h3>Сайт Бизнес</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz4.png" alt="создание сайта для бизнеса"><b>Оптимальное решение для запуска сайта организации с расширенной структурой и предварительным наполнением 15-ти страниц с возможностью в последствии расширять сайт до неограниченного размера. На сайте можно разместить информацию о компании, услугах или продукции, опубликовать прайс-лист, контакты и другую полезную информацию.</b>
Сайт Бизнес отлично подходит для компаний малого и среднего бизнеса, которые понимают, что на разработке сайта не нужно экономить, тк это в первую очередь инструмент для заработка денег.
Данное решение это полноценный сайт на системе управления и с уникальным дизайном в фирменном стиле компании на основе предложенных вариантов дизайна.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867950260be50a330e"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>21 700 рублей<br>
<i>Срок разработки и запуска</i><br>
25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок 10 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Сайт Бизнес</div>
 
 
<input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 21700 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Сайт Бизнес"><input type="hidden" name="f_cena" value="21700"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50">
<h3>Сайт Корпоративный</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz5.png" alt="создание корпоративного сайта">Отлично подойдет для компаний среднего и крупного бизнеса, которые хотят сделать своё интернет-представительство. Предварительное наполение 50-ти информационных страниц с неограниченной структурой и возможностью в последствии расширять сайт до неограниченного размера, позволяют размещать на таких сайтах развернутую и подробную информацию обо всех услугах и предложениях. Что в свою очередь выгодно сказывается как на имидже компании, так и на эффективности сайта в целом. На сайте можно разместить практически любую информацию о компании, её услугах или продукции, опубликовать прайс-листы, контакты с формами обратной связи и динамическими схемами проезда и другую полезную информацию.
<b>Данное решение это пожалуй самый эффективный вариант информационного сайта на системе управления и с уникальным дизайном в фирменном стиле компании на основе предложенных вариантов дизайна.</b><br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867951ed81f06bf44d"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>25 800 рублей<br>
<i>Срок разработки и запуска</i><br>
25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок 10 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Сайт Корпоративный</div>
 
 
<input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 25800 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Сайт Корпоративный"><input type="hidden" name="f_cena" value="25800"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50">
<h3>Сайт Каталог</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz6.png" alt="создание сайта интернет-каталога"><b>Интернет-каталог - специальное решение для компаний, желающих представить полный ассортимент предлагаемой продукции на своем сайте.</b> Каталог предполагает наличие информации о каждом товаре без корзины и возможности купить товары онлайн. Интернет-каталог - специальное решение для компаний, желающих представить полный ассортимент предлагаемой продукции на своем сайте. Каталог предполагает наличие информации о каждом товаре без корзины и возможности купить товары онлайн. По вашему желанию мы обеспечим возможность сделать заказ, отправив сообщение с формы на ваш электронный адрес.
Подходит для торговых компании имеющих большой ассортимент товара, но которые не готовы к работе с интернет-продажами. Создание полной структуры каталога и его предварительное наполение уже входит в стоимость. Также на сайте можно разместить практически любую информацию о компании, её услугах или продукции, опубликовать прайс-листы, контакты с формами обратной связи и динамическими схемами проезда и другую полезную информацию.
Сайт каталог разрабатывается на системе управления и с уникальным дизайном в фирменном стиле компании на основе предложенных вариантов дизайна.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_1648430386795db8cd58e68f5"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>34 800 рублей<br>
<i>Срок разработки и запуска</i><br>
25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок 10 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Сайт Каталог</div>
 
 
<input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 34800 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Сайт Каталог"><input type="hidden" name="f_cena" value="34800"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50">
<h3>Сайт Магазин</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz7.png" alt="создание сайта интернет-магазина">Индивидуальный дизайн вашего интернет-магазина и индивидуально настроенный функционал. Представляет собой интернет-магазин с базовым (и наиболее востребованным) функционалом: каталог товаров, корзина, оформление заказа на сайте, возможность электронной оплаты. Предусмотрено ведение личного кабинета клиента, выгрузка товаров из 1С или Excel. <b>Интернет-магазин "под ключ".</b>
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867956fe02f55690e8"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>44 300 рублей<br>
<i>Срок разработки и запуска</i><br>
25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок 10 рабочих дней</span>
</div>
<div class="width25">
<a class="btn1" href="#" ><i class="fa fa-envelope"></i> Заказать</a>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Интернет-Магазин</div>
 
 
<input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 44300 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Интернет-Магазин"><input type="hidden" name="f_cena" value="44300"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50" id="exclusive-sait">
<h3>Cайт Эксклюзивный Информационный</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz8.png" alt="создание информационного сайта"><b>Если Вам нужен сайт, с уникальным прикладным функционалом именно под ваши задачи.</b> С нестандартным внешним видом, подачей информации, информационной состовляющей и многим другим, чем вы бы хотели отличаться, а не быть похожими на другие проекты в сети.
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867950e11e574fa8b"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>от 60 000 рублей<br>
<i>Срок разработки и запуска</i><br>
от 25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок от 10 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Эксклюзивный сайт</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div><div class="lr_form9"><label><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка</label></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Эксклюзивный сайт"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50">
<h3>Cайт Эксклюзивный Магазин</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz7.png" alt="создание нестандартного сайта интернет-магазина"><b>Если Вам нужен интернет-магазин, с уникальным прикладным функционалом именно под ваши задачи.</b> С нестандартным внешним видом, подачей информации, информационной состовляющей и многим другим, чем вы бы хотели отличаться, а не быть похожими на другие проекты в сети.
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867956734720d8b11a"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>от 90 000 рублей<br>
<i>Срок разработки и запуска</i><br>
от 25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок от 10 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Эксклюзивный магазин</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div><div class="lr_form9"><label><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка</label></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Эксклюзивный магазин"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50">
<h3>Сайт Информационный Портал</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/saitnazakaz9.png" alt="создание сайта информационного портала"><b>Информационный портал – это сайт, который интегрирует в себе огромные потоки актуальной, достоверной и объективной информации. Бывают тематические порталы, к примеру – в отрасли экономики или медицины, новостные порталы – только лента новостей, иногда такой сайт имеет широкую тематику – от новостей политики до последних достижений в области косметологии. Самое главное, что здесь должны быть собраны свежие и актуальные факты.</b><br>
Почему именно создание информационного портала является одной из наиболее прибыльных бизнес-идей заработка в Интернете? Все достаточно просто. Такой сайт будет нацелен на широкую аудиторию посетителей. Ведь новости интересны всем. Телевидение, газеты остались в далеком прошлом. Мы поможем Вам в создании вашего портала!<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_164843038679557fd1c7db17f1"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>от 99 800 рублей<br>
<i>Срок разработки и запуска</i><br>
от 35 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок от 15 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Информационный Портал</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div><div class="lr_form9"><label><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка</label></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Информационный Портал"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50">
<h3>Cайт Свадебный</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/svadbasait14.png" alt="создание свадебного сайта">
<b>Свадебный сайт, позволит сделать ваш личный семейный архив, который могут посмотреть все ваши близкие и друзья, и на котором могут быть закрытые разделы, только для вас.</b> Каждому гостю, который был на свадьбе, интересно посмотреть фотографии и видео материалы со свадьбы. И ему еще повезет, если он живет рядом, и у него есть возможность прийти в гости. А как же быть тем родственникам, которые приехали с далека, как же им увидеть фотографии. И как же поступить, если кто-то из родственников или друзей не смог приехать на ваше торжество по какой либо причине?<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<i><b>Стоимость "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867967436a289ffa91"><i class="fa fa-info-circle" aria-hidden="true"></i></a></b></i><br>
<span>от 14 700 рублей<br>
<i>Срок разработки и запуска</i><br>
от 25 рабочих дней</span><br>
<i><b>Ускоренная разработка</b></i><br>
<span>+30% к стоимости<br>
срок от 10 рабочих дней</span>
</div>
<div class="width25">
<h2>Заказать / Консультация</h2>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Cайт Свадебный</div>
 
 
<input type="text" placeholder="Сумма" name="cost" style="display:none"><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 14700 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Cайт Свадебный"><input type="hidden" name="f_cena" value="14700"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width50">
<h3>Сайты на 1С Bitrix любой сложности</h3>
<span>Информационный сайт на 1С Битрикс от 23 800 рублей</span><br>
<span>Корпоративный сайт на 1С Битрикс от 39 800 рублей</span><br>
<span>Интернет-каталог на 1С Битрикс от 55 800 рублей</span><br>
<span>Интернет-магазин на 1С Битрикс от 89 800 рублей</span><br>
<span>Информационный портал на 1С Битрикс от 189 800 рублей</span><br>
<span><i>Стоимость указана "под ключ" <a href="#inline2" class="inline" data-modaal-scope="modaal_16484303867969c2fd37fc8f8e"><i class="fa fa-info-circle" aria-hidden="true"></i></a></i><br>
<i>Срок разработки и запуска:</i> 25 рабочих дней</span><br>
<span>Ускоренная разработка:<br>
+30% к стоимости, срок 10 рабочих дней</span>
<br><br>
<h2>Заказать / Консультация</h2><br>
<p>Мы свяжемся с вами через почту</p>
 



<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Сайт на 1С Bitrix</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div><div class="lr_form9"><label><input type="checkbox" name="f_boost" onchange="ChangeCost(this)"> Ускоренная разработка</label></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Сайт на 1С Bitrix"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
<div class="width25">
<img loading="lazy" class="imgopisanie14rigth" src="/images/stories/cms1cbitrix15.png" alt="создание сайтов на 1с битрикс">Стоимость разработки складывается из стоимости лицензии «1С-Битрикс» и оплаты времени работы наших специалистов.
<br>
В стоимость разработки каждого сайта включена стоимость соответствующей лицензии «Управление сайтом» 1С-Битрикс, а также работа наших специалистов – менеджера и программиста. Если вам необходим сайт с индивидуальным дизайном, мы также включим в стоимость работу дизайнера и проектировщика. Дополнительные затраты повлечет за собой и установка модулей и сервисов, не включенных в лицензию.<br>
1С-Битрикс – это наиболее надежная коммерческая платформа для разработки сайтов. Она устойчива к нагрузкам и вирусным атакам, предлагает большое количество готовых решений и разнообразных модулей, и при этом – проста и понятна для пользователей, ведь создана россиянами и для россиян.<br>
<b>Деньги, вложенные в сайт сегодня - это инвестиции в успех бизнеса завтра!</b>
<br>
<b>Нет сайта – нет бизнеса. Пусть эта фраза не шокирует вас своей категоричностью: сегодня ваши клиенты активно осваивают интернет, а завтра они забудут дорогу к офисам компаний, не имеющих своего представительства в глобальной сети. Лучшее, что вы можете сделать прямо сейчас – позаботиться о создании собственного сайта, который будет работать на вас, рождая активный спрос на ваши товары и услуги.</b><br>
Разработать такой сайт в Хабаровске или другой части мира – задача не из легких, ведь среди массы предложений нужно выбрать именно то, что окажется стоящим вложением денег, времени и сил. Надежный сайт, который не разочарует вас и ваших посетителей, для вас разработают наши сотрудники.<br>
В нашем активе – богатый опыт разработки сайтов для совершенно разных отраслей. Мы создаем сайты на платформе 1С-Битрикс, которая позволяет реализовать практически любой функционал, в том числе - интеграцию с вашей корпоративной системой 1С.<br>
<b>1С-Битрикс – это наиболее надежная коммерческая платформа для разработки сайтов. Она устойчива к нагрузкам и вирусным атакам, предлагает большое количество готовых решений и разнообразных модулей, и при этом – проста и понятна для пользователей, ведь создана россиянами и для россиян.</b>
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
</div>
<div class="block14zakaz">
<div class="width50" id="rashifrovka1">
<h3 style="color:#e2001a;">* Для всех тарифных планов на создание и размещение сайтов включено:</h3>
<ul>
<li>Создание сайта cо всем необходимым прикладным функционалом. В дальнейшем все сайты можно развивать и расширять функционал под ваши нужды.</li>
<li>ИНДИВИДУАЛЬНЫЙ дизайн по вашим пожеланиям. Современный дизайн главной и внутренних страниц сайта. Высокопрофессиональная, адаптивная и кроссбраузерная верстка с учетом всех требований юзабилити и адаптивности к различным браузерам и устройствам.</li>
<li>Создание структуры сайта. Предварительное наполнение его информацией.</li>
<li>Возможность создания НЕОГРАНИЧЕННОГО количества разделов и страниц на сайте.</li>
<li>Базовая SEO оптимизация сайта для поисковых систем и юзабилити оптимизация для пользователей.</li>
<li>SEO-ИНСТРУМЕНТЫ для продвижения вашего сайта в системе управления.</li>
<li>Регистрация сайта в поисковых системах и установка систем сбора статистики и аналитики.</li>
<li>Регистрация уникального доменного имени.</li>
<li>Размещение сайта в Интернете сроком на 1 календарный год (Хостинг сайта, предоставление системы управления сайтом (кроме "сайта-страницы" и "посадочной страницы"), регистрация доменного имени сроком на 1 календарный год).</li>
<li>Гарантийная техническая поддержка сайта. И бонусные бесплатные часы работы наших специалистов: контент-менеджеров и программистов.</li>
<li>Техническая поддержка и консультационная поддержка проекта в неограниченном объеме.</li>
<li>Поддержка постоянной работоспособности и безопасности сайта.</li>
<li>Защита от вирусов и DDos атак. Проверка на вирусы.</li>
<li>Неограниченный трафик. Неограниченный трафик не распространяется на сайты файловых архивов (графических, музыкальных, программных)</li>
<li>Почтовый сервис: Защита от вирусов, спам-фильтры. Почтовые ящики, возможно подключение к сайту Веб почты Яндекс или Mail.ru...</li>
<li>Резервное копирование сайтов и возможность их оперативного восстановления.</li>
<li>И многое другое...</li>
<li>Таким образом, мы предлагаем комплексные пакетные решения по разработке веб-ресурсов для ведения онлайн-бизнеса.<br>
Вы платите один раз и получаете готовый инструмент для развития вашего бизнеса и продаж в Интернете!</li>
</ul>
<br><br><a class="btn" href="#" style="color:#e2001a;" >Возникли вопросы? Проконсультируйтесь!</a><br><br>
<h3>Порядок работы...<br>Или как сделать продающий сайт?!</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/dog141.png" alt="как заказать свой продающий сайт">
<ol>
<li>Выберите подходящий тариф сайта</li>
<li>Заполните заявку</li>
<li>Подпишите договор и оплатите счет</li>
<li>Приступайте к наполнению сайта или поручите это нам</li>
<li>Закажите рекламу и получайте клиентов</li>
</ol>
<a class="btn1" href="#" ><i class="fa fa-shopping-cart"></i> Заказать сайт прямо сейчас!</a><br>
</div>
<div class="width25">
<h3>Собственный сайт в Интернет - теперь это просто!</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/sitesimple14.png" alt="Собственный сайт в Интернет - теперь это просто">Ваши мечты становятся реальностью! Всего в несколько кликов Вы можете стать обладателем собственного сайта в сети Интернет. Создание недорогих и качественных сайтов, а также их последующее обслуживание и продвижение - основной вид нашей деятельности.<br>
Наше предложение для тех, кто осознает всю важность своего присутствия в глобальной сети Интернет, но еще не готов инвестировать в это направление серьезные деньги.<br>
Аргументы «ЗА» создание сайта:<br>
Одним из важнейших источников сведений о компании является ее представительство в глобальной сети Интернет, именно там многие потенциальные партнеры и клиенты ищут подробную и, что очень важно, самую свежую и постоянно обновляемую информацию, исходя из которой, они могут получить представление об интересующей их компании, товарах и услугах.
Наличие у организации своего Интернет представительства не только усиливает положительный образ фирмы, но и говорит в пользу надежности и основательности предприятия. И наоборот, отсутствие собственного сайта или его низкое качество могут просто отпугнуть потенциальных партнеров и клиентов, и негативно повлиять на имидж компании в целом.<br><br>
<h3>Почему "Рэдлайн"?</h3><br>
<img loading="lazy" class="imgopisanie14rigth" src="/templates/lred2014sistemzakaz/img/garantia141.png" alt="отличная интернет веб студия в РФ">
Если кратко, то потому что мы профи и стремимся делать высококачественный продукт по максимально доступным ценам, это заложено в принципах миссии нашей компании!<br>
<ul>
<li>Огромный опыт веб-разработки.</li>
<li>Гарантии результата.</li>
<li>Заботимся о бюджете клиентов.</li>
<li>Профессионализм.</li>
<li>Работаем и постоянно совершенствуемся с 2006 года!</li>
<li>Делаем эффективные и продающие сайты "под ключ", а наши сайты делают вам деньги!</li>
<li>Работающие веб-сайты точно в срок и "под ключ".</li>
<li>Наличие, удобство и простота системы управления сайтом.</li>
<li>Бесплатные консультации по всем вопросам касательно разработки вашего сайта и его развития.</li>
<li>Уникальный "вкусный" дизайн от профессиональных веб-дизайнеров.</li>
<li>Верстка и программирование высочайшего уровня.</li>
<li>Бесплатная поисковая оптимизация при заказе сайта + комплексное продвижение в последующем.</li>
<li>Гарантийное и постгарантийное обслуживание. </li>
<li>Полный спектр услуг в одном месте!</li>
<li>Наши конкуренты нам завидуют :)</li>
<li>Опыт работы с различными отечественными и иностранными компаниями и частными лицами.</li>
<li>Одни из самых низких цен в РФ на разработку и обслуживание интернет-проектов!</li>
<li>Приятные бонусы для наших клиентов!</li>
</ul>
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
<br>
</div>
</div>
<div class="block14zakaz">
<div style="width:100%;">
<h3>От чего зависит цена сайта?</h3><br>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/moneti141.png" alt="стоимость создания сайта">Многие наши клиенты начинают разговор с отделом продаж, спрашивая "Сколько стоит сайт?".<br>
Тарифы на сайты формируются в зависимости от тех функций, которые должен выполнять веб-ресурс. Если требуется представительство в сети с краткой информацией о компании и контактами - вполне достаточно "Визитки". Хотите разместить в Сети каталог предлагаемых товаров и услуг с их описанием и указанием стоимости? Тогда Вам отлично подойдет вариант "Сайт каталог". В Ваших планах непосредственная торговля в онлайн? Выбирайте полноценный Интернет-магазин и зарабатыйвайте на продажах через Интернет!<br>
Как видите, чем больше требований к сайту, тем он дороже.<br>
Также на цену разработки сайта влияет его графическое оформление: готовые дизайны из нашего каталога гораздо привлекательнее по стоимости. Более того, выбирая варианты готовых дизайнов, Вы не только получаете современный индивидуальный дизайн, но и избавляете себя от необходимости долго согласовывать правки по дизайну.
<br><br><a class="btn" href="#" style="color:#e2001a;" >Затрудняетесь с выбором сайта? Просто напишите нам!</a>
<br><br>
<h3>Дополнительная информация</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/zaiavka141.png" alt="оставить заявку на создание сайта просто"> <ul>
<li>Все заявки принимаются в режиме живой очереди и будут обработаны по мере их поступления! С Уважением, отдел по работе с клиентами компании "Рэдлайн".</li>
<li>Если Вас не интересует создание сайта, но есть друзья или знакомые, которые хотят создать сайт, Вы можете "привести" их к нам и получить вознаграждение до 50% от суммы заказа.</li>
<li>Коммерческие предложения и договора высылаются <a href="/contacts#component-contact" >по запросу</a>.</li>
<li><a href="/images/stories/anketampr.doc" target="_blank" >Анкета (бриф) на разработку, оптимизацию сайта и его продвижение</a> »
Уважаемые заказчики, данная анкета необходима для определения и воплощения задач по разработке, оптимизации сайта и его продвижения.
Анкета поможет выявить и сформулировать цели, которые Вы ставите перед своим сайтом, а также специфику его работы, аудитории, информационного наполнения и дизайна.
От полноты информации зависит качество и скорость подготовки проекта. Грамотное проектирование - фундамент для создания успешного сайта.
Если Вы затрудняетесь ответить на те или иные вопросы, оставляйте поля пустыми. Заполненную анкету высылайте по эл.адресу <a href="#" yaCounter9971422.reachGoal('RLSENDFORM1'); return true;">info@lred.ru</a></li>
<li><a href="/templates/lred2017kp/anketa2017.doc" target="_blank" >Анкета на разработку сайта</a>.</li>
<li><a href="/templates/lred2017kp/anketalp2017.doc" target="_blank" >Анкета на разработку лэндинга</a>.</li>
</ul>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz142">Продвижение сайтов<span>. Комплексный интернет маркетинг</span></h2>
<div class="toggle_container hidden" id="zakaz142in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>SEO Продвижение сайта. Вывод сайта в ТОП поисковых систем!</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/prodvigaem1.png" alt="продвижение сайтов в Интернете, вывод в ТОП поисковиков">
<b>Продвижение сайта, на сегодня пожалуй самое выгодное вложение денег в Интернет.</b> Это наиболее стабильный и перспективный способ рассказать наибольшему количеству пользователей интернета о своем товаре или услуге. Профессиональный подход к раскрутке сайтов осуществляемый нашими специалистами и характеризуется пошаговой комплексной работой начиная от создания эффективного семантического ядра запросов до внешней оптимизации сайта. Грамотно проведенная на оптимизация ресурса положительно скажется на дальнейшем эффективном его функционировании и успешном ранжировании в поисковых системах.<br>
<h3>SEO-сопровождение сайта</h3>
Регулярное SEO – гарантия высокого результата! SEO продвижение с фиксированной оплатой за месяц. Полный комплекс работ для уверенного и стабильного развития сайта. Только белые методы продвижения, индивидуальный подход.<br>
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 8 000 руб./мес</span> <br><br>
<a class="btn1" href="/sistemzakazrekl.html" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать SEO Продвижение сайта</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать SEO Продвижение сайта"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width75">
<h3>Комплексный интернет маркетинг</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/prodvigaem1.png" alt="Комплексный интернет маркетинг, продвижение сайтов">
<b>Комплексная реклама (раскрутка) сайта, включающая трафиковое поисковое продвижение, настройку и ведение контекстной рекламной кампании, веб-аналитику и многое другое.</b><br>
Комплексный подход, направленный на привлечение максимального количества посетителей на Ваш сайт и увеличение конверсии посетителей в покупателей. <br>
Рекомендации по улучшению юзабилити Вашего сайта на основе его профессионального анализа.<br>
Постепенный стабильный рост количества целевых посетителей сайта за счет трафикового продвижения ресурса по семантическому ядру запросов, включающему большой объем ключевых фраз Вашей тематики (обычно – от 100 и более слов).<br> Быстрый рост целевого трафика за счет контекстной рекламы. Результат – привлечение клиентов с первого дня запуска рекламной кампании. Контроль эффективности продвижения и контекстной рекламы посредством веб-аналитики, выбор наиболее действенных методик работы и постоянное улучшение результатов. «Комплексный интернет маркетинг» - это выгодные инвестиции в развитие Вашего бизнеса!
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 8 000 руб./мес</span> <br><br>
<a class="btn1" href="/sistemzakazrekl.html" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Комплексный интернет маркетинг</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Комплексный интернет маркетинг"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width75">
<h3>Статейное продвижение</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/statii14.png" alt="продвижение сайтов статьями">
<b>Написание и размещение статей на трастовых площадках со ссылками на ваш сайт.</b> Оплата единоразовая за весь срок продвижения. Мы помогаем Вам выбрать ключевые слова – подбираем площадки для размещения статей для продвижения. После согласования списка площадок и бюджета профессиональные копирайтеры пишут авторские материалы с употреблением продвигаемых ключевых слов, а владельцы площадок их размещают.
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 5000 руб.</span> <br><br>
<a class="btn1" href="/sistemzakazrekl.html" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Статейное продвижение</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Статейное продвижение"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width75">
<h3>Social media marketing — продвижение в социальных медиа</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/smm14.png" alt="Social media marketing — продвижение в социальных медиа">
<b>Раскрутка групп и реклама ВКонтакте и Facebook - это один из самых дешевых методов продвижения брендов, товаров и услуг.</b> Помните об этом, планируя рекламные компании! Создавая сообщество в социальной сети, Вы даете возможность своей компании быть ближе к своим клиентам, общаться с ними на понятном для них языке и в удобной для них обстановке. Также под Вашу целевую аудиторию можно запустить рекламу в таких социальных сетях как Однокласники, Мой Мир и ВКонтакте и Facebook.<br>
Также наше агентство интернет-рекламы предлагает рекламодателям размещение таргетированной рекламы на страницах социальных сетей Мой мир и Одноклассники, а также других проектах mail.ru.<br>
<b>Размещение рекламы в Одноклассниках и Мой мир</b> происходит через систему, которая позволяет настроить рекламную кампанию на целевую аудиторию. Возможно размещение рекламы со ссылкой как на внешний сайт, так и на сообщество/группу в одной из социальных сетей (Мой мир или Одноклассники).
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 7 000 руб./мес</span> <br><br>
<a class="btn1" href="/sistemzakazrekl.html" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать продвижение в социальных медиа</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать продвижение в социальных медиа"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
<div class="block14zakaz">
<div class="width75">
<h3>Регистрация в каталогах и справочниках</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/registrationkatalogs14.png" alt="Регистрация в каталогах — продвижение в Интернете">
Регистрация сайта в каталогах. Простой способ получить безопасные ссылки на ваш сайт. Альтернатива покупке ссылок. Раскрутка и продвижение сайта во всех поисковиках. <b>Позволяет улучшить видимость сайта в результатах поиска и получить заинтересованных посетителей из каталогов.</b> Информация о вашем сайте отправляется в каталоги сайтов (такие как hotlinks.ru, yaca.yandex.ru) и поисковые системы Яндекс, Google и другие. Ваш сайт начинают рекомендовать многие тематические ресурсы. Среди посетителей которых обязательно найдутся и ваши клиенты. Как известно, поисковики борются с покупными ссылками (в том числе со ссылками, купленными на биржах), в данном случае вы получите естественные ссылки, к которым поисковики относятся лояльно. Поэтому регистрация в каталогах позволяет улучшить видимость сайта в результатах поиска. Для вас мы нашли и проверили более 60000 каталогов. Выбрали из них более 16 357 каталогов – реально работающих и приносящих пользу. <b>Если раньше, чтобы вывести сайт в ТОП поисковика, было достаточно купить на бирже кучу ссылок, то сейчас покупка ссылок на биржах стала больше вредить сайту. Однако, регистрация в каталогах – один из немногих оставшихся безопасных ссылочных способов, который не нарушает лицензии поисковых систем и дает хорошие результаты продвижения сайтов.</b> А при работе над поведенческими факторами, наполнении сайта качественным контентом и оптимизации сайта этот эффект многократно усиливается.<br><br>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
8 000 руб.</span> <br><br>
<a class="btn1" href="/sistemzakazrekl.html" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать регистрацию в каталогах и справочниках</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom"><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div><div class="lr_form10"><span class="lr_form8cena1">Регистрация в каталогах и справочниках</span><span class="lr_form8 lr_form8cena2">5000 руб.</span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 5000 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать регистрацию в каталогах и справочниках"><input type="hidden" name="f_cena" value="5000"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz143">Реклама в Интернете</h2>
<div class="toggle_container hidden" id="zakaz143in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Реклама в Интернете</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/reklama1.png" alt="Реклама в Интернете"> Как способ продвижения своих товаров или услуг, реклама в Интернете подойдёт абсолютно любому типу рекламодателя: от частного предпринимателя до крупного холдинга. <b>Различные форматы интернет-рекламы покрывают абсолютно весь спектр запросов рекламодателей! Поэтому в Интернете можно разместить рекламу любого продукта! Причём, не просто разместить, а именно там, где её эффективность будет максимальной!</b><br>
Эффективная отдача — главное преимущество размещения рекламы в Интернете перед другими способами продвижения товаров и услуг! В способности сделать рекламу востребованной пользователем заключена та уникальность Интернета, которая постепенно делает его главным каналом донесения информации до потребителя. Другим важным плюсом интернет-рекламы является возможность измерить всё и вся: кто смотрел, когда, сколько, откуда пришёл, куда ушёл и многое, многое другое. А если вспомнить ещё про то, что редактирование рекламных объявлений и банеров возможно в любое время, а форматы этих самых объявлений и банеров сколь угодно многочисленны, то становится понятно, что в ближайшем будущем реклама в Интернете станет основным видом рекламы вообще!
<ul>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/krekl141.png" alt="Контекстная реклама в Интернете">
<li><b>Контекстная реклама</b><br>
Мы предлагаем профессиональное размещение и ведение контекстной рекламы и ремаркетинга(ретаргетинга) в крупнейших системах Яндекс.Директ и Google Adwords и их рекламных сетях. Ваши объявления будут видеть тысячи посетителей Google и Яндекс ежедневно. Вам всего лишь нужно будет оплачивать переходы на ваш сайт и работу нашего специалиста по ведению рекламной кампании. Эффект с первого дня, оплата - только за результат!<br>
Хотите убедиться и проверить, просто <a href="#" style="color:#e2001a;" >оставьте заявку на БЕСПЛАТНУЮ консультацию</a>.</li>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/socrekl141.png" alt="Реклама в социальных сетях">
<li><b>Реклама и продвижение в соцсетях, SMM и SMO</b><br>
Самый точный таргетинг, только целевая аудитория. Для тех, кто не знаком с термином, поясним: таргетинг - это принцип точной настройки рекламных кампаний под определенную целевую аудиторию. Другими словами, благодаря таргетингу вашу рекламу видят только те пользователи, кто подходит вам по ряду параметров: полу, возрасту, географическому положению, сфере интересов и др.<br>
Мы можем предложить вам индивидуальную настройку, запуск и ведение рекламы на площадках «ВКонтакте», Мail.ru, МойМир, Однокласники, Facebook, Youtube и Instagram.
<br><br>
Поможем выстроить долгосрочные отношения с потенциальными клиентами и привлечь трафик из социальных сетей.<br>
Очень многим бизнесам продвигаться в социальных сетях выгоднее, чем в поиске Яндекса и Google. Еще большим для скачка в продажах необходимы оба канала на равных. И только единицам социальные сети не подходят.<br>
Занимаемся продвижением бизнеса в любых соцсетях: Instagram, Facebook, VK, OK, Google+ и другие.
</li>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/mediarekl141.png" alt="Медийная реклама в Интернете"> <li><b>Медийная реклама</b><br>
Баннеры на популярных сайтах = быстрый приток посетителей! Медийная (баннерная) реклама - это размещение привлекающих внимание статичных или анимированных баннеров на различных посещаемых сайтах в Интернете. Наша компания предлагает размещение баннеров на крупнейших площадках Рунета - РСЯ (Рекламная сеть) Яндекса, КМС (Контекстно-медийная сеть) Google, «ВКонтакте», Мail.ru, МойМир, Однокласники, Facebook, Youtube и Instagram. На сегодняшний день, их суммарный охват это сотни миллионов человек в месяц.</li>
</ul>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div></div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 8 000 руб./мес <br>
(Цена определяется<br>индивидуально)</span><br><br>
<a class="btn1" href="/sistemzakazrekl.html" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Рекламу в Интернете</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Рекламу в Интернете"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz144">Обслуживание сайтов</h2>
<div class="toggle_container hidden" id="zakaz144in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Обслуживание сайтов</h3>
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/services14.png" alt="Качественное обслуживание сайтов">
Ну, вот, наконец, то ваш сайт появился в сети. Вы разместили на нем всю необходимую для вас информацию. Но сайт, как и любое техническое решение немыслим без качественного обслуживания. Сопровождение сайта (поддержка, обслуживание) является чрезвычайно важным аспектом работы с ресурсом. <b>Чтобы не потерять имеющуюся аудиторию и привлечь новую, необходимо постоянно поддерживать сайт в актуальном и "рабочем" состоянии.</b><br>
Вы можете выбрать необходимую именно Вам схему для сопровождения (обслуживания) сайта из широкого спектра услуг по техническому и информационному сопровождению сайтов, предлагаемого нами.<br>
Мы берем на обслуживание сайты от других компаний! И предоставляем скидки для новых клиентов.<br>
Заключаем договора на обслуживание от 0 руб./мес., это означает, что вы платите только за выполняемые работы (для единоразовых и периодических работ), никаких постоянных платежей, если конечно вам не требуется постоянное обслуживание (ежемесячное), для постоянных работ по ведению сайта. В этом случае мы определяем необходимые Вам работы (делаем просчет стоимости) и заключаем с вами договор на ежемесячной (так сказать абонентской) основе, это будет дешевле и выгоднее для Вас.<br><br>
<div>
<div class="width50">
Обслуживание сайтов это:
<ul>
<li>Информационное обслуживание</li>
<li>Техническая поддержка и обслуживание</li>
<li>Редизайн, адаптация и(или) доработки веб-дизайна</li>
<li>Консультационная поддержка</li>
<li>Расширение и "отладка" функционала</li>
</ul>
</div>
<div class="width50">
Развитие и поддержка интернет ресурсов и веб-сайтов является ключевым направлением нашей компании. Ведь мы понимаем, что стабильная работа сайта — это продажи, звонки и заказы с интернет-ресурса, и как следствие, рост вашей прибыли! Обращайтесь, поможем!
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 1800 рублей<br>
определяется<br>индивидуально<br>
в зависимости<br>
от задания</span> <br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Обслуживание сайта</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Обслуживание сайта"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
<br><br>
<br>
<a class="btn btn4" href="/contacts#component-contact">Написать в службу поддержки</a>
<span>Все заявки принимаются в порядке живой очереди и будут обработаны по мере их поступления!</span>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz14copy">Копирайтинг</h2>
<div class="toggle_container hidden" id="zakaz14copyin">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Нужны тексты для сайта? Закажите написание статей в компании «Рэдлайн»! И у вас будет продающий и уникальный контент!</h3>
<img loading="lazy" class="imgopisanie14rigth" src="/templates/lred2014sistemzakaz/img/inf3.png" alt="Копирайтинг">
<b>Одним из самых важных элементов в продвижении вашего сайта и увеличении конверсии его посетителей в клиентов в настоящее время является наличие на сайте уникальных и оптимизированных текстов.</b> Именно это мы и предлагаем. Такие тексты будут приводить Вам на сайт потенциальных клиентов из поисковиков и превращать их в заказчиков или партнеров, в зависимости от поставленных целей.<br><br>
<h3>SEO-копирайтинг</h3>
Пишем оптимизированные тексты, которые повышают конверсию, длительность просмотра страниц и снижают процент отказов, а значит, нравятся посетителям сайта и поисковикам. <b>Улучшаем ваши тексты столько раз, сколько потребуется, чтобы позиции вашего сайта стали лучше!</b><br><br>
<h3>Продвижение сайта статьями</h3>
Разместим полезную тематическую статью со ссылкой на ваш сайт на популярных ресурсах, которую прочитают пользователи и перейдут на ваш сайт.<br>
Отличный способ улучшить видимость сайта в поисковой выдаче, с большой вероятностью увеличить тИЦ и получить дополнительный трафик, а также зарекомендовать себя экспертом в своей области и тем самым повысить доверие к своей компании.<br><br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 1800 рублей</span><br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать SEO-копирайтинг</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать SEO-копирайтинг"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz14design">Веб-дизайн</h2>
<div class="toggle_container hidden" id="zakaz14designin">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Профессиональный дизайн сайта! Современный адаптивный веб дизайн!</h3>
<img loading="lazy" class="imgopisanie14rigth" src="/templates/lred2014sistemzakaz/img/webdiz11.png" alt="разработка сайтов для коммерческих организаций">
Встречают по дизайну, а провожают по его удобству. Хотите дружить с вашими посетителями, тогда заказывайте современный дизайн для Вашего сайта, ведь это отличная возможность улучшить эффект (пользу) от сайта при минимальных расходах!
<b>Закажите дизайн или редизайн сайта и продолжайте использовать его "по полной" с сохранением и улучшением позиций в поисковых системах и с увеличением конверсии сайта!</b><br><br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 8 000 рублей</span><br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>
 


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Веб-дизайн</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Веб-дизайн"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz145">Тюнинг сайтов</h2>
<div class="toggle_container hidden" id="zakaz145in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/tuning14.png" alt="Качественный тюнинг сайтов, развитие и улучшение сайта">
<ul>
<li><b><a href="/uslugi/soprsait/https" target="_blank">Перевод на Https</a></b> С 2017 года поисковики и браузеры помечают сайты на http как «небезопасные». Кроме того, наличие https требует большинство платежных агрегаторов, а значит, прием платежей на сайте без него будет небезопасным, а зачастую и невозможным: от 1800 руб.<br></li>
<li><b>«<a href="/uslugi/mobiledesign" target="_blank">Мобильный (адаптивный) дизайн</a>»</b>: от 12000 руб.<br></li>
<li><b>«Редизайн сайта»</b> Разработка нового дизайна существующего сайта: от 12000 руб.<br></li>
<li><b>«Версия сайта для слабовидящих»</b>: от 10000 руб.<br></li>
<li><b>Улучшение скорости загрузки.</b> Скорость загрузки – один из важных аспектов продвижения и является одним из факторов ранжирования. Проверим скорость загрузки и улучшим, насколько будет возможно: от 2000 руб.<br></li>
<li><b>«Индивидуальный дизайн»</b> Индивидуальный дизайн - это дизайн сайта разработанный профессиональными дизайнерами с учетом современных тенденций и технологий. Срок разработки индивидуального дизайна составляет 5 дней, начиная с момента заполнения Брифа на изготовление сайта. При разработке индивидуального дизайна, наравне с нормами и стандартами учитываются факторы поведения посетителей и удобство пользования сайтом: от 12000 руб.</li>
<li><b>«Звонок с сайта»</b> Это удобно для клиента, а значит - прибыльно для вас: от 1400 руб.<br></li>
<li><b>«Установка систем аналитики»</b> Яндекс.Метрика и Google.Analytics расскажут о поведении посетителей сайта. Бесплатно - нашим клиентам. Остальным от 1400 руб.</li>
<li><b><a href="/uslugi/soprsait/ssl-certificate" target="_blank">SSL-сертификат для сайта</a></b> Мы предлагаем SSL-сертификаты для физических и юридических лиц. Стоимость SSL-сертификатов варьируется в зависимости от ряда факторов, но всегда остаётся доступной. Узнать подробности и заказать свой сертификат безопасности ssl \ https Вы можете у нас всего от 1500р.<br></li>
<li><b>«SEO оптимизация кодов сайта»</b> (дизайна) и контента. Бесплатно - нашим клиентам. Остальным от 1400 руб.</li>
<li><b>«Веб-приложения на заказ»</b> Разработка прикладных веб-приложений от 10 000 руб.</li>
<li><b>«Веб-приложения на заказ»</b> Разработка прикладных веб-приложений от 10 000 руб.</li>
<li><b>Интеграция платёжных систем на сайт</b> Подключение платежных\биллинговых систем от 6000 руб.<br></li>
<li><b>«HTML5 \ JS \ Flash анимация для вашего сайта»</b> Анимированные графические банера и элементы от 1200 руб.<br></li>
<li><b>«Каталог товаров»</b> — сделает Ваш сайт не только более серьезным Интернет-ресурсом, но и более ценным с точки зрения привлечения клиентов. Наглядное представление продукции с ее описанием даст клиенту более ясное представление о том, за что он платит деньги, тем самым это будет дополнительным стимулом к оплате Ваших услуг. от 5000 руб.</li>
<li><b>«Фотогалерея»</b> поможет Вам продемонстрировать изображение каждого товара, что позволит акцентировать внимание клиентов на достоинствах Вашей продукции и создать ее яркий зрительный образ. А это станет мощным стимулом к приобретению Ваших товаров. Стоимость определяется индивидуально.</li>
<li><b>«Форма обратной связи»</b> позволяет Вашим клиентам отправлять с сайта электронные сообщения в Ваш адрес. Вы можете получать заказы на предоставляемые услуги или продаваемые товары. А также отвечать на возникающие у посетителей сайта вопросы: от 1400 руб. </li>
<li><b>«Онлайн-консультант»</b> – дополнительный канал связи и получения заказов на Вашем сайте. Через «Онлайн-консультант» происходит общение посетителей сайта с менеджерами или консультантами компании в режиме реального времени. Чтобы начать общение в форме чата с консультантом, посетителю достаточно нажать на кнопку вызова, установленную на сайте. Операторы принимают заказы, отвечают на вопросы, консультируют. «Онлайн-консультант» позволяет посетителям сайта получить отклик сразу же, в отличие от электронной почты, ответа по которой можно ждать несколько дней, или телефона, по которому можно вообще не дозвониться: от 1400 руб.</li>
<li><b>Модуль «Статьи»</b> позволяет в неограниченном количестве размещать на сайте любые текстовые материалы с разбивкой по тематикам. Модуль «Статьи» влияет на увеличение посещаемости Вашего сайта и повышает к нему интерес.</li>
<li><b>«Новости сайта»</b> – позволяет удобно и быстро размещать новости компании и сайта, тем самым информируя посетителей сайта не только о жизнедеятельности Вашей компании, но и о новых услугах и предложениях. Наличие постоянно обновляемых новостей позволит наладить более тесный контакт с Вашими клиентами.</li>
<li><b>«Спецпредложения»</b> — позволит Вам акцентировать внимание посетителей сайта именно на тех услугах или товарах, которые Вы считаете в данный момент более топовыми и выгодными для Вашей компании. Также система скидок на Вашу продукцию обязательно скажется на увеличении числа Ваших клиентов.</li>
<li><b>«Гостевая книга»</b> — позволяет посетителям сайта оставлять свои сообщения, отзывы и комментарии о Ваших услугах или товарах. С помощью гостевой книги Вы можете оперативно реагировать на меняющиеся предпочтения клиентов, предлагать актуальные товары и услуги. А также отвечать на возникающие у посетителей сайта вопросы.</li>
<li><b>«Вопросы-ответы»</b> — позволит посетителям Вашего сайта увидеть наиболее часто задаваемые вопросы и при необходимости узнать ответы на них. А также самостоятельно задать интересующий вопрос. Использование модуля «Вопросы-ответы» наиболее точно отразит преимущества Вашего бизнеса, предоставит дополнительную информацию потенциальным клиентам и партнерам, тем самым повышая их осведомленность о Вашей деятельности и, следовательно, увеличивая их лояльность. «Вопросы-ответы» — это удобно и выгодно!</li>
<li><b>«Подписка на новости»</b> Модуль является маркетинговым инструментом для удержания клиентов и увеличения продаж. Посетители, заинтересовавшиеся информацией на сайте, смогут подписаться на обновления, добавив свой e-mail в список рассылки. При помощи данного модуля, у вас появится возможность создавать и рассылать подписчикам сообщения о новых акциях, задать вопросы о качестве обслуживания и предложить дополнительные товары или услуги. Тем самым мотивируя их возвращаться на сайт и делать заказы.</li>
<li><b>«Поиск по сайту»</b> — позволяет посетителю сайта быстро найти именно ту информацию, которой он интересуется, таким образом, Вы избавляете Ваших потенциальных клиентов от лишней траты времени. Удобство и функциональность Вашего сайта будут дополнительными стимулами к приобретению Ваших услуг.</li>
<li><b>«Несколько цен у товара»</b> Модуль позволяет указать для каждой позиции каталога несколько цен. Например, стоимость базовой комплектации и улучшенной, или розничную и оптовую цену. Это может быть очень удобно, если стоимость Вашего товара зависит от комплектации, цвета или размера. Благодаря этому модулю Вы сможете компактно и наглядно расположить товары на сайте, систематизировать каталог и облегчить поиск. Количество цен для товарной позиции не ограничено.</li>
<li><b>«Отзывы о товарах»</b> Возможность комментирования товарных позиций позволяет не только поддерживать диалог с покупателями и вовремя реагировать на мнения клиентов о товаре, но и повысить продажи. Статистика интернет-продаж говорит о том, что товары, на которые есть отзывы, лучше продаются. Читая отзывы, посетители сайта смогут узнать мнение тех, кто уже купил товар. Благодаря этой информации они делают свой выбор в пользу магазина, где есть отзывы о товарах. Отзывы о товарах можно интегрировать с модулем "Рейтинг товаров".</li>
<li><b>«Рейтинг товаров»</b> Рейтинг товаров дает возможность посетителям сайта ставить оценки товарам магазина по пятибалльной шкале, а Вам поможет объективно оценивать отношение заказчиков к товарам и услугам Вашего магазина. Этот модуль можно связать в единый блок с модулем "комментарии".</li>
<li><b>«Учет складских остатков»</b> Благодаря этому модулю можно указать остаток товаров на складе, который будет отображаться на сайте для покупателей. Количество единиц товара, видимое клиентами, будет уменьшаться с каждым оплаченным товаром. Когда остаток станет равным нулю, появится уведомление о том, что товара нет в наличии и ожидается поставка. Фактически этот модуль снабдит Ваш магазин складской программой для учета остатков, что необходимо для серьезной работы в интернет-продажах.</li>
<li><b>«Форум»</b> позволяет посетителям сайта не только оставлять свои сообщения, отзывы и комментарии о Ваших услугах или товарах, но и делиться впечатлениями друг с другом, обсуждать интересующие их темы. С помощью форума Вы можете оперативно реагировать на меняющиеся предпочтения клиентов, предлагать актуальные товары и услуги и отвечать на возникающие у посетителей сайта вопросы.</li>
<li><b>«Музыкальный / видеоплеер»</b> С помощью этого модуля клиент в любое удобное для него время может посмотреть видео и увидеть Ваш продукт в работе либо послушать аудиозапись, содержащую ценную информацию о Вашем товаре или услуге. Этот модуль поможет Вам создать у посетителя сайта наиболее полное и яркое представление о товаре и компании.</li>
<li><b>«Слайд-шоу»</b> Слайдер - Циклически меняющиеся картинки слайд-шоу сделают Ваш сайт стильным, ярким и запоминающимся.</li>
<li><b>«Лайтбокс»</b> - Этот скрипт выводит увеличенное изображение фотографии поверх страницы с эффектом всплывания и развертывания. Опция поможет создать у Ваших клиентов более яркий образ как продукта, так и компании. Стоимость определяется индивидуально.</li>
<li><b>«Выпадающее меню»</b> - При наведении курсора или клике (по Вашему выбору) из основного пункта меню выпадает список с дополнительными подпунктами. Повышая навигационную функциональность сайта, опция позволяет посетителям Вашего сайта быстрее находить необходимые разделы и информацию.</li>
<li><b>«Социальные кнопки»</b> - Сарафанное радио является одним из самых эффективных способов привлечения новых клиентов. Клиенты больше всего доверяют мнению своих друзей и знакомых. Именно поэтому и нужен модуль "Социальные кнопки". Он даст возможность посетителям сайта рассказать о Ваших товарах и услугах на своей странице в социальной сети.</li>
<li><b>«Аккордеон»</b> - Удобное меню содержит несколько блоков, один из которых разворачивается и демонстрирует контент, в то время как остальные свернуты в строку с названием. Чтобы развернуть любой другой раздел, посетителю достаточно кликнуть на его заголовок, при этом предыдущий блок автоматически сворачивается. Этот скрипт даёт возможность разместить на странице сайта большое количество информации, но при этом визуально не перегружать ее, значительно сократив ее длину. Также с помощью подобного меню клиент сможет быстро найти на странице необходимую ему информацию.</li>
<li><b>«Защита от копирования текста»</b> - Уникальный контент интересен клиентам, а также благотворно влияет на индексацию сайта поисковыми системами и его положение в поисковой выдаче. Временная блокировка правой и левой кнопки мыши и клавиатуры (по Вашему выбору) при заходе на сайт позволит защитить контент от незаконного копирования. Конкуренты больше не смогут привлекать клиентов за счет принадлежащих Вам текстов и наносить вред продвижению сайта.</li>
<li><b>«Калькуляторы»</b> от 3000 руб.<br></li>
<li><b>Модуль «Часы»</b></li>
<li><b>Модуль «Календарь»</b></li>
<li><b>Виджеты «ВКонтакте»</b> Новости, стена, рекомендаии...</li>
<li><b>«Виджет комментариев»</b> на странице (ВКонтакте или DiSQUS)</li>
<li><b>Модуль «Распечатать страницу»</b></li>
<li><b>Модуль «Музыкальный плеер»</b></li>
<li>Автоматическая <b>«Прокрутка страницы»</b> до текстовой области/вверх</li>
<li>И прочее ... </li>
</ul>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Оставьте заявку, если Вашему сайту нужен "тюнинг"!</a><br>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
Определяется индивидуально по заданию</span><br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Оставить заявку</a><br>
<p>Мы свяжемся с вами через почту</p>
 


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Тюнинг сайта</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Тюнинг сайта"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz146">Веб приложения <span>(программное обеспечение)</span> на заказ</h2>
<div class="toggle_container hidden" id="zakaz146in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<img loading="lazy" class="imgopisanie141" src="/templates/lred2014sistemzakaz/img/ponazakaz.png" alt="разработка веб приложений (программного обеспечения) на заказ">
<b>Web-приложения (веб приложения) – это программы призванные решать какие-либо задачи, для решения которых готовые (существующие) приложения или системы уже не подходят. Другими словами это программы, созданные с нуля, по заказу клиента, с определенным техническим заданием, функциональностью, а так же описанием принципа работы каждой указанной функциональной возможности.</b><br>
Преимуществом уникальных web приложений (сайта на заказ) является то, что сайт будет выполнять именно ту задачу, которую поставил перед ней клиент и именно так как он этого захотел. Это может быть уникальный сервис, предназначенный для посетителей сайта (рассылка смс сообщений) или клиентов компании (онлайн банкинг) или CRM или все что Вам только в голову придет :). Это может быть новая социальная сеть или интернет портал. Еще одним преимуществом является абсолютная свобода для дизайнеров. Ведь при разработке веб приложения (ПО) на заказ можно заранее учесть расположения всех элементов на сайте и предусмотреть разработку системы таким образом, что бы содержимое отображалось в соответствии с макетом.<br>
<b>Веб-приложения, которые создаются под заказ, часто качественно выделяются среди уже существующих, благодаря своей уникальности.</b> Эта уникальность выражается в дизайне и богатом или особенном наборе функциональных возможностей. Такие сайты, как правило, хорошо запоминаются посетителями, ведь позволяют решать их задачи новым, часто более удобным для них способом. Что в свою очередь – повышает степень вовлеченности пользователей при работе с сайтом и, а в дальнейшем возвращает их снова и снова.<br>
"Рэдлайн" занимается профессиональной разработкой сложного высокотехнологичного программного обеспечения, автоматизацией и оптимизацией бизнес-процессов и созданием веб-приложений.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div> <br><br>
<img loading="lazy" class="imgopisanie141" src="/images/stories/mobile-service.png" alt="Разработка мобильных приложений на заказ">
<b>Разработка мобильных приложений</b><br>
При разработке мобильных приложений мы используем два различных подхода – нативную разработку (индивидуально для iOS или Android устройств) и кроссплатформенную разработку.<br>
Помимо разработки мобильных приложений, мы можем разработать веб-интерфейс для администрирования мобильных приложений (управление каталогом товаров, взаимодействие с пользователями).<br>
<b>Мы создаем эффектные и интересные мобильные приложения, которые наверняка понравятся вашим клиентам.</b> Для того чтобы опередить конкурентов, используя собственный программный продукт, просто свяжитесь с нашим менеджером.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div> <br><br>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 10 000 рублей</span> <br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>
 


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать Веб приложение (ПО)</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать Веб приложение (ПО)"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz147">Доп. Услуги</h2>
<div class="toggle_container hidden" id="zakaz147in" style="display: none;">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Аудит сайта и рекламной кампании</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/auditsaita141.png" alt="аудит сайтов на заказ"> Юзабилити (краткий и полный) аудит - Мы поможем определить, какие элементы сайта мешают совершить заказ. Вы получите информацию о том:
<ul>
<li>Что необходимо изменить на Вашем сайте, чтобы он лучше продавал,</li>
<li>Какой спрос на Ваши товары, услуги и предложения есть в интернете уже сейчас,</li>
<li>Как правильно построить процесс продаж в интернете,</li>
<li>Как превратить интернет в самый эффективный маркетинговый канал.</li>
<li>Что именно, где и когда нужно сделать, чтобы зарабатывать больше используя все возможности вашего сайта и Интернета по полной!</li>
</ul>
Благодаря всем этим данным мы сможем подготовить предложения по продвижению, либо по доработкам на сайте, а также рассказать насколько эффективно данные исследования позволяют нашим клиентам и партнерам получать больше прибыли от их Интернет-представительств.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div><br><br>
<h3>Программирование, дизайн, верстка</h3>
<img loading="lazy" class="imgopisanie142" src="/images/stories/banners2011/ico44.jpg" alt="Программирование, дизайн, верстка сайтов">
Для нас не существует слишком сложных задач. Преимуществом уникальных web приложений (сайта на заказ) является то, что сайт будет выполнять именно ту задачу, которую поставил перед ней клиент и именно так как он этого захотел.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div><br><br>
<h3>Хостинг</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/web-hosting141.png" alt="качественный хостинг сайтов">
Мы являемся официальным представителем ведущего хостера России Reg.ru наш сайт Nameus.ru<br>
И можем предложить Вам профессиональный хостинг от виртуальной площадки до выделенного сервера.
<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div><br><br>
<h3>Регистрация доменов</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/ico51.jpg" alt="Регистрация доменов во всех доменных зонах">
Мы являемся официальным представителем ведущего хостера России Reg.ru наш сайт Nameus.ru Мы предлагаем вам регистрацию доменного имени вашего сайта (.ru, .рф, .com, .org и т.д.) со всей необходимой тех. поддержкой по доступным ценам. Сделать заказ и(или) узнать подробную информацию Вы можете связавшись с нами!
<br><div class="btn3" onclick="ShowDescription(this)">Подробнее...</div><br><br>
<h3>Очистка от вирусов и защита сайта</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/ico52.jpg" alt="Безопасность сайтов и очистка от вирусов">
Безопастность превыше всего. Регулярные проверки на заражение вирусами и их устранение. Зараженный и небезопастный сайт приносит убытки компании и в наших силах решить эту проблему!
<br><div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
<br><br>
<h3>Услуги специалистов</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/ico53.jpg" alt="услуги контент менеджеров, программистов и веб дизайнеров">
Мы предлагаем услуги контент менеджеров, программистов и веб дизайнеров для выполнения поставленных задач.<br>
<a target="_blank" class="btn3" onclick="ShowDescription(this)" href="/contacts">Заказать</a> <br><br>
<h3>Копирайтинг</h3>
<img loading="lazy" class="imgopisanie142" src="/images/stories/banners2011/ico3.jpg" alt="качественный копирайтинг для продающих сайтов"> Напишем тексты, которые принесут вам симпатии клиентов и продажи. В агентстве "Рэдлайн" можно заказать профессиональный копирайтинг – продающие тексты, отвечающие Вашим бизнес-задачам. Грамотная структура, ясный смысл, удобное для восприятия оформление отличают качественный копирайтинг.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div><br><br>
<h3>Анимированные flash gif банера</h3>
<img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/ico54.jpg" alt="отрисовка и дизайн анимированных flash gif банеров">
Эффективные и яркие банера. Разработка баннеров (анимация и статика) для медийной рекламы. Мы изготавливаем различные анимированные банера для медийной интернет рекламы на любых интернет-площадках (mail.ru , odnoklassniki.ru , dvhab.ru , mxmm.ru и т.д. и т.п.) по приемлемой стоимости и в кратчайшие сроки! Для заказа свяжитесь с нами любым удобным для вас способом.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div><br><br>
<h3>Техническая поддержка</h3>

<img loading="lazy" class="imgopisanie142" src="/images/stories/banners2011/ico8.jpg" alt="техническая поддержка сайтов">
<ul>
<li>Обновление и редактирование информации на сайте (новости, контакты, слайдшоу и тд.)</li>
<li>Создание почтовых ящиков</li>
<li>Внесение изменений в сайт (Без и с изменения(ми) структуры и переверстки сайта)</li>
<li>Восстановление доступа к сайту и хостингу</li>
<li>Постоянный мониторинг работоспособности сайта и хостинга</li>
<li>Изменение почтовых ящиков для доставки уведомлений с сайта</li>
<li>Установка счетчиков и аналитики</li>
<li>Ежемесячный отчет о проделанной работе</li>
</ul>
<h3>Разработка логотипов</h3>
<img loading="lazy" class="imgopisanie142" src="/images/stories/banners2011/ico5.jpg" alt="создание логотипов на заказ"> <b>Логотип может означать разницу между постоянным привлечением новых клиентов и неимением их вообще.</b><br>
Главная цель — привлечь, удержать и продлить внимание. Корпоративный логoтип — это сердце индивидуальности компании. Без него невозможно создать брэнд. Существует много примеров профессионально созданных логотипов. Дети всегда найдут McDonalds, потому что хорошо помнят его торговый знак. Логoтипы Nike, Coca Cola, и Lacoste узнаваемы по всему миру.<br>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div> <br><br>
<a class="btn" href="#" style="color:#e2001a;" >Вам нужно улучшить свой сайт и его продвигать? Но вы не знаете, что и как?<br>
Просто оставьте заявку, мы поможем!</a><br>
</div>
<div class="width25">
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-envelope"></i> Оставить заявку</a><br>
<p>Мы свяжемся с вами через почту</p>
 


<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать доп. услуги</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать доп. услуги"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz14pak">Пакетные предложения</h2>
<div class="toggle_container hidden" id="zakaz14pakin">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<div style="padding:20px;"><img loading="lazy" class="imgopisanie142" src="/templates/lred2014sistemzakaz/img/paketi14.jpg" alt="эффективные пакетные предложения для продвижения и раскрутки сайтов">Для вашего удобства мы собрали некоторые услуги в пакеты.<br>
Услуги каждого из пакетов дополняют и усиливают друг друга, что позволяет добиваться более высоких результатов.</div><br>
<h3>Контекстная реклама + Продвижение</h3>
<ul>
<li>Ускоренный рост позиций</li>
<li>Посещения с первых дней запуска</li>
<li>Стабильный поток клиентов</li>
</ul>
<h3>Разработка сайта + Контекстная реклама</h3>
<ul>
<li>Мгновенный рост посещаемости</li>
<li>Возможность протестировать сайт</li>
<li>Быстрый старт продаж</li>
</ul>
<h3>Продающая страница + Контекстная реклама</h3>
<ul>
<li>Более низкая стоимость проекта при увеличенной конверсии посетителей в клиентов</li>
<li>Мгновенный рост посещаемости</li>
<li>Возможность протестировать сайт</li>
<li>Быстрый старт продаж</li>
</ul>
<h3>Контекстная + Медийная реклама</h3>
<ul>
<li>Максимальный охват аудитории</li>
<li>Гарантированные переходы на сайт</li>
<li>Грандиозный объем трафика</li>
</ul>
<h3>Реклама контекстная + в соц.сетях</h3>
<ul>
<li>Низкая стоимость контакта</li>
<li>Охват всех групп целевой аудитории</li>
<li>Эффект «сарафанного радио»</li>
</ul>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 8 000 руб./мес</span><br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<a class="btn" href="#" style="color:#e2001a;" >Получить консультацию по вопросам применения пакетов</a><br>

<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать услуги</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom lr_cena_custom_active" ><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 0 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать услуги"><input type="hidden" name="f_cena" value="0"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz14analiz">Аналитика и аудиты</h2>
<div class="toggle_container hidden" id="zakaz14analizin" style="display: none;">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Аудит сайта (экспресс-аудит, SEO-аудит, UX-аудит)</h3>
<img loading="lazy" class="imgopisanie14rigth" src="/templates/lred2014sistemzakaz/img/audit188.png" alt="Аналитика и аудиты">
Подробный анализ сайта, аналогов которого нет на рынке. Гарантирует рост вашему бизнесу!<br>
Наши специалисты проанализируют ваш сайт и укажут на основные просчеты, мешающие продвижению и росту продаж.<br><br>
<h3>Анализ рекламы</h3>
Проведем аудит вашей рекламной кампании в любой рекламной системе, дадим рекомендации по ее улучшению.<br><br>
<h3>Аналитика</h3>
Установим счетчики статистики, настроим цели, проведем A/B-тестирование, настроим отслеживание звонков с рекламы, внедрим CRM – любые задачи, где надо посчитать, узнать и протестировать.<br><br>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 8 000 рублей</span> <br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz14tip1"><span>Сайты и поддержка </span>для муниципальных организаций</h2>
<div class="toggle_container hidden" id="zakaz14tip1in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Создание сайтов для муниципальных образований и бюджетных учреждений</h3>
<img loading="lazy" class="imgopisanie14rigth" src="/templates/lred2014sistemzakaz/img/gossait14.gif" alt="разработка сайтов для муниципальных организаций">
<p><strong>Мы создаем практически любые сайты от простых страниц до сложных, высоконагруженных и нестандартных веб порталов! Осуществляем разработку сайтов для различных государственных или муниципальных организаций, удовлетворяющих требованиям законов. Создаем сайты администраций, библиотек, департаментов и т. д. реализуем адаптивные сайты для администраций любых муниципальных образований по ФЗ, учреждений образования, социальных и культурных учреждений.</strong> Быстро, качественно и недорого. Ваш сайт станет надежным инструментом для Вашей организации. Мы делаем красивые и максимально эффективные сайты по доступным ценам уже много лет, так что сможем помочь и Вам!</p>
<ul>
<li>Сайты образовательных учреждений</li>
<li>Сайты детских садов</li>
<li>Сайты органов местного самоуправления. Идеальное решение для администраций городов и мелких поселений</li>
<li>Сайты медицинской организации. Решение подойдет для всех клиник, стоматологий и т.д.</li>
<li>Сайты для администраций любых муниципальных образований по ФЗ, учреждений образования, социальных и культурных учреждений</li>
<li>Сайты администрации: городского округа, муниципального района, городского поселения, сельского поселения, а также для отдела/управления/комитета, городской или районной думы, главы, контрольно-счетного органа (палаты) и любого другого муниципального учреждения и муниципальной организации</li>
</ul>
<p><b>Все сайты соответствуют ФЗ, имеют необходимую структуру сайта и современный адаптивный дизайн. Разрабатываем как сайты на 1С Битрикс так и на других платформах, в зависимости от Ваших потребностей.</b></p>
<p style="font-size:80%;">* Если у Вас есть вопросы, то просто оставьте заявку и наши специалисты бесплатно проконсультируют вас в ближайшее рабочее время и подскажут лучший вариант создания сайта вашей организации.</p>
<p><b>Заказав создание сайта в нашей компании Вы получаете полный комплект: разработку сайта в соответствии с ФЗ, размещение и поддержку.</b><br>
Наша команда занимается разработкой сайтов районов, сельских поселений, бюджетных учреждений с 2006 года, за это время реализовано более тысячи интернет-проектов. Поэтому мы владеем всей информацией о специфике и требованиях к подобным проектам, в т. ч. со стороны контролирующих и проверяющих органов.</p>
<h3>Обслуживание и поддержка сайтов для муниципальных образований и бюджетных учреждений</h3>
<p><b>Обеспечиваем оперативную гарантийную, консультационную, информационную и техническую поддержку гос.сайтов.</b> Поможем реализовать дополнительные программные модули и интегрировать их в ваш проект.</p>
<div class="btn3" onclick="ShowDescription(this)">Подробнее...</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 18 700 рублей</span> <br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>
 

<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать сайт</div>
 
 
<div class="lr_form5"><div class="lr_form2 lr_cena_custom"><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div><div class="lr_form10"><span class="lr_form8cena1">Сайт для муниципальных образований и бюджетных учреждений</span><span class="lr_form8 lr_form8cena2">17700 руб.</span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 17700 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать сайт"><input type="hidden" name="f_cena" value="17700"></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz14tip2"><span>Типовые предложения </span>для коммерческих организаций</h2>
<div class="toggle_container hidden" id="zakaz14tip2in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<h3>Создание сайтов для коммерческих организаций</h3>
<img loading="lazy" class="imgopisanie14rigth" src="/templates/lred2014sistemzakaz/img/komorg.png" alt="разработка сайтов для коммерческих организаций">
<b>Разработка и создание сайта играет важнейшую роль в любой маркетинговой стратегии развития бизнеса.</b> Интернет-представительство – это лицо компании. Популяризация всемирной паутины диктует свои условия ведения бизнеса. Сегодня трудно представить себе, возможность существования серьезной компании без личного Web-ресурса. Корпоративный портал больше не является вспомогательным инструментом ведения бизнеса, в современном мире это первостепенная необходимость.<br>
Для новых организаций создание сайта станет идеальным решением в попытке стать конкурентоспособными в борьбе за своего клиента. Качественно разработанный сайт будет активно способствовать продвижению вашего бизнеса / фирмы / услуг. Увеличит ваши продажи, максимизирует прибыль, привлечь новых клиентов. Если вашей первостепенной задачей является привлечение целевой аудитории и выход на потенциальных клиентов, то разработка и создание интернет-ресурса станет идеальным решением.
<b>Наш опыт и наработки позволяют предложить решение для ЛЮБОЙ коммерческой организации, недорого и качественно!!!</b><br><br>
Вот некоторые из сфер деятельности коммерческий организаций, для которых мы разрабатывали сайты и можем предложить готовые полнофункциональные решения:<br>
<div class="width100" id="spisokdel141">
<div class="width33">
Стоматологии<br>
Туристические компании<br>
Автосервисы<br>
Прокат автомобилей<br>
Продажа оборудования<br>
Строительные компании<br>
Натяжные потолки<br>
Авто- и мотостранспорт<br>
Производство и продажа дверей<br>
Дизайн интерьеров<br>
Торговые компании<br>
Продажа тротуарной плитки<br>
Недвижимость<br>
Клининговые услуги<br>
Производство строительно-отделочных материалов<br>
Ремонт и сервис транспорта
</div>
<div class="width33">
Детские сады<br>
Клубы детского развития<br>
Образовательные учреждения<br>
СПО, НПО, Вузы, институты<br>
Торговые центры<br>
Развлекательные центры<br>
Гостиницы<br>
Сауны<br>
Рестораны<br>
Авиационные агентства и кассы<br>
Продажа автобусов<br>
Автозапчасти на спецтехнику<br>
Автокраны в аренду<br>
Автохимия<br>
Охранные агентства<br>
Отделка балконов<br>
Рекламные агентства
</div>
<div class="width33">Автомойки<br>
Бурение скважин<br>
Адвокатские компании<br>
Больницы и диспансеры<br>
Головные уборы<br>
Кондитерские фабрики<br>
Грузоподъемное оборудование Продажа, монтаж, ремонт<br>
Пассажирские перевозки<br>
Землеустройство<br>
Игрушки оптовая торговля<br>
Катера, лодки, лодочные моторы<br>
Косметические услуги<br>
Природоохранная деятельность<br>
Магазины промтоварные<br>
Мебель кухонная под заказ<br>
Вывоз мусора<br>
И многие многие другие области...</div>
</div>
</div>
<div class="width25">
<span><b>Стоимость:</b><br>
от 14 700 рублей</span><br><br>
<a class="btn1" href="#" style="color:#e2001a;" target="_blank"><i class="fa fa-shopping-cart"></i> Заказать</a><br>
<p>Мы свяжемся с вами через почту</p>
 

<?php if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){ echo ('
<div class="lr_form7">Заказать сайт</div>
 
 
<div class="lr_form5"><select name="f_price"><option value="14700">Сайт Страница: 14700 руб.</option><option value="14700">Landing page: 14700 руб.</option><option value="15700">Сайт Визитка: 15700 руб.</option><option value="18700">Сайт Бизнес: 18700 руб.</option><option value="18700">Сайт для гос.учреждения: 18700 руб.</option><option value="22800">Сайт Корпоративный: 22800 руб.</option><option value="33800">Сайт Каталог: 33800 руб.</option><option value="37800">Интернет-Магазин: 37800 руб.</option><option value="23800">Информационный сайт (1С Битрикс): 23800 руб.</option><option value="39800">Корпоративный сайт (1С Битрикс): 39800 руб.</option><option value="55800">Интернет-каталог (1С Битрикс): 55800 руб.</option><option value="89800">Интернет-магазин (1С Битрикс): 89800 руб.</option><option value="custom">Эксклюзивный сайт (индивидуально)</option></select><div class="lr_form2 lr_cena_custom" style="display: none;"><input type="text" placeholder="Введите сумму *" name="f_cena_custom" ><span></span></div></div>

<div class="lr_form11_nav"><i class="fa fa-chevron-down" > Дополнительно</i><i class="fa fa-chevron-up" lr_form_hide(this)"> Скрыть</i></div>
<div class="lr_form11_hide">
<div class="lr_form2"><input type="text" name="f_email" placeholder="Email"><span></span></div>
<div class="lr_form3"><textarea name="f_msg" placeholder="Текст сообщения"></textarea><span></span></div>
</div>

<div class="lr_form6">Общая стоимость: 14700 руб.</div>
<div class="lr_form4"><input type="button" value="Оформить заказ" ></div>
<input type="hidden" name="f_label" value="Заказать сайт"><input type="hidden" name="f_cena" value="14700"><input type="hidden" name="f_price_name" value="Сайт Страница: 14700 руб."></form>');}else{ echo('<a href="reg.php">Зарегестрироваться / </a><a href="profile.php">Войти в профиль</a>');} ?>
</div>
</div>
</div>
</div>
</div><div><h2 class="trigger" onclick=ShowBlock1(this) id="zakaz148">Сотрудничество</h2>
<div class="toggle_container hidden" id="zakaz148in">
<div class="block">
<div class="block14zakaz">
<div class="width75">
<img loading="lazy" class="imgopisanie142" src="/images/stories/banners2011/block3_ico2.png" alt="сотрудничество в сфере создания и обслуживания сайтов">Если Вас не интересует создание сайта или реклама в Интернете, но есть друзья, знакомые или клиенты, которые хотят создать сайт, Вы можете "привести" их к нам и <b>получать вознаграждение 10-50% от общей суммы всех платежей</b> ваших клиентов.<br>
<a target="_blank" class="btn3" onclick="ShowDescription(this)" href="/about-us/patnerstvo">Узнать подробнее</a>
<br><br>
Коммерческие предложения и договора высылаются <a href="#" style="color:#e2001a;" >по запросу</a>.
</div>
<div class="width25">
<a class="btn1" href="#" style="color:#e2001a;" ><i class="fa fa-envelope"></i> Стать партнёром</a><br>
<a class="btn" href="#" ><i class="fa fa-crosshairs"></i> Агентствам</a><br>
<a class="btn" href="#" ><i class="fa fa-question-circle"></i> Задать вопрос</a><br>
</div>
</div>
</div>
</div>

</div>
</div>


<script src="services.js"></script>
<?php
 include_once('footer.html');
?>