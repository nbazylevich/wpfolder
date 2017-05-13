
<!---Header-->
<?php get_header()?>


<div class="content">
    <div  id="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!--Название  поста-->
            <?php the_title() ?>

            <!--Содержание  поста-->
            <!--        --><?php //the_content() ?>

            <!--Содержание  поста с обрезание до n кол-ва слов(по умолчанию 55)-->
            <?php the_excerpt() ?>

            <!--Дата  поста-->
            <?php the_date('d M Y') ?>

            <!--Новости(Посты)-->
            <div id="news">
                fg
            </div>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>




        <!--Каталог-->
        <div id="catalog">
            <div class="row">
                <div class="goods col-xs-4 formItems" ng-repeat="good in goods">
                    <div class="good">
                        <div class="imgBlock">
                            <!--                            <img alt="Часы" src="images/IMG_8450.JPG" class="goodImg">-->
                            <img alt="Часы" src="<?php bloginfo('template_url')?>/images/IMG_8450.JPG" class="goodImg">
                        </div>

                        <div class="">
                            <span class="nameGood" ng-bind="good.name"></span>
                            <div class="priceAndBuy row">
                                <div class="col-xs-6">
                                    <span class="bold-text" ng-bind="good.price"></span>
                                </div>
                                <div class="col-xs-6">
                                    <button class="buttonBuy width-100">Купить</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>


</div>

<!---Footer-->
<?php get_footer()?>
