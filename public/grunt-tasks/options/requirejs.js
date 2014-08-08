// ----------------------------------------------
// requirejs
//
module.exports = function(grunt, config) {
  return {
		js: {
			options: {+config.package.dirs.devmedia
				baseUrl: config.cwd+config.package.dirs.js+config.package.dirs.bower,
				out: config.cwd+config.package.dirs.js+config.package["require-js-out"],
				name: 'main',
				optimize: 'uglify',
				mainConfigFile: config.cwd+config.package.dirs.js+config.package["require-js-main"],
				useStrict: true,
				wrap: true
			}
		},
		css: {
			options: {
				optimizeCss: 'standard',
				cssIn: config.cwd+config.package.dirs.js+config.package["require-css-main"],
				out: config.cwd+config.package.dirs.js+config.package["require-css-out"]
			}
		}
  }
}
