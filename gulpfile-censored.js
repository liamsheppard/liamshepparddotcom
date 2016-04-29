var gulp =         require('gulp'),
    sass =         require('gulp-sass'),
    minifyCss =    require('gulp-minify-css'),
    autoprefixer = require('gulp-autoprefixer'),
    rename =       require('gulp-rename'),
    notify =       require('gulp-notify'),
    gutil =        require( 'gulp-util' ),
    ftp =          require( 'vinyl-ftp' ),
    directory =    'liamsheppard2016';

gulp.task('default', function() {
    gulp.watch('./' + directory + '/sass/**/*.scss',['sass']);
    gulp.watch('./' + directory + '/css/**/*.css',['minify-css']);
    gulp.watch('./' + directory + '/dist/**',['deploy']);
});

gulp.task('sass', function () {
    return gulp.src('./' + directory + '/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest('./' + directory + '/css'));
});

var cssMinifyLocation = ['./' + directory + '/css/**/*.css', '!./' + directory + '/css/**/*min.css'];
gulp.task('minify-css', function() {
    return gulp.src(cssMinifyLocation)
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifyCss())
        .pipe(gulp.dest('./' + directory + '/dist/css'))
        .pipe(notify({ message: 'Styles Successfully Compiled' }));
});

gulp.task( 'deploy', function () {

	var conn = ftp.create( {
		host:     'ftp.*****.com',
		user:     '*****',
		password: '*****',
		parallel: 10,
		log:      gutil.log
	} );

    var globs = [
		'' + directory + '/dist/**/*.php',
		'' + directory + '/dist/**/*.css',
		'' + directory + '/dist/img/**',
		'' + directory + '/dist/**/*.js'
	];

	// using base = '.' will transfer everything to /public_html correctly
	// turn off buffering in gulp.src for best performance
	return gulp
        .src( globs, { base: '' + directory + '/dist/', buffer: false } )
		.pipe( conn.newer( '/public_html/wp-content/themes/liamsheppard2016' ) ) // only upload newer files
		.pipe( conn.dest( '/public_html/wp-content/themes/liamsheppard2016' ) )
        .pipe(notify({ message: 'FTP transfer successful' }));

} );
