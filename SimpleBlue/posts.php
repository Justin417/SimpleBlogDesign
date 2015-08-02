<?php theme_include('header'); ?>

      <div class="container">

        <div class="col-md-8">

          <div class="panel panel-default">

            <div class="panel-body">

              <h1>Recent Posts:</h1>

                <hr>

                  <?php if(has_posts()): ?>
                    <ul style="list-style-type: none;">
                      <?php posts(); ?>
                      <li>
                        <article class="wrap">
                          <h1>
                            <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                          </h1>

                          <div class="content">
                            <?php echo article_markdown(); ?>
                          </div>

                          <footer>
                            Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
                          </footer>
                         <hr>
                        </article>
                      </li>
                      <?php $i = 0; while(posts()): ?>
                      <li>
                        <article class="wrap">
                          <h2>
                            <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                          </h2>

                          <footer>
                            Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
                          </footer>
                        </article>
                        <hr>
                      </li>
                      <?php endwhile; ?>
                    </ul>

                    <?php if(has_pagination()): ?>
                    <nav class="pagination">
                      <div class="wrap">
                        <?php echo posts_prev(); ?>
                        <?php echo posts_next(); ?>
                      </div>
                    </nav>
                    <?php endif; ?>

                  <?php else: ?>
                    <p>Looks like you have some writing to do!</p>
                  <?php endif; ?>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <h1>Categories:</h1>
          <ul style="list-style-type: none;">
				<?php while(categories()): ?>
					<li>
					<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
						<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>

        </div>
      </div>

<?php theme_include('footer'); ?>