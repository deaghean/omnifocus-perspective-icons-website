/**
 * Gruntfile for OmniFocus Perspective Icons Website
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */

module.exports = function (grunt){
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        distpath: 'dist/',
        
        // Parse main stylesheet, and add vendor prefixes as needed
        // More info: https://github.com/postcss/autoprefixer
        autoprefixer: {
            '*.css': {
                options: {
                    browsers: ['last 2 versions', 'ie 9', 'ie 10', 'ie 11']
                },
                cwd: '<%= distpath %>css',
                src: ['*.css', '!*-ie8.css'],
                dest: '<%= distpath %>css',
                expand: true
            }
        },
        
        // Combine media queries in CSS (allows us to nest media queries in LESS files, and combine them post-compilation)
        combine_mq: {
            '*.css': {
                cwd: '<%= distpath %>css',
                src: '*.css',
                dest: '<%= distpath %>css',
                expand: true
            }
        },
        
        // Combine files
        concat: {
            'google-analytics.js': {
                src: [
                    'src/js/config-google-analytics.js', 
                    'vendor/google-analytics.js'
                ],
                dest: '<%= distpath %>js/google-analytics.js'
            }
        },
        
        // Copy files
        copy: {
            'script.js': {
                src: 'src/js/script.js',
                dest: '<%= distpath %>js/script.js'
            }
        },
        
        // Minify CSS
        cssmin: {
            '*.css': {
                options: {
                
                    // Necessary to prevent rem fallbacks from being stripped.
                    // Will probably need to be changed to 'advanced: true' in the future
                    noAdvanced: true
                },
                cwd: '<%= distpath %>css',
                src: '*.css',
                dest: '<%= distpath %>css',
                expand: true
            }
        },
        
        // JavaScript code quality
        // More info: http://www.jshint.com/docs/ and http://www.jshint.com/docs/options/
        jshint: {
            options: {
                bitwise: true,
                curly: true,
                eqeqeq: true,
                freeze: true,
                latedef: true,
                newcap: true,
                noarg: true,
                notypeof: true,
                regexp: true,
                trailing: true,
                unused: true,
                browser: true
            },
            
            // Add/remove files as necessary. We're skipping vendor files for the most part
            'js-files': {
                src: [
                    'gruntfile.js',
                    'src/js/script.js'
                ]
            }
        },
        
        // LESS CSS compilation
        // More info: http://lesscss.org
        less: {
            '*.less': {
                cwd: 'src/less',
                src: '*.less',
                dest: '<%= distpath %>css',
                expand: true,
                ext: '.css'
            }
        },
        
        // Notifications
        notify: {
            watch: {
                options: {
                    title: 'Grunt Task Complete',
                    message: 'LESS file(s) compiled.'
                }
            }
        },
        
        // Minimize JavaScript
        uglify: {
            '*.js': {
                cwd: '<%= distpath %>js',
                src: '*.js',
                dest: '<%= distpath %>js',
                expand: true
            }
        },
        
        // Watch triggers tasks when files change. Here we only set it up for LESS, Autoprefixer, and Combine Media Queries
        watch: {
            files: ['src/less/*.less'],
            tasks: ['less', 'autoprefixer', 'combine_mq', 'cssmin', 'notify']
        }
    });
    
    // Load and register tasks
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-combine-mq');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-notify');
    grunt.registerTask('default', ['copy', 'concat', 'jshint', 'uglify', 'less', 'autoprefixer', 'combine_mq', 'cssmin', 'notify']);
};