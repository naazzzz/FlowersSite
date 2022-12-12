<form action="index.php?route=moderationSendRequest" class="modern" method="post">
    <label for="pass"></label>
    <input type="hidden" name="pass" id="pass" value="1234">
    <?php foreach ($contentInfo as $onecont):  ?>
    <label for="main-cont"></label>Основной текст главной страницы<br><br>
    <textarea rows="30" cols="100" name="main-cont" id="main-cont" value="<?=$onecont['mainPage'];?>"></textarea><br><br>
    <label for="author-cont"></label>Основной текст страницы об авторе<br><br>
    <textarea rows="30" cols="100" name="author-cont" id="author-cont" value="<?=$onecont['aboutAuthor'];?>"></textarea><br><br>
    <label for="about-cont"></label>Основной текст страницы о фирме<br><br>
    <textarea rows="30" cols="100" name="about-cont" id="about-cont" value="<?=$onecont['about'];?>"></textarea><br>
    <br>
    <?php endforeach; ?>
    <table class="table">
        <tbody>
        ТАБЛИЦА ТОВАРОВ<br><br>
        <div class="modernName">
            <p>Имя</p>
            <p>Путь к файлу</p>
            <p>Описание</p>
            <p>Цена</p>
            <p>Категория</p>
             </div>
        <?php foreach ($flowersInfo as $oneflower):  ?>
            <p>id=<?=$oneflower['id'];?><br>
            <input type="text" value="<?=$oneflower['name'];?>"<br>
            <input type="text" value="<?=$oneflower['img'];?>"<br>
            <input type="text" value="<?=$oneflower['description'];?>"<br>
            <input type="text" value="<?=$oneflower['price'];?>"<br>
            <input type="text" value="<?=$oneflower['category'];?>"</p>
            <button>Изменить</button>
            <button>Удалить</button>
            </td>
        <?php endforeach; ?>
        </tbody>
    </table>
    Добавить<br><br>
    <input type="text" value=""<br>
    <input type="text" value=""<br>
    <input type="text" value=""<br>
    <input type="text" value=""<br>
    <input type="text" value=""</p>
    <button>Добавить новый товар</button><br><br>
    <button>Сохранить</button>

</form>