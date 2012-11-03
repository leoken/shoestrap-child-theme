# [Shoestrap](https://github.com/aristath/shoestrap)

Shoestrap is a child theme of the amazing [Roots theme](http://rootstheme.com ).

### Caution to themers:
Before changing your theme's css, we suggest that you first use the customizer to apply any colors etc.
If you find that you need something more, then DO NOT edit the assets/css/app.css file.
This theme includes a PHP-Less compiler, so you can use lesscss styles in your theme and take full advantage of its nesting, mixins etc.
You can even directly use bootstrap's mixins when writing your less styles.
To learn more about Less-CSS, please take a look at http://lesscss.org/
Of course if you don't want to use less, you can simply write your own CSS, but again NOT in the assets/css/app.css file.
Instead, use the assets/css/app.less file.
When a change in that file is detected, the less compiler minifies it and the output is written in the assets/css/app.css file.
If you apply your changes and you don't see them applied in your theme, 
please make sure that it is writable and your server has write permissions for the assets/css/app.css file.

## Features

* Extended use of WordPress's customizer (introduced in WordPress 3.4
* Uses less for styling and includes a php-less compiler.
* The compiled css is minified.

## Customizer Options

### Header & Logo

* Upload a logo image
* Change the header region background color
* Change the header text color. This setting affects the color of your site-name when you haven’t uploaded a logo, as well as the color of your social links icons.
* Selection of Navbar color
* Select if branding should be on a separate Header, or included in the NavBar (caution: the changes are not visible until you save the customizer options and close the customizer)

### Layout

* Left Sidebar
* Right Sidebar (default)
* No Sidebar

### Typography

* Choose from 550+ Google Webfonts for your site
* Apply the webfont on the Site-Name, Headers or everywhere

### Footer

* Select the background color for your footer.

### Hero Region

* Title
* Content (accepts HTML)
* Call To Action Button label
* Call To Action Button link
* Call To Action Button color (select from 5 variations)
* Background Color
* Background Image
* Text Color
* Visibility of the Hero Region (Frontpage only or site-wide)

### Social Links

* Facebook link
* Twitter link
* Google+ link
* Pinterest link

### Colors
* Dark/Light text (defaults to dark)
* Links color
* Buttons color
* Background color
* Background Image
* Upload a background image

### Navigation

* Select a WordPress Menu for your navbar navigation

### Advanced
* Header Scripts - Allows users to enter their own css and/or scripts on the Head of the document
* Footer Scripts - Allows users to enter their own css and/or scripts on the Footer of the document
