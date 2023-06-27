# Building a College Administration System Using LAMP

My task in this College assignment was to develop a comprehensive college database system for managing student records and programs. The system should be implemented using the LAMP stack (Linux, Apache, MySQL, PHP).

# Code Explained

My code starts off on the login page that’s essentially both a form that has an SELECT FROM statement attached to it, where the user must input a username and password in order to gain access to not only the website but all of the database. Once the user has entered this information and clicks the LOGIN button at the bottom of the page, the information gets sent through an if statement and if the information is correct, they’ll have access to the rest of the site.

They’ll then be redirected to the main menu page, this page will consist of various buttons that will link to other parts of the site being my tables, for instance programmes, modules, students, grades, and the ability to add and remove certain aspects of each of these tables. Additionally, there is a button at the bottom to use to logout which will destroy the sessions cookies and log the user out.

Each of the sections where I list the contents of the tables are done by SELECT * FROM statements where they select all of the information in a given table and then display it in a table on the webpage.

The next section is the add section where a user can add certain details to a table, this is done by using a form to ask the user specific information to input, this information then gets checked by an if statement and if it is all correct and fine to go into the table then it’ll be passed into the database using an INSERT INTO statement.

Furthermore, I then also created a remove section that once again asks a user via a form page to insert an ID, for example this could be a student id, a module id, or a programmes id. This information then gets passed on to another page where a DELETE FROM statement is initiated which checks if the information the user entered is valid and if it is then it’ll delete all necessary information from the table that they chose to delete data from.

Lastly, is the search section which simply searches for a specific student’s id and if the student id exists then it’ll display all the grades the student has gotten in all of the modules that the student takes. This is done by using once again a SELECT FROM statement.

This section will display all of my PHP and HTML code along with an explanation of how it all works, this section will include pages such as login, logout, main menu, styling, adding to database, deleting from database, inserting into database, selecting databases (displaying tables), removing information, and searching for information such as student IDs when looking for results.

Login Page: In order to create the login page, I initially had to create an if statement that checked if the username that was entered by the user in the form was correct. If this username was correct then it gives the user access to the server, database, and all information inside of it as it would be passed through a check system and would check if the information entered was correct.

Logout Page: I made a simple logout page by simply checking if the user was already logged in and if so would unset/destroy the login session which would cause the user to lose access to both the server and database.

Main Menu Page: The main menu page that I created consisted of all of the pages that is on my server, it includes buttons with a href pieces of code in order to link to the other pages, for tables, for programmes, modules, students, grades, and a logout button too. When a user clicks on a button it then submits a value to go directly to the page the user wants to go to.

Form Pages: This is how I added information to my database, I initially asked the user to submit data about programmes, modules, students and grades and specific variables within each of those tables. Once the user entered all of this information for whatever form page they were on, then they could click the button at the bottom of the page to submit the data, this would then go to another page called an insert page where it would insert the information input by the user into the tables and into the database itself.

Delete Pages: The delete pages which I created are to be used by the user to submit a specific id, whether that be a student id, module id, program id, or grade id. By them entering and submitting this value via the button at the bottom of the page it would then send the information to the remove pages and delete the information from the databases and tables.

Insert Pages: The insert pages I created are used in order to insert the data taken from the form pages and place them inside of the database and tables within the database. I used the INSERT INTO __ VALUES (‘______’)”; piece of code for this to work.

Displaying Table Data Page: I was able to do this by creating a SQL select statement which would allow me to select specific parts of each table and display them in a table within php. Example of the SQL statement I used: Select Grades_ID, Students_ID, Modules_ID, Grades_Result FROM Grades; This statement selecting all four of the above variables from the grades table and displayed them in a table, I proceeded to the same for the other instances where this was required such as modules, programmes, student grades & students.

Remove Pages: The remove pages took the data from the delete pages as that were the user entered the information and then removes the information, they wanted deleted from the database. I done this by using the DELETE FROM ______ WHERE ______=’$________’”; piece of code.

Search Pages: This page consisted of me searching for student ids that I had already created and searching for the grades they got in their respective modules. This page is a form page but then gets sent to a page called list_student_grades.php to list whatever the user wanted to list.

Style Pages: Lastly, but certainly not least is the style page. I created this page in order to make all of my code look unison no matter where the user goes. I initially started with changing the font family, size, and border to then moving on to creating the flowing gradient background that is now available on my site. I done this by using keyframes and created various positions for the background to move back and forth to all whilst changing colours. I then moved onto creating styling for all code, from inputs to headers to tables to make them look more visually appealing and easier to read.

