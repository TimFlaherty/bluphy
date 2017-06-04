#!/usr/bin/python
import sys
import commands
import bluetooth
bt_addr = sys.argv[1]
port = int(sys.argv[2])
msg = sys.argv[3]
with open('../models/log', 'a') as log:
	log.write(bt_addr+' ')
	log.write(sys.argv[2])
	log.write(' '+msg+'\n')
sock=bluetooth.BluetoothSocket( bluetooth.RFCOMM )
sock.connect((bt_addr, port))
sock.send(msg)
sock.close
