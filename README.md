# Smart Scheduler
## Code Functionality
* The Smart Scheduler code enables educational institutions to efficiently manage scheduling and timetables.

## Key Code Components
### Database Management

* SQL tables to store data on subjects, teachers, classrooms
* PHP scripts to interact with the database
### Administrator Portal

* addclassrooms.php - Add/delete classrooms
* addsubjects.php - Import/manage subjects
* addteachers.php - Import teacher data
* allotclasses.php - Allot classes to courses
* allotsubjects.php - Allot theory courses to teachers
### Schedule Generation

* allotpracticals.php - Allot practicals to teachers
* deleteallotment.php - Remove allotted classes
* Generates optimized timetables
### Display Schedules

* Teacher portal to view personal timetable
* Student portal to view semester timetables
## Logins
* The system contains three types of logins:

### Administrator
* Manages subjects, teachers, classes; handles course allotment and timetable generation

### Teachers
* Can view their personal timetables after login

### Students
* Can access and view semester-wise timetables after login

* The login authentication and validation is handled by PHP and MySQL.
