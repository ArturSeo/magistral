<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magistral
 */

get_header();
get_sidebar();

 ?>

 <td width="100%" valign="top">
 <div class="block_text" style="padding:20px;">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

	</div>



<?php
//   $id = 43;// Обязательно передавать переменную id статьи
//   $post = get_page($id); // тут передаем get запрос для страниц (get_post - для статьей)
//   $content = $post->post_content; // передаем в переменную $content, содержание текста статьи
//   the_title('<div style="color:#0876C9; font-size:30px;">', '</div>'); // выводим заголовок
//   echo $content; // выводим текст

?>

		<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="#ebebeb" data-options="medium,square,line,horizontal,counter,theme=01" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>

	<div style="padding:20px;"></div>
	<div class="block_text">
<span class="top_text" itemprop="name" style="padding:30px;">
	<?php echo get_theme_mod('productions'); ?>	
	</span><br />


<div class="divTable" style="width: 37%;">
<div class="divTableBody"><div class="divTableRow">

<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_one_text_url'); ?>">
<img itemprop="image" src="<?php echo get_theme_mod('feature_product_one'); ?>" width="195px" /></a>
<br />
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_one_text_url'); ?>"><?php echo get_theme_mod('feature_product_one_text'); ?></a>
</div>

<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_two_text_url'); ?>">
<img itemprop="image" src="<?php echo get_theme_mod('feature_product_two'); ?>" width="195px" />
<br />
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_two_text_url'); ?>"><?php echo get_theme_mod('feature_product_two_text'); ?></a>
</div>


<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_three_text_url'); ?>"><img itemprop="image" src="<?php echo get_theme_mod('feature_product_three'); ?>" width="195px" /></a><br /><a itemprop="url" href="<?php echo get_theme_mod('feature_product_three_text_url'); ?>"><?php echo get_theme_mod('feature_product_three_text'); ?></a></div>


<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_four_text_url'); ?>"><img itemprop="image" src="<?php echo get_theme_mod('feature_product_four'); ?>" width="195px" /></a><br /><a itemprop="url" href="<?php echo get_theme_mod('feature_product_four_text_url'); ?>"><?php echo get_theme_mod('feature_product_four_text'); ?></a></div>

</div>

<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_five_text_url'); ?>"><img itemprop="image" src="<?php echo get_theme_mod('feature_product_five'); ?>" width="195px" /></a><br /><a itemprop="url" href="<?php echo get_theme_mod('feature_product_five_text_url'); ?>"><?php echo get_theme_mod('feature_product_five_text'); ?></a></div>

<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_six_text_url'); ?>"><img itemprop="image" src="<?php echo get_theme_mod('feature_product_six'); ?>" width="195px" /></a><br /><a itemprop="url" href="<?php echo get_theme_mod('feature_product_six_text_url'); ?>"><?php echo get_theme_mod('feature_product_six_text'); ?></a></div>


<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_seven_text_url'); ?>"><img itemprop="image" src="<?php echo get_theme_mod('feature_product_seven'); ?>" width="195px" /></a><br /><a itemprop="url" href="<?php echo get_theme_mod('feature_product_seven_text_url'); ?>"><?php echo get_theme_mod('feature_product_seven_text'); ?></a></div>

<div class="divTableCell">
<a itemprop="url" href="<?php echo get_theme_mod('feature_product_eight_text_url'); ?>"><img itemprop="image" src="<?php echo get_theme_mod('feature_product_eight'); ?>" width="195px" /></a><br /><a itemprop="url" href="<?php echo get_theme_mod('feature_product_eight_text_url'); ?>"><?php echo get_theme_mod('feature_product_eight_text'); ?></a></div>

</div>
</div>
</div>

			
			</div>



		</td>
<?php
get_footer();
