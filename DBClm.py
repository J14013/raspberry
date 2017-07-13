#-*- coding: utf-8 -*-

import MySQLdb
import csv

f = open('test.csv','r')
data = csv.reader(f)
	
if __name__ == "__main__":
	connector = MySQLdb.connect(host="localhost",db="j14013",user="root",passwd="teikyo",charset="utf8")
	cursor = connector.cursor()
	
	for row in data:
		data = ','.join(row)
		sql = u"insert into lumen values("+data+")"
		cursor.execute(sql)
		connector.commit()

	cursor.close()
	connector.close()
