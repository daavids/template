Starter template structure for a PHP project  
  
File structure:  
--config/ : all non-public PHP files - db connections, functions etc.  
----router.php : function that loads the views
--node_modules/ (not in this repo) : all NPM packages (npm will create the folder once you install your dependencies)    
--public_html/ : all public files  
----index.php : the index file  
----dist/ : compiled CSS and JS files (defaults are inside css and js folders as app.css and app.js)  
--src/ : source CSS and JS files (the files that will be compiled into the files inside dist/). Also includes view files for templating.  
----js/ : source JS files  
------app.js : the main source JS file. You can require npm packages or write functions inside it. You can also add other files to the folder and include them through this file.  
----sass/ : source CSS files.  
------_custom.scss : custom css overrides.  
------_variables.scss : bootstrap variable overrides.  
------app.scss : the main source CSS file. This is where you import all the other scss files to be compiled.  
----views/ : the view files for templating.  
------pages/ : view files with full page contents.  
------partials/ : view files for smaller components like the top navigation bar.  
--.gitignore : add files or folders to not track  
--package.json : all npm dependencies (npm install will install those inside the node_modules folder, more info at https://docs.npmjs.com/files/package.json) 
--readme.md : this file  
--webpack.config.js : the webpack setup file (webpack is used to compile assets, more at https://webpack.js.org/configuration/)  
  
By default Bootstrap4 and its dependencies (jQuery and popper.js) are installed, along with several webpack plugins and loaders for SASS and es6 JavaScript compiling.  
   
You should add node_modules in your .gitignore file, aswell as any files that might have sensitive information, like the database connection file.  
Alternatively you can create example files for these files and include those, or you can change the information for placeholders before commiting.  
  
All of this is subject to future changes.