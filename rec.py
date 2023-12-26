import mysql.connector
import datetime

db = mysql.connector.connect(host: "db4free.net",
Dbname: "db4free123ab",
port:3306)

x = db.cursor()

GRANT ALL ON *.* TO 'testing12ab' @ 
'localhost' WITH GRAND OPTION

i = 1

#Adding multiple records on input
z = INSERT INTO fruits (fullname, mobileno, address, amount, discount, grandtotal, netwt) VALUES (%s, %s, %s, %s, %s, %s, %s)
x.executemany(fullname, mobileno, address, amount, discount, grandtotal, netwt)
db.commit()

#Printout of 20 rows of records from database in ascending order
a = "SELECT * FROM fruits BY ORDER name LIMIT 20"
x.execute(a)
b = x.fetchall()
for y in b
print(y)

#Selection of particular record to display from database
c = "SELECT * FROM fruits WHERE mobileno LIKE '%9%'"
x.execute(c)
d = x.fetchall()
for y in d
print(d)

#To escape query selection in database and prevent access
e = "SELECT * FROM fruits WHERE fullname = %s"
f = ("samuel" ,)
x.execute(f)
g = x.fetchall()
db.commit()
for y in g
print(y)

#Delete records as need be from database
h = "DELETE FROM fruits WHERE fullname = '%s'"
x.execute(h)
db.commit()

#updating records in database
j = "UPDATE fruits SET fullname = '%s' WHERE amount >= 3500"
x.execute(j)
db.commit()

k = datatime.datetime.now()
print(k)

while i < 40000

#Display all records from database
a = "SELECT * FROM fruits BY ORDER fullname"
x.execute(a)
b = x.fetchall()
for y in b
print(y)
print("Total Records in Database:", x.rowcount)

print("Total Records Sorted (Ascending Order):", x.rowcount)
print("Total Records Deleted:", x.rowcount)
print("Total Records Updated:", x.rowcount)

if i == 40000:
break
print("Total available records in database has reached 40000, to continue...")
i += 1
continue
print("Further adding records....")

