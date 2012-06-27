<?php
	/**
	 * The template for displaying the footer.
	 *
	 * Contains the closing of the id=content div and all content
	 * after. Calls sidebar.php for sidebar widgets and 
	 * sidebar-footer.php for bottom widgets.
	 */
?>
		</div> <!-- /#content -->

		<nav id="navigation" role="navigation">
			<ul>
				<li><a href="/about">About</a></li>
				<li><a href="/">Blog</a></li>
				<li><a href="/themes">Themes</a></li>
				<li><a href="/speaking">Speaking</a></li>
				<li><a href="/port">Portfolio</a></li>
			</ul>
		</nav> <!-- /#navigation -->

		<footer id="site-footer" role="contentinfo">
			<p class="copyright">&copy; Copyright 2012 Scott Vandehey.</p>
			<p class="promo">If you enjoyed this, <a href="http://twitter.com/spaceninja/">you should follow me on twitter</a>.</p>
		</footer>

	</div> <!-- /#page -->

	<?php wp_footer(); ?>

</body>
</html>
