This version uses an sqlite database (not included).

The database name is ivr.sqlite, and if you run the queries below, it will populate with table `foodbank` and columns `zip` and `address`

<pre>
CREATE TABLE foodbank (id INTEGER PRIMARY KEY, zip TEXT, address TEXT);
INSERT INTO foodbank (zip, address) VALUES ('19104', 'St. Marys food pantry. 38th and Spruce. 215.555.1234.');
INSERT INTO foodbank (zip, address) VALUES ('19143', 'Philadbundance. 215.339.0900');


</pre>
