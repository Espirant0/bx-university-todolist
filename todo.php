<?php

require_once __DIR__ . '/boot.php';
function main(array $arguments):void
{
	array_shift($arguments);
	$command = array_shift($arguments);

	switch($command) {
		case 'list':
			listCommand($arguments);
			break;
		case 'add':
			addCommand($arguments);
			break;
		case 'done':
			doneCommand($arguments);
			break;
		case 'undone':
			undoneCommand($arguments);
			break;
		case 'remove':
		case 'rm':
			removeCommand($arguments);
			break;
		case 'report':
			reportCommand($arguments);
			break;
		default:
			echo 'Unknown command';
			exit(1);
	}
	exit(0);
}

main($argv);