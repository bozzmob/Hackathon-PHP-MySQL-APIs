Database query-

CREATE TABLE users(
userid int AUTO_INCREMENT,
firstName varchar( 255 ) NOT NULL ,
lastName varchar( 255 ) ,
mobileNumber varchar( 255 ) ,
emailId varchar( 255 ) NOT NULL UNIQUE ,
encrypted_password varchar( 255 ) NOT NULL ,
city varchar( 255 ) ,
created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
token varchar( 255 ) NOT NULL,
PRIMARY KEY ( userid )
);

PHP query-

$sql = "CREATE TABLE users(\n"
    . "userid int AUTO_INCREMENT,\n"
    . "firstName varchar( 255 ) NOT NULL ,\n"
    . "lastName varchar( 255 ) ,\n"
    . "mobileNumber varchar( 255 ) ,\n"
    . "emailId varchar( 255 ) NOT NULL UNIQUE ,\n"
    . "encrypted_password varchar( 255 ) NOT NULL ,\n"
    . "city varchar( 255 ) ,\n"
    . "created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,\n"
    . "token varchar( 255 ) NOT NULL,\n"
    . "PRIMARY KEY ( userid )\n"
    . ")";