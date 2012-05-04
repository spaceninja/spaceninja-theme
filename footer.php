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
		</footer>

	</div> <!-- /#page -->

	<?php wp_footer(); ?>

</body>
</html>