Below is all of the tables that I created for the programmes, modules, students and grades section that was required in this assignment, I created various integers and varchars that enables the user to input information into my form pages and it then gets passed through to these tables that can be seen below. Additionally, I altered some tables so that some fields would be passed into other tables as foreign keys, this is apparent in the modules table where the programmes_id is a foreign key, the students table where the programmes¬_id is also labelled as a foreign key, and lastly, the grades table where both the modules_id and the students_id are labelled as a foreign key. Foreign keys are great as they avoid operations such as select, delete, update, or alter statements that might break linkages between tables. A field (or group of fields) in one table that refers to the primary key in another table is known as a foreign key. The table with the main key is referred to as the parent table, while the table with the foreign key is referred to as the child table.

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/e4fd81ce-11b4-477f-9bf7-c9ed4f87c16b)

# How I Secured My Login Sessions

Session security in PHP depends on how safe the application you create makes them. PHP sessions provide the user with a pseudorandom string (the "session ID") that they can use to identify themselves, but if the attacker manages to intercept that string, they can impersonate the user.

One way login sessions can be secured is by using HTTPS and TLS, which is a network protocol that creates a secure connection with a verified peer over an untrusted network. It is with this that attackers are prevented from reading any sort of session ID cookie.

The only piece of the session that the user has in their browser is the Session ID in the cookie, and ideally it also means that users cannot view or edit session data locally, as it's all stored on the server.

Modern PHP's session generation is fairly solid as well, making it very difficult for an outside entity to guess a valid session ID, and by using a combination of HTTPS/TLS or even SSL it's nearly impossible for someone to steal Session cookies in-transit.

Below is a snippet of code that I used in my assignment in order to secure login sessions:

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/bb6da21d-1953-4546-b1ef-e95d40b136f5)
 
It starts off with an if statement which checks if the data from the login form was submitted, isset() will check if the data exists.

I then create four variables by the name of $servername for the name of the server, $username for the username that is required to connect to the MySQL server, a $password variable which holds the password needed, and lastly a $dbname which is put in place to hold the name of the database, in this case it’s called “college”.

Afterwards, I created a new variable by the name of $connection which is equal to a new MySQLi function that features the variables we entered above, and if all of the variables add up to what we entered within the login form, then it will start up and run a new connection to the MySQL Server and give us access tot the server and database itself.

# How I Prevent SQL Injection Vulnerabilities

Input validation and parametrized queries with prepared statements are the only effective defences against SQL Injection attacks. The application code shouldn't ever make direct use of the input. Not just web form inputs like login forms must be sanitized by the developer; every input must be done so. Single quotes and other potentially harmful code components must be removed. It's always a good idea to disable the display of database problems if on an openly used website as SQL Injection may be used to learn more about your database by exploiting database faults.

Other steps to preventing SQL Injection would be by initially validating the input by the user, preparing a query that uses parameter names preceded with colons as placeholders, then create a prepared statement, this is to execute the SQL statement with a high efficiency. After this you must bind the parameters to the prepared statement, execute your query, fetch the result, and then validate your application. By doing this you should prevent any and all SQL Injection Vulnerabilities that may affect your database and in doing so you have a safer site that can be used by many.

# Requirements

The requirements were to create a web interface allowing school administrators to perform the following actions stated below.

## Add/Remove New Students

### Code of Adding New Students Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/377466aa-8ec9-4587-8d89-5b717e856f3c)

### Adding New Students Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/c48bb116-2653-455e-88ff-5652d753d4fd)

### Code of Removing New Students Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/0531cd13-badc-4d93-9da1-be32ae2c20f3)

### Removing New Students Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/67f9a670-1c68-497c-b984-e20640d24ee4)

### Code of Insertion Page of Adding New Students

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/af1c86ed-a346-4a10-a6e2-9151d8c06b90)

### Insertion Page of Adding New Students

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/88df3cd5-dcbc-40a1-97b3-d52c34beb316)

### Code of Listing Students

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/c03055c6-c1d3-46ec-85c9-76612d764063)

### Listing Students Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/ad7ba0bf-e752-4c30-9992-d6ff7fdde571)

### Code of Deletion Page of Removing New Students

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/3f6a6134-afcc-44bb-a6b9-73d7e931a7ac)

### Deletion Page of Removing New Students

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/c05f9a04-d399-466b-8e97-2bfb170ea0b5)

## Add/Remove New Modules

### Code of Adding New Modules Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/9b541257-bda7-409e-b7b0-85ee2ca404d8)

### Adding New Modules Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/31c0f0bf-b582-4028-a472-aca95aba9799)

### Code of RemovingRemoving New Modules Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/4e1a2f8d-e8c2-444d-acde-50d12ba2a93a)

