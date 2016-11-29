<?php
	// Set contents of buffer to a intermediary variable
	$page_contents = ob_get_contents();
	ob_end_clean();

	// Replace <!--TITLE--> with $page_title, and print HTML
	echo str_replace('<!--TITLE-->', $page_title, $page_contents);
?>

<footer>

</footer>

</div>
</body>
</html>
