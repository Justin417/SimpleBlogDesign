<?php theme_include('header'); ?>

      <div class="container">

        <div class="col-md-8">

          <div class="panel panel-default">

            <div class="panel-body">

              <h1><?php echo article_title(); ?></h1>
              <p><i>Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.</i></p>

              <hr>
              <?php echo article_markdown(); ?>

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