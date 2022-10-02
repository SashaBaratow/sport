<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codytext-webas
 */

?>
<footer id="footer">
    <div class="container">
        <div class="footer__info">
            <div class="footer__links bottom-links">
                <a href="https://ru-ru.facebook.com/"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/face.png" alt="" style="width: 20px; height: 34px;"> </a>
                <a href="https://www.instagram.com/"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/inst.png" alt="" style="width: 32px; height: 32px;"> </a>
                <a href="https://web.telegram.org/z/"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/teleg.png" alt="" style="width: 32px; height: 32px;"> </a>
                <a href="https://api.whatsapp.com/send/?phone=<?php echo $GLOBALS['site_info']['whatsapp']?>"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/wa.png" alt="" style="width: 32px; height: 32px;"> </a>
            </div>
            <div class="footer__menu">
                <span class="text-uppercase">Меню</span>
                <?php wp_nav_menu( [
                    'theme_location'  => 'top-menu',
                    'menu'            => '',
                    'container'       => null,
                    'menu_class'      => 'nav-links',
                    'menu_id'         => '',
                ] ); ?>
            </div>
            <div class="footer__links ">
                <a href="<?php echo $GLOBALS['site_info']['footer__social_fc']?>"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/face.png" alt="" style="width: 20px; height: 34px;">  </a>
                <a href="<?php echo $GLOBALS['site_info']['instagram']?>"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/inst.png" alt="" style="width: 32px; height: 32px;"> </a>
                <a href="<?php echo $GLOBALS['site_info']['telega']?>"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/teleg.png" alt="" style="width: 32px; height: 32px;"> </a>
                <a href="https://api.whatsapp.com/send/?phone=<?php echo $GLOBALS['site_info']['whatsapp']?>"><img class="soc-info" src="<?=get_template_directory_uri()?>/assets/img/social/wa.png" alt="" style="width: 32px; height: 32px;"> </a>
            </div>
            <div class="footer__address">
                <div class="address">
                    <span class="text-uppercase">Наш адрес</span> <br>
<!--                    <p>Абдумомунова , 237</p> <br> -->
                    <p><?php echo $GLOBALS['site_info']['address']?></p> <br>
                </div>
                <div class="phone">
                    <span class="text-uppercase">Телефон</span> <br>
                    <a href="tel:<?php echo $GLOBALS['site_info']['phone']?>"><?php echo $GLOBALS['site_info']['phone']?></a> <br>
                    <a href="tel:<?php echo $GLOBALS['site_info']['phone']?>"><?php echo $GLOBALS['site_info']['phone']?></a>
                </div>
            </div>
            <div id="map"></div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [54.98, 82.89],
            zoom: 13
        });
    });
</script>
<script>
    new WOW().init();
</script>
<?php wp_footer();?>
</body>
</html>