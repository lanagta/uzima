<?php 
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';

switch ($view) {
        case 'Opservices' :
        $title="About Us";	
		$content='Contents/services.php';		
		break;
 	 
 	case 'Inservices' :
        $title="About Us";	
		$content='Contents/specializedservices.php';		
		break;

	case 'Gallery' :
        $title="About Us";	
		$content='Contents/Gallery.php';		
		break;
 	 
 	case 'Contact' :
        $title="About Us";	
		$content='Contents/Contacts.php';		
		break;

 	case 'About' :
        $title="About Us";	
		$content='Contents/about.php';		
		break;
 	 
 	case 'Contact' :
        $title="About Us";	
		$content='Contents/Contact.php';		
		break;
		 
	default :
	    $title="Home";	
		$content ='home.php';		

}
require_once("Theme/theme.php");
?>

