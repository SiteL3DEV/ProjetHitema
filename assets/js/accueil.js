$(document).ready(function() {
  $('#searchAnnonce').on('click', function(){
      const searchNom = $('#nameProduit').val();
      $.get("tabannonces/" + searchNom, function( data ) {
          const tabAnnonces = JSON.parse(data);
          let html = '';
          $.each(tabAnnonces, function( index, value ) {
            html+=`<div class="col-md-4">
              <div style="height:auto !important;" class="card">
                <img style="width:200px; height:200px;" src="/ProjetHitema/public/build/img/annonces/` + value['image'] + `" class="card-img-top ml-auto mr-auto" alt="...">
                <div class="card-body">
                  <p class="card-text">` + value['description'] + `</p>
                  <center><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Accéder au produit</button></center>
                </div>
              </div>
            </div>`
          });
          $('.contentannonces').html(html);          
        });
  });
});