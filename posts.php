<?php theme_include('header'); ?>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<section class="content">
					<?php if(has_posts()) : while(posts()) : ?>
						<article>
					    	<h1>
					        	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					        </h1>
					        <h5 class="date"><?php echo article_date(); ?></h5>
							<p><?php echo article_description(); ?></p>
							<div class="read-more"><a href="<?php echo article_url(); ?>">Read more...</a></div>
						</article>
					<?php endwhile; endif; ?>
				</section>
			</div>
			<div class="col-md-3" id="bio-gutter">
				<h1>About Me</h1>
				<img src="http://media-store.nathanlawrence.org.s3.amazonaws.com/photos/KBIA-headshot-16-95.jpg" class="full-width hidden-sm">
				<div id="nathan-bio">I'm a data journalist, media producer, and writer currently working for <a href="http://www.kbia.org/">KBIA Public Radio</a> in Columbia, Missouri, United States.</div>
				<div class="row">
					<div class="social">
						<div class="col-xs-2">
							<a href="http://www.twitter.com/nathanblawrence"><span class="fa fa-lg fa-twitter"></span></a>
						</div>
						<div class="col-xs-2">
							<a href="https://www.facebook.com/nathan.lawrence.barrick"><span class="fa fa-lg fa-facebook"></span></a>
						</div>
						<div class="col-xs-2">
							<a href="https://github.com/NathanLawrence"><span class="fa fa-lg fa-github"></span></a>
						</div>
						<div class="col-xs-2">
							<a href="https://instagram.com/nathanblawrence/"><span class="fa fa-lg fa-instagram"></span></a>
						</div>
						<div class="col-xs-2">
							<a href="https://www.linkedin.com/in/nathanblawrence"><span class="fa fa-lg fa-linkedin"></span></a>
						</div>
						<div class="col-xs-2">
							<a href="https://vimeo.com/nathanblawrence"><span class="fa fa-lg fa-vimeo-square"></span></a>
						</div>
					</div>
				</div>
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