In Business Wordpress Theme 



INSTALLATION:

Plugins:
1. Upload Plugin :Customizable Post Listings to plugins directory of Wordpress located in wp-content  folder
customizable-post-listings.php should be inside www.yourblogurl.com/wp-content/plugins/ folder
2. Unzip file to a local folder.
3. FTP to the "themes" folder of your WordPress. 
4. In your WordPress admin, under "Presentation," activate theme.



Menu Customisation 
To add your links to menu eg : Item one , Item 2 just open header.php and search for following lines
<div class="menu"><a href="<?php echo get_settings('home'); ?>">Home</a><a href="#">Page 1</a><a href="#"> Page 2</a><a href="#">Page 3</a></div>

and just replace # by your page url for eg http://www.example.com/page1/ and replace Page 1 by your own page title.


Bugs/Fixes:
In case of problems , bugs please contact me http://kaushalsheth.com/contact-me

