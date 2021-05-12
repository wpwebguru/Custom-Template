<?php

get_header(); ?>
		<!-- Custom Code Start -->
			
		<div class="row ct-head-sec ct-head-bg">
			<h1>Find Your New Home</h1>
			<div><?php echo do_shortcode('[hg-search-engine order-by="new" title="" query="Lake Oswego" results-loaded="no" /]'); ?></div>
		</div>
		
		<div class="row ct-agent">
			<div class="col-sm-3 ct-agent-img"></div>
			<div class="col-sm-3 ct-padding-20">
				<p class="margin-none"><b>About the Agent:</b></p>
				<p class="margin-none">Richard E. Lockwood</p>
				<p class="margin-none">Principal Broker Licensed in OR</p>
				<p class="margin-none">Broker Network, LLC</p>
			</div>
			<div class="col-sm-6 ct-padding-20">
				<p class="ct-details">My name is Richard Lockwood and I’m a lifelong Oregonian. I grew up in the farmland surrounding Mt Hood and my rural upbringing has helped shape who I am. Through the years, I’ve witnessed our city grow and evolve even as I’ve grown up along with it. My clients appreciate that I’m welcoming of newcomers while maintaining my lifelong perspective of living in this state. Whether you’ve been here twenty years or two weeks, I love helping people whether they’re discovering our city or moving on to life’s next adventure.</p>
			</div>
		</div>
			
			
			
		<!-- Custom Code End -->
	
		<div class="row ct-head-sec">
				<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					
					<article class="content_wrap">
					
						<p><?php the_content(); ?></p>
						
					</article>
					
				<?php	endwhile;
				else:
				echo 'No Found';
				endif;
				
				?>

			<br class="clear" />
		</div>	
<?php get_footer(); ?>
