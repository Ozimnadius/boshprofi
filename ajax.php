<?php
header('Content-Type: application/json');

$data = $_POST;
$action = $data['action'];

switch ($action) {
    case 'callorderForm':
        echo json_encode(array(
            'status' => true,
            'html' => callorderForm(),
        ));
        exit();
        break;
    case 'add':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'addFavorites':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'deleteBasketItem':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'addCompare':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'search':
        echo json_encode(array(
            'status' => true,
            'html' => searchResult()
        ));
        exit();
        break;
    default:
        echo json_encode(array(
            'status' => false,
        ));
        exit();
        break;
}


function callorderForm()
{
    ob_start();
    ?>
    <div class="callorder jsPopup">
        <form action="" method="post" class="callorder__form">
            <div class="callorder__close">
                <div class="close jsClosePopup">
                    <svg class="close__svg" viewBox="0 0 26.01 26.01">
                        <use xlink:href="images/icons/sprite.svg#delete"></use>
                    </svg>
                </div>
            </div>
            <div class="callorder__block">
                <label for="callorderName" class="label">
                    Ваше имя
                </label>
                <input type="text" id="callorderName" name="callorderName" class="input" placeholder="Ваше имя"
                       required>
            </div>
            <div class="callorder__block">
                <label for="callorderTel" class="label">
                    Номер телефона
                </label>
                <input type="tel" id="callorderTel" name="callorderTel" class="input" placeholder="+7 (___) ___-__-__"
                       required>
            </div>
            <div class="callorder__submit">
                <input type="submit" class="button" value="Заказать обратный звонок">
            </div>
            <div class="callorder__accept">
                <div class="accept">
                    <input type="checkbox" id="callorderAccept" name="callorderAcept" class="accept__check" checked>
                    <label for="callorderAccept" class="accept__label">
                        <span class="accept__left">
                            <span class="accept__fake"></span>
                        </span>
                        <span class="accept__right">
                            Политика конфиденциальности
                        </span>
                    </label>
                </div>
            </div>
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function searchResult()
{
    ob_start();
    ?>
    <a href="category.php" class="search__title">
        Перфораторы с патроном SDS-plus
    </a>
    <div class="search__list">
        <a href="product.php" class="search__item">
                                <span class="search__item-img">
                                    <img src="images/content/catalog/catalog-item1.png" alt="" class="catalog__item-pic">
                                </span>
            <span class="search__item-desc">
                                    <span class="search__item-text">
                                         GBH 2-20 D
                                    </span>
                                    <span class="search__item-price">
                                        7 966 руб.
                                    </span>
                                </span>
        </a>
        <a href="product.php" class="search__item">
                                <span class="search__item-img">
                                    <img src="images/content/catalog/catalog-item1.png" alt="" class="catalog__item-pic">
                                </span>
            <span class="search__item-desc">
                                    <span class="search__item-text">
                                         GBH 2-20 D
                                    </span>
                                    <span class="search__item-price">
                                        7 966 руб.
                                    </span>
                                </span>
        </a>
        <a href="product.php" class="search__item">
                                <span class="search__item-img">
                                    <img src="images/content/catalog/catalog-item1.png" alt="" class="catalog__item-pic">
                                </span>
            <span class="search__item-desc">
                                    <span class="search__item-text">
                                         GBH 2-20 D
                                    </span>
                                    <span class="search__item-price">
                                        7 966 руб.
                                    </span>
                                </span>
        </a>
        <a href="product.php" class="search__item">
                                <span class="search__item-img">
                                    <img src="images/content/catalog/catalog-item1.png" alt="" class="catalog__item-pic">
                                </span>
            <span class="search__item-desc">
                                    <span class="search__item-text">
                                         GBH 2-20 D
                                    </span>
                                    <span class="search__item-price">
                                        7 966 руб.
                                    </span>
                                </span>
        </a>
        <a href="product.php" class="search__item">
                                <span class="search__item-img">
                                    <img src="images/content/catalog/catalog-item1.png" alt="" class="catalog__item-pic">
                                </span>
            <span class="search__item-desc">
                                    <span class="search__item-text">
                                         GBH 2-20 D
                                    </span>
                                    <span class="search__item-price">
                                        7 966 руб.
                                    </span>
                                </span>
        </a>
        <a href="product.php" class="search__item">
                                <span class="search__item-img">
                                    <img src="images/content/catalog/catalog-item1.png" alt="" class="catalog__item-pic">
                                </span>
            <span class="search__item-desc">
                                    <span class="search__item-text">
                                         GBH 2-20 D
                                    </span>
                                    <span class="search__item-price">
                                        7 966 руб.
                                    </span>
                                </span>
        </a>

    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}



?>