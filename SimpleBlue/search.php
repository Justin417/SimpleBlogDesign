<?php theme_include('header'); ?>

      <div class="container">

        <div class="col-md-8">

          <div class="panel panel-default">

            <div class="panel-body">

              <h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

              <?php if(has_search_results()): ?>
                <ul class="items">
                  <?php $i = 0; while(search_results()): $i++; ?>
                    <article class="wrap">
                      <h2>
                        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                      </h2>
                    </article>
                  </li>
                  <?php endwhile; ?>
                </ul>

                <?php if(has_pagination()): ?>
                <nav class="pagination">
                  <div class="wrap">
                    <?php echo search_prev(); ?>
                    <?php echo search_next(); ?>
                  </div>
                </nav>
                <?php endif; ?>

              <?php else: ?>
                <p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
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