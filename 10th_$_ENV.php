<?php
echo "<pre>";
// to put the data in environment variables;
putenv("username=Ajay kumar");

// to get all the environment variables we use getenv();
print_r(getenv());

// to get a particular data from the environment variables;
print_r(getenv('username'));
echo "</pre>";
?>