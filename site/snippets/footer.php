  
    

	<!-- Load JS here =============================-->
	<?php echo js('assets/js/jquery.min.js') ?>
	<?php echo js('assets/js/uikit.min.js') ?>
	<?php echo js('assets/js/uikit-icons.min.js') ?>
	<?php echo js('assets/js/main.js') ?>


	<?php if(!$site->googleanalytics()->empty()): ?>
	  <!-- Google Analytics-->
	  <script>
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	    ga('create', '<?php echo $site->googleanalytics() ?>', 'auto');
	    ga('send', 'pageview');
	  </script>
	<?php endif ?>
	

	</body>
</html>