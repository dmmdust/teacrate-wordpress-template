<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 10:58 AM
 */

?>


<?php get_header();?>


<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding-left no-padding-right">

            <div id="inner-page-top-slider" class="slider-pro">
                <div class="sp-slides">
                    <?php
                    if( have_rows('inner_page_top_slider') ):
                        while ( have_rows('inner_page_top_slider') ) : the_row();
                            ?>
                            <div class="sp-slide">
                                <img class="sp-image" src="<?php the_sub_field('inner_page_top_slider_images'); ?>"
                                     data-src="<?php the_sub_field('inner_page_top_slider_images'); ?>"
                                     data-retina="<?php the_sub_field('inner_page_top_slider_images'); ?>"/>
                            </div>
                            <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="sp-thumbnails">
                    <?php
                    if( have_rows('inner_page_top_slider') ):
                        while ( have_rows('inner_page_top_slider') ) : the_row();
                            ?>
                            <div class="sp-thumbnail">
                                <div class="sp-thumbnail-image-container">
                                    <img class="sp-thumbnail-image" src="<?php the_sub_field('inner_page_top_slider_images'); ?>"/>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding-right">
            <div class="inner-page-checklist-wrapper">
                <div class="inner-page-checklist">
                    <ul>
                        <?php
                            if( have_rows('bullet_points') ):
                                while ( have_rows('bullet_points') ) : the_row();
                                    ?>
                                    <li><?php the_sub_field('bullets'); ?></li>
                                    <?php
                                endwhile;
                            else :
                            endif;
                        ?>
                    </ul>
                </div>

                <div class="buttons">
                    <a href="javascript:;" class="enquire-now" data-toggle="modal" data-target="#enquire">Enquire now</a>
                    <a href="<?php echo get_field( 'brochure_file' ); ?>" class="download-brochure" target="_blank">Download brochure</a>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="clear"></div>

<div class="container">
    <div class="row-fluid planting-services">
        <div class="col-xs-12 col-sm-8 disigner-range-experience-wrap-left">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
            ?>
            <div class="content-read-more">
                <h1><?php the_title(); ?></h1>
                <div class="content"><?php the_content(); ?></div>
            </div>
            <?php
                } // end while
            } // end if
            ?>
        </div>
		
        <div class="col-xs-12 col-sm-4">
            <div class="food-distribution-service-list fd-item-1" data-toggle="modal" data-target="#supplyModal">
				<span>supply</span>
                <ul>
					<?php
						if( have_rows('sidebar_supply_list') ):
							while ( have_rows('sidebar_supply_list') ) : the_row();
								?>
								<li><?php the_sub_field('supply_list'); ?></li>
								<?php
							endwhile;
						else :
						endif;
					?>
				</ul>
            </div>
            <div class="food-distribution-service-list fd-item-2" data-toggle="modal" data-target="#washModal">
				<span>wash</span>
                <ul>
					<?php
						if( have_rows('sidebar_wash_list') ):
							while ( have_rows('sidebar_wash_list') ) : the_row();
								?>
								<li><?php the_sub_field('wash_list'); ?></li>
								<?php
							endwhile;
						else :
						endif;
					?>
				</ul>
            </div>
            <div class="food-distribution-service-list fd-item-3" data-toggle="modal" data-target="#manageModal">
				<span>manage</span>
                <ul>
					<?php
						if( have_rows('sidebar_manage_list') ):
							while ( have_rows('sidebar_manage_list') ) : the_row();
								?>
								<li><?php the_sub_field('manage_list'); ?></li>
								<?php
							endwhile;
						else :
						endif;
					?>
				</ul>
            </div>
			
			
			<?php if( have_rows('page_facts') ): ?>
				<div class="facts-list facts-list-item" data-toggle="modal" data-target="#manageModal">
					<span>Did you know?</span>
					<ul>
						<?php							
							while ( have_rows('page_facts') ) : the_row();
								?>
								<li><?php the_sub_field('facts'); ?></li>
								<?php
							endwhile;
						?>
					</ul>
				</div>  
			<?php endif; ?>
			
        </div>
		
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div class="contact-banner-wrapper">
                <div class="contact-banner">
                    <h3>Call us for a <span>FREE</span> quote on <a href="tel:<?php echo $teacrate_theme_options['contact_number']; ?>"><?php echo $teacrate_theme_options['contact_number']; ?></a> or <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>">Contact Us</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
	<?php
		$args = array( 'hide_empty=0' );

		$terms = get_terms( 'ctp2tax', $args );
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {			
			foreach ( $terms as $term ) {
	?>
		<div class="col-xs-12 col-sm-4 col-md-4 no-padding-left no-padding-right">
			<a href="<?php echo get_term_link( $term ); ?>">
				<div class="services-wrap-inner first services-single" style="background-image: url(<?php echo get_field(term_image, $term); ?>);">
					<h3><?php echo $term->name; ?></h3>
				</div>
			</a>
        </div>
	<?php
			}
		}
				
	?>
        
		
    </div>
</div>

<div class="clear"></div>






<!-- Modal -->
<div class="modal fade" id="supplyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="<?php echo get_template_directory_uri(); ?>/images/Crates.png"> (Supply) Food Distribution</h4>
      </div>
      <div class="modal-body">
        <?php the_field('sidebar_supply_content'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="washModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="<?php echo get_template_directory_uri(); ?>/images/Wash.png"> (Wash) Food Distribution</h4>
      </div>
      <div class="modal-body">
        <?php the_field('sidebar_wash_content'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="manageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="<?php echo get_template_directory_uri(); ?>/images/Manage.png"> (Manage) Food Distribution</h4>
      </div>
      <div class="modal-body">
        <?php the_field('sidebar_manage_content'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<?php get_footer();?>

