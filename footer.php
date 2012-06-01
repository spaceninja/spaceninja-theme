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

		<footer id="site-footer" role="contentinfo">
			<p class="copyright">
				<?php flatline_copyright(); ?>
			</p>
			<p>This design is a work-in-progress. Here are some upcoming features:</p>
			<ul>
				<li>color</li>
				<li>distinctive links</li>
				<li>better footer</li>
				<li>better archives page</li>
				<li>featured post homepage layout</li>
				<li>404 page</li>
			</ul>
			<nav id="navigation" role="navigation">
				<ul>
					<li><a href="/about">About</a></li>
					<li><a href="/archives">Archives</a></li>
					<li><a href="/themes">Themes</a></li>
					<li><a href="/speaking">Speaking</a></li>
					<li><a href="/port">Portfolio</a></li>
				</ul>
			</nav> <!-- /#navigation -->

			<section class="author-bio">
				<header>
					<img alt='' src='http://0.gravatar.com/avatar/29b1a001466634a8275880ffb1cd2562?s=64&amp;d=retro&amp;r=G' class='avatar avatar-64 photo' height='64' width='64' />
					<h3>About Scott</h2>
				</header>
				<div class="author-content">
					<p>Scott is a CSS Ninja who has been creating web sites for over 15 years. He lives in sunny Portland, Oregon with his wife and daughter, and spends his free time playing video games and watching movies. He is probably not a Cylon.</p>
					<p class="more">
						<a href="/about">Learn more</a>
					</p>
				</div>
			</section>

		</footer>

	</div> <!-- /#page -->

	<?php wp_footer(); ?>

</body>
</html>
