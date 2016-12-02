<?php
	// Set contents of buffer to a intermediary variable
	$page_contents = ob_get_contents();
	ob_end_clean();

	// Replace <!--TITLE--> with $page_title, and print HTML
	echo str_replace('<!--TITLE-->', $page_title, $page_contents);
?>

<footer>
	<p class="small-text">NSF Research Experiences for Undergraduates. Engineering and Nanoscience of Materials and Device Applications in Biotechnology and Medicine. Hosted by the NanoScience Technology Center at the University of Central Florida<br>
	<a href="mailto:andre.gesquiere@ucf.edu">Andre.Gesquiere@ucf.edu</a> or <a href="mailto:sudipta.seal@ucf.edu">Sudipta.Seal@ucf.edu</a>
</footer>

</div>
</body>
</html>
