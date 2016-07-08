<?php

function include_layout_template($template="") {
	include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.'admin'.DS.$template);
}

?>
