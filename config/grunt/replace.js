// https://github.com/outaTiME/grunt-replace
module.exports = {
	style: {
		options: {
			patterns: [
				{
					// Add line break between banner and minified
					match: /\*\/(?=\S)/g,
					replacement: '*/\n'
				}
			]
		},
		files: [{
			expand: true,
			src: [
				'<%= paths.tmp %>style*.min.css'
			]
		}]
	},
	release: {
		options: {
			patterns: [
				{
					match: 'release',
					replacement: '<%= pkg.version %>'
				}
			]
		},
		files: [
			{
				expand: true,
				src: [
					'**/*'
				]
			}
		]
	},
	// Useful when forking this project into a new project
	packagename: {
		options: {
			patterns: [
				{
					match: /compass/g,
					replacement: '<%= pkg.name %>'
				},
				{
					match: /Compass/g,
					replacement: '<%= pkg.capitalname %>'
				}
			]
		},
		files: [
			{
				expand: true,
				src: [
					'**',
					'.*',
					'!<%= paths.bower %>**/*',
					'!<%= paths.composer %>**/*',
					'!**/*.{png,ico,jpg,gif}',
					'!node_modules/**',
					'!.sass-cache/**',
					'!dist/**',
					'!logs/**',
					'!tmp/**',
					'!*.sublime*',
					'!.DS_Store'
				]
			}
		]
	}
};
