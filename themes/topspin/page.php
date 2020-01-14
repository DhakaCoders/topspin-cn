<?php 
get_header(); 
?>

<?php while(have_posts()): the_post(); ?>
<section class="main-content p-t-30">
  <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="main-content-inr">
            <?php 
              the_content();
            ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endwhile; get_footer(); ?>