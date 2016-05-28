<?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 24 out");
        if(isset($_GET['r2off'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 24 0");
                header('Location: index.html');
		exit;
        }
        ?>