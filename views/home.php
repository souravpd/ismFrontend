<!-- THE DEAFULT HEADER CONFIGURATIONS -->



<!-- THE DECK OF CARDS IN THE HOMEPAGE -->
<?php function showCards(){ ?>
<div class="card-deck">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<?php } ?>
<!-- THE NEWS SECTION -->
 <?php function news(){ ?> 
    <div class="row mb-0">        
          <div class="card flex-md-row mb-2 shadow-sm h-md-100">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-1 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Lorem, ipsum.</a>
              </h3>
              <div class="mb-0 text-muted">Nov 12</div>
              <p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ducimus!</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x200?theme=thumb" alt="Card image cap">
          </div>
    </div>
    <div class="row mb-0">        
          <div class="card flex-md-row mb-2 shadow-sm h-md-100">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-1 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Lorem, ipsum.</a>
              </h3>
              <div class="mb-0 text-muted">Nov 12</div>
              <p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ducimus!</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x200?theme=thumb" alt="Card image cap">
          </div>
    </div>
    <div class="row mb-0">        
          <div class="card flex-md-row mb-2 shadow-sm h-md-100">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-1 text-danger">Education</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Lorem, ipsum.</a>
              </h3>
              <div class="mb-0 text-muted">Nov 12</div>
              <p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ducimus!</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x200?theme=thumb" alt="Card image cap">
          </div>
    </div>
<?php } ?>
<!-- THE TIMELINE SECTION  -->
<?php function displayTimeline(){ ?>

      <div class="timeline">
        <div class="timeline__group">
          <span class="timeline__year">2018</span>
          <div class="timeline__box">
            <div class="timeline__date">
              <span class="timeline__day">2</span>
              <span class="timeline__month">Feb</span>
            </div>
            <div class="timeline__post">
              <div class="timeline__content">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, accusantium!</p>
              </div>
            </div>
          </div>
          <div class="timeline__box">
            <div class="timeline__date">
              <span class="timeline__day">1</span>
              <span class="timeline__month">Sept</span>
            </div>
            <div class="timeline__post">
              <div class="timeline__content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, iure?</p>
              </div>
            </div>
          </div>
          <div class="timeline__box">
            <div class="timeline__date">
              <span class="timeline__day">6</span>
              <span class="timeline__month">Dec</span>
            </div>
            <div class="timeline__post">
              <div class="timeline__content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, iure?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php }?>
<?php slider(); ?>
<div class="container" style="padding:10px;">
<div class="row"><?php showCards(); ?></div>
<div class="row">
        <div class="col-6"><?php news();?></div>
        <div class="col-6 "><div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Events Calendar</h4>
            <p class="mb-0">Get to know what's happening</p></div><?php displayTimeline(); ?></div>
</div>
</div>
