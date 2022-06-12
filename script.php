<?php
// ограничение размера получаемого файла до 3 Мбайт (3 * 1024 * 1024 байта)
if ($_FILES['filename']['size'] > 3 * 1024 * 1024) {
    // завершение скрипта
    exit('Размер файла превышает 3 Мбайта');
}

// получение файла от пользователя и помещение его в папку folderforimg
if (move_uploaded_file($_FILES['filename']['tmp_name'], __DIR__ . '\folderforimg\\' . $_FILES['filename']['name'])) {
    echo "файл загружен";
    echo 'Исходное имя файла - ' . $_FILES['filename']['name'] . '<br>';
    echo 'Размер файла в байтах - ' . $_FILES['filename']['size'] . '<br>';
    echo 'MIME тип файла - ' . $_FILES['filename']['type'] . '<br>';
    echo 'Временный файл, в котором сохранен загруженный файл -' . $_FILES['filename']['tmp_name'] . '<br>';
} else {
    echo "файл НЕ загружен";
}
