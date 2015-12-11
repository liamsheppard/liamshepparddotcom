var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var notify = require('gulp-notify');

gulp.task('default', function() {
    gulp.watch('./liamsheppard2015/sass/**/*.scss',['sass']);
    gulp.watch('./liamsheppard2015/css/**/*.css',['minify-css']);
});

gulp.task('sass', function () {
    return gulp.src('./liamsheppard2015/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./liamsheppard2015/css'));
});

var cssMinifyLocation = ['./liamsheppard2015/css/**/*.css', '!./liamsheppard2015/css/**/*min.css'];
gulp.task('minify-css', function() {
    return gulp.src(cssMinifyLocation)
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifyCss({ compatibility: 'ie8' }))
        .pipe(gulp.dest('./liamsheppard2015/minified-css'));
});
