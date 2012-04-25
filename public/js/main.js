var tree = new Tree();

$("#submit").on('click', function () {
   $.post('/default')
      .done(function (json) {
         tree.render(json);
      })
      .fail(funtion () {
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

$("#add-node:not(.off)").on('click', function () {
   $.post('/add/' + $("#node-to-add").val())
      .done(function (json) {
         tree.render(json);
      })
      .fail(funtion () {
         $("#error").text('There was an error trying to add a node');
      })
   ;
});

$("#clear").on('click', function () {
   $.post('/clear')
      .done(function () {
         tree.clear();
      })
      .fail(funtion () {
         $("#error").text('There was an error trying to clear the tree');
      })
   ;
});
