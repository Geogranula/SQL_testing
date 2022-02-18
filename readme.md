@TODO No.2
In select.php you should implement the method getAreas.
- implemented method should return array of all regions/areas with name starting with "Area_" + the number passed to the method.

Since the method is currently called with parameter 5, it should return for example Area_51, Area_593 etc. depending on your data
- check the results by visiting select.php
- if you need more records to get more data you can use fixed insert.php

Adjust your query so the result has no more than 5 records (no offset needed) are ordered the results by name with values descending.


@TODO No.3
There is fixup.php to deal with records with inconsistent number in name and slug (it will be deleted).
The file will work once you implement delete function to Region class. 
- implement delete meted in Region.php
- visit fixup.php from your browser
- check data in phpMyAdmin or any other way
