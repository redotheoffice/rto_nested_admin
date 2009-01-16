/* NOTE: Do not forget to download the jQuery UI Draggable and Droppable
 * components if you want to enable dragging and dropping behavior!
 */
	
// Configure draggable nodes
$("#dnd-example .file, #dnd-example .folder").draggable({
  helper: "clone",
  opacity: .75,
  refreshPositions: true, // Performance?
  revert: "invalid",
  revertDuration: 300,
  scroll: true
});

// Configure droppable rows
$("#dnd-example .folder").each(function() {
  $(this).parents("tr").droppable({
    accept: ".file, .folder",
    drop: function(e, ui) { 
      // Call jQuery treeTable plugin to move the branch
      $($(ui.draggable).parents("tr")).appendBranchTo(this);
    },
    hoverClass: "accept",
    over: function(e, ui) {
      // Make the droppable branch expand when a draggable node is moved over it.
      if(this.id != ui.draggable.parents("tr")[0].id && !$(this).is(".expanded")) {
        $(this).expand();
      }
    }
  });
});

// Make visible that a row is clicked
$("table#dnd-example tbody tr").mousedown(function() {
  $("tr.selected").removeClass("selected"); // Deselect currently selected rows
  $(this).addClass("selected");
});

// Make sure row is selected when span is clicked
$("table#dnd-example tbody tr span").mousedown(function() {
  $($(this).parents("tr")[0]).trigger("mousedown");
});