import serial
import time

def main():
    s = serial.Serial('/dev/ttyACM0',9600)
    time.sleep(2)
    print s.portstr
    while 1:
        str=s.read(30)
        print str

if __name__ == '__main__':
    main()
