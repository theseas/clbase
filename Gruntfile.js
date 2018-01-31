module.exports = function(grunt){

	grunt.initConfig({
		sass:{
			dist:{
				optons:{
					style:'expanded',
				},
				files:[
					{'style.css':'style.scss',},
					{
						expand:true,
						cwd:'css',
						src:['*.scss'],
						dest:'css',
						ext:'.css'
					},
				]
			}
		},
		cssmin:{
			target:{
				files:[
					{'style.min.css':'style.css'},
					{
						expand:true,
						cwd:'css',
						src:['*.css', '!*.min.css'],
						dest:'css',
						ext:'.min.css'
					},
				]
			},
		},
		uglify:{
			target:{
				files:[{
					expand:true,
					cwd:'js',
					src:'**/*.js',
					dest:'js',
					ext:'.min.js'
				}]
			}
		}
		
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('default', ['sass', 'cssmin', 'uglify']);

};
