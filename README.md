# php-crud


Title: Create, Read, Update, Delete <br />
Repository: php-crud <br />
Type of Challenge: Learning Challenge <br />
Duration: 5 days <br />
Deployment strategy : NA <br />
Team challenge : solo <br />

This is my Trello board: https://trello.com/b/fDyhKGNE/agile-board

Learning objectives

- [x] To be able to connect to a database
- [x] To be able to write a simple Create, Read, Update & Delete (CRUD) application
- [x] Use a provided MVC structure to work into.

The Mission
- [x] Created diagram and database in DataGrip
![Screenshot 2021-06-23 165318](https://user-images.githubusercontent.com/68239365/123121221-47f4f580-d445-11eb-82ac-21a6f1dfa119.png)

- [x] Create a CRUD system to store student, teacher and class information in the database. 


- [x] In this assigment you will end up with at least 3 models and 3 controllers, but you could end up with more. Model the software how you want it!


Tips
- [x] You will see that the Teacher and Student entity are really similar - maybe you can use Extend here as an OOP technique?
- [x] Create and Update are very similar in how they behave, with some smart coding techniques you could use almost the same code for both pages.

Must-have features
- [x] You have to provide the following pages for Students, Teacher & Class.

A general overview of all records of that entity in a table

- [x] Each row should have a button to edit or delete the entity
- [x] This page should have a "create new" button
- [x] A detailed overview of the selected entity
- [x] This should include a button to delete this entity
- [x] Edge case: A teacher cannot be removed if he is still assigned to a class
- [x] Edge case: If you remove a class, make sure to remove the link between the students and the class.
- [ ] A page to edit an existing entity
- [ ] A page to create a new entity

Fields:

On the general overview table you can yourself decide what would be useful information to show.

On the detailed overview you have to provide the following information:

Student
- [x] Name
- [x] Email
- [x] Class (with clickable link- do not have that)
- [x] Assigned teacher (clickable link - relation via class- do not have that)

Teacher
- [x] Name
- [x] Email
- [x] List of all students currently assigned to him (clickable link- do not have that)

Class
- [x] Name class (Giertz, Lamarr, ...)
- [x] Location (Antwerp, Gent, Genk, Brussels, Liege)
- [x] Assigned teacher (clickable link- do not have that)
- [x] List of assigned students (clickable link- do not have that)


