<?php

// Should trigger an ErrorException with an E_NOTICE level
if (!empty($var_does_not_exist)) {
	echo $var_does_not_exist;
}

?>