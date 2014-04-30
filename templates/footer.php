  <div class="grey-bg">
   <div class="sign-up-view margin-bottom col">         
    <div class="row center">
        <div class="col-sm-12">
			<h4>Do You Need Better Social Marketing Intelligence?</h4>
             <form class="form-inline" role="form">
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Toss us your email to get started">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default lets-go-btn">Let's Go!</button>
                </div>
              </div>
            </form>
        </div><!--end sm 12 -->
    </div><!-- end row -->
</div><!-- end sign up view -->
</div><!-- end grey bg -->
  
  
<footer class="content-info container-fluid" role="contentinfo">
  <div class="row sidebar-footer">
    
    <div class="col-sm-12">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
       
    <div class="row footer-nav"> 
    	<div class="col-sm-12"> 
        <?php
     if (has_nav_menu('footer_navigation')) :
       wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
     endif;
		  ?>
      </div><!-- end sm 12 -->
    </div><!-- end row footer-nav -->
         
    <div id="social" class="row social-nav">
    	<div class="col-sm-12">
	  <?php
         if (has_nav_menu('social_navigation')) :
           wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
         endif;
      ?>
     	</div><!-- end sm 12 -->
   </div>
      <p class="credits">&copy; <?php echo date('Y'); ?> CMP.LY, Inc. ALL RIGHTS RESERVED INCLUDING US PATENT NO. 8,549,140 AND THE MARKS CMP.LY,  COMMANDPOST & POWERPOST
		<p class="built-by"><a href="http://12southmusic.com/" target="_blank">built by <span>12SM</span></a></p>
    </div>
</footer>

<div class="modal fade get-started-modal" id="getStarted" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body center">
<?php do_shortcode("[formidable id=9]"); ?>
       </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->   
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
  <!-- End 12SM Network Analytics <!--> 