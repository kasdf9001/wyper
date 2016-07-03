# wyper

Back end for mobile toilet finder application.

# Design principles of back-end v.0.1

Do something that does something that resembles functional back-end.
The back-end should be separate enough from the front-end so that the 
entire back-end can be replaced with a better back end if a need 
ever arises.

# Database structure

<pre>
   +-------------+     +------------+  
   |locationID   +--+  |imageID     |  
   |locationName |  |  |small       |  
   |coord_lat    |  |  |original    |  
   |coord_long   |  |  |description |  
   |description  |  +--+locationFK  |  
   +-------------+  |  +------------+  
                    |  
                    |  +------------+  
                    |  |commentID   |  
                    |  |commentText |  
                    +--+commentFK   |  
                       +------------+
</pre>       
                      
# Requirements

Yii 2.0.x
PHP 5.4 or better
MySQL / MariaDB
Composer

Why this? This is something I know how to use at this moment.

# Installation