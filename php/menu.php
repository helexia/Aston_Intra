<?php

switch($_SESSION['role']) {
    
	case 'admin':
?>
		<nav>
    	  <ul>
    	    <li> <a href="#">premier lien</a> </li>
    	    <li> <a href="#">deuxieme lien</a> </li>
    	    <li> <a href="#">troisieme lien</a> </li>
    	    <li> <a href="#">quatrieme lien</a> </li>
    	  </ul>
    	</nav>
<?php
    	break;
        
	case 'eleve':
?>

    <nav>
	  <ul>
	    <li> <a href="#">cinquieme lien</a> </li>
	    <li> <a href="#">sixieme lien</a> </li>
	  </ul>
	</nav>  
<?php
    	break;

	case 'ancien_eleve':
?>
	<nav>
	  <ul>
	    <li> <a href="#">septieme lien</a> </li>
	  </ul>
	</nav>
<?php
        break;
    
	default:
        break;
}
?>
    
