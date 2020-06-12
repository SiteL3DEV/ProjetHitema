$(document).ready(function() {
  $('#searchAnnonce').on('click', function(){
      const searchNom = $('#nameProduit').val();
      $.get("tabannonces/" + searchNom, function( data ) {
          const tabAnnonces = JSON.parse(data);
          let html = "";
          
        });
  });
});