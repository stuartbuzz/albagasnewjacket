<?php
header('Content-disposition: attachment; filename=switchsafe.easm');
header('Content-type: application/octet-stream');
readfile('switchsafe.easm');
?>