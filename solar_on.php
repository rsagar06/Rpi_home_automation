<?php

	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");

        if(isset($_GET['solaron'])){

		$gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 1");

                system("cd /var/www/html && sudo python solar.py");

                header('Location: index.html');

		exit;

        }

        ?>