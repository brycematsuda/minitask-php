minitask-php
=============
A small, personal CRUD task manager written in PHP and AJAX (using jQuery). Not related to the MiniTask found at minitask.org.

Installation
=============
1. Install LAMP/WAMP/XAMPP.
2. Clone repository to your apache root folder (default for me is /var/www/html/)
3. In MySQL, create a database with a table called "tasks" and user that can access it. The default config is located in includes/db_config.php
4. Create columns that resemble this table:
```
+------------+------------+------+-----+---------------------+-----------------------------+
| Field      | Type       | Null | Key | Default             | Extra                       |
+------------+------------+------+-----+---------------------+-----------------------------+
| task_id    | int(11)    | NO   | PRI | NULL                | auto_increment              |
| task       | text       | NO   |     | NULL                |                             |
| priority   | tinyint(5) | NO   |     | 1                   |                             |
| created_at | timestamp  | NO   |     | 0000-00-00 00:00:00 |                             |
| updated_at | timestamp  | NO   |     | CURRENT_TIMESTAMP   | on update CURRENT_TIMESTAMP |
+------------+------------+------+-----+---------------------+-----------------------------+
```
5. Start apache server if it isn't already started.
6. Navigate to index.php and start creating some tasks!