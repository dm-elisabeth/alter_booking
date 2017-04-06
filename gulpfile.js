/* eslint-disable */

'use strict';

// dependencies / gulp plugins ---
var gulp = require('gulp-help')(require('gulp')),
    runSequence = require('run-sequence'),
    tasks = require('./gulp-tasks/index.js');

// --------------------------
// TASKS INITS: tasks defined in tasks/index.js
// --------------------------
gulp.task('sass', tasks.sass.help, tasks.sass.init,{
    options: {
        'production': 'for a minified CSS file without sourcemaps'
    }
});

// --------------------------
// WATCH TASKS
// --------------------------
gulp.task('watch', 'For live-reload workflow', ['sass'], function() {
    // watch:sass
    // --------------------------
    gulp.watch('wordpress/wp-content/themes/alter_booking/assets/scss/**/*.{scss,sass}', ['sass'] );
    // --------------------------
    // watch:lint:es6
    // --------------------------
    // gulp.watch('wordpress/wp-content/themes/alter_booking/assets/js', ['scripts']);
});

//-------
// $ gulp
// ------
gulp.task('default', 'runs the default task: watch', ['watch']);
// ------
// browserSync will open your browser with port 3030:
// http://localhost:3030/index.html

gulp.task('build', 'runs all task once', function(cb) {
    runSequence('sass', cb);
});

// For more task informations: $ gulp help
