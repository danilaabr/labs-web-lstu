<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="car-shop-styles.css">  
    <title>Автосалон - Auto48</title>
</head>
<body>
    <h1>Добавление автомобиля на продажу</h1>
    
    <?php 
    if (!empty($message)) {
        if (strpos($message, 'Ошибка при сохранении данных') !== false) {
            $messageClass = 'error';
        } else {
            $messageClass = 'success';
        }
        ?>
        <div class="message-popup-overlay"></div>
        <div class="message-popup <?php echo $messageClass; ?>-message">
            <span class="message-popup-close">&times;</span>
            <?php echo ($message); ?>
        </div>
    <?php } ?>

    <form class="main-form" action="form.php" method="POST">
        <div class="form-group">
            <label for="brand">Марка автомобиля*</label>
            <select name="brand" id="brand" required>
                <option value="">Выберите марку</option>
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="BMW">BMW</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Audi">Audi</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Lexus">Lexus</option>
                <option value="Ford">Ford</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Kia">Kia</option>
                <option value="Nissan">Nissan</option>
                <option value="Mazda">Mazda</option>
                <option value="Subaru">Subaru</option>
                <option value="Volvo">Volvo</option>
                <option value="Porsche">Porsche</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Infiniti">Infiniti</option>
            </select>
        </div>

        <div class="form-group">
            <label for="model">Модель*</label>
            <input type="text" name="model" id="model" required>
        </div>

        <div class="form-group">
            <label for="year">Дата выпуска*</label>
            <input type="date" name="year" id="year" required>
        </div>

        <div class="form-group">
            <label for="mileage">Пробег (км)*</label>
            <input type="number" name="mileage" id="mileage" min="0" required>
        </div>

        <div class="form-group">
            <label for="price">Цена (₽)*</label>
            <input type="number" name="price" id="price" min="0" required>
        </div>

        <div class="form-group">
            <label for="color">Цвет*</label>
            <select name="color" id="color" required>
                <option value="">Выберите цвет</option>
                <option value="Белый">Белый</option>
                <option value="Черный">Черный</option>
                <option value="Красный">Красный</option>
                <option value="Оранжевый">Оранжевый</option>
                <option value="Желтый">Желтый</option>
                <option value="Зеленый">Зеленый</option>
                <option value="Голубой">Голубой</option>
                <option value="Синий">Синий</option>
                <option value="Фиолетовый">Фиолетовый</option>
                <option value="Серый">Серый</option>
                <option value="Золотой">Золотой</option>
            </select>
        </div>

        <div class="form-group">
            <label for="engine_volume">Объем двигателя (л)*</label>
            <input type="number" name="engine_volume" id="engine_volume" step="0.1" min="0" required>
        </div>

        <div class="form-group">
            <label for="transmission">Коробка передач*</label>
            <select name="transmission" id="transmission" required>
                <option value="Механическая">Механическая</option>
                <option value="Автоматическая">Автоматическая</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comment">Комментарий</label>
            <textarea name="comment" id="comment" rows="4" placeholder="Не обязательное поле"></textarea>
        </div>

        <div class="form-group">
            <label for="seller_name">Имя продавца*</label>
            <input type="text" name="seller_name" id="seller_name" required>
        </div>

        <div class="form-group">
            <label for="contact_phone">Контактный телефон*</label>
            <input type="tel" name="contact_phone" id="contact_phone" required placeholder="Формат ввода: +79992919211">
        </div>

        <div class="form-group">
            <label for="contact_email">Email*</label>
            <input type="email" name="contact_email" id="contact_email" required>
        </div>

        <button type="submit">Добавить автомобиль</button>
    </form>
    <script src="car-add-func.js"></script>
</body>
</html>