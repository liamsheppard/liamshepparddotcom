var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');

gulp.task('default', ['sass', 'minify-css']);

gulp.task('sass', function () {
  gulp.src('./liamsheppard2015/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./liamsheppard2015'));
});

gulp.task('minify-css', function() {
  gulp.src('./liamsheppard2015/*.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('./liamsheppard2015'));
});

gulp.task('style:watch', function () {
  gulp.watch('./liamsheppard2015/sass/**/*.scss', ['default']);
});
