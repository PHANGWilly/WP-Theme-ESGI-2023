<article class="identity-card">
    <br>
	<?= get_custom_logo() ?>
    <br>
	<h1 class="blog-name"><?= get_bloginfo('name') ?></h1>
	<br>
    <h4 class="blog-description"><?= get_bloginfo('description') ?></h4>
    <br>
    <footer class="identity-card__footer">
		<nav>
			<ul>
				<li><a href="#"><?= getIcon('twitter'); ?></a></li>
				<li><a href="#"><?= getIcon('facebook'); ?></a></li>
				<li><a href="#"><?= getIcon('google'); ?></a></li>
				<li><a href="#"><?= getIcon('linkedin'); ?></a></li>
			</ul>
		</nav>
	</footer>	
</article>