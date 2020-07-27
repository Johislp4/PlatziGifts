<?php get_header()?>

    <main class='container'>
        <?php if(have_posts()){
            while(have_posts()){
                the_post();?>

                <h1 class='my-3'><?php the_title(); ?>!!</h1>
                <?php the_content();?>

            <?php  }   
        }?>

        <div class="lista-productos my-5">
            <h2 class='text-center'>PRODUCTOS</h2>

            <div class="row">
            <?php 
                $args= array(
                    'post_type' =>'producto',
                    'post_per_page' => -1,
                    'order' => 'ASC',
                    'orderby' => 'title'
                );

                $productos = new WP_Query($args);

                if($productos->have_posts()){
                    while($productos->have_posts()){
                        $productos->the_post();
                        ?>

                    <div class="col-4">
                    <figure>
                         <?php the_post_thumbnail('large') ?> 
                    </figure>   

                    <h4 class='my-3 text-center'>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title();?>
                        </a>

                    </h4>
                    </div>

                
               <?php } 
 }
            ?>
        </div>
        </div>
    </main>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php get_footer()?>
