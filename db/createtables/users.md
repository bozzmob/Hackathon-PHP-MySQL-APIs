Database query-

CREATE TABLE users(
userid int AUTO_INCREMENT,
firstname varchar( 255 ) NOT NULL ,
lastname varchar( 255 ) ,
mobilenumber varchar( 255 ) ,
emailid varchar( 255 ) NOT NULL UNIQUE ,
encrypted_password varchar( 255 ) NOT NULL ,
city varchar( 255 ) ,
created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
token varchar( 255 ) NOT NULL,
PRIMARY KEY ( userid )
);

PHP query-

$sql = "CREATE TABLE users(\n"
    . "userid int AUTO_INCREMENT,\n"
    . "firstname varchar( 255 ) NOT NULL ,\n"
    . "lastname varchar( 255 ) ,\n"
    . "mobilenumber varchar( 255 ) ,\n"
    . "emailid varchar( 255 ) NOT NULL UNIQUE ,\n"
    . "encrypted_password varchar( 255 ) NOT NULL ,\n"
    . "city varchar( 255 ) ,\n"
    . "created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,\n"
    . "token varchar( 255 ) NOT NULL,\n"
    . "PRIMARY KEY ( userid )\n"
    . ")";