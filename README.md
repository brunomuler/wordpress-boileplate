## Instructions

* Edit `/local-config.php` with your local informations. Add it to .gitignore.

* Edit `/wp-config` with your server db informations.

* Open `/wp-content/themes/yeopress` on command line
	- `npm install` to install no dependecies
	- Install packages via bower  - http://bower.io/
	- Use `grunt` to run default watch task
	- Use `grunt build` to build deployment version


* Add new javascript files to Gruntfile.js  `jsFileList` array. They will be concated to a single `global.js` file.
