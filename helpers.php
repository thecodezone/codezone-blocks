<?php

function cz_classes(...$classes)
{
	return implode(' ', array_filter($classes, function ($class) {
			return ($class);
		})
	);
}
