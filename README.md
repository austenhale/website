# cs401_website
Website created for CS401 at Boise State.

Website code is located in aouc file. Heroku was having issues with files that were in other directories even though locally there was no issue, so all files are located in 
the same folder under aouc.

Examples for each criteria in HW7:
JQuery: any of the letter.php files from a-k have JQuery in order to make the geograhical pictures expand on mouseover.

Repopulate forms:
When the user has an email and/or a favorite animal on the signup.php page, and they fail validation, they will keep those two entries. Passwords will not stay.

List all form errors:
Same as above, if there are multiple errors on the signup (invalid email and password) it will list both at once. This is the only spot more than one error could happen at a time, but all errors are displayed using a foreach loop so all errors would be shown if there were more than one in other locations too.

Custom web font:
All the headers of the letter.php pages use a custom font for the animal's name.

Salting:
Login_handler.php and signup_handler.php both salt the password.

Restrict URL access:
This is done on account.php.
