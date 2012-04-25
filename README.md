#Tree Cage (0.1.1) - A visual representation of [PHP-Binary-Tree](http://github.com/ajcrites/php-binary-tree)

This project is a visual representation - in HTML and JavaScript - of the php-binary-tree project.
It is a simple representation of a binary tree written in PHP that you can view with your browser.

##Installation

###Requirements

PHP 5.2.6 or higher

###Deployment
* Copy the project to the desired location
* Change directory to this location, which should be at the root of the project directory
* Run the util/deploy executable
 * You will be asked to add the root url to the utility.  If you are deploying it on its own site, you can leave this empty.  
 If it will be, for instance, on example.com/treecage, you would use `treecage`.
* Create a symlink to the live document root that links to the project `public` directory, if needed

##Use

Visit the utility in your browser.  You can click ```Default``` to see the default tree sample display.  
You can add nodes to the empty tree or an already created tree to see where they are added as the tree is re-rendered.  
Clear the tree to start over again.

##TODO

Currently, the visual versions of the traversal methods do not work.  These need to be updated.  
'add' should also display an appropriate error.
A small testing suite could be useful.

##License

No license.  Do whatever you want.
