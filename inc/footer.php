<?php

function jpFooter($args = 'color')
{
  // possible options are:
  // - color
  // - orange
  // - blue
  // - teal
  // - grey

  ?>
  </div>
	<footer>
		<div class="footer-top"></div>
		<div class="footer">
			<!-- <div class="footer-menu--container"> -->
				<div class="footer-menu">
					<?php dynamic_sidebar('footer-menu') ?>
				</div>
				<div class="footer-cubes footer-image--<?php echo $args ?>"></div>
				<div class="footer-bottom--section">
					<?php Logo(array('size' => '130', 'color' => 'darkDisabled')); ?>
					<p class="overline color--dark-secondary">© <?php echo date("Y"); ?> JetPay Corporation</p>
				</div>
			<!-- </div> -->
		</div>
</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
  <?php

}