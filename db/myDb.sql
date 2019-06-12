CREATE TABLE users
(user_id SERIAL PRIMARY KEY
, fName varchar(50) NOT NULL
, lName varchar(50) NOT NULL
, username varchar(50) NOT NULL
, email varchar(100) NOT NULL
, user_password TEXT NOT NULL
, user_pin varchar(4) NOT NULL);

CREATE TABLE subusers
(sub_user_id SERIAL PRIMARY KEY
, user_id int REFERENCES users(user_id) NOT NULL
, fName varchar(50) NOT NULL
, username varchar(50) NOT NULL
, user_pin varchar(4) NOT NULL);

CREATE TABLE movies
(movie_id SERIAL PRIMARY KEY
, user_id int REFERENCES users(user_id) NOT NULL
, title varchar(50) NOT NULL
, release_date varchar(4) NOT NULL
, rating varchar(10) NOT NULL
, synopsis text
, artwork varchar(100)
, movie_file varchar(100) NOT NULL
, file_ext varchar(20) NOT NULL);

CREATE TABLE restrictions
(restriction_id SERIAL PRIMARY KEY
, user_id int REFERENCES users(user_id) NOT NULL
, sub_user_id int REFERENCES subusers(sub_user_id) NOT NULL
, rating varchar(10) NOT NULL, media_type varchar(20) NOT NULL);


INSERT INTO users
(fName
, lName
, username
, email
, user_password
, user_pin)
VALUES
('Dennis'
, 'Bingham'
, 'dpbingham90'
, 'dpbingham90@gmail.com'
, 'abc123'
, '3179');

INSERT INTO subusers
(user_id
, fname
, username
, user_pin)
VALUES
(1
, 'Hallie'
, 'Halbugs'
, '0515');

INSERT INTO subusers
(user_id
, fname
, username
, user_pin)
VALUES
(1
, 'Kristin'
, 'Wiffles'
, '0427');

INSERT INTO movies
(user_id
, title
, release_date
, rating
, synopsis
, artwork
, movie_file
, file_ext)
VALUES
(1
, 'Elephants Dream'
, '2006'
, 'NR'
, 'Friends Proog and Emo journey inside the folds of a seemingly infinite Machine, exploring the dark and twisted complex of wires, gears, and cogs, until a moment of conflict negates all their assumptions.'
, 'Elephants_Dream_2006_Poster.jpg'
, 'Elephants Dream (2006).mp4'
, 'mp4');

INSERT INTO movies
(user_id
, title
, release_date
, rating
, synopsis
, artwork
, movie_file
, file_ext)
VALUES
(1
, 'Big Buck Bunny'
, '2008'
, 'NR'
, 'A large and lovable rabbit deals with three tiny bullies, led by a flying squirrel, who are determined to squelch his happiness.'
, 'Big_Buck_Bunny_2008_Poster.jpg'
, 'Big Buck Bunny (2008).mp4'
, 'mp4');

SELECT
title
, release_date
, rating
, artwork
, movie_file
, file_ext
FROM movies;
