function Tree(canvas) {
   this.canvas = canvas;

   this.render = function(json) {
      this.appendNode(json.root, json.height * 25, 0);
      $("#traversal-methods").fadeIn('fast');
   }

   this.appendNode = function (node, left, top) {
      var $vis = $("<span>", {'class': 'node', text: node.value, style: 'left: ' + left + '; top: ' + top})
         .appendTo("#tree");

      if (node.left) {
         this.appendNode(node.left, $vis.css('left') - 25, $vis.css('top') + 50);
      }
      if (node.right) {
         this.appendNode(node.right, $vis.css('left') + 25, $vis.css('top') + 50);
      }
   }

   this.clear = function () {
      $("#tree").html('');
      $("#traversal-methods").fadeOut('fast');
   }
}
