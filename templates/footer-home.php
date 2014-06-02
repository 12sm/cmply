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

<!-- Tout Start -->
  <script type="text/javascript">(function() {var t = document.createElement('script'); t.type = 'text/javascript'; t.async = true;var u = document.location.href;var ti = document.title;var i = "?title=" + encodeURIComponent(ti) + "&url=" + encodeURIComponent(u);t.src =  'https://go.toutapp.com/site/jqhearcb3h' + i;var st = document.getElementsByTagName('script')[0];st.parentNode.insertBefore(t, st);})();</script>
  <!-- Tout End -->
 
  <!-- Clicky Start -->
  <script type="text/javascript">
  var clicky_site_ids = clicky_site_ids || [];
  clicky_site_ids.push(100561475);
  (function() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = '//static.getclicky.com/js';
    ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
  })();
  </script>
  <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100561475ns.gif" /></p></noscript>
  <!-- Clicky End -->