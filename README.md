# wyper

Back end for mobile toilet finder application.

# Design principles of back-end v.0.1

Do something that does something that resembles functional back-end.
The back-end should be separate enough from the front-end so that the 
entire back-end can be replaced with a better back end if a need 
ever arises.

# Database structure

Database dump can be found at assets/Database/wyper-database.sql   

<pre>
   LOCATION             IMAGE
   +-------------+     +------------+  
   |locationID   +--+  |imageID     |  
   |locationName |  |  |small       |  
   |coord_lat    |  |  |original    |  
   |coord_long   |  |  |description |  
   |description  |  +--+locationFK  |  
   +-------------+  |  +------------+  
                    |  
                    |   COMMENT
                    |  +------------+  
                    |  |commentID   |  
                    |  |commentText |  
                    +--+commentFK   |
                       |points      |
                       +------------+
</pre>       
                      
# Requirements

Yii 2.0.x  
PHP 5.4 or better  
MySQL / MariaDB  
Composer  
Some kind of web server  
  
Why this? This is something I know how to use at this moment.  

# Installation

php composer.phar create-project yiisoft/yii2-app-basic basic 2.0.8  
git clone this on top of that  
