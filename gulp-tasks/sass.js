/* eslint-disable */

// GLOBAL CONFIG SETTINGS ---
var gulp = require('gulp'),
    $ = require('gulp-load-plugins')({ camelize: true });

var sass = {
    init : function() {

        return gulp.src('wordpress/wp-content/themes/alter_booking/assets/scss/*.{scss,sass}')
            .pipe($.sass({
              outputStyle: 'compressed'
            })).on('error', function (err) {
                $.util.log(err);
                this.emit('end');
            }).pipe($.cssimport())
            .pipe(gulp.dest('wordpress/wp-content/themes/alter_booking/assets/css'))
            .pipe($.filelog())
            .on('error', $.util.log);
    },
    help: 'Compiles SASS files to CSS'
};

module.exports = sass;
