<?php
get_header();
get_template_part('index','banner'); ?>
<!-- Blog Section with Sidebar -->
<div class="page-builder">
	<div class="container">
		<div class="row">
			<!-- Blog Area -->
            <div class="col-xs-12">
                <?php
                $goods= [
                    [
                        'id' => 1,
                        'name' => 'Часы "Муми-тролли"',
                        'price' => '600p',
                        'path' => '../../images/IMG_8464.jpg'
                    ],
                    [
                        'id' => 1,
                        'name' => 'Часы "Слоны"',
                        'price' => '600p',
                        'path' => '../../images/IMG_8421.jpg'
                    ],
                    [
                        'id' => 1,
                        'name' => 'Часы "Божья коровка"',
                        'price' => '600р',
                        'path' => '../../images/IMG_8419.jpg'
                    ]
                ];
                ?>
                <?php foreach ($goods as $good):?>
                    <div class="shopUnit">
                        <img src=" <?php echo $good['path']?>" />

                        <div class="shopUnitName">
                            <?php echo $good['name']?>
                        </div>
                        <div class="shopUnitShortDesc">
                            Здесь будет немного текста описывающего продукт.
                            Здесь будет немного текста описывающего продукт.
                            Здесь будет немного текста описывающего продукт.
                        </div>
                        <div class="shopUnitPrice">
                            Цена:  <?php echo $good['price']?>
                        </div>
                        <a href="#" class="shopUnitMore">
                            Подробнее
                        </a>
                    </div>
                <?php endforeach;?>
            </div>

<!--			<div class="<?php /*appointment_post_layout_class(); */?>" >
			<?php /*if( $post->post_content != "" )
			{ */?>
			<div class="blog-lg-area-left">
			<?php /*if( have_posts()) :  the_post();
			the_content(); 
			endif; */?>
			</div>
			<?php /*} comments_template( '', true ); // show comments */?>
			</div>-->
			<!-- /Blog Area -->			
			<!--Sidebar Area-->
<!--			<div class="col-md-4">
				<?php /*get_sidebar(); */?>
			</div>-->
			<!--Sidebar Area-->
		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>