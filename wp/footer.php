<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
<?php
$footerHideBlog = false;
$footerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home(); ?>
		</div><!-- #content -->
<?php if (!$pageBlog && !$pagePost || $pageBlog && !$footerHideBlog || $pagePost && !$footerHidePost) { ?>
        <footer class="u-align-center u-clearfix u-footer u-grey-5 u-footer" id="sec-4c5a">
  <div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-align-left u-small-text u-text u-text-variant u-text-1">Agricompiler@2020 All Rights Reserved</p>
  </div>
</footer>
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
