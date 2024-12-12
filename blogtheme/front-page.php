<?php get_header();?>

<div class="container">

<div class="page-wrap">	
<h1><?php the_title();?></h1>

<?php while (have_posts()) : the_post();?>


<?php
$args = array( 
	'numberposts' => 16,
	'order'=> 'ASC',
	'orderby' => 'title'
	);
$postslist = get_posts( $args );
foreach ($postslist as $post) : setup_postdata($post); ?> 
    <div>
        <?php the_time()?> <?php the_date(); ?>
        <br />
        <?php
        if(!empty(the_title() && the_excerpt() )){
         the_time(); the_date();	
         the_title();
         the_excerpt(); }
         else{
         
         }?>   
        
        
    </div>
<?php endforeach; ?>

<?php get_template_part('includes/front','page-template');?>

<?php endwhile; ?>
</div>
</div>	

<div class="curentdate">
<?php $currentdate=get_the_date( 'dS M Y', get_the_ID() );
	echo $currentdate;
?> 	
</div>
<?php get_footer();?>
