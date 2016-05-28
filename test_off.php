<?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
        if(isset($_GET['testoff'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 18 0");
                header('Location: index.html');
		exit;
        }
        ?>