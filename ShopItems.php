<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>NIKE OUTLET</title>
</head>
<style></style>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="Sneakers.js"></script>
<script src="DB.js"></script>
<script src="Lab4.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="Lab2.css" />


<body>
    <!-- <?php
            if (isset($_POST)) {
                if (isset($_POST['hfDB'])) {
                    debug_to_console("База получена!");
                    debug_to_console($_POST['hfDB']);
                    file_put_contents("data.json",  $_POST['hfDB']);
                }
            }
            ?> -->
    <input type="text" class="d-none" id="hfObject" name="hfObject" value="<?php if (isset($_POST['hfObject'])) print $_POST['hfObject']; ?>">
    <nav class="navbar">
        <dvi class="logo"> NIKE OUTLET </dvi>
        <div class="navBarButtonsList">
            <section title="Корзина" class="sectionInline">
                <div id="btnShopingCart" class="navbarButton">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="" />
                        </svg>
                    </a>
                </div>
            </section>
            <section title="Профиль" class="sectionInline">
                <div id="btnShopingUser" class="navbarButton">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="" />
                        </svg>
                    </a>
                </div>
            </section>
            <section title="Избранное" class="sectionInline">
                <div id="btnFavorite" class="navbarButton">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="" />
                        </svg>
                    </a>
                </div>
            </section>
            <section title="Поиск" class="sectionInline">
                <div id="btnSearch" class="navbarButton">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="" />
                        </svg>
                    </a>
                </div>
            </section>
        </div>
    </nav>
    <nav class="secondaryNavbar">
        <!-- <div class="navBarSecondaryButtonsList"> -->
        <div class="flex-container">
            <div class="navbarSecondaryButton">
                <a> Каталог </a>
            </div>
            <div class="navbarSecondaryButton">
                <a> Бренды </a>
            </div>
            <div class="navbarSecondaryButton">
                <a> Акции </a>
            </div>
            <div class="navbarSecondaryButton">
                <a> Магазины </a>
            </div>
            <div class="navbarSecondaryButton">
                <a> Доставка </a>
            </div>
        </div>
    </nav>
    <nav class="mobileNavbar">
        <section title="Кнопка сворачивания панели" class="sectionInline">
            <div id="btnNavBarMobileToggle" class="navbarMobileToggleButton" onclick="OnBtnNavBarMobileToggleClick();">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                        <path d="" />
                    </svg>
                </a>
            </div>
        </section>
        <dvi class="mobileLogo"> NIKE OUTLET </dvi>
        <section title="Элемент мобильной панели навигации" class="sectionInline">
            <div id="mobileNavbarButtonsList" class="mobileNavbarButtonsListHidden">
                <div class="mobileNavbarButton">
                    <a>Каталог</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Бренды</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Акции</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Магазины</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Доставка</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Корзина</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Личный кабинет</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Избранное</a>
                </div>
                <div class="mobileNavbarButton">
                    <a>Поиск</a>
                </div>
            </div>
        </section>
    </nav>
    <div class="jumbotron">
        <h1>ДОБРО ПОЖАЛОВАТЬ!</h1>
        <p>
            На нашем сайте вы можете приобрести фирменную оригинальную продукцию
            Nike по приятным ценам.
        </p>
        <div class="jumbotronButton">
            <a>Перейти в каталог</a>
        </div>
    </div>
    <div class="shopItemsName">
        <h2>Новинки</h2>
    </div>
    <div id="shopItemsListContainer">
    </div>

    <form method="post" action="Edit.php">
        <!-- <input name="ID" class="d-none" type="sumbit" spellcheck="false" data-ms-editor="true" value="1"> -->
        <input type="submit" class="btn btn-primary w-100" value="Создать запись">
    </form>

    <div class="infoBlock">
        <h1 class="infoBlockTitle">КЛУБНАЯ КАРТА</h1>
        <p class="infoBlockDescription">
            Бонусы, подарки и специальные предложения для членов клуба
        </p>
        <div class="infoBlockButton">
            <a>Подробнее</a>
        </div>
    </div>





    <footer>
        <h4>Связаться с нами:</h4>
        <div class="footerBtnSocial">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
        </div>
        <div class="footerBtnSocial">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
        </div>
        <div class="footerBtnSocial">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
            </svg>
        </div>
        <div class="footerBtnSocial">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg>
        </div>
    </footer>

</body>

<?php
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log(\"Debug Objects: " . $output . "\" );</script>";
}

//debug_to_console($_POST['edit']);
//debug_to_console($_POST['itemId']);
// if (!empty($_POST)) {
//     debug_to_console("POST NOT EMPTY");
//     debug_to_console($_POST);

//     $name = $_POST['edit']['name'];
//     $id = $_POST['itemId'];
//     debug_to_console("button click");
//     debug_to_console($name);
//     debug_to_console($id);
// }
// if (isset($_POST['name']) && isset($_POST['itemId'])) {
// }
?>

</html>