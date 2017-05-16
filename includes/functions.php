<?php

function display_album($album) {
	$dirname = './images/' . $album;
	$images = glob($dirname . "*.{jpg,jpeg,JPG,JPEG,PNG,png}", GLOB_BRACE);

	foreach ($images as $image) {
		echo '<a href = "' . $image . '">';
		echo '<img class="album-thumb" src="' . $image . '" />';
		echo '</a>';
	}
}