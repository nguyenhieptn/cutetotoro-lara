<?php
$out = shell_exec( 'cd ..;git reset --hard;git pull origin master 2>&1' );
<<<<<<< HEAD

=======
$out .= shell_exec("composer req aimeos-themes/cutetotoro");
>>>>>>> abac977462a62469662916e79b8c7f2721493907
echo '<pre>'.$out.'</pre>';

