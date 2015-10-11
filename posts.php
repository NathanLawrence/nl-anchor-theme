<?php theme_include('header'); ?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<section class="content">
					<?php if(has_posts()) : while(posts()) : ?>
						<article>
					    	<h1>
					        	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					        </h1>
					        <h5><?php echo article_date(); ?></h5>
							<p><?php echo article_description(); ?></p>
						</article>
					<?php endwhile; endif; ?>
				</section>
			</div>
			<div class="col-md-2" id="bio-gutter">
				<h1>About Me</h1>
				<img src="http://media-store.nathanlawrence.org.s3.amazonaws.com/photos/kbia-headshot.jpg" width="50%>
			</div>
		</div>
		<section class="pagination">
			<?php if(has_pagination()) : ?>
			    <nav class="pagination">
			        <?php echo posts_prev(); ?>
			        <?php echo posts_next(); ?>
			    </nav>
			<?php endif; ?>
		</section>

<?php theme_include('footer'); ?>