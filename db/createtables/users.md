CREATE TABLE users(
userid int,
FirstName varchar( 255 ) NOT NULL ,
LastName varchar( 255 ) ,
MobileNumber varchar( 255 ) ,
emailId varchar( 255 ) NOT NULL UNIQUE ,
encrypted_password varchar( 255 ) NOT NULL ,
City varchar( 255 ) ,
created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
PRIMARY KEY ( userid )
);