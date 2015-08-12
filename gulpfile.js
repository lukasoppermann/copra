var gulp = require('gulp');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var rename = require('gulp-rename');

gulp.task('css', function(cb){
  return gulp.src('htdocs/css/app.less')
    .pipe(less())
    .pipe(autoprefixer({
      browsers: ['last 2 versions', 'IE 9', 'IE 8'],
      cascade: false
    }))
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(cssmin())
    .pipe(rename('app.min.css'))
    .pipe(sourcemaps.write('../css'))
    .pipe(gulp.dest('htdocs/css'));
    cb(err);
});
