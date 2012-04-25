var tree = new Tree($("#tree"));

$("#default").on('click', function () {
   $.post('default')
      .done(function (json) {
         tree.render(json);
      })
      .fail(function () {
         $("#error").text('There was an error trying to set the default tree');
      })
   ;
});

$("#node-to-add").on('keyup', function () {
   if ($(this).val()) {
      $("#add-node").removeClass('off');
   }
   else {
      $("#add-node").addClass('off');
   }
});

$("#js").on('click', '#add-node:not(.off)', function () {
   $.post('add', 'node=' + $("#node-to-add").val())
      .done(function (json) {
         $("#node-to-add").val('');
         $("#add-node").addClass('off');
         tree.render(json);
      })
      .fail(function () {
         $("#error").text('There was an error trying to add a node');
      })
   ;
});

$("#add-node.off").on('click', function () {
   $("#node-to-add").focus();
});

$("#clear").on('click', function () {
   $.post('clear')
      .done(function () {
         tree.clear();
      })
      .fail(function () {
         $("#error").text('There was an error trying to clear the tree');
      })
   ;
});

$("#traversal-methods a").on('click', function (e) {
   $.get($(this).attr('href'))
      .done(function (pattern) {
         tree.traverse(pattern);
      })
      .fail(function () {
         $("#error").text('Unable to display traversal pattern');
      });
   ;
});

String.prototype.px = function () {
   return parseInt(this.replace('px', ''));
}
