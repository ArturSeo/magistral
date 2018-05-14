<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magistral
 */
?>

 
 <div class="w_categories">
	 
	 <h3 class="product">ПРОДУКЦИЯ</h3>

	 <?php wp_nav_menu( array( 'theme_location' => 'left_menu', 'menu_class' => 'cat-item' ) ); ?>

	 <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
	<div id="true-side" class="sidebar">
 
		<?php dynamic_sidebar( 'true_side' ); ?>
 
	</div>
 
<?php endif; ?>

	 <?php 
	 
	//  $args = array(
	// 	'depth'        => 3,
	// 	'show_date'    => '',
	// 	'date_format'  => get_option('date_format'),
	// 	'child_of'     => 0,
	// 	'exclude'      => '',
	// 	'exclude_tree' => '',
	// 	'include'      => '',
	// 	'title_li'     => __('Pages'),
	// 	'echo'         => 1,
	// 	'authors'      => '',
	// 	'sort_column'  => 'menu_order, post_title',
	// 	'sort_order'   => 'ASC',
	// 	'link_before'  => '',
	// 	'link_after'   => '',
	// 	'meta_key'     => '',
	// 	'meta_value'   => '',
	// 	'number'       => '',
	// 	'offset'       => '',
	// 	'walker'       => '',
	// 	'post_type'    => 'page', // из функции get_pages()
	// ); 
	 
	//  wp_list_pages( $args );
	
	?>


<!-- 
 <ul class="menu_ul">	<li class="cat-item"><a itemprop="url" href="/dlya-stroitelstva-truboprovodov.html">Для строительства трубопроводов</a>
 </li>
 <li class="cat-item"><a itemprop="url" href="/izdeliya-iz-plastika.html"><span>Изделия из пластика</span></a></li>
 
	 <li class="cat-item"><a itemprop="url" href="/opory-truboprovodov.html">Опоры трубопроводов</a>
 </li>
	 <li class="cat-item"><a itemprop="url" href="/zakladnye-detali.html">Закладные детали</a>
 </li>
	 <li class="cat-item"><a itemprop="url" href="/rejka-futerovochnaya.html">Рейка футеровочная</a>
 </li>
	 <li class="cat-item"><a itemprop="url" href="/metallicheskie-konstrukcii-dlya-lep-i-podstancij.html">Металлические конструкции для ЛЭП и подстанций</a>
 </li>
 
 </ul> -->

</div> 

</td>