var gulp = require('gulp-v3');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var uglifycss = require('gulp-uglifycss');

gulp.task('default',['optimize-css','optimize-js'],function(){
	console.log("Gulp Stared");
});
gulp.task('optimize-js', function() {
	return gulp.src('./JS/*.js')
		.pipe(concat('app.js'))
		.pipe(uglify().on('error', function(e){
			console.log(e);
		}))
		.pipe(gulp.dest('./dest/js/'))
});
gulp.task('optimize-css', function() {
	return gulp.src(['./custom-assets/homepage/style.css', './custom-assets/page/vendor/bootstrap/css/bootstrap.min.css', './lib/file2.js'])
        .pipe(concat({ path: 'app.css', stat: { mode: 0666 }}))
		.pipe(uglifycss({ "uglyComments": true}))
		.pipe(gulp.dest('./dest/css/'))
});