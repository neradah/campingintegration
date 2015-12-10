var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
// var svgSprites = require('gulp-svg-sprites');
var livereload = require('gulp-livereload');
var prefix = require('gulp-autoprefixer');
var gargoyle = require('gargoyle');
var spritesmith = require("gulp-spritesmith");
var gulpif = require("gulp-if");
var complexity = require('gulp-complexity');
var plumber = require('gulp-plumber');
var ngAnnotate = require('gulp-ng-annotate');
var minifyCSS = require('gulp-minify-css');

var LIVERELOAD_PORT = 35729;
var ASSETS_FOLDER = 'assets';

// var svg = svgSprites.svg;
// var png = svgSprites.png;

gulp.task('default', ['png', 'png-retina', 'js'], function(){
 gulp.start('scss');
});
gulp.task('production', ['png', 'png-retina', 'js-prod'], function(){
 gulp.start('scss-prod');
});

gulp.task('scss', function() {
 return gulp.src('resources/assets/scss/*.scss')
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(sass())
     .pipe(gulp.dest('public_html/'+ASSETS_FOLDER+'/styles'))
     .pipe(livereload({ auto: false }));
});

gulp.task('scss-prod', function() {
 return gulp.src('resources/assets/scss/site/*.scss')
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(sass())
     .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
     .pipe(minifyCSS({keepSpecialComments:0}))
     .pipe(gulp.dest('public_html/'+ASSETS_FOLDER+'/styles'))
     .pipe(livereload({ auto: false }));
});

gulp.task('js', function() {
 return gulp.src([
  'resources/assets/js/jquery-1.11.3.min.js',
  'resources/assets/js/vendor/*.js',
  'resources/assets/js/bootstrap/*.js',
  'resources/assets/js/cms/*.js',
  'resources/assets/js/objects/*.js',
  'resources/assets/js/global.js'
 ])
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(ngAnnotate())
     .pipe(concat('script.js'))
     .pipe(gulp.dest('public_html/'+ASSETS_FOLDER+'/scripts'))
     .pipe(livereload({ auto: false }));
});

gulp.task('js-prod', function() {
 return gulp.src([
  'resources/assets/js/jquery-1.11.3.min.js',
  'resources/assets/js/vendor/*.js',
  'resources/assets/js/bootstrap/*.js',
  'resources/assets/js/cms/*.js',
  'resources/assets/js/objects/*.js',
  'resources/assets/js/global.js'
 ])
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(ngAnnotate())
     .pipe(concat('script.js'))
     .pipe(uglify({compress:false}))
     .pipe(gulp.dest('public_html/'+ASSETS_FOLDER+'/scripts'))
     .pipe(livereload({ auto: false }));
});

gulp.task('svg', function() {
 return gulp.src('resources/assets/images/svg-sprites/*.svg')
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(svg({
      padding:10,
      generatePreview: false,
      cssFile: '../../../resources/assets/scss/_svg-sprites.scss',
      svgPath:   "../images/%f",
      pngPath:   "../images/%f",
      className: ".sprite-%f"
     }))
     .pipe(gulp.dest('public_html/'+ASSETS_FOLDER+'/images'))
     .pipe(png())
     .pipe(livereload({ auto: false }));
});

gulp.task('png', function() {
 return gulp.src('resources/assets/images/png-sprites/*.png')
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(spritesmith({
      imgName: 'sprite-png.png',
      styleName: '_png-sprites.scss',
      imgPath: '../images/sprites/sprite-png.png',
      styleTemplate: 'resources/assets/images/png-sprites/css.template.mustache',
      padding: 1
     }))
     .pipe(gulpif('*.png', gulp.dest('public_html/'+ASSETS_FOLDER+'/images/sprites')))
     .pipe(gulpif('*.scss', gulp.dest('resources/assets/scss')))
     .pipe(livereload({ auto: false }));

});

gulp.task('png-retina', function() {
 return gulp.src('resources/assets/images/png-sprites-retina/*.png')
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(spritesmith({
      imgName: 'sprite-png-retina.png',
      styleName: '_png-sprites-retina.scss',
      imgPath: '../images/sprites/sprite-png-retina.png',
      styleTemplate: 'resources/assets/images/png-sprites-retina/retina.template.mustache',
      padding: 2
     }))
     .pipe(gulpif('*.png', gulp.dest('public_html/'+ASSETS_FOLDER+'/images/sprites')))
     .pipe(gulpif('*.scss', gulp.dest('resources/assets/scss')))
     .pipe(livereload({ auto: false }));

});

gulp.task('cms-png', function() {
 return gulp.src('resources/assets/images/cms-png-sprites/*.png')
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(spritesmith({
      imgName: 'cms-sprite-png.png',
      styleName: '_png-sprites.scss',
      imgPath: '../images/sprites/cms-sprite-png.png',
      styleTemplate: 'resources/assets/images/png-sprites/css.template.mustache',
      padding: 1
     }))
     .pipe(gulpif('*.png', gulp.dest('public_html/'+ASSETS_FOLDER+'/images/sprites')))
     .pipe(gulpif('*.scss', gulp.dest('resources/assets/scss')))
     .pipe(livereload({ auto: false }));

});

gulp.task('cms-png-retina', function() {
 return gulp.src('resources/assets/images/cms-png-sprites-retina/*.png')
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(spritesmith({
      imgName: 'cms-sprite-png-retina.png',
      styleName: '_png-sprites-retina.scss',
      imgPath: '../images/sprites/cms-sprite-png-retina.png',
      styleTemplate: 'resources/assets/images/png-sprites-retina/retina.template.mustache',
      padding: 2
     }))
     .pipe(gulpif('*.png', gulp.dest('public_html/'+ASSETS_FOLDER+'/images/sprites')))
     .pipe(gulpif('*.scss', gulp.dest('resources/assets/scss')))
     .pipe(livereload({ auto: false }));

});

gulp.task('lint', function() {
 //Tasks for checking whether code is good or not
 return gulp.src([
  'resources/assets/js/global.js',
  'resources/assets/js/objects/*.js'
 ])
     .pipe(plumber({ errorHandler: handleError }))
     .pipe(complexity({
      hideComplexFunctions: false,
      errorsOnly: false,
      breakOnErrors: false
     }));
});

gulp.task('watch', function() {
 livereload.listen(LIVERELOAD_PORT);
 createWatcher('resources/assets/scss/', 'scss', 1000);
 createWatcher('resources/assets/js/', 'js', 1000);
 // createWatcher('resources/assets/images/svg-sprites/', 'svg', 1000);
 createWatcher('resources/assets/images/png-sprites/', 'png', 1000);
 createWatcher('resources/assets/images/png-sprites-retina/', 'png-retina', 1000);
 createWatcher('resources/assets/images/cms-png-sprites/', 'cms-png', 1000);
 createWatcher('resources/assets/images/cms-png-sprites-retina/', 'cms-png-retina', 1000);
});

function createWatcher(glob, taskName, poll){
 var options = {
  type: 'watchFile',
  interval: poll
 };
 gargoyle.monitor(glob, options, function(err, monitor) {
  if (err) {
   console.error(err);
   return;
  }
  monitor.on('modify', function(filename) {gulp.start(taskName);});
  monitor.on('delete', function(filename) {gulp.start(taskName);});
  monitor.on('create', function(filename) {gulp.start(taskName);});
 });
}

function handleError(err) {
 console.log(err.toString());
 this.emit('end');
}

