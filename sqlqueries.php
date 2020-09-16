<?php
#INSERT


"INSERT INTO tbl_users VALUES ('','Reshma Ali','Female','30','Sample Description','Nepal')";

"INSERT INTO tbl_users (name,gender,age,country) VALUES ('Reshma Ali','Female','30','Nepal')";




#DELETE

"DELETE FROM tbl_users WHERE id = 6";



#UPDATE

"UPDATE tbl_users SET age='29',country='china' WHERE id = 5";



#SELECT

"SELECT * FROM tbl_users";
"SELECT id,name FROM tbl_users";
"SELECT id,name FROM tbl_users WHERE gender LIKE 'male'";
"SELECT id,name,gender FROM tbl_users WHERE gender LIKE 'male' OR id=1";
"SELECT * FROM tbl_users WHERE name LIKE '%ali'";



