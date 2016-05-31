module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            options: {
                sourceMap: false,
                sourceComments: false
            },
            dist: {
                files: {    //destination:source
                    './css/style.css': './css/scss/main.scss'
                }
            }
        },

        cssmin: {
            build: {
                src: './css/style.css',
                dest: './css/style.min.css'
            }
        },
        uglify: {
            build: {
                files: {
                    './js/script.min.js': ['./js/script.js']
                }
            }
        },
        compress: {
            main: {
                options: {
                  archive: function(){ return 'archive-'+(new Date()).getFullYear()+("0"+((new Date()).getMonth()+1)).slice(-2)+("0"+(new Date()).getDate()).slice(-2)+'-'+("0"+(new Date()).getHours()).slice(-2)+("0"+(new Date()).getMinutes()).slice(-2)+'.zip'; }
                  
                },
                files: [{
                    src: ['*.{php,html}','./html/**/*.html','./img/**/*.{png,jpg,gif,svg}','./fonts/**/*.{peot,ttf,woff,woff2,svg}','./css/*.css','./js/*.js'], dest: '/build'
                }]
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'img/_raw/',           
                    src: ['**/*.{png,jpg,gif,svg}'],
                    dest: 'img/'
                }]
            }
        },
        validation: {
            target: ['./*.html', './html/**/*.html']
        },

        gitadd: {
            task: {
                options: {
                force: true
            },
            files: {
                src: ['*.{php,html,js,md,json}','./html/**/*.{php,html}','./img/**/*.{png,jpg,gif,svg}','./fonts/**/*.{peot,ttf,woff,woff2,svg}','./css/*.css','./css/scss/**/*.scss','./js/*.js']
                }
            }
        },
        gitcommit: {
            task: {
                options: {
                    cwd: ".",
                    message: '<%= pkg.name %> [<%= grunt.template.today("yyyy-mm-dd HH:MM:ss") %>] commit v<%= pkg.version %>',
                    noVerify: true,
                    noStatus: false
                },
                files: {
                    src: ['*.{php,html,js,md,json}','./html/**/*.{php,html}','./img/**/*.{png,jpg,gif,svg}','./fonts/**/*.{peot,ttf,woff,woff2,svg}','./css/*.css','./css/scss/**/*.scss','./js/*.js']
                }
            }
        },
        gitpush: {
            your_target: {
                options: {
                    remote: 'https://github.com/krumpak/*****.git',
                    branch: 'master',
                    all: false
                }
            }
        },
        gitpull: {
            your_target: {
                options: {
                    remote: 'https://github.com/krumpak/*****.git',
                    branch: 'master'
                }
            }
        },
        /* initialize local git repository:  git init */

        watch: {
            scss: {
                files : ['./css/scss/**/*.scss', './css/scss/_custom-media-query.scss', './css/scss/_custom-mixins.scss', './css/scss/_custom-variables.scss', './js/script.js', '*.html', '*.php'],
                tasks : ['sass'],
                options: {
                    livereload: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-git');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-html-validation');

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('minify', ['sass','cssmin', 'uglify']);
    grunt.registerTask('git',  ['gitadd', 'gitcommit', 'gitpush']);
    grunt.registerTask('zip', 'compress');
    grunt.registerTask('img', 'imagemin');
    grunt.registerTask('html', 'validation');
};