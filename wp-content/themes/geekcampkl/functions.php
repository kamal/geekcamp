<?php

/* Alter [...] into "Read more" */
function read_more_excerpt($text) {
	return str_replace('[...]', ' <a href="'.get_permalink().'">more &rarr;</a>', $text);
}

add_filter('the_excerpt', 'read_more_excerpt');