<?php
/*
Template Name: Главная
*/
get_header();
?>
<?php  $page_id = get_the_ID();?>
    <main class="front-page">
        <div class="tourists-on-stone">
            <img class="main-tourists desc" src="<?=get_template_directory_uri()?>/assets/img/tourists.png" alt="">
            <img class="main-tourists mob" src="<?=get_template_directory_uri()?>/assets/img/tourists-mob.png" alt="">
        </div>
        <div class="all-tours-list">
            <div class="block-list">
                <i class="fa fa-times fa-2x close-btn" aria-hidden="true"></i>
                <?php
                $pageid = 71;
                $content_post = get_post($pageid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
                ?>
            </div>
        </div>
        <section class="consultation">
            <div class="container">
                <div class="inner">
                    <h2 class="text-uppercase">В ОДИН КЛИК</h2>
                    <span>   Дорогие жители и гости столицы, <br>
                планируйте незабываемый отдых <br>
                вместе с нами
            </span>
                    <a class="consultation-btn" href="https://api.whatsapp.com/send/?phone=<?php echo $GLOBALS['site_info']['whatsapp']?>">Консультация</a>
                </div>
                <div class="arrow">
                    <img src="<?=get_template_directory_uri()?>/assets/img/arrow.svg" alt="">
                </div>
            </div>
        </section>
        <section class="table">
            <img class="table-img" src="<?=get_template_directory_uri()?>/assets/img/tbl.png" alt="">
            <span class="table-text">
                получить план  походов
            </span>
        </section>
        <div class="section-bag">
            <img src="<?=get_template_directory_uri()?>/assets/img/bag.png" alt="">
        </div>
        <section class="our-tours">
            <div class="container">
                <h2 class="block-title">НАШИ ПОХОДЫ</h2>
                <div class="tours-list desc">
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/fon.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/popular-routes/">
                                <span class="t-tour">самые</span>
                                <h5>Популярные</h5>
                                <span class="tour-category">маршруты</span>
                            </a>
                            <article>
                               Походы, которые так полюбились нашим группам.
                               Самые узнаваемые маршруты и самые
                               любимые локации нашей страны ждут вас!
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/oneday.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/day-trips/">
                                <span class="t-tour">Походы</span>
                                <h5 class="an_color">Однодневные</h5>
                                <span class="tour-category an_color">групповые</span>
                            </a>
                            <article>
                              Проведите свой день интересно, насыщенно и весело.
                              Насладитесь красотами нашей природы и свежим воздухом, отдохните умом и телом!
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/fon-3.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/multi-day-hikes/">
                                <span class="t-tour">Походы</span>
                                <h5>Многодневные</h5>
                                <span class="tour-category">групповые</span>
                            </a>
                            <article>
                                Отличная возможность провести пару дней вдали от городской суеты, наедине с природой, в дружной компании
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/region.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/regional-hikes/">
                                <span class="t-tour">Походы</span>
                                <h5 class="an_color">региональные</h5>
                                <span class="tour-category an_color">групповые</span>
                            </a>
                            <article>
                              Расширяем горизонт, посещая локации в регионах нашей удивительно красивой страны
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/fon-2.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/winter-hikes/">
                                <span class="t-tour">походы</span>
                                <h5>Зимние</h5>
                                <span class="tour-category">групповые</span>
                            </a>
                            <article>
                               Катание на лыжах, походы на замерзшие озера и водопады , подъемы на снежные вершины и многое другое
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/all-t.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/">
                                <span class="t-tour">список</span>
                                <h5 class="an_color">всех</h5>
                                <span class="tour-category an_color">маршрутов</span>
                            </a>
                            <article>
                                Все новые локации и полюбившиеся вам классические маршруты на одной странице
                            </article>

                        </div>
                    </div>
                </div>
                <div class="tours-list main-slider-tours mob">
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/fon.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/popular-routes/">
                                <span class="t-tour">самые</span>
                                <h5>Популярные</h5>
                                <span class="tour-category">маршруты</span>
                            </a>
                            <article>
                                Походы которые так полюбились нашим группам
                                Самые узнаваемые маршруты и самые
                                любимые локации нашей страны ждут вас!
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/oneday.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/day-trips/">
                                <span class="t-tour">Походы</span>
                                <h5 class="an_color">Однодневные</h5>
                                <span class="tour-category an_color">групповые</span>
                            </a>
                            <article>
                                Проведите свой день интересно, насыщенно и весело
                                Насладитесь красотами нашей природы и свежим воздухом, отдохнете умом и телом!
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/fon-3.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/multi-day-hikes/">
                                <span class="t-tour">Походы</span>
                                <h5>Многодневные</h5>
                                <span class="tour-category">групповые</span>
                            </a>
                            <article>
                                Отличная возможность провести пару дней в дали от городской суеты, на едине с приодой, в дружной компании
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/region.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/regional-hikes/">
                                <span class="t-tour">Походы</span>
                                <h5 class="an_color">региональные</h5>
                                <span class="tour-category an_color">групповые</span>
                            </a>
                            <article>
                                Расширяем горизонт, посещаяя локации в регионах нашей удивително красивой страны
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/fon-2.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/winter-hikes/">
                                <span class="t-tour">походы</span>
                                <h5>Зимние</h5>
                                <span class="tour-category">групповые</span>
                            </a>
                            <article>
                                Катание на лыжах, походы на замерзшие озера и водопады , подъемы на снежные вершины и многое другое
                            </article>

                        </div>
                    </div>
                    <div class="tour" style="background-image: url('<?=get_template_directory_uri()?>/assets/img/all-t.jpg');">
                        <div class="text">
                            <a href="<?=get_site_url();?>/category/tours/">
                                <span class="t-tour">список</span>
                                <h5 class="an_color">всех</h5>
                                <span class="tour-category an_color">маршрутов</span>
                            </a>
                            <article>
                                Все новые локации и полюбившиеся вам классические маршруты на одной странице
                            </article>

                        </div>
                    </div>
                </div>
            </div>
            <div class="block-mountains">
                <img src="<?=get_template_directory_uri()?>/assets/img/mount.png" alt="">
            </div>
        </section>
       <?php  get_template_part( 'template-parts/feedback');?>
        <section class="equipment">
            <div class="container">
                <h2>СНАРЯЖЕНИЕ</h2>
                <div class="items desc">
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/tents/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/Tent.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">Палатки</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/dishware/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/p1.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">посуда</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/backpacks/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/r.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">рюкзаки</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/ski/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/ski.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">Лыжи</a>
                        </div>
                    </div>
                </div>
                <div class="items equip-slider mob">
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/tents/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/Tent.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">Палатки</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/dishware/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/p1.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">посуда</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/backpacks/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/r.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">рюкзаки</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top-img">
                            <a href="<?=get_site_url();?>/category/rent/ski/">
                                <img src="<?=get_template_directory_uri()?>/assets/img/ski.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <a href="#">Лыжи</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
