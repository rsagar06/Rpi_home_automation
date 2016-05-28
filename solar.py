#!/usr/local/bin/python

import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)

#define the pin that goes to the circuit
pin_ckt = 7

def rc_time (pin_ckt):
    count = 0
  
    #Output on the pin for 
    GPIO.setup(pin_ckt, GPIO.OUT)
    GPIO.output(pin_ckt, GPIO.LOW)
    GPIO.setup(13, GPIO.OUT)
    GPIO.setup(15, GPIO.OUT)
    time.sleep(0.1)

    #Change the pin back to input
    GPIO.setup(pin_ckt, GPIO.IN)
  
    #Count until the pin goes high
    while (GPIO.input(pin_ckt) == GPIO.LOW):
        count += 1

    return count

#Catch when script is interupted, cleanup correctly
try:
    # Main loop
    while True:
        print rc_time(pin_ckt)
	if rc_time(pin_ckt) < 100:
		if check_pin = 0:
			GPIO.output(13, GPIO.LOW)
			GPIO.output(15, GPIO.HIGH)
			time.sleep(1.3)
			check_pin=1
			
	elif rc_time(pin_ckt) > 200:
		if check_pin = 1:
			GPIO.output(13, GPIO.HIGH)
			GPIO.output(15, GPIO.LOW)
			time.sleep(1.3)
			check_pin=0
                
except KeyboardInterrupt:
    pass
finally:
    GPIO.cleanup()
