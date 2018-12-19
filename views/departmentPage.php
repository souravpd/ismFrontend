<div class="ui-bg-cover ui-bg-overlay-container text-white" style="background:#00BFFF;">
  <div class="ui-bg-overlay bg-dark opacity-50"></div>
  <div class="container py-5">
    <div class="media col-md-10 col-lg-8 col-xl-7 p-0 my-4 mx-auto">
      <img data-src="holder.js/100x100" alt class="d-block ui-w-100 rounded-circle">
      <div class="media-body ml-5">
        <h4 class="font-weight-bold mb-4">Department Name</h4>
        <div class="opacity-75 mb-4">
          Lorem ipsum dolor sit amet, nibh suavitate qualisque ut nam. Ad harum primis electram duo, porro principes ei has.
        </div>
        <a href="#" class="d-inline-block text-white">
          <strong>1926</strong>
          <span class="opacity-75">Estd.</span>
        </a>
        <a href="#" class="d-inline-block text-white ml-3">
          <strong>HOD</strong>
          <span class="opacity-75">Professor Name</span>
        </a>
      </div>
    </div>
</div>
<div class="ui-bg-overlay-container">
    <div class="ui-bg-overlay bg-dark opacity-25"></div>
    <ul class="nav nav-tabs tabs-alt justify-content-center border-transparent">
      <li class="nav-item">
        <a class="nav-link text-white py-4 active" data-toggle="tab" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white py-4" data-toggle="tab" href="#faculty">Faculty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white py-4" data-toggle="tab" href="#alumini">Alumini</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white py-4" data-toggle="tab" href="#research">Research</a>
      </li>
    </ul>
  </div>
</div>

<div class="tab-content">
  <div id="about" class="tab-pane  active"><?php require_once("views/content.php"); ?></div>
  <div id="faculty" class="tab-pane fade"><div class="container" style="padding:15px;"><div class="row"><?php for($i=1;$i<=10;$i++){ vCard();} ?></div></div></div>
  <div id="alumini" class="tab-pane fade"></div>
  <div id="research" class="tab-pane fade"></div>
</div>