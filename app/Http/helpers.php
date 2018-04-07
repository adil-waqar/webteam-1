<?php

function makeSlug($value)
{
	$value = ucwords($value);
	return str_replace(' ', '', $value);
}