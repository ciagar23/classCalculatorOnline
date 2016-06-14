<?

require_once '../database.php';

$view = $_GET['view'] ? $_GET['view'] : '';

switch ($view) {

	case 'add' :
		$content 	= 'add.php';		
		break;

	case 'delete' :
		$content 	= 'delete.php';		
		break;

	case 'update' :
		$content 	= 'update.php';		
		break;
		
	default :
		$content 	= 'view.php';	
}

require_once '../designs/template.php';
?>





