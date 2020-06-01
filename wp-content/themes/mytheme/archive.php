<?php
/**
 * This is a template file called archive.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytheme
 * @subpackage mytheme_child
 * @since Twenty ten 1.0
 */

if ( is_author() ) {
	echo 'Author Archive';
} elseif ( is_category() ) {
	echo 'Category Archive';
} elseif ( is_day() ) {
	echo 'Day Archive';
} elseif ( is_month() ) {
	echo 'Month Archive';
} elseif ( is_year() ) {
	echo 'Year Archive';
}
get_header();
?> 

<!-- Page Content -->
<div class="container">

<div class="row">

<!-- Blog Entries Column -->
<div class="col-md-8">

<h1 class="my-4">Page Heading</h1>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
<!-- Blog Post -->
<div class="card mb-4">
	<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
	<div class="card-body">
		<a href="<?php the_permalink(); ?>"><h2 class="card-title"><?php the_title(); ?></h2></a>
		<p class="card-text"><?php the_content(); ?></p>
		<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
	</div>
	<div class="card-footer text-muted">
		Posted on <?php the_date(); ?> by
		<a href="#"><?php the_author(); ?></a>
		<a href="#"><?php the_category(); ?></a>
	</div>
</div>

		<?php
	}
}
?>
<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
	<li class="page-item">
		<a class="page-link" href="#">&larr; Older</a>
	</li>
	<li class="page-item disabled">
		<a class="page-link" href="#">Newer &rarr;</a>
	</li>
</ul>

	</div>

<?php get_sidebar(); ?>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
