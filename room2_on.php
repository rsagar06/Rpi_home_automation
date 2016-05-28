<?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 24 out");
        if(isset($_GET['r2on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 24 1");
                header('Location: index.html');
		exit;
        }
        ?>