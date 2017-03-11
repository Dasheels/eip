#!/bin/bash

if (ps ax | grep 'alarm.py' | grep -v grep)
then
 pkill -f alarm.py
 echo "alarm stopped"
else
echo "alarm not running"
fi
