// module exports
module.exports = function(grunt) {

	var path = require('path');
	// get config from package file
	var config = {
		pkg: grunt.file.readJSON('package.json'),
		env: process.env
	};

	// merge task config with main config
	// grunt.util._.extend(config, loadConfig());
	config = grunt.util._.extend(config,
		require('load-grunt-config')(grunt, {
			configPath: path.join(process.cwd(), config.pkg.dirs["task-options"]),
			loadGruntTasks: false,
			init: false,
			data: {
				cwd: process.cwd()+'/'
			}
		}),
		require('load-grunt-config')(grunt, { // Custom options have precedence
			configPath: path.join(__dirname, 'grunt-tasks/custom-options'),
			init: false
		})
	);

	// load all grunt tasks matching the `grunt-*` pattern
	require('load-grunt-tasks')(grunt, {pattern: config.pkg["load-tasks-pattern"]});
	// load my tasks
	grunt.loadTasks(config.pkg.dirs.tasks);

	grunt.initConfig(config);

	var pkg = grunt.file.readJSON('package.json');
	// Project configuration.
	// grunt.initConfig({
	// 	config: {
	// 		layout: 'layout',
	// 		images: 'images',
	// 		css: 'css',
	// 		js: 'js',
	// 		mainjs: 'main.js',
	// 		bower_path: 'bower_components'
	// 	},
	//
	// 	// ----------------------------------------------
	// 	// requirejs
	// 	//
	// 	requirejs: {
	// 		js: {
	// 			options: {
	// 				baseUrl: "<%= config.js %>/<%=bower_path%>",
	// 				// out: "<%=config.js%>/application"+calculateMD5String("<%=config.js%>/<%= config.mainjs %>")+'.min.js',
	// 				out: "<%=config.js%>/application.js",
	// 				name: 'main',
	// 				optimize: 'uglify',
	// 				mainConfigFile: '<%= config.js %>/<%= config.mainjs %>',
	// 				useStrict: true,
	// 				wrap: true
	// 			}
	// 		},
	// 		css: {
	// 			options: {
	// 				optimizeCss: 'standard',
	// 				cssIn: '<%= config.css %>/app.css',
	// 				out: '<%= config.css %>/app.min.css'
	// 			}
	// 		}
	// 	},
	// });

	// Default task.
	grunt.registerTask('default', ['svgstore']);
	// Build task.
	grunt.registerTask('build', ['autoprefixer', 'concat', 'uglify', 'cssmin']);

};
