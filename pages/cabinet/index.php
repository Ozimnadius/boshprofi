<!-- main -->
<main class="main main_white">

    <!-- breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__list">
                <a href="/" class="breadcrumbs__link">
                    <span class="breadcrumbs__text">
                        Главная
                    </span>
                    <svg class="breadcrumbs__svg" viewBox="0 0 316 124">
                        <use xlink:href="images/icons/sprite.svg#bread-arrow"></use>
                    </svg>
                </a>
                <span class="breadcrumbs__link breadcrumbs__link_active">
                    <span class="breadcrumbs__text">
                        Личный кабинет
                    </span>
                </span>
            </div>
        </div>
    </section>
    <!-- END breadcrumbs -->

    <!-- product -->
    <section class="cabinet">
        <div class="container">
            <!-- title -->
            <h1 class="page-title page__title">
                Личный кабинет
            </h1>
            <!-- END title -->


            <!-- switches -->
            <div class="switches">
                <a href="#tab1" class="switch">
                    Профиль
                </a>
                <a href="#tab2" class="switch">
                    Избранное
                </a>
                <a href="#tab3" class="switch">
                    Сравнение
                </a>
                <a href="#tab4" class="switch">
                    История заказов
                </a>
                <a href="#tab5" class="switch active">
                    Документы
                </a>

            </div>
            <!-- END switches -->

            <!-- tabs -->
            <div class="tabs">
                <div class="tab" id="tab1">
                    <div class="profile tab__content">
                        <!-- form1 -->
                        <form action="" method="post" class="profile__form">
                            <div class="row">
                                <!-- left -->
                                <div class="profile__left">
                                    <div class="row">
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                Имя
                                            </label>
                                            <input type="text" name="name" class="profile__input input"
                                                   placeholder="Иван">
                                        </div>
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                E-mail адрес
                                            </label>
                                            <input type="email" name="email" class="profile__input input"
                                                   placeholder="ivanov@mail.com">
                                        </div>
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                Фамилия
                                            </label>
                                            <input type="text" name="surname" class="profile__input input"
                                                   placeholder="Иванов">
                                        </div>
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                Новый пароль
                                            </label>
                                            <input type="password" name="password"
                                                   class="profile__input profile__input_password input"
                                                   placeholder="**********">
                                            <svg class="profile__svg" viewBox="0 0 23.02 15">
                                                <use xlink:href="images/icons/sprite.svg#eye"></use>
                                            </svg>
                                        </div>
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                Отчество
                                            </label>
                                            <input type="text" name="thirdname" class="profile__input input"
                                                   placeholder="Иванович">
                                        </div>
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                Подтверждение нового пароля
                                            </label>
                                            <input type="password" name="new_password"
                                                   class="profile__input profile__input_password input"
                                                   placeholder="**********">
                                            <svg class="profile__svg" viewBox="0 0 23.02 15">
                                                <use xlink:href="images/icons/sprite.svg#eye"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- END left -->

                                <!-- right -->
                                <div class="profile__right">
                                    <input type="submit" value="Сохранить" class="profile__submit button">
                                    <div class="profile__links">
                                        <a href="" class="profile__link">Выйти </a>
                                        <span class="profile__seporator"> / </span>
                                        <a href="" class="profile__link">Удалить аккаунт</a>
                                    </div>
                                </div>
                                <!-- END right -->
                            </div>
                        </form>
                        <!-- END form1 -->

                        <!-- form2 -->
                        <form action="" method="post" class="profile__form">
                            <div class="row">
                                <!-- left -->
                                <div class="profile__left">
                                    <div class="row">
                                        <div class="profile__block profile__block_100">
                                            <label class="profile__label">
                                                Адрес доставки
                                            </label>
                                            <input type="text" name="addr" class="profile__input input"
                                                   placeholder="Адрес доставки">
                                        </div>
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                Номер телефона
                                            </label>
                                            <input type="tel" name="tel1" class="profile__input input"
                                                   placeholder="+7 (___) ___-__-__">
                                        </div>
                                        <div class="profile__block">
                                            <label class="profile__label">
                                                Номер телефона 2
                                            </label>
                                            <input type="tel" name="tel2" class="profile__input input"
                                                   placeholder="+7 (___) ___-__-__">
                                        </div>
                                    </div>
                                </div>
                                <!-- END left -->

                                <!-- right -->
                                <div class="profile__right">
                                    <label class="profile__label">
                                        Доп. текст
                                    </label>
                                    <textarea name="comment"
                                              class="profile__input input profile__input_text"></textarea>
                                </div>
                                <!-- END right -->

                                <!-- left -->
                                <div class="profile__left">
                                    <input type="submit" value="Сохранить изменения"
                                           class="profile__submit profile__submit_2 button">
                                </div>
                                <!-- END left -->
                            </div>
                        </form>
                        <!-- END form2 -->

                    </div>
                </div>
                <div class="tab" id="tab2">
                    <div class="tab__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur doloremque error,
                        neque quaerat rem? Eius maxime nisi odit optio rerum! Accusamus atque aut blanditiis, commodi
                        cum,
                        deserunt distinctio ducimus ea eligendi eos eveniet expedita explicabo facere ipsam laboriosam,
                        laudantium modi obcaecati odit pariatur porro quo rem repellat tempora ut vel velit vitae! Ad
                        adipisci beatae consequatur consequuntur corporis cum dignissimos dolore dolores eius error eum
                        exercitationem explicabo illo impedit in inventore ipsam laborum libero magnam modi molestiae
                        natus,
                        nemo nulla officia omnis pariatur perferendis placeat provident qui quibusdam recusandae, rerum
                        ullam vel velit vero voluptas voluptate! Blanditiis, perspiciatis repellendus!
                    </div>
                </div>
                <div class="tab" id="tab3">
                    <div class="tab__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur doloremque error,
                        neque quaerat rem? Eius maxime nisi odit optio rerum! Accusamus atque aut blanditiis, commodi
                        cum,
                        deserunt distinctio ducimus ea eligendi eos eveniet expedita explicabo facere ipsam laboriosam,
                        laudantium modi obcaecati odit pariatur porro quo rem repellat tempora ut vel velit vitae! Ad
                        adipisci beatae consequatur consequuntur corporis cum dignissimos dolore dolores eius error eum
                        exercitationem explicabo illo impedit in inventore ipsam laborum libero magnam modi molestiae
                        natus,
                        nemo nulla officia omnis pariatur perferendis placeat provident qui quibusdam recusandae, rerum
                        ullam vel velit vero voluptas voluptate! Blanditiis, perspiciatis repellendus!
                    </div>
                </div>
                <div class="tab" id="tab4">
                    <div class="tab__content">
                        <div class="history">

                            <!-- head -->
                            <div class="history__head">
                                <div class="row">
                                    <div class="history__th history__w-number">
                                        Номер заказа
                                    </div>
                                    <div class="history__th history__w-date">
                                        Дата
                                    </div>
                                    <div class="history__th history__w-count">
                                        Количество
                                    </div>
                                    <div class="history__th history__w-sum">
                                        Сумма
                                    </div>
                                    <div class="history__th history__th_left history__w-status">
                                        Статус
                                    </div>
                                </div>
                            </div>
                            <!-- END head -->

                            <!-- body -->
                            <div class="history__body">
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status">
                                                    Оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button type="button" class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status history__status_unpaid">
                                                    Не оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button type="button" class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status">
                                                    Оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button type="button" class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status">
                                                    Оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button type="button" class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status">
                                                    Оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button type="button" class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status">
                                                    Оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button type="button" class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status">
                                                    Оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="history__item">
                                    <div class="history__item-wrapper">
                                        <div class="row">
                                            <div class="history__td history__w-number">
                                                <button type="button" class="history__number">
                                                    <svg class="history__number-svg" viewBox="0 0 15 8"">
                                                    <use xlink:href="images/icons/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                    <div class="history__number-text">
                                                        Заказ №12345
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="history__td history__w-date">
                                                <div class="history__date">
                                                    26. 07 .2018
                                                </div>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-sum">
                                                <div class="history__sum">
                                                    15 900 руб
                                                </div>
                                            </div>
                                            <div class="history__td history__w-status">
                                                <div class="history__status">
                                                    Оплачен
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history__item-hidden history__hidden">
                                        <div class="row">
                                            <div class="history__td history__w-product">
                                                <div class="history__hidden-th history__hidden-th_left-product">
                                                    Товар
                                                </div>
                                                <a href="" class="history__product">
                                                    Аккумуляторная дрель-шуруповёрт
                                                    Bosch GSR 140-LI
                                                </a>
                                            </div>
                                            <div class="history__td history__w-count">
                                                <div class="history__hidden-th">
                                                    Количество
                                                </div>
                                                <div class="history__count">
                                                    2 шт.
                                                </div>
                                            </div>
                                            <div class="history__td history__w-price">
                                                <div class="history__hidden-th">
                                                    Цена
                                                </div>
                                                <div class="history__price">
                                                    7 900 руб
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- END body -->
                        </div>
                    </div>
                </div>
                <div class="tab active" id="tab5">
                    <div class="tab__content">
                        <div class="docs">
                            <div class="row">

                                <!-- items -->
                                <div class="docs__items">
                                    <div class="docs__items-title">
                                        PDF
                                    </div>
                                    <div class="docs__items-wrapper">
                                        <div class="docs__items-list" >
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/pdf.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/pdf.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/pdf.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/pdf.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/pdf.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/pdf.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END items -->

                                <!-- items -->
                                <div class="docs__items">
                                    <div class="docs__items-title">
                                        DOC
                                    </div>
                                    <div class="docs__items-wrapper">
                                        <div class="docs__items-list" >
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/doc.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/doc.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/doc.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/doc.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/doc.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <!-- END items -->

                                <!-- items -->
                                <div class="docs__items">
                                    <div class="docs__items-title">
                                        EXCEL
                                    </div>
                                    <div class="docs__items-wrapper">
                                        <div class="docs__items-list" >
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/exel.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/exel.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/exel.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/exel.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/exel.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/exel.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>
                                            <a download href="" class="docs__item">
                                                <span class="docs__item-img">
                                                    <img src="images/icons/exel.png" alt="" class="docs__item-pic">
                                                </span>
                                                <span class="docs__item-title">
                                                    <span class="docs__item-date">
                                                        12.06.2018
                                                    </span>
                                                    Заголовок документа
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <!-- END items -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END tabs -->

        </div>
    </section>
    <!-- END product -->


</main>
<!-- END main -->