<?php
/**
 * archive
 * @package custom
 */
Typecho_Widget::widget('Widget_Stat')->to($stat);
$this->need('header.php');?>
<div class="col-full" id="main" role="main">
<div class="archive" itemprop="articleBody">
   <?php
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
$year   = 0;
$mon    = 0;
$i      = 0;
$j      = 0;
//$output = '<p class="archive-page-counter">There are ' . $stat->
					  publishedPostsNum . ' articles.</p>';
while ($archives->next()):
	$year_tmp = date('Y', $archives->created);
	$mon_tmp  = date('m', $archives->created);
	$y        = $year;
	$m        = $mon;
	if ($year != $year_tmp) {
		$year = $year_tmp;
		$output .=
'<div class="collection-title"><h2 class="archive-year motion-element" id="archive-year-'
				     . $year . '">' . $year . ' 年</h2></div>';
	}
	$output .=
'<div class="size"><time class="post-time" itemprop="dateCreated" datetime="'
    . date('c', $archives->created) . '" content="' . date('yy-m-d', $archives->
 created) . '">' . date('m-d', $archives->created) . '</time>  > > >  <a title="' .
			 $archives->title . '" href="' . $archives->permalink .
       '" itemprop="url"><span id="size" itemprop="name">' . $archives->title .
							    '</span></a></div>';
endwhile;
echo $output;
?>
</div>
</div>
<?php
$this->need('sidebar.php');?>
<?php
$this->need('footer.php');?>