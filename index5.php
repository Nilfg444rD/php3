<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея изображений</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .header { text-align: center; padding: 20px; background-color: #ddd; }
        .menu { background-color: #eee; padding: 10px; text-align: center; }
        .menu ul { list-style-type: none; margin: 0; padding: 0; }
        .menu li { display: inline; margin-right: 20px; }
        .menu a { text-decoration: none; color: #333; font-weight: bold; }
        .gallery img { width: 150px; height: auto; margin: 10px; border-radius: 10px; }
        .gallery { display: flex; flex-wrap: wrap; justify-content: center; }
        .footer { text-align: center; padding: 10px; background-color: #ddd; }
    </style>
</head>
<body>

<div class="header">
    <h1>I love cats</h1>
</div>

<div class="menu">
    <ul>
        <li><a href="#">About Cats</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Contacts</a></li>
    </ul>
</div>

<div class="content">
    <div class="gallery">
        <?php
        $dir = 'images/'; // Путь к папке с изображениями

        // Получаем список файлов в директории
        $files = scandir($dir);

        // Проверка на ошибки
        if ($files !== false) {
            foreach ($files as $file) {
                // Пропускаем текущий и родительский каталоги
                if ($file != "." && $file != "..") {
                    // Формируем путь к изображению
                    $path = $dir . $file;
                    // Выводим изображение
                    echo "<img src='$path' alt='Image'>";
                }
            }
        } else {
            echo "Ошибка при сканировании директории.";
        }
        ?>
    </div>
</div>

<div class="footer">
    <p>USH &copy; 2024</p>
</div>

</body>
</html>
