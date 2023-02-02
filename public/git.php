<?php
$out = shell_exec( 'cd ..;git reset --hard;git pull origin main 2>&1' );

echo '<pre>'.$out.'</pre>';

