// https://github.com/timmywil/grunt-bowercopy
module.exports = {
	options: {
		clean: true
	},
	css: {
		options: {
			destPrefix: '<%= paths.bower %>'
		},
		files: {
			bourbon: 'bourbon/dist',
			neat: 'neat/app/assets/stylesheets',
			genericons: 'genericons/genericons',
			normalize: 'normalize.css/normalize.css'
		}
	},
	js: {
		options: {
			destPrefix: '<%= paths.bower %>'
		},
		files: {
			'fitvids/js': 'fitvids/jquery.fitvids.js',
			'accessible-menu/js': 'accessible-menu/dist',
			'sidr/js': 'sidr/jquery.sidr.min.js'
		}
	}
};
