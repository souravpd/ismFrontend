<!-- THE MAIN SLIDER AT THE MAIN HOME PAGE-->
<?php function slider(){?> 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">First Slide</h2>
            <p class="lead">This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Second Slide</h2>
            <p class="lead">This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Third Slide</h2>
            <p class="lead">This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>

 <?php }?>
 <?php function vCard(){ ?>
  <div class="card mr-2 mb-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Professor Name</h5>  
    <h6 class="card-subtitle mb-2 text-muted">Professor Department</h6> <img data-src="holder.js/50x50">
    <a href="#" class=" ml-1 card-link">Contact</a>
    <a href="#" class="card-link">View</a>
  </div>
</div>  
  <?php } ?>

  <?php function cvCard(){ ?>
  <div class="card mr-2 mb-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Club Name</h5>  
    <h6 class="card-subtitle mb-2 text-muted">Estd.</h6> <img data-src="holder.js/50x50">
    <a href="#" class=" ml-1 card-link">Contact</a>
    <a href="#" class="card-link">View</a>
  </div>
</div>  
  <?php } ?>

<?php function departmentVCard(){ ?> 
  <div class="col-md-7 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body row">
                    <div class="col-6">
                        <a href=""><img data-src="holder.js/50x50" alt="" class="img-fluid "></a>
                    </div>
                    <div class="col-6 card-title align-self-center mb-0">
                        <h5 style="font-size:10px;">Department Name</h5>
                        <p style="font-size:10px;" class="m-0">HOD name</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#">department@gmail.com</a></li>
                    <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
                </ul>
            </div>
        </div>         
<?php } ?>

<?php function centresVCard(){ ?>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start  mb-1">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Centre Name</h5>
                    <small>Estd Date</small>
                    </div>
                    <p class="mb-1">HOD : Professor Name</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
<?php }?>


<!--- CONTENTS FOR THE DEPARTMENT PAGE ---->

