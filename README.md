This is 
<!-- URL:http://mersey.cs.nott.ac.uk/~alysl40/DIS-COMP4039-CW2-alysl40-20478393/alysl40-20478393_InstallationFiles/index.php-->

To run and modify the software in your own device, you should have installed MYSQL 
workbench, visual studio code and Chrome apps in your device. The name of the database 
which be used in the web page is alysl40_cw2_2. The database is restored in Mersey.
The database contains a lot of tables including users, Fines, Vehicles, Ownerships, People, 
incident, Offence. The table of users restored the default username and password values. 
Other databases store different information.
Here is a list of all php files of my coursework:
index.php
check-login.php
db_conn.php
Enter details for a new vehicle(2).php
Enter details for a new vehicle.php
home.php
index.php
logout.php
Reset_password.php
Reset_password(2).php
search a car.php
search a car (2).php
search by name.php
search-name(2).php
my_sql_db
The format of my_sql_db file is SQL Text file. To access the database, user should import 
data in My SQL workbench app. The process is Server->Data import->Import from selfcontained File.
The index.php file is to create a user log in system interface. Once the user enter any 
information in the page, the information will be sent to the check-login.php file. This file 
contains a lot of judge statements which can judge whether the input information is correct 
by comparing with the default value in the database.
The home.php is to create a home page where users can go to the category or reset his 
password. The Reset_password.php is to create the page and Reset_password(2).php is the 
basic logic code.
There are three branches in the category page. The user can achieve different function 
by clicking on different links. The search by name.php file and search by name(2).php allows 
users to enter people’s name or driving licence numbers to search for people’s relative 
information. This search is nor be case sensitive and work on partial names.
The search a car.php and search a car(2).php file allows the user to look up vehicle 
registration numbers, and the system will show details of the car(type and colour). The Enter 
details for a new vehicle.php file creates a web page which allows users to enter details of a 
new vehicle.