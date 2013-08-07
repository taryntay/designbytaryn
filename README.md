MDD1304 Taryn Taylor
=======

Book Worm is an application for users to track, store and share information about books they have read. Users can log books read, rate them, review them, and share with Facebook.


To get Book Worm working with MAMP:

1. Download and place this entire folder directly into 'htdocs' within MAMP. Please make sure that the folder is named: MDD1304.
	(Important: do not place in a subfolder.)
	Like this: Applications/MAMP/htdocs/MDD1304

2. Within application->config->config.php, update the following on line 17:

	$config['base_url'] = 'http://localhost:8888/MDD1304/';

3. Create a new database on your local machine called bookworm. This is where you can import the SQL dump.

4. You can find my SQL dumps within the assets folder, in a subdirectory called SQL Dumps. You will see the naming convention includes the date, so use the most recent.

Note on sources:
I learned to work with CodeIgniter by reading and following tutorials at the following sites:
In particular, these helped me build the login and sign up pages, as well as data CRUD.

http://net.tutsplus.com/sessions/codeigniter-from-scratch/

http://ellislab.com/codeigniter/user-guide/

