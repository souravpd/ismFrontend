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

.columns-block {
    display                : -webkit-flex;
    display                : flex;
    -webkit-flex-direction : row;
    flex-direction         : row;
    margin                 : 60px auto;
    padding                : 0;
    box-shadow             : 0 0 0 1px #eaeaea;
    }

.blocks {
    box-sizing : border-box;
    }

.left-col-block {
    overflow     : hidden;
    -webkit-flex : 1 0 0;
    flex         : 1 0 0;
    position     : relative;
    background   : rgba(255, 255, 255, .8);
    border-right : 1px solid #eaeaea;
    }

.right-col-block {
    -webkit-flex : 2 0 0;
    flex         : 2 0 0;
    position     : relative;
    background   : #ffffff;
    }

@media (max-width : 768px) {

    .columns-block {
        display    : block;
        margin     : 0;
        box-shadow : none;
        }

    .left-col-block {
        width    : 100%;
        position : relative;
        border   : 0;
        }

    .right-col-block {
        width      : 100%;
        position   : relative;
        box-shadow : none;
        }
    }

@media (min-width : 769px) and (max-width : 1024px) {
    .columns-block {
        margin-top    : 30px;
        margin-bottom : 30px;
        }
    }


/*-------------------
 * Section Wrapper
 *-------------------*/
.section-wrapper {
    padding       : 50px;
    border-bottom : 1px solid #eaeaea;
    }

@media (max-width : 480px) {
    .section-wrapper {
        padding : 30px 20px;
        }
    }

/*---------------------------
* Section Title
*---------------------------*/
.section-title {
    margin-bottom : 15px;
    }

.section-title h2 {
    margin-bottom : 5px;
    color         : #bebece;
    }

/*-----------------------------
 * NAVIGATION & HEADER STYLE
 *-----------------------------*/

.header {
    padding  : 20px !important;
    margin   : 0;
    position : relative;
    }

.header .profile-img {
    margin-bottom : 50px;
    }

.header .content-wrapper {

    }

.header .content {
    width  : 100%;
    margin : 0 auto;
    }

.header .content h1 {
    line-height : 1;
    margin      : 0 0 5px;
    }

.header .content .lead {
    font-size : 18px;
    }

.header .content .about-text {
    margin : 10px 0;
    }

.header .btn {
    margin-top : 40px;
    }

@media (max-width : 768px) {
    .header {
        padding       : 0;
        text-align    : center;
        border-bottom : 1px solid #ededed;
        }

    .header img {
        margin : 0 auto;
        }

    .header .content {
        padding : 50px;
        }
    }



/*-------------------
 * Expertise
 *-------------------*/
.expertise-item {
    margin-bottom : 20px;
    }

.expertise-item h3 {
    margin-bottom : 5px;
    font-weight   : 700;
    }

/*-------------------
 * Skills Progressbar
 *-------------------*/

.progress-item {
    position : relative;
    }

.progress-item .progress-title {
    font-size     : 15px;
    font-weight   : 400;
    display       : inline-block;
    margin-bottom : 5px;
    }


/*-------------------
 * Portfolio
 *-------------------*/

.portfolio-item {
    position      : relative;
    display       : block;
    margin-bottom : 30px;
    }

.portfolio-item .portfolio-thumb img {
    height    : auto;
    display   : block;
    max-width : 100%;
    }

.portfolio-item .portfolio-info {
    position   : absolute;
    bottom     : 0;
    padding    : 30px 15px 5px;
    width      : 100%;
    background : -webkit-linear-gradient(
            top,
            transparent 0%,
            rgba(0, 0, 0, 0.5) 100%
    );
    }

.portfolio-item .portfolio-info h3 {
    margin      : 0;
    line-height : 1;
    color       : #ffffff;
    }

.portfolio-item .portfolio-info small {
    color : #ffffff;
    }

.portfolio-item:hover .portfolio-info {
    background : -webkit-linear-gradient(
            top,
            transparent 0%,
            #000 100%
    );
    }

/*-------------------
 * Content Item
 *-------------------*/

.content-item {
    margin-bottom : 40px;
    }

.content-item h3 {
    margin         : 0 0 10px;
    line-height    : 1;
    font-weight    : bold;
    text-transform : uppercase;
    }

.content-item h4 {
    margin      : 0;
    line-height : 1;
    }

.content-item small {
    color : #888888;
    }

</style>