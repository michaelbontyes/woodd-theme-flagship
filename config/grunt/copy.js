// https://github.com/gruntjs/grunt-contrib-copy
module.exports = {
	css: {
		files: [
			{
				cwd: '<%= paths.tmp %>',
				expand: true,
				flatten: true,
				src: [
					'style*.css',
					'style*.map'
				],
				dest: '',
				filter: 'isFile'
			}
		]
	},
	vendorcss: {
		files: [
			{
				expand: true,
				flatten: true,
				src: [],
				dest: 'css/',
				filter: 'isFile'
			}
		]
	},
	editorstyle: {
		files: [
			{
				cwd: '<%= paths.tmp %>',
				expand: true,
				flatten: true,
				src: [
					'editor-style*.css',
					'editor-style*.map'
				],
				dest: 'css/',
				filter: 'isFile'
			}
		]
	},
	fonts: {
		files: [
			{
				expand: true,
				flatten: true,
				src: [
					'<%= paths.authorAssets %>fonts/**/*'
				],
				dest: 'fonts/'
			}
		]
	},
	hybridcore: {
		files: [
			{
				cwd: '<%= paths.composer %>justintadlock/hybrid-core',
				expand: true,
				src: ['**/*'],
				dest: '<%= paths.hybridCore %>'
			}
		]
	},
	flagshiplibrary: {
		files: [
			{
				cwd: '<%= paths.composer %>flagshipwp/flagship-library',
				expand: true,
				src: ['**/*'],
				dest: 'includes/vendor/flagship-library'
			}
		]
	},
	themehookalliance: {
		files: [
			{
				cwd: '<%= paths.composer %>zamoose/themehookalliance',
				expand: true,
				src: ['tha-theme-hooks.php'],
				dest: 'includes/vendor/'
			}
		]
	},
	images: {
		files: [
			{
				cwd: '<%= paths.tmp %>images',
				expand: true,
				flatten: true,
				src: ['*', '!screenshot.png'],
				dest: 'images',
				filter: 'isFile'
			}
		]
	},
	screenshot: {
		files: [
			{
				cwd: '<%= paths.tmp %>images',
				expand: true,
				flatten: true,
				src: ['screenshot.png'],
				dest: '',
				filter: 'isFile'
			}
		]
	},
	languages: {
		files: [
			{
				cwd: '<%= paths.assets %><%= paths.languages %>',
				expand: true,
				src: ['*.po'],
				dest: '<%= paths.theme%><%= paths.languages %>',
				filter: 'isFile'
			}
		]
	}
};
