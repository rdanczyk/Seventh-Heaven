<div id="menu">
<h2 class="hide">Menu:</h2>
<ul class="pagelist">
<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
<?php wp_list_pages('title_li=&depth=1'); ?>
</ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<div class="extras">

<form id="searchform" method="get" action="<?php bloginfo('url'); ?>/">
			<div>
			<input type="text" name="s" id="s" size="15" /><br />
			<input type="submit" value="Search" />
			</div>

			</form>
		</div>

<div class="extras">
<h3>Categories</h3>
<ul>
<?php wp_list_categories('title_li='); ?>
</ul>
</div>

<div class="extras">
<h3>Archives</h3>
<ul>
<?php wp_get_archives('title_li='); ?>
</ul>
</div>

<div class="extras">
<h3>Links</h3>
<ul>
<?php wp_list_bookmarks('categorize=0&title_li='); ?>
</ul>
</div>

<div class="extras">
<h3>Meta</h3>
<ul>
<?php wp_register(); ?>

					<li><?php wp_loginout(); ?></li>

					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>

					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>

					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>

					<?php wp_meta(); ?>
</ul>
</div>
<?php endif; ?>
</div>

<div id="content">