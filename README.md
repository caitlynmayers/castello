## Carbon (Beta)
#### Description:
-------------------
Carbon the base theme for custom WordPress development at CO+LAB. The theme is built as a minimal, yet powerful starting point for WordPress projects. For more information regarding the theme, [please see the repo Wiki on GitHub](https://github.com/teamcolab/Carbon/wiki).

-------------------
#### Quick Start Guide: 
-------------------
Here is a quick start up guide for installing and initializing the theme within a WordPress project. For more detailed instructions about WordPress setup, please see the [Getting Started](https://github.com/teamcolab/Carbon/wiki/Getting-Started) page in the Wiki.

#### Installing Carbon
Navigate to the /themes directory and remove the standard WordPress themes:
```
cd ~/YourSitesDirectory/YourProjectDirectory/wp/wp-content/themes
rm -rf twentytwelve
rm -rf twentythirteen
rm -rf twentyfourteen
```
Download the latest release of the Cardon theme:
```
Link coming soon
```

#### Starting Development
To begin development, you will need to run a few commands to initialize the theme. To do this, you must have node.js, npm, and Gulp installed on your machine. If you do not have Gulp installed on your machine, you will need to install it globally before getting going. Here is more about [node.js](http://nodejs.org/), [npm](https://www.npmjs.org/), and [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md). Once these are installed, run the following commands to initialize:
```
npm install
gulp build
```

For livereload functionality, run
```
gulp watch
```