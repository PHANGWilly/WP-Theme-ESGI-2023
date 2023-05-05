<article class="identity-card">
    <br>
	<?= get_custom_logo() ?>
    <br>
	<h1 class="blog-name"><?= get_bloginfo('name') ?></h1>
	<br>
    <h4 class="blog-description"><?= get_bloginfo('description') ?></h4>
    <br>
    <footer class="identity-card__footer">
		<nav class="identity-card-nav">
			<ul class="identity-card-list">
				<li class="identity-card-item">
					<a href="#" class="identity-card-link">
						<?= getIcon('twitter'); ?>
					</a>
				</li>
				<li class="identity-card-item">
					<a href="#" class="identity-card-link">
						<?= getIcon('facebook'); ?>
					</a>
				</li>
				<li class="identity-card-item">
					<a href="#" class="identity-card-link">
						<?= getIcon('google'); ?>
					</a>
				</li>
				<li class="identity-card-item">
					<a href="#" class="identity-card-link">
						<?= getIcon('linkedin'); ?>
					</a>
				</li>
			</ul>
		</nav>
	</footer>	
</article>