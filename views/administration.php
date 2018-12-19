<div class="container" style="padding-top:10px;">
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 ">Institute Administration</h1>
          <p class="lead my-3 font-italic">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est minima reiciendis hic architecto, natus quo!</p>
          <button class="btn btn-success" href="#">Go somewhere</a></button>
        </div>
      </div>
     
    
    <div class="row">
    <div class="col-12"><div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-director-list" data-toggle="list" href="#list-director" role="tab" aria-controls="director">Director</a>
      <a class="list-group-item list-group-item-action" id="list-deans-list" data-toggle="list" href="#list-deans" role="tab" aria-controls="deans">Deans</a>
      <a class="list-group-item list-group-item-action" id="list-acad-list" data-toggle="list" href="#list-acad" role="tab" aria-controls="acad">Academic Administration</a>
      <a class="list-group-item list-group-item-action" id="list-hostel-list" data-toggle="list" href="#list-hostel" role="tab" aria-controls="hostel">Hostel Administration</a>
    </div>
    
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-director" role="tabpanel" aria-labelledby="list-director-list"><?php vCard(); ?></div>
      <div class="tab-pane fade" id="list-deans" role="tabpanel" aria-labelledby="list-deans-list"><div class="row"><?php for($i =1 ;$i <=3 ;$i++){ vCard();} ?> </div></div>
      <div class="tab-pane fade" id="list-acad" role="tabpanel" aria-labelledby="list-acad-list"><div class="row"><?php for($i =1 ;$i <=5 ;$i++){ vCard();} ?> </div></div>
      <div class="tab-pane fade" id="list-hostel" role="tabpanel" aria-labelledby="list-hostel-list"><div class="row"><?php for($i =1 ;$i <=8 ;$i++){ vCard();} ?> </div></div>
    </div>
  </div>
</div></div>