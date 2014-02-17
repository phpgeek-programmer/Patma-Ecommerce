PATMA ECOMMERCE

Adaptasi dari buku : Beginning PHP and PostgreSQL E-Commerce: From Novice to Professional
Copyright © 2006 by Cristian Darie, Emilian Balanescu, Mihai Bucica

Architecture: three tier architecture, that contains : data tier, bussiness tier, and presentation tier.

Technologies: PHP (smarty) and PostgreSQL.

Naming and coding standards :

• Class names and method names should be written using Pascal casing (uppercase 

letters for the first letter in every word), such as in WarZone or IsDataValid.

• Public class attribute names follow the same rules as class names but should be

prepended with the character “m”. So, valid public attribute names look like this:

$mSomeSoldier.

• Private class attribute names follow the same rules as public class attribute names,

except they’re also prepended with an underscore, such as in "$_mSomeOtherSoldier".

• Method argument names should use camel casing (uppercase letters for the firs

in every word except the first one), such as $someEnemy, $someOtherEnemy.

• Variable names should be written in lowercase, with an underscore as the word 

separator, such as $master_of_war.

• Database objects use the same conventions as variable names (the 

department_id column).

• Try to indent your code using a fixed number of spaces (say, four) for each level.

(The code in this book uses two spaces because of physical space limitations.)

. in php we are using single quote (they are processed faster and more secure), html and javascript using double quote.

