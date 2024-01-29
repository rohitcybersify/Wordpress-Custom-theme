<?php
get_header();

the_post(); //in the some case not working than use these this function
?>

<section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          <!-- About <span>Us</span> -->
           <!-- Dynamic Page title -->
           <?php
            the_title();
           ?>
        </h2>
        <?php 
        // get thumbnails image we have pass diffrent parameter in the get_post_thumbnails() function like 
        // large,medium,full,array(100,100)
         the_post_thumbnail('medium');

        ?>
         <!-- <?php
          $image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'small');
          print_r($image_path)
        ?>
        <img src="<?php echo $image_path[0] ?>" />  -->
         <!-- this function is same work on previous function -->
        <p>
          Magni quod blanditiis non minus sed aut voluptatum illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are Finexo
            </h3>
            <!-- <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <p>
              Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
            </p> -->
             <!-- Dynamic content -->
             <?php
              the_content(); //use wordpress function on every page content
                 // get the page content 
            //   echo get_the_content(); this function is the same work in previous function
             ?>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

<?php
get_footer( );
get_footer('link');