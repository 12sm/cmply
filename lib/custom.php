<?php 

define( 'UPLOADS', ''.'assets' );

add_action( 'admin_head' , 'add_open_sans' );
function add_open_sans() { ?>
  <script type="text/javascript" src="//use.typekit.net/yeb8ezs.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }

?>