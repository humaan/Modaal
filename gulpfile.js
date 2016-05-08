var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	notify = require('gulp-notify'),
	del = require('del'),
	csso = require('gulp-csso');


// Development tasks
// ----------------------------------------------------------------------

gulp.task('styles', function() {
	gulp.src('source/css/modaal.scss')
		.pipe(sass({
			style: 'expanded',
			sourcemap: false
		})
			.on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 version', 'ie 8', 'ie 9']
		}))
		.pipe(gulp.dest('source/css'))
		.pipe(notify({
			message: 'Modaal styles task complete'
		}));
});

// For demo website only, can be removed
gulp.task('demo-styles', function() {
	gulp.src('demo/css/demo.scss')
		.pipe(sass({
			style: 'expanded',
			sourcemap: false
		})
			.on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 version', 'ie 8', 'ie 9']
		}))
		.pipe(gulp.dest('demo/css'))
		.pipe(notify({
			message: 'Demo styles task complete'
		}));
});

gulp.task('watch', function() {
	gulp.watch('source/css/*.scss', ['styles']);
	// for demo site only, can be removed
	gulp.watch('demo/css/*.scss', ['demo-styles']);
});




// Distribute tasks
// ----------------------------------------------------------------------

gulp.task('min-modaal', function() {
	gulp.src(['source/js/modaal.js'])
		.pipe(uglify({
			preserveComments: 'some'
		}))
		.pipe(rename({
			suffix: '.min',
			extname: '.js'
		}))
		.pipe(gulp.dest('dist/js/'))
		.pipe(notify({
			message: 'Successfully uglified Modaal.'
		}));

	gulp.src('source/css/modaal.css')
		.pipe(csso())
		.pipe(rename('modaal.min.css'))
		.pipe(gulp.dest('dist/css/'))
		.pipe(notify({
			message: 'Min copy created.'
		}));
});

gulp.task('copy-to-dist', function() {
	// copy other files to dist folder
	gulp.src('source/js/modaal.js')
		.pipe(gulp.dest('dist/js/'));

	gulp.src('source/css/modaal.scss')
		.pipe(gulp.dest('dist/css/'));

	gulp.src('source/css/modaal.css')
		.pipe(gulp.dest('dist/css/'))
		.pipe(notify({
			message: 'Moved to dist.'
		}));
});

// Now run in order
gulp.task('dist', ['min-modaal', 'copy-to-dist']);
