<!--made by @ingxube/@g4vk4 on vk-->
<!DOCTYPE html>
<html>

<head>
    <title>TUNE - ТРЕКИ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <!--------------иконка сайта которая видна во вкладке--------------->
    <link rel="shortcut icon" href="../images/icon.png" type="image/png">
</head>

<body>
    <div id="navigation-container">
        <a href="../index.html" class="logo"></a>
        <ul>
            <li><a href="artists.php" class="menu">ИСПОЛНИТЕЛИ</a></li>
            <li><a href="albums.php" class="menu">АЛЬБОМЫ</a></li>
            <li><a href="#" class="menu">ТРЕКИ</a></li>
            <p id="menu">|</p>
            <li><a href="signup.html" class="menu">РЕГИСТРАЦИЯ</a></li>
            <li><a href="login.html" class="menu">ВХОД</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="banner1 grid">
            <?php
                $host = 'localhost';
                $user = 'root';
                $passw = '';
                $dbname = 'musicbd';

                $link = mysqli_connect($host, $user, $passw, $dbname)
                or die("Не удалось подключиться к БД" . mysqli_error($link));

                $query = mysqli_query($link, "SELECT * FROM tracks");
                    
                echo "<table> 
                <h2>ТРЕКИ</h2>
                <th>НАЗВАНИЕ</th>
                <th>ИСПОЛНИТЕЛЬ</th>
                <th>ПРОДОЛЖИТЕЛЬНОСТЬ</th>"; // start a table tag in the HTML
                    
                while($row = mysqli_fetch_array($query)){   //Creates a loop to loop through results
                echo "<tr><td>" . $row['trackName'] . "</td><td>" . $row['artistName'] . "</td><td>" . $row['length'] . "</td></tr>";  //$row['index'] the index here is a field name
                }
                    
                echo "</table>"; //Close the table in HTML
                    
                $link->close();
            ?>
        </div>
    </div>
    <div class="footer">
         <div class="block1">
             <a href="../index.html" class="logo1"></a>
        </div>
            <div class="block1">
                <h4>КОМПАНИЯ</h4>
                <p><a href="#">О нас</a></p>
                <p><a href="#">Вакансии</a></p>
                <p><a href="#">Контакты</a></p>
            </div>
            <div class="block1">
                <h4>СООБЩЕСТВА</h4>
                <p><a href="#">Для исполнителей</a></p>
                <p><a href="#">Для разработчиков</a></p>
                <p><a href="#">Реклама</a></p>
                <p><a href="#">Для инвесторов</a></p>
                <p><a href="#">Для вендоров</a></p>
            </div>

            <div class="block1">
                <h4>ПОЛЕЗНЫЕ ССЫЛКИ</h4>
                <p><a href="#">Справка</a></p>
                <p><a href="#">Веб-плеер</a></p>
                <p><a href="#">Бесплатное мобильное приложение</a></p>
            </div>

            <div class="block2" id="icons">
                <a href="#" id="faceb"></a>
                <a href="#" id="twi"></a>
                <a href="#" id="inst"></a>
            </div>
            <div class="block3">
                <a href="#">Юридическая информация</a>
                <a href="#">Конфиденциальность</a>
                <a href="#">Политика конфиденциальности</a>
                <a href="#">Файлы cookie</a>
                <a href="#">О рекламе</a>
            </div>
            <div class="block4">
                © 2021 TUNE
            </div>
        </div>
    </div>
</body>

</html>