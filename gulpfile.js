var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var directory = 'liamsheppard2016';

gulp.task('default', function() {
    gulp.watch('./' + directory + '/sass/**/*.scss',['sass']);
    gulp.watch('./' + directory + '/css/**/*.css',['minify-css']);
});

gulp.task('sass', function () {
    return gulp.src('./' + directory + '/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./' + directory + '/css'));
});

var cssMinifyLocation = ['./' + directory + '/css/**/*.css', '!./' + directory + '/css/**/*min.css'];
gulp.task('minify-css', function() {
    return gulp.src(cssMinifyLocation)
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifyCss())
        .pipe(gulp.dest('./' + directory + '/dist/css'));
});
