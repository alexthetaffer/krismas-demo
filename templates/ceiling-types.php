<?



function render_ceiling_types()
{

    ?>

    <section id="krismas-ceiling-types" class="ceiling-types container">
        <h3>Тип потолка</h3>
        <ul class="ceiling-types__cats">
            <li>
                <button class="ceiling-types__cat-btn active" data-category="треки">
                    Треки
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="парящие-линии">
                    Парящие линии
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="парящие">
                    Парящий
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="apply">
                    Резной Apply
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="многослойные">
                    Многоуровневые
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="двойные">
                    Двухуровневые с подсветкой
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="эксклюзивные">
                    Эксклюзивный
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="глянцевые">
                    Глянцевый
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="матовые">
                    Матовый
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="сатин">
                    Сатиновый
                </button>
            </li>
            <li>
                <button class="ceiling-types__cat-btn" data-category="фотопечать">
                    Фотопечать
                </button>
            </li>
        </ul>

        <div class="ceiling-types__items-wrapper">
            <button class="ceiling-types__prev">
                <img src="https://krismas.by/wp-content/themes/krismas/images/icons/arrow-left.svg" alt="" />
            </button>
            <button class="ceiling-types__next">
                <img src="https://krismas.by/wp-content/themes/krismas/images/icons/arrow-next.svg" alt="" />
            </button>

            <!-- Тип потолка: треки -->
            <div class="ceiling-types__type-item active" data-category="треки">
                <div class="ceiling-types__type-gallery swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Слайды с фото -->

                        <div class="swiper-slide">
                            <img src="https://krismas.by/wp-content/uploads/2024/03/1-7.jpg" alt="" />
                        </div>

                        <div class="swiper-slide">
                            <img src="https://krismas.by/wp-content/uploads/2024/03/2-6.jpg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="ceiling-types__type-content">
                    <h3>Трековое освещение</h3>
                    <p>
                        <strong>ТРЕНД 2021 года!</strong> Трековое освещение
                        это самый широко распространённый вариант оформления
                        потолочного освещения по мнению и рендерам
                        дизайнеров в 2021 году! Кроме того что черная
                        (белая) трековая система с поворотными светильниками
                        смотрится невероятно модно на потолке, ее основной
                        плюс заключается в том что зонирование освещения
                        может меняться каждый день в зависимости от ситуации
                        так как светильники имеют поворотный корпус и легко
                        "ходят" по рельсе трекового шинопровода.
                    </p>
                    <!-- Указываем цену -->
                    <div class="ceiling-types__price">750 руб./м²</div>
                    <button class="ceiling-types__btn">
                        Вызвать замерщика
                    </button>
                </div>
            </div>

            <!-- Тип потолка: парящие линии -->
            <div class="ceiling-types__type-item" data-category="парящие-линии">
                <div class="ceiling-types__type-gallery swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Слайды с фото -->

                        <div class="swiper-slide">
                            <img src="https://krismas.by/wp-content/uploads/2024/03/1-11.jpg" alt="" />
                        </div>

                        <div class="swiper-slide">
                            <img src="https://krismas.by/wp-content/uploads/2024/03/2-3.jpeg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="ceiling-types__type-content">
                    <h3>Парящие линии</h3>
                    <p>
                        <strong>ХИТ!!!</strong> Последняя разработка решения
                        для встроенного света от дизайнеров интерьера,
                        благодаря которой любой потолок превращается в
                        уникальный по дизайну и позволяет визуально
                        зонировать пространство. Внешне парящая линия
                        представляет собой встроенную в потолок светополосу.
                        Идеальное решение для вытянутых помещений и
                        квартир-студий
                    </p>

                    <!-- Указываем цену -->
                    <div class="ceiling-types__price">750 руб./м²</div>
                    <button class="ceiling-types__btn">
                        Вызвать замерщика
                    </button>
                </div>
            </div>

            <!-- Добавляем остальные карточки с типами потолков -->
        </div>
    </section>

<?

}

