# Geek Label
Bootstrap extended theme

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Built With

* [Drupal](https://www.drupal.org/) - Drupal 7.54
* [Mysql](https://www.mysql.com/) - Database Connectivity
* [GULP SASS](https://www.npmjs.com/package/gulp-sass) - We are using Gulp to compile SASS file
* [BEM](http://getbem.com/introduction/) - We are using BEM method as you suggested



### Installation

* Install gulp sass for compiling css.

Below command will install gulp globally, If you haven't installed gulp globally before. You can skip this step, If you have already installed gulp globally.

```
npm install -g gulp 
```

Then go to project directory , run below commands.

```
npm install --save-dev gulp-sass
```

When you want to edit .scss file, you must run gulp before start editing. Open terminal, Go to the project directory and run below command. Then after you can start editing in .scss file.

```
gulp
```

* Download and extract Drupal 7.54 version.
* Create a database 
* Give folder write permission for create settings.php file and Run installation.


### Theming & Configuration

* Install Bootstrap 3 theme from Administartion panel Drupal 7
* Copy 'starterkits' folder to '/sites/all/themes' directory and rename it to 'subtheme-bootstrap'
* Created subthemebootstrap.info file, which extends Bootstrap parent theme with name, description, version, scripts and block region definitions under 'cdn' directory
* created common page--front.tpl.php file under cdn/templates/system 
* Activate theme from Administration tree (Appearence tab) and set logo and favicon for my custom theme.

### Development

* Created page--front.tpl.php file for custom home page and define block regions for theming
* All Sections are managed by drupal 7 content types and Views blocks.
* Webform Module is used for customising Contact form


### Recommended Modules

* Views
* Webform
* Chaos tools


### Deployment

Clone the files to your server and set up the database settings in sites/default/settings.php 




