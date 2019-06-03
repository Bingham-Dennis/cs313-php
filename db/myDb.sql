CREATE TABLE users(user_id SERIAL PRIMARY KEY, fName varchar(50) NOT NULL, lName varchar(50) NOT NULL, username varchar(50) NOT NULL, email varchar(100) NOT NULL, user_password TEXT NOT NULL, user_pin varchar(4) NOT NULL);

CREATE TABLE subusers(sub_user_id SERIAL PRIMARY KEY, user_id int REFERENCES users(user_id) NOT NULL, fName varchar(50) NOT NULL, username varchar(50) NOT NULL, user_pin varchar(4) NOT NULL);

CREATE TABLE movies(movie_id SERIAL PRIMARY KEY, user_id int REFERENCES users(user_id) NOT NULL, title varchar(50) NOT NULL, release_date varchar(4) NOT NULL, rating varchar(10) NOT NULL, synopsis text, artwork varchar(100), movie_file varchar(100) NOT NULL, file_ext varchar(20) NOT NULL);

CREATE TABLE restrictions(restriction_id SERIAL PRIMARY KEY, user_id int REFERENCES users(user_id) NOT NULL, sub_user_id int REFERENCES subusers(sub_user_id) NOT NULL, rating varchar(10) NOT NULL, media_type varchar(20) NOT NULL);

ALTER TABLE users ADD COLUMN user_password TEXT NOT NULL;
ALTER TABLE subusers ADD COLUMN user_pin TEXT NOT NULL;


INSERT INTO users(fName, lName, username, email, user_password, user_pin) VALUES ('Dennis', 'Bingham', 'dpbingham90', 'dpbingham90@gmail.com', 'abc123', '3179');
INSERT INTO subusers(user_id, fname, username, user_pin) VALUES (1, 'Hallie', 'Halbugs', '0515');
INSERT INTO subusers(user_id, fname, username, user_pin) VALUES (1, 'Kristin', 'Wiffles', '0427');
INSERT INTO movies(user_id, title, release_date, rating, synopsis, artwork, movie_file, file_ext) VALUES (1, 'Coco', '2017', 'PG', 'Despite his family''s generations-old ban on music, young Miguel dreams of becoming an accomplished musician like his idol Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead. After meeting a charming trickster named Héctor, the two new friends embark on an extraordinary journey to unlock the real story behind Miguel''s family history.', 'coco.jpeg', 'Coco (2017).mp4', 'mp4');
INSERT INTO movies(user_id, title, release_date, rating, synopsis, artwork, movie_file, file_ext) VALUES (1, 'The Upside', '2019', 'PG-13', 'A comedic look at the relationship between a wealthy man with quadriplegia and an unemployed man with a criminal record who''s hired to help him.', 'upside.jpeg', 'The Upside (2019).m4v', 'm4v');
INSERT INTO movies(user_id, title, release_date, rating, synopsis, artwork, movie_file, file_ext) VALUES (1, 'Ant-Man', '2015', 'PG-13', 'Forced out of his own company by former protégé Darren Cross, Dr. Hank Pym (Michael Douglas) recruits the talents of Scott Lang (Paul Rudd), a master thief just released from prison. Lang becomes Ant-Man, trained by Pym and armed with a suit that allows him to shrink in size, possess superhuman strength and control an army of ants. The miniature hero must use his new skills to prevent Cross, also known as Yellowjacket, from perfecting the same technology and using it as a weapon for evil.', 'antman.jpeg', 'Ant-Man (2015).mkv', 'mkv');
INSERT INTO movies(user_id, title, release_date, rating, synopsis, artwork, movie_file, file_ext) VALUES (1, 'Aquaman', '2018', 'PG-13', 'Once home to the most advanced civilization on Earth, the city of Atlantis is now an underwater kingdom ruled by the power-hungry King Orm. With a vast army at his disposal, Orm plans to conquer the remaining oceanic people -- and then the surface world. Standing in his way is Aquaman, Orm''s half-human, half-Atlantean brother and true heir to the throne. With help from royal counselor Vulko, Aquaman must retrieve the legendary Trident of Atlan and embrace his destiny as protector of the deep.', 'aquaman.jpeg', 'Aquaman (2018).mkv', 'mkv');
