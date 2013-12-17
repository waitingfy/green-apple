<?php get_header(); ?>
   
	<div id="container">		<div id="content" class="narrowcolumn">	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('%link') ?></div>
			<div class="alignright"><?php next_post_link('%link') ?></div>
		</div>
		<div class="clear"></div>

	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="post-date">
<div class="day"><?php the_time('d') ?></div>
<div class="month"><?php the_time('M') ?></div>

</div><h1><?php the_title(); ?></h1>
           
			<div class="entry">
			<div id="my_ad1" style="margin-bottom:90px;">
			
 <?php
       $cookieName = 'waitingfyAdIndex';
       if(!isset($_COOKIE[$cookieName])){?>
	      <script type="text/javascript">
		      setCookie("waitingfyAdIndex",1,1);
		  </script>
<?php }?>	

<script type="text/javascript">
     var maxIndex = 3;
     var adIndex = getCookie("waitingfyAdIndex");
	 adIndex++;
	 if(adIndex == maxIndex + 1){
	    adIndex = 1;
	 }
     setCookie("waitingfyAdIndex",adIndex,1);
</script>		
			<?php
			$single_adIndex = 1;
			if (isset($_COOKIE[$cookieName])) {
			   $single_adIndex = $_COOKIE[$cookieName];
			}
       if($single_adIndex == 1){     
	   ?>
	   
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0295086493266141";
/* 728x90&#25991;&#23383; */
google_ad_slot = "3044400839";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
	<?php 
	   }else if($single_adIndex == 2){
	?>
			  <script type="text/javascript"><!--
google_ad_client = "ca-pub-0295086493266141";
/* 728x90&#25991;&#23383;1 */
google_ad_slot = "1312571631";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
	<?php 
	   }else if($single_adIndex == 3){
	?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0295086493266141";
/* 728x90&#25991;&#23383;2 */
google_ad_slot = "2789304830";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

	<?php }?>
		<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>		
			   </div>
			   
				<?php the_content('<p class="serif">Read the rest of this entry ?</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				<?php if(!is_attachment()){?>
					   <div id="my_ad" style="margin-top:90px;">
				<?php
       if($single_adIndex == 1){     
	   ?>

				 <script type="text/javascript"><!--
google_ad_client = "ca-pub-0295086493266141";
/* 728x90 */
google_ad_slot = "9090934430";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
	<?php 
	   }else if($single_adIndex == 2){
	?>
				<script type="text/javascript"><!--
google_ad_client = "ca-pub-0295086493266141";
/* 728x90&#22270;&#29255;&#24191;&#21578;1 */
google_ad_slot = "4266038033";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
	<?php 
	   }else if($single_adIndex == 3){
	?>
				 <script type="text/javascript"><!--
google_ad_client = "ca-pub-0295086493266141";
/* 728x90&#22270;&#29255; */
google_ad_slot = "5742771233";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
	<?php }?>
	<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>			
				</div>
				     
				<?php } ?>
                                           				
				<p class="postmetadata alt">
					<small>
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
					
					
					<span class="tiny-category"><?php the_category(', ') ?></span> | <?php post_comments_feed_link('<span class="tiny-rss">RSS 2.0</span>'); ?> | 

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<a href="#respond" class="tiny-comments">Respond</a> | <a href="<?php trackback_url(); ?>" rel="trackback" class="tiny-trackback">Trackback</a> |  

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							<a href="<?php trackback_url(); ?> " rel="trackback" class="tiny-trackback">Trackback</a> | 
						

						<?php } edit_post_link('<span class="tiny-pencil">Edit</span>','',''); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>		</div><!-- #content -->

	</div><!-- #container -->
<?php get_sidebar(); ?>
<?php include (TEMPLATEPATH . "/sidebar2.php"); ?>	


<?php get_footer(); ?>
