<?php
get_header(); ?>
	<div id="primary">
		<div id="content" role="main">
		<div class="block-price">
        <div class="item-price">
            <div class="header-item-price">
                <span class="text-top-price">Разработка сайта</span>
                <span class="value-price"> 0 byn</span>
                <div class="block-tarif">
                    <span class="text-top-price">Тариф</span>
                    <div class="block-price-tarif">
                        <span class="value-price-mes"> 149 </span><span class="valuta">BYN/мес</span>
                    </div>
                </div>
            </div>
            <div class="body-item-price">
                <span class="title-item-price">Гаспадар</span>
				<span class="property-item-price">Сайт визитка</span>
                <span class="property-item-price">Бесплатная консультация</span>
                <span class="property-item-price">SEO оптимизация</span>
                <span class="property-item-price">Настройка контекстной рекламы google или yandex</span>
                <span class="property-item-price">SMM скидка 10%</span>
				<span class="property-item-price">Полный отчет о продвижении</span>
                <a href="" class="link-block-price">Заказать</a>
            </div>
        </div>
        <div class="item-price item-price-hot">
            <div class="header-item-price header-item-price-hot ">
                <span class="text-top-price">Разработка сайта</span>
                <span class="value-price"> 0 byn</span>
                <div class="block-tarif">
                    <span class="text-top-price">Тариф</span>
                    <div class="block-price-tarif">
                        <span class="value-price-mes"> 399 </span><span class="valuta">&nbsp;BYN/мес</span>
                    </div>
                </div>
            </div>
            <div class="body-item-price">
                <span class="title-item-price">Пан</span>
				<span class="property-item-price">Сайт каталог</span>
                <span class="property-item-price">Бесплатная консультация</span>
                <span class="property-item-price">SEO оптимизация</span>
                <span class="property-item-price">Настройка контекстной рекламы google и yandex</span>
                <span class="property-item-price">SMM скидка 15%</span>
				<span class="property-item-price">Полный отчет о продвижении</span>
                <a href="" class="link-block-price">Заказать</a>
            </div>
            
        </div>
        <div class="item-price">
            <div class="header-item-price">
                <span class="text-top-price">Разработка сайта</span>
                <span class="value-price"> 0 byn</span>
                <div class="block-tarif">
                    <span class="text-top-price">Тариф</span>
                    <div class="block-price-tarif">
                        <span class="value-price-mes"> 999 </span><span class="valuta">&nbsp;BYN/мес</span>
                    </div>
                </div>
            </div>
            <div class="body-item-price">
                <span class="title-item-price">Магнат</span>
				<span class="property-item-price">Сайт каталог или Интернет магазин</span>
                <span class="property-item-price">Бесплатная консультация</span>
                <span class="property-item-price">SEO оптимизация</span>
                <span class="property-item-price">Настройка контекстной рекламы google и yandex</span>
                <span class="property-item-price">SMM скидка 20%</span>
				<span class="property-item-price">Полный отчет о продвижении</span>
				<a href="" class="link-block-price">Заказать</a>
            </div>
            
        </div>

    </div>
	<div class="block-partners">
		<div class="content-partners">
		<h2 class="entry-title entry-title__white">Партнеры</h2>
		<div>
			<div class="col-md-2"></div>
			<div class="col-md-8 carusel-partners">
	            <div class="multiple-items">
                    <img src="/wp-content/uploads/2018/01/cropped-logo-5-1.png" class="header-image" width="180" height="70" alt="">
                    <img src="/wp-content/uploads/2018/01/cropped-logo-5-1.png" class="header-image" width="180" height="70" alt="">
                    <img src="y/wp-content/uploads/2018/01/cropped-logo-5-1.png" class="header-image" width="180" height="70" alt="">
		            <img src="y/wp-content/uploads/2018/01/cropped-logo-5-1.png" class="header-image" width="180" height="70" alt="">
		            <img src="y/wp-content/uploads/2018/01/cropped-logo-5-1.png" class="header-image" width="180" height="70" alt="">
		            <img src="/wp-content/uploads/2018/01/cropped-logo-5-1.png" class="header-image" width="180" height="70" alt="">
                </div>       
			</div>
		</div>
	    </div>
	</div>
	<div class="block-blog">
		<h2 class="entry-title ">Новости</h2>
		<?php
	    $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=6' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        
        <div class="col-sm-6 col-md-4">
			<div class="item-block">
        	    <?php echo get_the_post_thumbnail( $page->ID, array(342, 256)); ?>
                <span class="title-blog"><a href="<?php the_permalink(); ?>" title="Читать делее"><?php the_title(); ?></a></span>
                <?php the_excerpt(); ?>
                <span class="views"><i class="fa fa-eye" aria-hidden="true"></i><?php echo getPostViews(get_the_ID()); ?></span> 
			</div>
		</div>									 
        <?php endwhile;  ?>
        <?php if ($paged > 1) { ?>
 
        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
        </nav>
 
        <?php } else { ?>
 
        <?php } ?>
 
        <?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>