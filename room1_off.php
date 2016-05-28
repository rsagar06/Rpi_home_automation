<?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
        if(isset($_GET['r1off'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 23 0");
                header('Location: index.html');
		exit;
        }
        ?>