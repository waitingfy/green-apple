

</div> <!-- end #page  -->
<div class="clear whitespace"> </div><div id="footer">
<div style="display:none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F8733a4db37a8a51f4325a6afef9a519e' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>

<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
<p>
		<a href="http://wordpress.org/">Powered by WordPress</a> | <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
		<!-- optional link to RoseCityGardens.com -->
| <a href="http://rosecitygardens.com" title="free WordPress themes">Green Apple WordPress&trade; Theme by RoseCityGardens.com</a>
</p></div>
<div id="absnav">

<?php
    wp_nav_menu( array('items_wrap'=> '<ul id="nav" >%3$s</ul>') );
?>

</div>
<?php wp_footer(); ?>
</body>
</html>