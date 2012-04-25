function Tree(canvas) {
   this.canvas = canvas;

   this.render = function(json) {
      this.appendNode(json.root, $("#tree").width() / 2 - 15, 0);
      $("#traversal-methods").fadeIn('fast');
      $("#tree").height(json.height * 25);
   }

   this.appendNode = function (node, left, top) {
      var $vis = $("<span>", {'class': 'node', text: node.value, css: {left: left, 'top': top}})
         .appendTo("#tree");

      if (node.left) {
         this.appendNode(node.left, $vis.css('left').px() - 60, $vis.css('top').px() + 50);
      }
      if (node.right) {
         this.appendNode(node.right, $vis.css('left').px() + 60, $vis.css('top').px() + 50);
      }
   }

   this.clear = function () {
      $("#tree").html('');
      $("#traversal-methods").fadeOut('fast');
   }
}
