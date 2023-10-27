<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<hr class="redBorder redborder1"/>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<nav class="footerNav">
				<a href="/"><h3 style="color:#ffb93b; font-size:30px;">Senior Advisors of the East Valley</h3></a>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
					)
				);
				?>
			</nav>
			<div class="footerContact">
				
			    <div class='contactJohn mylineheight footerContact5'>
				 <h3 class="margin_bottom_footer2">John G Null</h3>
				 <p class="margin_bottom_footer"><i class="fa-solid fa-envelope"></i><a href="mailto:johngnull@protonmail.com"><span style="color: white;"> johngnull@protonmail.com</span></a></p>
				 <p><i class="fa-solid fa-phone"></i><a href="tel:602-878-4108"><span style="color: white;"> (602)-878-4108</span></a></p>
			    </div>
				
				<div class="contactCheryl mylineheight">
				 <h3 class="margin_bottom_footer2">Cheryl Armstrong</h3>
				 <p class="margin_bottom_footer"><i class="fa-solid fa-envelope"></i> <a href="mailto:cherylarmstrong@protomail.com"><span style="color:white;">cherylarmstrong@protomail.com</span></a></p>
				 <p><i class="fa-solid fa-phone"></i> <a href="tel:602-960-1615"><span style="color: white;">(602)-960-1615</span></a></p>
			    </div>

				<div>
				<p class="">We do not offer every plan available in your area. Currently, we represent eight organizations 
					which offer a variety of products in your area. Please contact Medicare.gov, 1‑800‑MEDICARE, or your 
					local State Health Insurance Program to get information on all of your options.</p>
			    </div>

			</div>

			<div class="bottomrow">Copyright © 2023 Senior Advisors of 
				the East Valley, LLC. All Rights Reserved.</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
