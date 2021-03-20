<?php
$url = get_field('cz_video_url');
$provider = null;
$src = null;

if(strpos($url, 'youtu') !== false) {
	$provider = 'youtube';
	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
	$id = $match[1];
	$src = "https://www.youtube.com/embed/{$id}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1";
} elseif (strpos($url, 'vimeo') !== false) {
	$provider = 'vimeo';
	$id = substr(parse_url($url, PHP_URL_PATH), 1);;
	$src = "https://player.vimeo.com/video/{$id}?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media";
}

$classes = cz_classes(
	'block',
	'block--cz-plyr'
);

?>
<div class="<?php echo $classes; ?>">
	<?php if ($src): ?>
		<div class="plyr__video-embed">
			<iframe
                class="plyr__iframe"
				src="<?php echo $src; ?>"
				allowfullscreen
				allowtransparency
				allow="autoplay"
			></iframe>
		</div>
	<?php endif; ?>
</div>
