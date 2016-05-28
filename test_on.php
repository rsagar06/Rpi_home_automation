<?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
        if(isset($_GET['teston'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 18 1");
                header('Location: index.html');
		exit;
        }
        ?>