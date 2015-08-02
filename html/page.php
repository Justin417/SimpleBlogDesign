<?php theme_include('header'); ?>

      <div class="container">

        <div class="col-md-8">

          <div class="panel panel-default">

            <div class="panel-body">

              <h1><?php echo article_title(); ?></h1>
              <?php echo article_markdown(); ?>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <h1>Categories:</h1>
          <ul>
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