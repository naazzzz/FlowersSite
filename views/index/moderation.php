<form action="index.php?route=moderationContent" class="modern" method="post">
    <label for="pass"></label>
    <input type="hidden" name="pass" id="pass" value="1234">
    <?php foreach ($contentInfo as $onecont):  ?>
    <label for="mainCont"></label>Основной текст главной страницы<br><br>
    <textarea rows="30" cols="100" name="mainCont" id="mainCont"> <?=$onecont['mainPage'];?></textarea><br><br>
    <label for="authorCont"></label>Основной текст страницы об авторе<br><br>
    <textarea rows="30" cols="100" name="authorCont" id="authorCont" ><?=$onecont['aboutAuthor'];?></textarea><br><br>
    <label for="aboutCont"></label>Основной текст страницы о фирме<br><br>
    <textarea rows="30" cols="100" name="aboutCont" id="aboutCont"><?=$onecont['about'];?></textarea><br>
    <br>
    <?php endforeach; ?>
    <button>Сохранить</button>
</form>
<br>
<br>
<div class="modern">
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
        <form action="index.php?route=moderationProductUpdate" method="post">
            <input type="hidden" name="pass" id="pass" value="1234">
            <p>id=<?=$oneflower['id'];?><br>
            <input type="hidden" name="id" id="id" value="<?=$oneflower['id'];?>">
            <input type="text" name="name" id="name" value="<?=$oneflower['name'];?>"<br>
            <input type="text" name="img" id="img" value="<?=$oneflower['img'];?>"<br>
            <input type="text" name="description" id="description" value="<?=$oneflower['description'];?>"<br>
            <input type="text" name="price" id="price" value="<?=$oneflower['price'];?>"<br>
            <input type="text" name="category" id="category" value="<?=$oneflower['category'];?>"</p>
            <button>Изменить</button>
            </td>
        </form>
        <form action="index.php?route=moderationProductDelete" method="post">
            <input type="hidden" name="pass" id="pass" value="1234">
            <label for="id"></label>
            <input type="hidden" name="id" id="id" value="<?=$oneflower['id'];?>">
            <input type="hidden" name="name" id="name" value="<?=$oneflower['name'];?>"<br>
            <input type="hidden" name="img" id="img" value="<?=$oneflower['img'];?>"<br>
            <input type="hidden" name="description" id="description" value="<?=$oneflower['description'];?>"<br>
            <input type="hidden" name="price" id="price" value="<?=$oneflower['price'];?>"<br>
            <input type="hidden" name="category" id="category" value="<?=$oneflower['category'];?>"</p>
            <button>Удалить</button>
        </form>
        <?php endforeach; ?>
        </tbody>
    </table>
    Добавить<br><br>
    <form action="index.php?route=moderationProductAdd" method="post">
    <input type="hidden" name="pass" id="pass" value="1234">
    <input type="text" name="name" id="name" value=""<br>
    <input type="text" name="img" id="img" value=""<br>
    <input type="text" name="description" id="description" value=""<br>
    <input type="text" name="price" id="price" value=""<br>
    <input type="text" name="category" id="category" value=""</p>
    <button>Добавить новый товар</button><br><br>
    </form>
    Загрузить фото в директорию<br><br>
    <form action="index.php?route=downloadFile" method="post" enctype="multipart/form-data">
        <input type="hidden" name="pass" id="pass" value="1234">
        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <!-- Название элемента input определяет имя в массиве $_FILES -->
        Отправить этот файл: <input  type="file" name="userfile" />
        <input type="submit" value="Отправить файл" />
    </form>
</div>

