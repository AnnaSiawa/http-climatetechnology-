<?php get_header(); ?>

<div class="content">
	<?php if (have_posts()):
     while (have_posts()):
         the_post(); ?>
	<section class="section">
		<div class="container">
			<h1 class=""><?php the_title(); ?></h1>
			<div class="content">
				<?php the_content(); ?>
				
			</div>
		</div>
	</section>
	<?php
     endwhile; ?>
	<?php
 endif; ?>
</div>

<?php get_footer(); ?>
