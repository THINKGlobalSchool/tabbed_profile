<?php
/**
 * Profile groups
 */

$groups = $vars['entity']->listGroups(NULL, get_input('limit', 10), get_input('offset'));

if (!$groups) {
	$groups = '<p>' . elgg_echo('profile:no_groups') . '</p>';
}

echo $groups;