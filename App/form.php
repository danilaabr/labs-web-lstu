<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand = trim($_POST['brand'] ?? '');
    $model = trim($_POST['model'] ?? '');
    $year = trim($_POST['year'] ?? '');
    $mileage = trim($_POST['mileage'] ?? '');
    $price = trim($_POST['price'] ?? '');
    $color = trim($_POST['color'] ?? '');
    $engine_volume = trim($_POST['engine_volume'] ?? '');
    $transmission = trim($_POST['transmission'] ?? '');
    $comment = trim($_POST['comment'] ?? '');
    $seller_name = trim($_POST['seller_name'] ?? '');
    $contact_phone = trim($_POST['contact_phone'] ?? '');
    $contact_email = trim($_POST['contact_email'] ?? '');

    $csvFile = 'data.csv';
    
    $dataRow = [
        $brand,
        $model,
        $year,
        $mileage,
        $price,
        $color,
        $engine_volume,
        $transmission,
        $comment,
        $seller_name,
        $contact_phone,
        $contact_email
    ];

    if (!file_exists($csvFile)) {
        $headers = [
            'Марка',
            'Модель',
            'Дата выпуска',
            'Пробег',
            'Цена',
            'Цвет',
            'Объем двигателя',
            'Коробка передач',
            'Комментарий',
            'Продавец',
            'Телефон',
            'Email'
        ];
        $file = fopen($csvFile, 'w');
        fputcsv($file, $headers);
        fclose($file);
    }

    if (($file = fopen($csvFile, 'a'))) {
        fputcsv($file, $dataRow);
        fclose($file);
        $message = 'Автомобиль успешно выставлен на продажу и внесен в базу';
    } else {
        $message = 'Ошибка при сохранении данных';
    }

    include 'index.php';
}
?>