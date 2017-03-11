import pygame
import schedule
import time
import sys

def alarmRinging():
	pygame.mixer.init()
	pygame.mixer.music.load(sys.argv[2])
	pygame.mixer.music.play()
	while pygame.mixer.music.get_busy() == True:
    		continue

print sys.argv[1]
print sys.argv[2]
schedule.every().day.at(sys.argv[1]).do(alarmRinging)

while True:
	schedule.run_pending()
	time.sleep(10)
