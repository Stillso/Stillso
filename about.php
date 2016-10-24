<?php
/**
 * about
 * @package custom
 */
$this->need('header.php');?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h2 class="archive-page-counter">About</h2>
			</header>

			<div class="post-content">
				<?php $this->content();?>
			</div>
		</article>
		<?php $this->need('comments.php');?>
	</div>
</div>
<?php $this->need('sidebar.php');?>
<?php $this->need('footer.php');?>
