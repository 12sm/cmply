<div class="floating-demo-outer">
	<div class="floating-demo">
		<a role="button" type="button" class="button" data-toggle="modal" data-target="#getStarted">
			<p><strong>Request a Demo</strong></p>
		</a>
	</div>
</div>


<footer class="content-info container-fluid" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <div class="row sidebar-footer">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="row footer-nav">  
        <?php
     if (has_nav_menu('footer_navigation')) :
       wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
     endif;
  ?>
    </div>
         
      <div id="social" class="row social-nav">
  <?php
     if (has_nav_menu('social_navigation')) :
       wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
     endif;
  ?>
  </div>
      <p class="credits">&copy; <?php echo date('Y'); ?> CMP.LY, Inc. ALL RIGHTS RESERVED INCLUDING US PATENT NO. 8,549,140 AND THE MARKS CMP.LY,  COMMANDPOST & POWERPOST
		<p class="built-by"><a href="http://12southmusic.com/" target="_blank">built by <span>12SM</span></a></p>
    </div>
  </div>
</footer>

<div class="modal fade" id="getStarted" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      </div>
      <div class="modal-body center">
      <h2>Want to Learn More?</h2>
      <h3>Schedule a Demo, Ask a Question, or Activate your Free Trial</h3>
      <p />
      <p>Fill out the form below and we'll reach out via email to chat.</p>
      	<?php echo do_shortcode('[formidable id=9]'); ?>
       </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
  
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11087345-7', 'getcommandpost.com');
  ga('send', 'pageview');

</script> 