</div>
<section class="contacts">
        <div class="social__linkBox contacts__item">
            <div class="linkBox__block linkBox__block_vk">
                <img src="img/vk__logo.png" alt="VK" class="linkBox__img">
                <a href="#" class="linkBox__link">Подписаться</a>
            </div>
            <div class="linkBox__block linkBox__block_insta">
                <img src="img/instagram__logo.png" alt="INSTAGRAM" class="linkBox__img">
                <a href="#" class="linkBox__link">Подписаться</a>
            </div>
        </div>
        <div class="social__textBlock contacts__item">
            <p class="textBlock__caption">Подписывайтесь на Инстаграм и группу ВКонтакте и покупайте со скидкой 10%</p>
            <ul class="list">
                <li class="list__item">Изучайте новые рецепты;</li>
                <li class="list__item">Готовьте и экспериментируйте;</li>
                <li class="list__item">Общайтесь;</li>
                <li class="list__item">Присылайте свои рецепты со смесями для выпечки Vitaam и принимайте ценные подарки.</li>
            </ul>
        </div>
        <form action="#" class="contacts__form contacts__item">
            <input type="text" placeholder="Имя" name="name" class="form__name"><input type="text" placeholder="Телефон" name="phone" class="form__phone">
            <textarea name="message" id="message" placeholder="Что вы хотите?"></textarea>
            <div class="form__footer">
                <div class="form__privacyPolicyBox">
                    <input type="checkbox" name="privacyPolicy" id="privacyPolicy">
                    <label for="privacyPolicy"></label>
                    <a href="#">Политика конфиденциальности</a>
                </div>
                <button>Отправить</button>
            </div>
        </form>
        <div class="contacts__phoneBox contacts__item">
            <p class="phoneBox__number">8 800 200 25 25</p>
            <p class="phoneBox__number">+7 495 128 27 85</p>
            <p class="phoneBox__text">Звоните, оставляйте заявку через форму обратной связи или корзину. Менеджер свяжется с вами для уточнения заказа, ответит на вопросы и поможет провести сделку.  </p>
        </div>
    </section>
<footer class="footer">
        <div class="footer__block">
            <div class="footer__menu">
                <div class="menu__block">
                    <a href="#">Vitaam</a>
                    <a href="#">Протеиновые смеси</a>
                    <a href="#">Где купить</a>
                    <a href="#">Рецепты</a>
                </div>
                <div class="menu__block">
                    <a href="#">Новым клиентам</a>
                    <a href="#">Дилерам</a>
                    <a href="#">Блог</a>
                    <a href="#">Контакты</a>
                </div>
            </div>
            <div class="footer__centerBlock">
                <div class="footer__socialLinks">
                    <a href="#" class="footer__vk"><img src="<?php bloginfo('template_url'); ?>/images/vk_footer.png" alt=""></a>
                    <a href="#" class="footer__fb"><img src="<?php bloginfo('template_url'); ?>/images/fb_footer.png" alt=""></a>
                    <a href="#" class="footer__insta"><img src="<?php bloginfo('template_url'); ?>/images/insta_footer.png" alt=""></a>
                </div>
                <a href="#" class="footer__logo"><img src="<?php bloginfo('template_url'); ?>/images/logo_footer.png" alt=""></a>
            </div>
            <div class="footer__contacts">
                <p><a href="tel:88002002525">8 800 200 25 25</a></p>
                <p><a href="tel:+74951282785">+7 495 128 27 85</a></p>
                <p><a href="mail:hello@vitaam.ru">hello@vitaam.ru</a></p>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>