### Removing New Modules Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/a8955231-9659-49ca-9cd5-e9af68907d98)

### Code of Insertion Page of Adding New Modules

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/12d880be-8cb9-4c3f-909a-283bf6a6eb86)

### Insertion Page of Adding New Modules

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/ff3bf317-bc33-4ba2-aa33-5140e21553c1)

### Code of Listing Modules

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/038f730e-ce30-475b-acb3-5674a59c7739)

### Listing Modules Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/8890b915-cfad-4bc1-bcbf-6b6a4c60a3df)

### Code of Deletion Page of Removing New Modules

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/e8545bdb-ad2c-487c-997e-6102583077d1)

### Deletion Page of Removing New Modules

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/84abf971-eb4d-4c2f-9032-b1f6619b1933)

## Add/Remove New Programs

### Code of Adding New Programs Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/fa59ec47-df8c-4c64-a336-3953c13fc913)

### Adding New Programs Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/652f0084-056d-42d6-af89-fb3ebe101258)

### Code of Removing New Programs Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/0a80a8b1-cb68-4b0e-aaa2-a52767c59f69)

### Removing New Programs Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/51eb04fa-ccd7-4048-8278-f856ba0071bf)

### Code of Insertion Page of Adding New Programs

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/d023ce02-c0b2-4dd5-9603-09483a47a64c)

### Insertion Page of Adding New Programs

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/fedbd84f-a3f5-4fb7-8220-4a15cfd7247c)

### Code of Listing Programs

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/0efe0ecb-d250-4e09-9f53-70162eff6ec6)

### Listing Programs Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/938775c4-fa7d-45aa-a1fa-ccdb6cb2011d)

### Code of Deletion Page of Removing New Programs

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/b9030386-fb10-4447-ada9-27947c963ec8)

### Deletion Page of Removing New Programs

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/a2d421e9-21b3-4188-8d4c-2f9a6bc7a011)

## Add/Remove New Grades

### Code of Adding New Grades Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/8454ace1-4540-4ad1-8919-a99238c86dc5)

### Adding New Grades Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/0003ac3a-e0f0-40ae-a8bb-5b97062465bb)

### Code of Removing New Grades Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/8f3647b3-33ac-4af6-8084-374270cebd9e)

### Removing New Grades Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/94c91d16-8e82-42a3-bde0-b9ddb4117e99)

### Code of Insertion Page of Adding New Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/eb12b308-2aad-469d-8ced-902e4331662e)

### Insertion Page of Adding New Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/73053b12-2fc4-4bc0-8b90-1ce83595ba77)

### Code of Listing Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/4ce34aea-b2a0-4c72-b711-d45fe9b9d8c5)

### Listing Grades Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/d083f0ad-00aa-4291-a195-98ae35496b4f)

### Code of Listing Student Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/a87401f2-5a4c-47bb-beec-a7636eb789b0)

### Listing Student Grades Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/c0560f9c-75a1-4524-b20e-b46f703d0b08)

### Code of Deletion Page of Removing New Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/d0ae0fb5-437c-4e8d-a3a5-710688871176)

### Deletion Page of Removing New Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/fb6452d0-1f9b-4a47-ac59-bb9a4b81258c)

## Retrieve Results for a Specific Student Based on Their ID

### Code of Search Page for Student Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/2e41ad16-5c93-40a7-85c6-0c6940a8446c)

### Search Page for Student Grades

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/689b5cc9-25c7-4f73-9fb8-b3316f736ca4)

## Design a Main Page That Provides Links to All the Mentioned Activities

### Code of Main Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/7ebf5cc9-ead2-45c6-ba93-af78b0fbb1f6)

### Main Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/9f2b342e-e431-4b05-908c-3f5973a789fa)

## Implement a Secure Username/Password Login System

### Code of Login Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/4fbd436d-4872-4ed9-a09a-694876459250)

### Login Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/9b2977ca-127d-4ac6-9f86-2d6fe718e9a5)

### Login Page with Credentials Input

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/8f3070de-0ccb-4c26-aac2-c542a836acb9)

### Page Re-Direction When Login Credentials Are Entered

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/1eca2bef-c1c4-4a52-8319-db11c5a7637b)

### Code of Logout Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/b514f59e-6d5d-46ba-ad67-eb56bb2d43b5)

### Page Shown When Logging Out

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/6ec1af4d-8613-4beb-9897-86152a375302)

## Style Page

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/f5c528d8-21e4-4f04-bdc0-22a44311ee58)

![image](https://github.com/JSNLeonard/LAMP-Administration-of-College/assets/48300764/0e623833-eb22-4a48-9ee4-f0ec63817be4)
