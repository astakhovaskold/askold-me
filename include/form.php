<form action="include/ajax.php" method="POST" id="nexgen-simple-form" class="nexgen-simple-form">
    <input type="hidden" name="section" value="nexgen_form">

    <input type="hidden" id="reCAPTCHA" name="reCAPTCHA">
    <!-- Remove this field if you want to disable recaptcha -->

    <div class="row form-group-margin">
        <div class="col-12 col-md-6 m-0 p-2 input-group">
            <input type="text" name="name" class="form-control field-name" placeholder="Имя">
        </div>
        <div class="col-12 col-md-6 m-0 p-2 input-group">
            <input type="email" name="email" class="form-control field-email" placeholder="Email">
        </div>
        <div class="col-12 col-md-6 m-0 p-2 input-group">
            <input type="tel" name="phone" class="form-control field-phone" placeholder="Телефон">
        </div>
        <div class="col-12 col-md-6 m-0 p-2 input-group">
            <i class="icon-arrow-down mr-3"></i>
            <select name="type" class="form-control field-info">
                <option value="" selected disabled>Услуга</option>
                <option>Разработка</option>
                <option>Обслуживание</option>
                <option>SEO-аудит</option>
                <option>Контекст / CPC</option>
                <option>Маркетинговая стратегия</option>
                <option>Консалтинг</option>
                <option>Другое</option>
            </select>
        </div>
        <div class="col-12 m-0 p-2 input-group">
            <textarea name="message" class="form-control field-message" placeholder="Опишите ваши задачи"></textarea>
        </div>
        <div class="col-12 col-12 m-0 p-2 input-group">
            <span class="form-alert"></span>
        </div>
        <div class="col-12 input-group m-0 p-2">
            <a class="btn primary-button">ОТПРАВИТЬ</a>
        </div>
    </div>
</form>