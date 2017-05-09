# bookingSystem
Documentation
Sai Vineet Reddy Thatiparthi
Preetha Dutta

What is our project?
Our project was to make a room booking system for the Vistaar music club. This portal involved us using HTML, PHP and a little bit a MySQL to make the room booking system.  This involved us learning how a database is supposed to talk with the forms on the front end. I also later implemented bootstrap for making our front end look a little better. Since we were really not versed with front end, that part of the project is a little lacking.

Contributors
Preetha and I worked on it together. Our original plan was for me to work on the back end which involved me trying out MySQL and PHP while Preetha was supposed to work on PHP and its integration with the front end. But we slowly ended up doing both with us touching almost every file equally.

Files
While we wore done with our main project very quick, we found it incredibly hard to work with the version control for our project. It ended up taking most of the time we spent on our project as it left us confused. Because of our inability to work with GitHub, we ended up abandoning the first repository we created which had many of our regular commits. Instead, we decided to finish the project and push it one last time onto GitHub in a fresh repo. The files are as follows

•	root/ 
o	cs101
	css			|THIS CONTAINS OUR BOOTSTRAP FILES
	img			
	js
	form.html		|This is our html page that has the form
	home.php		|this is our main home page, index
	insert.php		|This contains our insert code that fills the database 

o	vistaar			|This contains our database
	appointments.frm
	appointments.idb
	db.opt
o	README.md
The database we used was made using phpMyAdmin. Most of the development we did was done using XAMPP that let us use an Apache server to test our PHP on and also made a local database. 

Code

When the project is opened, the first that needs to used is the home.php. From there, the links and buttons should be self-explanatory as that was the rationale behind what we had done. 
The form was made using HTML while all the cosmetic changes were achieved using the containers of Bootstrap. 
The database connection is established using SQL in the insert.php file. We did this using php and the $sql tag which allowed us to write down SQL write in between the HTML code. The database name is vistaar and the username is root with no password for it. The database will only work if it is run as localhost. 

License

