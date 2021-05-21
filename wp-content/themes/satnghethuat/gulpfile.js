var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require("gulp-rename");
var browserSync = require('browser-sync');
const sourcemaps = require('gulp-sourcemaps');
runSequence = require('gulp4-run-sequence');
// var cssmin = require('cssmin');
const concat = require('gulp-concat');
var plumber = require('gulp-plumber');
const autoprefixer = require('gulp-autoprefixer');
var cssMin = require('gulp-css');
const image = require('gulp-image');
var changed = require('gulp-changed');
var cache = require('gulp-cache');
const minify = require('gulp-minify');
// Development Tasks
// -----------------
// -----------------
gulp.task('browserSync', gulp.series(function (done) {
  browserSync({
    server: {
      baseDir: './'
    }
  })
   done();
}));
gulp.task('sass', gulp.series(function (done) {
  return gulp.src('scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer({
          browsers: [
            'last 3 versions',
            'iOS >= 8',
            'Safari >= 8',
            'ie 11',
          ]
        }
      ))
    .pipe(sourcemaps.write('./map'))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({ // Reloading with Browser Sync
      stream: true
    }));
    done();
}));

// Gop CSS
gulp.task('css', gulp.series(function (done) {
  return gulp.src([
      './css/remove/bootstrap.css',
      './css/remove/all.css',
      './css/remove/jquery-ui.css',
      // './css/remove/bootstrap.css',
      './css/remove/slick.css',
      './css/remove/slick-theme.css',
      './css/remove/card.css',
      './css/remove/common.css',
      './css/remove/custom.css',
      './css/remove/DatePickerX.css',
      './css/remove/index.css',
      './css/remove/kid-plan.css',
      './css/remove/loading.css',
      './css/remove/owl.carousel.css',
      './css/remove/owl.styles.css',
      './css/remove/owl.theme.default.css',
      './css/remove/responsive.css',
      './css/remove/shop-phone.css',
      './css/remove/style.css',
      ])
  .pipe(concat('lib.min.css'))
  .pipe(cssMin())
  .pipe(gulp.dest('./css'))
  done();
}));
//JS
gulp.task('js', gulp.series(function (done) {
  return gulp.src([
      './js/remove/jquery.js',
      './js/remove/bootstrap.js',
      './js/remove/jquery.matchHeight.js',
      './js/remove/ofi.js',
      './js/remove/slick.js',
      './js/remove/jquery-ui.js',
      './js/remove/jquery.mCustomScrollbar.js',
      ])
  .pipe(concat('lib.min.js'))
	.pipe(uglify())
  .pipe(gulp.dest('./js'))
  done();
}));
//MINIF JS
gulp.task('minifyJS', gulp.series(function (done) {
  return  gulp.src(['js/*.js', 'lib/*.mjs'])
  .pipe(minify())
  .pipe(gulp.dest('js'))
  done();
}));
// Optimizing Images
gulp.task('image', gulp.series(function (done) {
  gulp.src('./images/*')
  .pipe(image())
  .pipe(gulp.dest('./images'));
  done();
}));

// Watchers
gulp.task('watch', gulp.series(function (done) {
  gulp.watch('scss/**/*.scss', gulp.series('sass'));
  gulp.watch('*.html', gulp.series(browserSync.reload));
  gulp.watch('js/**/*.js', gulp.series(browserSync.reload));
   done();
}));
// --------------
gulp.task('optimal', gulp.series('css', 'js','image'))
