module.exports = function(grunt) {

	var npmDependencies = require('./package.json').devDependencies;
	var jsFileList = [
			'js/vendor/owl.carousel/dist/owl.carousel.min.js',
			'js/vendor/progressbar.js/dist/progressbar.min.js',
			'js/scripts/jquery.fancybox.pack.js',
			'js/scripts/masked-input.js',
			'js/scripts/equal-heights.js',
			'js/utils.js',
			'js/_map/infobox.js',
			'js/_map/main.js',
			'js/sprite-animation.js',
			'js/footer.js',
			'js/slider.js',
			'js/scroll.js',
			'js/map-simple.js',
			'js/instagram.js',
			'js/random-logos.js',
			'js/general.js',
			'js/survey.js',
			'js/home.js',
			'js/partners.js',
			'js/talk-to-us.js',
			'js/page-find.js'
		  ];
		  
	grunt.initConfig({
		// Watches for changes and runs tasks
		watch : {
			sass: {
				files : ['scss/{,*/}*.scss'],
	            tasks: ['sass:dev']
	        },

			js : {
				files : jsFileList,
				tasks: ['jshint', 'concat:dist'],
				options : {
					livereload : true
				}
			},
			php : {
				files : ['**/*.php'],
				options : {
					livereload : true
				}
			}
		},

		// JsHint your javascript
		jshint : {
			all : ['js/source/*.js'],
			options : {
				browser: true,
				curly: false,
				eqeqeq: false,
				eqnull: true,
				expr: true,
				immed: true,
				newcap: true,
				noarg: true,
				smarttabs: true,
				sub: true,
				undef: false
			}
		},

		sass: {
			options: {                      // dictionary of render options
	            sourceMap: true,
	            includePaths: require('node-bourbon').includePaths
	        },
            production: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
	            	'css/global.css': 'scss/main.scss'
	         	}
            },
            dev: {
            	 files: {
	             'css/global.css': 'scss/main.scss'
	          }
            }
        },


        concat: {
			options: {
				separator: ';',
				},
			dist: {
				src:  jsFileList,
				dest: 'js/global.js',
			},
	    },

	    // concatenation and minification all in one
        uglify: {
            dist: {
                files: {
                    'js/global.js': [
                        'js/global.js'
                    ]
                }
            }
        },


		// Image min
		imagemin : {
			production : {
				files : [
					{
						expand: true,
						cwd: 'images',
						src: '**/*.{png,jpg,jpeg}',
						dest: 'images'
					}
				]
			}
		},

		// SVG min
		svgmin: {
			production : {
				files: [
					{
						expand: true,
						cwd: 'images',
						src: '**/*.svg',
						dest: 'images'
					}
				]
			}
		}

	});

	// Default task
	grunt.registerTask('default', ['watch']);

	// Build task
	grunt.registerTask('build', ['jshint', 'imagemin:production', 'svgmin:production', 'concat', 'uglify', 'sass:production']);

	// Template Setup Task
	grunt.registerTask('setup', function() {
		var arr = [];

		if (hasSass) {
			arr.push['sass:dev'];
		}

		if (hasStylus) {
			arr.push('stylus:dev');
		}

		arr.push('bower-install');
	});
	
	
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-bower-requirejs');
	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-svgmin');
	grunt.loadNpmTasks('grunt-sass');

	// Run bower install
	grunt.registerTask('bower-install', function() {
		var done = this.async();
		var bower = require('bower').commands;
		bower.install().on('end', function(data) {
			done();
		}).on('data', function(data) {
			console.log(data);
		}).on('error', function(err) {
			console.error(err);
			done();
		});
	});

};
