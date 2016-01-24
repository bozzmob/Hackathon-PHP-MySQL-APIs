Database query-

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

PHP query-

$sql = "CREATE TABLE users\n"
    . "(\n"
    . "userid int,\n"
    . "FirstName varchar(255) NOT NULL,\n"
    . "LastName varchar(255),\n"
    . "MobileNumber varchar(255),\n"
    . "emailId varchar(255) NOT NULL UNIQUE,\n"
    . "encrypted_password varchar(255) NOT NULL,\n"
    . "City varchar(255),\n"
    . "created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,\n"
    . "PRIMARY KEY (userid)\n"
    . ")";