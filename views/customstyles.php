<style type="text/css">
/**
for the main carousel
*/
.carousel-item {
            height: 60vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
}

/**
for the news section
*/
.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

/**
for the timeline
*/
.timeline{
  --uiTimelineMainColor: var(--timelineMainColor, #222);
  --uiTimelineSecondaryColor: var(--timelineSecondaryColor, #fff);

  position: relative;
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.timeline:before{
  content: "";
  width: 4px;
  height: 100%;
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  top: 0;
}

.timeline__group{
  position: relative;
}

.timeline__group:not(:first-of-type){
  margin-top: 4rem;
}

.timeline__year{
  padding: .5rem 1.5rem;
  color: var(--uiTimelineSecondaryColor);
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  left: 0;
  top: 0;
}

.timeline__box{
  position: relative;
}

.timeline__box:not(:last-of-type){
  margin-bottom: 30px;
}

.timeline__box:before{
  content: "";
  width: 100%;
  height: 2px;
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  left: 0;
  z-index: -1;
}

.timeline__date{
  min-width: 65px;
  position: absolute;
  left: 0;

  box-sizing: border-box;
  padding: .5rem 1.5rem;
  text-align: center;

  background-color: var(--uiTimelineMainColor);
  color: var(--uiTimelineSecondaryColor);
}

.timeline__day{
  font-size: 2rem;
  font-weight: 700;
  display: block;
}

.timeline__month{
  display: block;
  font-size: .8em;
  text-transform: uppercase;
}

.timeline__post{
  padding: 1.5rem 2rem;
  border-radius: 2px;
  border-left: 3px solid var(--uiTimelineMainColor);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
  background-color: var(--uiTimelineSecondaryColor);
}

@media screen and (min-width: 641px){

  .timeline:before{
    left: 30px;
  }

  .timeline__group{
    padding-top: 55px;
  }

  .timeline__box{
    padding-left: 80px;
  }

  .timeline__box:before{
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);  
  }  

  .timeline__date{
    top: 50%;
    margin-top: -27px;
  }
}

@media screen and (max-width: 640px){

  .timeline:before{
    left: 0;
  }

  .timeline__group{
    padding-top: 40px;
  }

  .timeline__box{
    padding-left: 20px;
    padding-top: 70px;
  }

  .timeline__box:before{
    top: 90px;
  }    

  .timeline__date{
    top: 0;
  }
}

.timeline{
  --timelineMainColor: #4557bb;
  font-size: 16px;
}

/** blog posts */
.blog-post {
  margin-bottom: 4rem;
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}
.card {
    border: none;
    -webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
    box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
    margin-bottom: 30px;
}
.w-60 {
    width: 60px;
}
.text-white {
    color: #fff !important;
}
.ui-bg-overlay-container, .ui-bg-video-container {
    position: relative;
}
.ui-bg-cover {
    background-color: transparent;
    background-position: center center;
    background-size: cover;
}
.ui-bg-overlay-container .ui-bg-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
}

.bg-dark {
    background-color: rgba(24,28,33,0.9) !important;
}
.opacity-50 {
    opacity: .5 !important;
}
.bg-dark {
    background-color: rgba(24,28,33,0.9) !important;
}
.ui-bg-overlay-container>*, .ui-bg-video-container>* {
    position: relative;
}
@media (min-width: 992px){
    .container, .container-fluid {
        padding-right: 2rem;
        padding-left: 2rem;
    }
}
.media, .media>:not(.media-body), .jumbotron, .card {
    -ms-flex-negative: 1;
    flex-shrink: 1;
}
.d-flex, .d-inline-flex, .media, .media>:not(.media-body), .jumbotron, .card {
    -ms-flex-negative: 1;
    flex-shrink: 1;
}
.ui-w-100 {
    width: 100px !important;
    height: auto;
}
.font-weight-bold {
    font-weight: 700 !important;
}
.opacity-75 {
    opacity: .75 !important;
}
.tabs-alt.nav-tabs .nav-link.active, .tabs-alt.nav-tabs .nav-link.active:hover, .tabs-alt.nav-tabs .nav-link.active:focus, .tabs-alt>.nav-tabs .nav-link.active, .tabs-alt>.nav-tabs .nav-link.active:hover, .tabs-alt>.nav-tabs .nav-link.active:focus {
    -webkit-box-shadow: 0 -2px 0 #26B4FF inset;
    box-shadow: 0 -2px 0 #26B4FF inset;
}

.nav-tabs:not(.nav-fill):not(.nav-justified) .nav-link, .nav-pills:not(.nav-fill):not(.nav-justified) .nav-link {
    margin-right: .125rem;
}
.nav-tabs.tabs-alt .nav-link, .tabs-alt>.nav-tabs .nav-link {
    border-width: 0 !important;
    border-radius: 0 !important;
    background-color: transparent !important;
}
.nav-tabs .nav-link.active {
    border-bottom-color: #fff;
}


</style>