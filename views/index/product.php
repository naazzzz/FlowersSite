
<div class="name-main about_info_wrap">
    <?php foreach ($flowersInfo as $oneflower):  ?>
    <h3><?=$oneflower['name'];?></h3>
    <span class="long_dash"></span>
    <div class="this_product">
        <div class="product_info">
            <img src = "<?=$oneflower['img'];?>">
                <p>(Размер:<?=$oneflower['size'];?>;
                    Высота:<?=$oneflower['high'];?>;Сорт:<?=$oneflower['sort'];?>)<br><br><?=$oneflower['price'];?> руб./шт</p>

        </div>
        <div class="header-line-black"></div>
                <p>Предложение товара на сайте не гарантирует его фактическое наличие. Актуальные остатки подтверждает менеджер после оформления заказа
                    <br>Цена действительна только для интернет-магазина и может отличаться от цен в розничных магазинах
                    <br>Фотографии несут информативный характер, фактический вид товара(растения) может отличаться
        <div class="header-line-black"></div>
                    <br>Приобрести данный товар Вы можете on-line на нашем сайте,
                    <br>позвонив по телефону +79081720043, а также в офисе в Ростове-на-Дону.
                </p>
        </div>
    <?php endforeach; ?>
</div>

