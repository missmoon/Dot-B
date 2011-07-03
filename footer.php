		<div id="footer" role="contentinfo">
			<div id="copyright">
				<div id="site-info">
					<?php _e('Copyright', 'dot-b'); ?> &copy; <?php echo date("Y"); ?>
					<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div><!-- #site-info -->

				<div id="site-generator">
					Powered by <a href="http://wordpress.org/">WordPress</a>
					 | Theme <abbr title="Dot-B v1.1.0">Dot-B</abbr> by <a href="http://zlz.im/">HzlzH</a>
					{ <?php echo get_num_queries(); ?> queries in <?php timer_stop(3); ?> seconds }
				</div><!-- #site-generator -->
			</div><!-- #colophon -->
			<a id="return_top" href="#wrapper">Δ Top</a>
	</div><!-- #footer -->
</div>
<div id="bottom-bar"></div>
<?php wp_footer(); ?>

<script type="text/javascript"> 

// All the jQuery function that WordPress used
// Add empty span tag at menu which have drop-down meun
jQuery("ul.sub-menu").parent().append("<span class=\"menu-mark\"></span>");
// Drop down menu slide function
var mouseover_tid = [];var mouseout_tid = []; jQuery('.menu > li').each(function(index){jQuery(this).hover( function(){var _self = this; clearTimeout(mouseout_tid[index]); mouseover_tid[index] = setTimeout(function(){jQuery(_self).find('ul:eq(0)').slideDown('fast');}, 200);}, function(){var _self = this; clearTimeout(mouseover_tid[index]); mouseout_tid[index] = setTimeout(function(){jQuery(_self).find('ul:eq(0)').slideUp('fast');}, 200);} );});
// Top colourful bar
jQuery(document).ready(function(){jQuery("#top-bar").animate( { width: "100%"}, { queue: false, duration: 5000 } );
// Mouse over search box focus function
jQuery("#s").mouseover(function() {
    jQuery(this).focus().val([""]).mouseout(function() {jQuery(this).val(["type, hit enter"]).blur()})
  });
// Link sparkling function
jQuery("body a:not(.post_meta li a),.post_meta li").hover(function(){
if(!jQuery(this).is(":animated")){
jQuery(this).animate({opacity:".7" },220).animate({opacity:"1"},180);
}
}); 
  
});


</script>
</body>
</html>
