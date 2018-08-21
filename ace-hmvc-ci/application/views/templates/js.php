<?php
	foreach ((array)@$js as $key => $value) {
		// echo '$.getScript("'.base_url('assets/pages/scripts/'.$value.'.js').'");'."\n";
		echo '<script src="'.base_url('assets/pages/scripts/'.$value.'.js').'" type="text/javascript"></script>';
	}
?>