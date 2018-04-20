# hotel-management-webpage
A simple hotel management front end tool to aid managers/front desk staff

MyGuest HOTEL MANAGEMENT SYSTEM README

The following are important steps to ensure the correct installation of the MyGuest Manager onto your system:

Prerequisites:
	- A working installation of XAMPP with MySql Server configured to use port 3306 and Apache to use port 80
	- A web browser. Use Google Chrome preferrably.
	- MySQL/MariaDB Database Management System.

Installation:
	- Copy the entire Hotel Management Installation Folder into the XAMPP/htdocs folder where XAMPP is installed.
	- Edit the CONNECTTODB.PHP and change the $UserName and $Password variables to suit your DBMS login credentials.
	- Perform the same edits in the GUESTPAGE.PHP at lines 263, 306, 356, 392 and 429.
	- Start MySQL and Apache Servers
	- Import the HotelDB into your DBMS. If this is not possible, perform the following to manually import the database:
		- Open Command Prompt and navigate to the XAMPP\mysql\bin folder by cd command.
		- Start MariaDB by mysql.exe -u username -p <enter> password <enter>.
		- Create a new Database by using CREATE DATABASE HotelDB<enter> command.
		- Execute USE HotelDB<enter>
		- Copy and paste the CREATE commands ONLY from CREATINGTABLES.txt
		- Copy and paste the INSERT commands from INSERTINGDATA.txt. Note, for INSERT INTO STAFF, enter the details of the administrators who will use the system. 
		- Copy and paste the ALTER commands ONLY from CREATINGTABLES.txt
		- Copy and paste the VIEW commands ONLY from ViewBills Stored Procedure.txt
		- Copy and paste the CREATE PROCEDURE commands ONLY from ViewBills Stored Procedure.txt
		- Copy and paste the CREATE TRIGGER commands from Food and Amenities Trigger.txt

Execution:
	- Navigate to the PHP folder and open the HOMEPAGE.PHP. Note, opening any other file will redirect you to the HOMEPAGE.
	- Ensure the file is opened by localhost/ server and not the file:// protocol.
	- Login to the admin by clicking on the Admin tab and using the credentials as in the database. 

