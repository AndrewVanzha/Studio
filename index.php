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

<?//php require($_SERVER['DOCUMENT_ROOT'].'/Studio/footer.php');?>
<?php require(__DIR__.'/footer.php');?>
