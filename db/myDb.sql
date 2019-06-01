CREATE TABLE users(user_id SERIAL PRIMARY KEY, fName varchar(50) NOT NULL, lName varchar(50) NOT NULL, username varchar(50) NOT NULL, email varchar(100) NOT NULL);

CREATE TABLE subusers(sub_user_id SERIAL PRIMARY KEY, user_id int REFERENCES users(user_id) NOT NULL, fName varchar(50) NOT NULL, username varchar(50) NOT NULL);

CREATE TABLE movies(movie_id SERIAL PRIMARY KEY, user_id int REFERENCES users(user_id) NOT NULL, title varchar(50) NOT NULL, rating varchar(10) NOT NULL, synopsis text, artwork varchar(100), movie_file varchar(100) NOT NULL, file_ext varchar(20) NOT NULL);

CREATE TABLE restrictions(restriction_id SERIAL PRIMARY KEY, user_id int REFERENCES users(user_id) NOT NULL, sub_user_id int REFERENCES subusers(sub_user_id) NOT NULL, rating varchar(10) NOT NULL, media_type varchar(20) NOT NULL);

ALTER TABLE users ADD COLUMN user_password TEXT NOT NULL;
ALTER TABLE subusers ADD COLUMN user_pin TEXT NOT NULL;
