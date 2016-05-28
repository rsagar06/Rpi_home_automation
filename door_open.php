<?php

	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 13 out");

        if(isset($_GET['door'])){

                system("cd /var/www/html && sudo python door.py");

                header('Location: index.html');

		exit;

        }

        ?>