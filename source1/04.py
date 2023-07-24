import mysql.connector
import datetime
import base64
import os
import os
import time
import pymysql
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

mydb = mysql.connector.connect(
    host = "localhost",
    user = "root",
    password ="",
    database="vegetable"
)

class ImageHandler(FileSystemEventHandler):
    def on_created(self, event):
        if not event.is_directory and event.src_path.endswith('.jpg'):
            # อ่าน binary data จากไฟล์ภาพ
            with open(event.src_path, 'rb') as f:
                image_data = f.read()
            # เชื่อมต่อ MySQL
            db = pymysql.connect(host=DB_HOST, user=DB_USER, password=DB_PASS, database=DB_NAME)
            # เก็บ binary data ลงใน MySQL
            cursor = db.cursor()
            cursor.execute("INSERT INTO images (data) VALUES (%s)", (image_data,))
            db.commit()
            db.close()

path_to_image = os.path.join('D:', 'All Cira core 65', 'kamalasai', 'new', 'pic', 'images')
with open(path_to_image, 'rb') as f:
    image_data = f.read()
    
image_binary = base64.b64encode(image_data)

mycursor = mydb.cursor()
sql = "insert into picture (name,Quality,activedatetime,picture) values (%s,%s,%s,%s)"
dd = datetime.datetime.now()

objects1 = payload["DeepDetect"]["obj_count"]
objects2 = payload["DeepD_D"]["obj_count"]


for objs1 in objects1 :
    val1 = (objs1["name"])
    
for objs2 in objects2 :
    val2 = (objs2["name"])
    

    val = (val1,val2,dd,image_binary)
mycursor.execute(sql,val)
mydb.commit()

print(val)
print("\n",objects1)
print("\n",objects2)

