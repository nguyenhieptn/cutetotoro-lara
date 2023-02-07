<?php
$out = shell_exec( 'cd ..;git reset --hard;git pull origin master 2>&1' );
$out .= shell_exec("composer req aimeos-themes/cutetotoro");
echo '<pre>'.$out.'</pre>';

