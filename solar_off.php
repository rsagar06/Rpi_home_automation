<?php

	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");

        if(isset($_GET['solaroff'])){

                exec("cd /var/www/html && sudo killall python");

                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 1");

                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 22 0");

		sleep(2);

		$gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");

                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 0");

                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 22 0");

                header('Location: index.html');

		exit;

        }

        ?>