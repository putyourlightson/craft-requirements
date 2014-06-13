<?php
namespace Craft;


// set error reporting
error_reporting(E_ALL ^ E_STRICT);


// bootstrap craft function
function craft() {
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

$failed = array();
$warning = array();

foreach ($requirements as $requirement)
{
	if ($requirement->getResult() == RequirementResult::Failed )
	{
		$failed[] = $requirement->getNotes();
	}

	else if ($requirement->getResult() == RequirementResult::Warning )
	{
		$warning[] = $requirement->getNotes();
	}
}

if (count($failed))
{
	$title = 'Failed';
	$message = join('<br/>', $failed);
}

else if (count($warning))
{
	$title = 'Warning';
	$message = join('<br/>', $warning);
}

else 
{
	$title = 'Success';
	$message = 'Minimum requirements met. Craft can run on this server!!';
}


// include view file
include('view.php');
