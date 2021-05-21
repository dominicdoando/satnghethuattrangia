<?php get_header() ?>
		<div id="banner">
			<div class="banner banner_tcon">
				<?php
				$args = array(
					'post_per_page' => -1,
					'post_type' => 'slider2',
				);
				// query
				$the_query = new WP_Query($args);
				?>
				<?php if ($the_query->have_posts()): ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="khungAnh">
							<span class="khungAnhCrop">
								<?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumnail')); ?>
							</span>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
			</div>
			<div class="breadcrumb">
				<?php
				dimox_breadcrumbs();
				?>
			</div>
		</div>
<section id="duAn">
    <div class="container">
        <div class="row content">
            <div class="wrapper_item listDuAn">
              <!-- Get post mặt định -->
                  <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                      <div class="item">
                          <div class="wrapper_img">
                              <div class="khungAnh">
                                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                     class="khungAnhCrop">
                                      <?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?>
                                  </a>
                                  <a href="<?php the_permalink(); ?> " class="detail " title="View "></a>
                              </div>
                          </div>
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                             class="content_outer">
                              <?php the_title(); ?>
                          </a>
                          <?php the_excerpt(); ?>
                      </div>
                  <?php endwhile; else : ?>
                  <p>Không có bài viết nào</p>
                  <?php endif; ?>
                  <!-- Get post mặt định -->
            </div>
            <div id="phantrang" class="col-md-12">
                <div class="SplitPages">
                    <?php if (paginate_links() != '') { ?>
                        <div class="quatrang">
                            <?php
                            global $wp_query;
                            $big = 999999999;
                            echo paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'prev_text' => __('«'),
                                'next_text' => __('»'),
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages
                            ));
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>
