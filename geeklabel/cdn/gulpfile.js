var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function () {
  gulp.src('./stylesheets/style.scss')
    .pipe(sass({
      outputStyle: 'compressed',
      precision: 10
    }).on('error', sass.logError))    
    .pipe(gulp.dest('css/'));
});

gulp.task('sass', ['styles']);

gulp.task('watch', function () {
  gulp.watch('stylesheets/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);
