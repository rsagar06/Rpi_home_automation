<?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
        if(isset($_GET['r1on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 23 1");
                header('Location: index.html');
		exit;
        }
        ?>