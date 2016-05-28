<?php

        if(isset($_GET['shutdown'])){

		exec("sudo /sbin/shutdown -h now");
   	}
        ?>