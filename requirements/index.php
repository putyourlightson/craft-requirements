<?php
namespace Craft;


// set error reporting
error_reporting(E_ALL ^ E_STRICT);


// bootstrap craft function
function craft() 
{
	return new Craft;
}


// bootstrap required classes
require_once('bootstrap/Craft.php');
require_once('bootstrap/CComponent.php');
require_once('bootstrap/DB.php');
require_once('bootstrap/RequirementResult.php');


// include Requirements class
require_once('etc/Requirements.php');


$requirements = Requirements::getRequirements();

$failures = array();
$warnings = array();

foreach ($requirements as $requirement)
{
	if ($requirement->getResult() == RequirementResult::Failed )
	{
		$failures[] = $requirement->getNotes();
	}

	else if ($requirement->getResult() == RequirementResult::Warning )
	{
		$warnings[] = $requirement->getNotes();
	}
}

if (count($failures))
{
	$title = 'Failed';
	$messages = array_merge($failures, $warnings);
}

else if (count($warnings))
{
	$title = 'Warning';
	$messages = $warnings;
}

else 
{
	$title = 'Success';
	$messages = 'Minimum requirements met. Craft can run on this server!!';
}


// include view file
include('views/index.php');
