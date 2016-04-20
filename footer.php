<?php
/**
 * footer template.
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->
			<div id="site-generator">
				<a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">
					<?php echo get_option( 'zh_cn_l10n_icp_num' ); ?>
				</a>,
				<?php do_action( 'bf_credits' ); ?>
				<a href="http://wordpress.org" title="Free and open source semantic personal publishing platform">WordPress</a> theme by <a href="http://w3wizards.com/" title="WordPress themes">w3wizards</a>.
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	wp_footer();
?>

<?php if (!is_ssl()) { ?>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fe8d2c77bf9a3ed60706d9774232d72e5' type='text/javascript'%3E%3C/script%3E"));
</script>
<?php } ?>

</body>
</html>
