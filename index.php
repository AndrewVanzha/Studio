<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
?>
<?//php require($_SERVER['DOCUMENT_ROOT'].'/Studio/header.php');?>
<?php require(__DIR__.'/header.php');?>

<div class="main-block__wrapper">
    <div class="form__block_body">
        <h2 class="form__block_header">Заполни и вышли форму</h2>
            <div class="form__block_div">
                <form enctype="multipart/form-data" method="POST" action="">
                    <label class="form-label">Введите имя:</label>
                    <input type="text" class="form-input" name="name" placeholder="Имя" required>
                    <label class="form-label">Введите телефон:</label>
                    <input type="tel" class="form-input" name="phone" pattern="(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?" placeholder="8 (000) 000-00-00" required>
                    <label class="form-label">Введите E-mail:</label>
                    <input type="email" class="form-input form-input--position" name="email" placeholder="E-mail" required>
                    <input type="hidden" name="key" id="visitor_uid">
                    <button type="submit" name="upload" class="btn submit-button">
                            <span>Выслать форму</span>
                    </button>
                    <p class="data-info">Передавая нам свои персональные данные, Вы соглашаетесь на обработку ваших персональных данных</p>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="popup-form">
    <div class="popup__wrapper">
        <div class="popup__block">
            <div class="popup__block_close">
                <img src="upload/img-generator/icon-cross.png" alt="иконка закрытия формы">
            </div>
            <div class="popup__block_body">
                <h2 class="popup__block_header">Получите набор файлов для руководителя</h2>
                <div class="popup__block_images">
                    <div class="popup__block_icons">
                        <div class="img-box">
                            <img src="upload/img-generator/icon-doc.png" alt="иконка файла">
                        </div>
                        <div class="img-box">
                            <img src="upload/img-generator/icon-xls.png" alt="иконка файла">
                        </div>
                        <div class="img-box">
                            <img src="upload/img-generator/icon-pdf.png" alt="иконка файла">
                        </div>
                        <div class="img-box">
                            <img src="upload/img-generator/icon-pdf.png" alt="иконка файла">
                        </div>
                        <div class="img-box">
                            <img src="upload/img-generator/icon-pdf.png" alt="иконка файла">
                        </div>
                        <div class="img-box">
                            <img src="upload/img-generator/icon-pdf.png" alt="иконка файла">
                        </div>
                        <div class="img-box">
                            <img src="upload/img-generator/icon-pdf.png" alt="иконка файла">
                        </div>
                    </div>
                    <div class="bigimg-box">
                        <img src="upload/img-generator/big-img.png" alt="общее изображение">
                    </div>
                </div>
                <div class="popup__block_form">
                    <form enctype="multipart/form-data" method="POST" action="">
                        <label class="form-label">Введите E-mail для получения файлов:</label>
                        <input type="email" class="form-input form-input--position" name="email" placeholder="E-mail" required>
                        <label class="form-label">Введите телефон для подтверждения доступа:</label>
                        <input type="tel" class="form-input" name="phone" pattern="(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?" placeholder="8 (000) 000-00-00" required>
                        <input type="hidden" name="key" id="visitor_uid">
                        <button type="submit" name="upload" class="submit-button">
                            <span>Скачать файлы</span>
                        </button>
                        <p class="file-types">
                            <span>pdf 4,7 mb</span>
                            <span>doc 0,8 mb</span>
                            <span>xls 1,2 mb</span>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?//php require($_SERVER['DOCUMENT_ROOT'].'/Studio/footer_generator.php');?>
<?php require(__DIR__.'/footer.php');?>
