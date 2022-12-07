
        <div class="name-main about_info_wrap">
                <h3>Каталог химии и удобрений</h3>
                <span class="long_dash"></span>
                <table>
                    <tbody>
                    <?php foreach ($flowersInfo as $oneflower):  ?>
                        <td class="price"><img src = "<?=$oneflower['img'];?>">
                            <p><?=$oneflower['name'];?><br>Объём:<?=$oneflower['size'];?></p>
                            <p class="price-flow"><?=$oneflower['price'];?> руб./шт</p>
                            <button onclick="document.location='index.php?route=product&id=<?=$oneflower['id'];?>&table=himiya'" class="custom-btn first-button cst-btn">Подробнее</button>
                        </td>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>

