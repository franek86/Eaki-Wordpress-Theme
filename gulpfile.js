var bower           = './bower_components/';

var gulp              = require('gulp'),
      browserSync = require('browser-sync'),
      reload          = browserSync.reload,
      sass              = require('gulp-sass'),
      autoprefixer  = require('gulp-autoprefixer'),
      minifycss      = require('gulp-clean-css'),
      uglify           = require('gulp-uglify'),
      rename        = require('gulp-rename'),
      concat          = require('gulp-concat'),
      imagemin     = require('gulp-imagemin'),
      combinemq  = require('gulp-combine-mq'),
      sourcemaps  = require('gulp-sourcemaps');

gulp.task('browser-sync', function(){
  var files = [
    '*.php',
    '**/*.php',
		'**/*.{png,jpg,gif,svg}'
  ];
  browserSync.init(files, {
    proxy: "http://localhost/eakitheme/",
    notify: false
  });
});

gulp.task('sass', function(){
  return gulp.src('css/style.scss')
                    .pipe(sass({
                      errLogToConsole: true,
                      includePaths: ['css'],
                      outputStyle: 'compressed',
                      precision: 10
                    }))
                    .pipe(sourcemaps.write({includeContent: false}))
				            .pipe(sourcemaps.init({loadMaps: true}))
                    .pipe(autoprefixer(['last 2 version', '> 1%', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']))
                    .pipe(combinemq())
                    .pipe(minifycss())
                    .pipe(rename({suffix: '.min'}))
                    .pipe(gulp.dest('./css/'))
                    .pipe(reload({stream: true}));
});


gulp.task('vendorsJs', function() {
	return gulp.src([
            bower+'/jquery/dist/jquery.js',
            bower+'/gsap/src/uncompressed/TweenMax.js',
            bower+'/owl.carousel/dist/owl.carousel.js',
            bower+'/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js',
            bower+'/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js',
            bower+'/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js'
      ])
			.pipe(concat('vendors.js'))
			.pipe(gulp.dest('./js'))
			.pipe(rename( {
				basename: "vendors",
				suffix: '.min'
			}))
			.pipe(uglify())
			.pipe(gulp.dest('./js/'));
});


gulp.task('scriptsJs', function() {
	return gulp.src('./js/custom/*.js')
			// .pipe(concat('custom.js'))
			.pipe(gulp.dest('./js'))
			.pipe(rename( {
				basename: "custom",
				suffix: '.min'
			}))
			.pipe(uglify())
			.pipe(gulp.dest('./js/'));
});


gulp.task('compressImages', function() {
	return 	gulp.src(['./images/preImage/*.{png,jpg,gif,svg}'])
				.pipe(imagemin({
          optimizationLevel: 7,
          progressive: true
        }))
				.pipe(gulp.dest('./images/'));
});


gulp.task('index', function(){
  return gulp.src([
      './index.php',
      './function.php'
    ])
    .pipe(reload({stream: true}));;
});


gulp.task('default', ['sass', 'vendorsJs', 'scriptsJs', 'compressImages', 'browser-sync'], function(){
  gulp.watch('./images/preImage/*', ['compressImages']);
  gulp.watch('./css/**/*', ['sass']);
  gulp.watch('./js/**/*.js', ['scriptsJs', browserSync.reload]);
  gulp.watch('./*.php', ['index']);
});
