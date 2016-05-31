<!-- Modal Izpolnite podatke -->
<div class="modal fade" id="pop-up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_1">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel_1">Izpolnite podatke</h4>
      </div>
      <div class="modal-body">
      	<p>
      		in poslali vam bomo kodo za brezplačno vrednotenje vašega rabljenega avtomobila.
      	</p>
      	<hr>
      	<div>
      		<form>
			  <div class="form-group">
			    <input type="text" class="form-control" id="postna-stevilka" placeholder="Poštna št.">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" id="telefonska-stevilka" placeholder="Telefonska številka">
			  </div>
			  <div class="form-group">
			    <input type="email" class="form-control" id="elektronski-naslov" placeholder="E-naslov">
			  </div>
			</form>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Pošljite</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Izberite trgovca -->
<div class="modal fade" id="pick-seller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_2">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel_2">Izberite trgovca</h4>
      </div>
      <div class="modal-body">
      <p>Pokličite in dogovorili se bomo za ogled vozila</p>
      <hr>
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle white-button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Izberite trgovca
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
		    <li><a href="#" onclick="$('#picked-content').show();">Avtoservis Čepin Janko s.p.</a></li>
		  </ul>
		</div>
	  <!-- START Vsebina se odpre po izboru serviserja -->
	  <div id="picked-content">
		  <p><strong>Avtoservis Čepin Janko s.p.</strong></p>
		  <p>3212 Vojnik, Tel. +386 3 82 80 163, +386 3 82 80 164</p>
		  <p><a href="#" target="_blank" class="green">www.skoda.cepin.si</a></p>
		  <p class="red"><strong><span class="glyphicon glyphicon-warning-sign"></span> OPOZORILO</strong></p>
		  <p><strong>izbrano vozilo se nahaja pri drugem trgovcu:</strong></p>
		  <p><strong>PAN-JAN d.o.o.</strong></p>
		  <p>8210 Trebnje</p>
		  <p>Tel. +386 7 34 60 700, +386 7 34 60 705</p>
		  <p><a href="#" target="_blank" class="green">skoda.panjan.si</a></p>
	  </div>
	  <!-- Konec vsebine -->
      </div>
    </div>
  </div>
</div>