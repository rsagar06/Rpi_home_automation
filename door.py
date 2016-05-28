#!/usr/local/bin/python

import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)

    #Output on the pin for 
    GPIO.setup(33, GPIO.OUT)
    GPIO.output(33, GPIO.LOW)
    GPIO.setup(35, GPIO.OUT)
    GPIO.setup(37, GPIO.OUT)
    time.sleep(0.1)

try:
    		GPIO.output(33, GPIO.LOW)
			GPIO.output(35, GPIO.HIGH)
			time.sleep(5)
		    GPIO.output(33, GPIO.LOW)
			GPIO.output(35, GPIO.LOW)   
			time.sleep(15)
			GPIO.output(33, GPIO.HIGH)
			GPIO.output(35, GPIO.LOW)
			time.sleep(5)
		    GPIO.output(33, GPIO.LOW)
			GPIO.output(35, GPIO.LOW)       
except KeyboardInterrupt:
    pass
finally:
    GPIO.cleanup()
