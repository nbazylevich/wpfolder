<?php
/*
 Template Name: Шаблон главной страницы
 */
?>


<!---Header-->
<?php get_header()?>

<div class="content main-content">
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
    </div>
</div>

<!---Footer-->
<?php get_footer()?>
