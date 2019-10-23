<!-- <style>
@font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal; }

/* =======================================================
*
* 	Template Style
*	Edit this section
*
* ======================================================= */
body {
  font-family: "Quicksand", Arial, sans-serif;
  font-weight: 400;
  font-size: 15px;
  line-height: 1.8;
  color: rgba(0, 0, 0, 0.7); }
  @media screen and (max-width: 992px) {
    body {
      font-size: 16px; } }

a {
  color: #2c98f0;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s; }
  a:hover, a:active, a:focus {
    color: #2c98f0;
    outline: none;
    text-decoration: none !important; }

p {
  margin-bottom: 1.5em; }

h1, h2, h3, h4, h5, h6 {
  color: #000;
  font-family: "Playfair Display", Georgia, serif;
  font-weight: 400;
  margin: 0 0 30px 0; }

figure {
  margin-bottom: 2.5em;
  float: left;
  width: 100%; }
  figure figcaption {
    font-size: 16px;
    width: 80%;
    margin: 20px auto 0px auto;
    color: #b3b3b3;
    font-style: italic;
    font-family: "Quicksand", Arial, sans-serif; }
    @media screen and (max-width: 480px) {
      figure figcaption {
        width: 100%; } }

::-webkit-selection {
  color: #fff;
  background: #2c98f0; }

::-moz-selection {
  color: #fff;
  background: #2c98f0; }

::selection {
  color: #fff;
  background: #2c98f0; }

#colorlib-page {
  width: 100%;
  overflow: hidden;
  position: relative; }

#colorlib-aside {
  padding-top: 3em;
  padding-bottom: 40px;
  float: left;
  width: 300px;
  position: fixed;
  overflow-y: scroll;
  z-index: 1001;
  background: #f2f3f7;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s; }
  @media screen and (max-width: 768px) {
    #colorlib-aside {
      width: 300px;
      -moz-transform: translateX(-300px);
      -webkit-transform: translateX(-300px);
      -ms-transform: translateX(-300px);
      -o-transform: translateX(-300px);
      transform: translateX(-300px);
      padding-top: 4em; } }
  #colorlib-aside .author-img {
    width: 150px;
    height: 150px;
    margin: 0 auto;
    margin-bottom: 30px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
  #colorlib-aside .position {
    display: block;
    margin-bottom: 2em;
    font-size: 12px;
    text-transform: uppercase; }
  #colorlib-aside #colorlib-logo {
    text-align: right;
    font-weight: 700;
    font-size: 22px;
    margin-bottom: .5em;
    display: block;
    width: 100%; }
    #colorlib-aside #colorlib-logo a {
      display: block;
      text-align: center;
      color: #000;
      padding-right: .3em; }
  #colorlib-aside #colorlib-main-menu {
    display: block;
    width: 100%; }
    #colorlib-aside #colorlib-main-menu .collapse {
      display: block !important; }
    #colorlib-aside #colorlib-main-menu ul {
      text-align: center;
      margin: 0;
      padding: 0; }
      @media screen and (max-width: 768px) {
        #colorlib-aside #colorlib-main-menu ul {
          margin: 0 0 2em 0; } }
      #colorlib-aside #colorlib-main-menu ul li {
        margin: 0 0 10px 0;
        padding: 0;
        list-style: none;
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px; }
        #colorlib-aside #colorlib-main-menu ul li a {
          color: rgba(0, 0, 0, 0.7);
          text-decoration: none;
          position: relative;
          padding: 10px 0;
          font-family: "Quicksand", Arial, sans-serif;
          -webkit-transition: 0.3s;
          -o-transition: 0.3s;
          transition: 0.3s; }
          #colorlib-aside #colorlib-main-menu ul li a:after {
            content: "";
            position: absolute;
            height: 1px;
            bottom: 7px;
            left: 0;
            right: 0;
            background-color: #2c98f0;
            visibility: hidden;
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -ms-transform: scaleX(0);
            -o-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -moz-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -ms-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -o-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
          #colorlib-aside #colorlib-main-menu ul li a:hover {
            text-decoration: none;
            color: black; }
            #colorlib-aside #colorlib-main-menu ul li a:hover:after {
              visibility: visible;
              -webkit-transform: scaleX(1);
              -moz-transform: scaleX(1);
              -ms-transform: scaleX(1);
              -o-transform: scaleX(1);
              transform: scaleX(1); }
        #colorlib-aside #colorlib-main-menu ul li.active a {
          color: #2c98f0; }
          #colorlib-aside #colorlib-main-menu ul li.active a:after {
            visibility: visible;
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -ms-transform: scaleX(1);
            -o-transform: scaleX(1);
            transform: scaleX(1); }
  #colorlib-aside .colorlib-footer {
    font-size: 15px;
    text-align: center;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.5);
    padding: 0 20px;
    width: 100%; }
    @media screen and (max-width: 768px) {
      #colorlib-aside .colorlib-footer {
        position: relative;
        bottom: 0; } }
    #colorlib-aside .colorlib-footer span {
      display: block; }
    #colorlib-aside .colorlib-footer ul {
      padding: 0;
      margin: 0; }
      #colorlib-aside .colorlib-footer ul li {
        padding: 0;
        margin: 0;
        display: inline;
        list-style: none; }
        #colorlib-aside .colorlib-footer ul li a {
          color: rgba(255, 255, 255, 0.3);
          padding: 4px; }
          #colorlib-aside .colorlib-footer ul li a:hover, #colorlib-aside .colorlib-footer ul li a:active, #colorlib-aside .colorlib-footer ul li a:focus {
            text-decoration: none;
            outline: none;
            color: #2c98f0; }

.container-wrap {
  max-width: 1170px;
  margin: 0 auto; }

#colorlib-main {
  width: calc(100% - 300px);
  float: right;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s; }
  @media screen and (max-width: 768px) {
    #colorlib-main {
      width: 100%;
      padding: 0 1em; } }

#colorlib-hero {
  min-height: 500px;
  background: #fff url(../images/loader.gif) no-repeat center center;
  width: 100%;
  float: left;
  margin-bottom: 10em;
  clear: both; }
  #colorlib-hero .flexslider {
    border: none;
    z-index: 1;
    margin-bottom: 0; }
    #colorlib-hero .flexslider .slides {
      position: relative;
      overflow: visible; }
      #colorlib-hero .flexslider .slides li {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom center;
        min-height: 400px;
        position: relative; }
    #colorlib-hero .flexslider .flex-control-nav {
      bottom: 20px;
      z-index: 1000;
      left: 20px;
      float: left;
      width: auto; }
      @media screen and (max-width: 768px) {
        #colorlib-hero .flexslider .flex-control-nav {
          right: 20px;
          top: 100px; } }
      #colorlib-hero .flexslider .flex-control-nav li {
        display: block;
        margin-bottom: 10px; }
        #colorlib-hero .flexslider .flex-control-nav li a {
          background: rgba(0, 0, 0, 0.5);
          -webkit-box-shadow: none;
          box-shadow: none;
          width: 12px;
          height: 12px;
          cursor: pointer; }
          #colorlib-hero .flexslider .flex-control-nav li a.flex-active {
            cursor: pointer;
            background: transparent;
            border: 2px solid #2c98f0; }
    #colorlib-hero .flexslider .flex-direction-nav {
      display: none; }
    #colorlib-hero .flexslider .slider-text {
      display: table;
      opacity: 0;
      min-height: 500px;
      z-index: 9; }
      #colorlib-hero .flexslider .slider-text > .slider-text-inner {
        display: table-cell;
        vertical-align: middle;
        min-height: 700px;
        padding: 2.5em;
        position: relative; }
        @media screen and (max-width: 768px) {
          #colorlib-hero .flexslider .slider-text > .slider-text-inner {
            text-align: center; } }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner h1, #colorlib-hero .flexslider .slider-text > .slider-text-inner h2 {
          margin: 0;
          padding: 0;
          color: black;
          font-family: "Playfair Display", Georgia, serif; }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner h1 {
          margin-bottom: 20px;
          font-size: 60px;
          line-height: 1.3;
          font-weight: 700; }
          @media screen and (max-width: 768px) {
            #colorlib-hero .flexslider .slider-text > .slider-text-inner h1 {
              font-size: 28px; } }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner h2 {
          font-size: 18px;
          line-height: 1.5;
          margin-bottom: 30px;
          font-weight: 300;
          font-family: "Quicksand", Arial, sans-serif; }
          #colorlib-hero .flexslider .slider-text > .slider-text-inner h2 a {
            color: rgba(44, 152, 240, 0.8);
            border-bottom: 1px solid rgba(44, 152, 240, 0.7); }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner .heading-section {
          font-size: 50px; }
          @media screen and (max-width: 768px) {
            #colorlib-hero .flexslider .slider-text > .slider-text-inner .heading-section {
              font-size: 30px; } }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner s
.colorlib-lead {
          font-size: 20px;
          color: #fff; }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner p {
          margin-bottom: 0; }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner .btn {
          font-size: 12px;
          text-transform: uppercase;
          letter-spacing: 2px;
          color: #000;
          padding: 10px 15px !important;
          border: none;
          font-weight: 400; }
          #colorlib-hero .flexslider .slider-text > .slider-text-inner .btn.btn-learn {
            color: #000;
            border: 1px solid #000;
            background: transparent !important; }
            #colorlib-hero .flexslider .slider-text > .slider-text-inner .btn.btn-learn:hover {
              background: transparent !important;
              border: 1px solid #000 !important; }
          @media screen and (max-width: 768px) {
            #colorlib-hero .flexslider .slider-text > .slider-text-inner .btn {
              width: 100%; } }

body.offcanvas {
  overflow-x: hidden; }
  body.offcanvas #colorlib-aside {
    -moz-transform: translateX(0);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    width: 300px;
    background: #f2f3f7;
    z-index: 999;
    position: fixed; }
  body.offcanvas #colorlib-main, body.offcanvas .colorlib-nav-toggle {
    top: 0;
    -moz-transform: translateX(300px);
    -webkit-transform: translateX(300px);
    -ms-transform: translateX(300px);
    -o-transform: translateX(300px);
    transform: translateX(300px); }

.colorlib-narrow-content {
  padding: 0 2.5em; }
  @media screen and (max-width: 768px) {
    .colorlib-narrow-content {
      padding: 0; } }

.no-gutters {
  margin: 0;
  padding: 0; }

.colorlib-experience,
.colorlib-skills,
.colorlib-education,
.colorlib-blog,
.colorlib-work,
.colorlib-about,
.colorlib-services,
.colorlib-contact {
  padding-top: 4em;
  padding-bottom: 9em;
  clear: both;
  width: 100%;
  display: block; }
  @media screen and (max-width: 768px) {
    .colorlib-experience,
    .colorlib-skills,
    .colorlib-education,
    .colorlib-blog,
    .colorlib-work,
    .colorlib-about,
    .colorlib-services,
    .colorlib-contact {
      padding-top: 5em;
      padding-bottom: 8em; } }

.author-img {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative; }

.colorlib-heading {
  font-size: 18px;
  margin-bottom: 4em;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 5px;
  line-height: 1.8;
  position: relative; }
  .colorlib-heading span {
    display: block; }
  @media screen and (max-width: 768px) {
    .colorlib-heading {
      margin-bottom: 3em; } }

.heading-meta {
  margin-bottom: 15px;
  display: block;
  font-size: 10px;
  text-transform: uppercase;
  color: #999999;
  font-weight: 500;
  letter-spacing: 5px; }

.about-img {
  width: 100%;
  height: 600px;
  margin-bottom: 30px; }

.about-desc h3 {
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: 500; }

.hire {
  padding: 2em;
  background: #f9bf3f; }
  .hire h2 {
    line-height: 1.5; }
  .hire .btn-hire {
    color: #000;
    text-transform: uppercase;
    letter-spacing: 1px;
    bordeR: 1px solid #000;
    padding: 2px 10px; }

.fancy-collapse-panel .panel-default > .panel-heading {
  padding: 0; }

.panel-heading a {
  padding: 20px 25px;
  display: block;
  width: 100%;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: "Quicksand", Arial, sans-serif;
  background-color: #2c98f0;
  color: #fff;
  position: relative;
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  -ms-box-shadow: none !important;
  -o-box-shadow: none !important;
  box-shadow: none !important; }

.panel {
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  -ms-box-shadow: none !important;
  -o-box-shadow: none !important;
  box-shadow: none !important;
  border: none; }

.panel-heading a:after {
  font-family: "icomoon";
  content: "\e115";
  position: absolute;
  right: 20px;
  font-size: 14px;
  font-weight: 400;
  top: 50%;
  line-height: 1;
  margin-top: -7px; }

.panel-heading a.collapsed:after {
  content: "\e114"; }

.panel-heading a.collapsed {
  background: #f2f3f7;
  border: 1px solid #e6e6e6 !important;
  color: #333333; }

.panel-body {
  padding: 1.5em;
  margin-top: 5px;
  border: 1px solid #e6e6e6 !important; }

.timeline-centered {
  position: relative;
  margin-bottom: 30px; }

.timeline-centered:before, .timeline-centered:after {
  content: " ";
  display: table; }

.timeline-centered:after {
  clear: both; }

.timeline-centered:before, .timeline-centered:after {
  content: " ";
  display: table; }

.timeline-centered:after {
  clear: both; }

.timeline-centered:before {
  content: '';
  position: absolute;
  display: block;
  width: 4px;
  background: #f2f3f7;
  top: 20px;
  bottom: 20px;
  margin-left: 29px; }

.timeline-centered .timeline-entry {
  position: relative;
  margin-top: 5px;
  margin-left: 30px;
  margin-bottom: 10px;
  clear: both; }

.timeline-centered .timeline-entry .timeline-entry-inner {
  position: relative;
  margin-left: -20px; }

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
  display: block;
  width: 40px;
  height: 40px;
  background: #2c98f0;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  -moz-box-shadow: 0 0 0 5px #f2f3f7;
  -webkit-box-shadow: 0 0 0 5px #f2f3f7;
  box-shadow: 0 0 0 5px #f2f3f7;
  line-height: 40px;
  float: left; }
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon i {
    color: #fff; }
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.color-2 {
    background: #ec5453; }
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.color-3 {
    background: #f9bf3f; }
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.color-4 {
    background: #a84cb8; }
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.color-5 {
    background: #2fa499; }
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.color-none {
    background: #fff;
    width: 20px;
    height: 20px;
    margin-left: 10px; }

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
  position: relative;
  background: #f2f3f7;
  padding: 1.5em;
  margin-left: 60px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box; }

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
  content: '';
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 9px 9px 9px 0;
  border-color: transparent #f2f3f7 transparent transparent;
  left: 0;
  top: 10px;
  margin-left: -9px; }

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p + p {
  margin-top: 15px; }

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
  font-size: 20px;
  font-family: "Quicksand", Arial, sans-serif;
  font-weight: 500; }

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 a {
  color: #000; }

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
  -webkit-opacity: .4;
  -moz-opacity: .4;
  opacity: .4;
  -ms-filter: alpha(opacity=40);
  filter: alpha(opacity=40);
  font-size: 16px; }

.services {
  margin-bottom: 30px;
  padding: 1.5em;
  -webkit-box-shadow: 0px 0px 56px -8px rgba(0, 0, 0, 0.17);
  -moz-box-shadow: 0px 0px 56px -8px rgba(0, 0, 0, 0.17);
  -ms-box-shadow: 0px 0px 56px -8px rgba(0, 0, 0, 0.17);
  -o-box-shadow: 0px 0px 56px -8px rgba(0, 0, 0, 0.17);
  box-shadow: 0px 0px 56px -8px rgba(0, 0, 0, 0.17);
  border-bottom: 2px solid #2c98f0; }
  .services .icon2 {
    display: block;
    margin-bottom: 20px; }
    .services .icon2 i {
      font-size: 30px;
      color: #2c98f0; }
  .services h3 {
    font-family: "Quicksand", Arial, sans-serif;
    font-size: 16px;
    font-weight: 500; }
  .services.color-2 {
    border-bottom: 2px solid #ec5453; }
    .services.color-2 .icon2 i {
      color: #ec5453; }
  .services.color-3 {
    border-bottom: 2px solid #f9bf3f; }
    .services.color-3 .icon2 i {
      color: #f9bf3f; }
  .services.color-4 {
    border-bottom: 2px solid #a84cb8; }
    .services.color-4 .icon2 i {
      color: #a84cb8; }
  .services.color-5 {
    border-bottom: 2px solid #2fa499; }
  .services.color-6 {
    border-bottom: 2px solid #4054b2; }

.services {
  margin-bottom: 80px;
  position: relative;
  z-index: 0; }
  @media screen and (max-width: 768px) {
    .services {
      margin-bottom: 4em; } }
  .services .icon {
    position: absolute;
    top: -20px;
    left: 0;
    right: 0;
    width: 100px;
    height: 50px;
    display: table;
    margin: 0 auto;
    background: #2c98f0; }
    .services .icon:before, .services .icon:after {
      position: absolute;
      left: 0;
      right: 0;
      content: ''; }
    .services .icon:before {
      top: -30px;
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 0 50px 30px 50px;
      border-color: transparent transparent #2c98f0 transparent; }
    .services .icon:after {
      bottom: -30px;
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 30px 50px 0 50px;
      border-color: #2c98f0 transparent transparent transparent; }
    .services .icon i {
      font-size: 30px;
      color: #fff;
      z-index: 1;
      display: table-cell;
      vertical-align: middle; }
  .services .desc {
    margin-top: 60px; }
    .services .desc h3 {
      font-size: 16px;
      font-weight: 700;
      text-transform: uppercase; }
  .services.color-2 .icon {
    background: #ec5453; }
    .services.color-2 .icon:before {
      border-color: transparent transparent #ec5453 transparent; }
    .services.color-2 .icon:after {
      border-color: #ec5453 transparent transparent transparent; }
  .services.color-3 .icon {
    background: #f9bf3f; }
    .services.color-3 .icon:before {
      border-color: transparent transparent #f9bf3f transparent; }
    .services.color-3 .icon:after {
      border-color: #f9bf3f transparent transparent transparent; }
  .services.color-4 .icon {
    background: #a84cb8; }
    .services.color-4 .icon:before {
      border-color: transparent transparent #a84cb8 transparent; }
    .services.color-4 .icon:after {
      border-color: #a84cb8 transparent transparent transparent; }
  .services.color-5 .icon {
    background: #2fa499; }
    .services.color-5 .icon:before {
      border-color: transparent transparent #2fa499 transparent; }
    .services.color-5 .icon:after {
      border-color: #2fa499 transparent transparent transparent; }
  .services.color-6 .icon {
    background: #4054b2; }
    .services.color-6 .icon:before {
      border-color: transparent transparent #4054b2 transparent; }
    .services.color-6 .icon:after {
      border-color: #4054b2 transparent transparent transparent; }

.progress-wrap h3 {
  font-size: 16px;
  font-family: "Quicksand", Arial, sans-serif;
  margin-bottom: 10px; }

.progress {
  height: 6px;
  -webkit-box-shadow: none;
  box-shadow: none;
  background: #f2f3f7;
  overflow: visible; }

.progress-bar {
  background: #2c98f0;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 12px;
  line-height: 1.2;
  color: #000;
  font-weight: 600;
  text-align: right;
  position: relative;
  overflow: visible;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  -ms-border-radius: 8px;
  border-radius: 8px; }
  .progress-bar:after {
    position: absolute;
    top: -2px;
    right: 0;
    width: 10px;
    height: 10px;
    content: '';
    background: #2c98f0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
  .progress-bar span {
    position: absolute;
    top: -22px;
    right: 0; }
  .progress-bar.color-1 {
    background: #2c98f0; }
    .progress-bar.color-1:after {
      background: #2c98f0; }
    .progress-bar.color-1 span {
      color: #2c98f0; }
  .progress-bar.color-2 {
    background: #ec5453; }
    .progress-bar.color-2:after {
      background: #ec5453; }
    .progress-bar.color-2 span {
      color: #ec5453; }
  .progress-bar.color-3 {
    background: #f9bf3f; }
    .progress-bar.color-3:after {
      background: #f9bf3f; }
    .progress-bar.color-3 span {
      color: #f9bf3f; }
  .progress-bar.color-4 {
    background: #a84cb8; }
    .progress-bar.color-4:after {
      background: #a84cb8; }
    .progress-bar.color-4 span {
      color: #a84cb8; }
  .progress-bar.color-5 {
    background: #2fa499; }
    .progress-bar.color-5:after {
      background: #2fa499; }
    .progress-bar.color-5 span {
      color: #2fa499; }
  .progress-bar.color-6 {
    background: #4054b2; }
    .progress-bar.color-6:after {
      background: #4054b2; }
    .progress-bar.color-6 span {
      color: #4054b2; }

.colorlib-feature {
  text-align: left;
  width: 100%;
  float: left;
  margin-bottom: 40px;
  position: relative; }
  .colorlib-feature .colorlib-icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 100px;
    display: table;
    text-align: center;
    background: #f2f3f7;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px; }
    .colorlib-feature .colorlib-icon i {
      display: table-cell;
      vertical-align: middle;
      color: #2c98f0;
      font-size: 60px;
      height: 100px; }
      @media screen and (max-width: 1200px) {
        .colorlib-feature .colorlib-icon i {
          font-size: 40px; } }
  .colorlib-feature .colorlib-text {
    padding-left: 120px;
    width: 100%; }
    .colorlib-feature .colorlib-text h2, .colorlib-feature .colorlib-text h3 {
      margin: 0;
      padding: 0; }
    .colorlib-feature .colorlib-text h3 {
      font-weight: 500;
      margin-bottom: 20px;
      color: rgba(0, 0, 0, 0.7);
      font-size: 14px;
      letter-spacing: 3px;
      text-transform: uppercase; }
  .colorlib-feature.colorlib-feature-sm .colorlib-text {
    margin-top: 30px; }
  .colorlib-feature.colorlib-feature-sm .colorlib-icon i {
    color: #2c98f0;
    font-size: 40px; }
    @media screen and (max-width: 1200px) {
      .colorlib-feature.colorlib-feature-sm .colorlib-icon i {
        font-size: 28px; } }

.blog-entry {
  width: 100%;
  float: left;
  background: #fff;
  margin-bottom: 3em; }
  @media screen and (max-width: 768px) {
    .blog-entry {
      margin-bottom: 3em; } }
  .blog-entry .blog-img {
    width: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    z-index: 1;
    margin-bottom: 25px; }
    .blog-entry .blog-img img {
      position: relative;
      max-width: 100%;
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s; }
  .blog-entry .desc h3 {
    font-size: 16px;
    margin-bottom: 25px;
    line-height: auto;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-family: "Quicksand", Arial, sans-serif; }
    .blog-entry .desc h3 a {
      color: #000;
      text-decoration: none; }
  .blog-entry .desc span {
    display: block;
    margin-bottom: 20px;
    font-size: 12px;
    color: rgba(0, 0, 0, 0.4) !important;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400; }
    .blog-entry .desc span small i {
      color: #999999; }
  .blog-entry .desc .lead {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #000; }
  .blog-entry:hover .blog-img img {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1); }

.work-menu span {
  margin-left: 10px; }
  .work-menu span:first-child {
    margin-left: 0; }
  .work-menu span a {
    color: #000; }
    .work-menu span a.active {
      color: #2c98f0; }

.project {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
  height: 300px;
  width: 100%;
  display: block;
  margin-bottom: 30px; }
  .project .desc {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #2c98f0;
    opacity: 0;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s; }
    .project .desc .con {
      padding: 20px;
      display: block;
      position: relative;
      height: 300px; }
      .project .desc .con .icon {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px; }
        .project .desc .con .icon span {
          display: inline;
          padding-right: 5px; }
          .project .desc .con .icon span a {
            color: #333333;
            padding: 5px;
            background: rgba(255, 255, 255, 0.5);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            border-radius: 4px; }
        .project .desc .con .icon i {
          font-size: 16px;
          color: #333333; }
    .project .desc h3 {
      font-family: "Quicksand", Arial, sans-serif;
      font-size: 16px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 1px;
      -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
      -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
      transition: opacity 0.3s, -webkit-transform 0.3s;
      -o-transition: transform 0.3s, opacity 0.3s;
      transition: transform 0.3s, opacity 0.3s;
      transition: transform 0.3s, opacity 0.3s, -webkit-transform 0.3s;
      -webkit-transform: translate3d(0, -15px, 0);
      transform: translate3d(0, -15px, 0);
      margin-bottom: 15px; }
      .project .desc h3 a {
        color: #fff; }
    .project .desc span {
      display: block;
      color: rgba(255, 255, 255, 0.7);
      font-size: 13px;
      -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
      -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
      transition: opacity 0.3s, -webkit-transform 0.3s;
      -o-transition: transform 0.3s, opacity 0.3s;
      transition: transform 0.3s, opacity 0.3s;
      transition: transform 0.3s, opacity 0.3s, -webkit-transform 0.3s;
      -webkit-transform: translate3d(0, 15px, 0);
      transform: translate3d(0, 15px, 0); }
      .project .desc span a {
        color: #000; }
    @media screen and (max-width: 768px) {
      .project .desc {
        opacity: 1;
        background: rgba(0, 0, 0, 0.4); }
        .project .desc h3 {
          font-style: 28px;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
          color: #000; }
        .project .desc span {
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0); } }
  .project:hover .desc {
    opacity: 1; }
    .project:hover .desc h3 {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0); }
    .project:hover .desc span {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0); }

.btn-load-more {
  width: 100%; }

#colorlib-counter {
  position: relative;
  clear: both;
  margin-bottom: 5em; }

.colorlib-counters {
  padding: 3em 0;
  background-size: cover;
  background-attachment: fixed;
  background-position: center center; }
  .colorlib-counters .overlay {
    z-index: 0;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.4); }
  .colorlib-counters .icon {
    width: 100px;
    height: 100px;
    display: table;
    margin: 0 auto;
    margin-bottom: 20px; }
    .colorlib-counters .icon i {
      display: table-cell;
      vertical-align: middle;
      width: 100px;
      height: 100px;
      font-size: 50px;
      color: #2c98f0;
      background: #fff;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; }
  .colorlib-counters .counter-wrap {
    border: 1px solid red !important; }
  .colorlib-counters .colorlib-counter {
    font-size: 40px;
    display: block;
    color: white;
    font-family: "Quicksand", Arial, sans-serif;
    width: 100%;
    font-weight: 700;
    margin-bottom: .3em; }
  .colorlib-counters .colorlib-counter-label {
    color: rgba(255, 255, 255, 0.7);
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 5px;
    margin-bottom: 2em;
    display: block; }

.colorlib-social {
  padding: 0;
  margin: 0;
  text-align: center; }
  .colorlib-social li {
    padding: 0;
    margin: 0;
    list-style: none;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
    *display: inline; }
    .colorlib-social li a {
      font-size: 22px;
      color: #000;
      padding: 10px;
      display: -moz-inline-stack;
      display: inline-block;
      zoom: 1;
      *display: inline;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      -ms-border-radius: 7px;
      border-radius: 7px; }
      @media screen and (max-width: 768px) {
        .colorlib-social li a {
          padding: 10px 8px; } }
      .colorlib-social li a:hover {
        color: #2c98f0; }
      .colorlib-social li a:hover, .colorlib-social li a:active, .colorlib-social li a:focus {
        outline: none;
        text-decoration: none;
        color: #2c98f0; }

#map {
  width: 100%;
  height: 700px; }
  @media screen and (max-width: 768px) {
    #map {
      height: 200px; } }

.colorlib-bg-color {
  background: #fafafa;
  position: relative; }

.pagination {
  padding: 0; }
  .pagination li {
    margin: 2px; }
    .pagination li a {
      color: #000;
      background: transparent;
      color: #000;
      margin: 2px;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      -ms-border-radius: 0;
      border-radius: 0; }
      .pagination li a:first-child {
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        -ms-border-radius: 2px;
        border-radius: 2px; }
      .pagination li a:hover, .pagination li a:focus {
        background: #2c98f0;
        color: #fff;
        border: 1px solid #2c98f0; }
      @media screen and (max-width: 768px) {
        .pagination li a {
          padding: 7px 15px; } }
    .pagination li.active a {
      background: #2c98f0;
      border: 1px solid #2c98f0 !important; }
      .pagination li.active a:hover, .pagination li.active a:focus {
        background: #2c98f0;
        color: #fff;
        border: 1px solid #2c98f0 !important; }

.btn {
  margin-right: 4px;
  margin-bottom: 4px;
  font-family: "Quicksand", Arial, sans-serif;
  font-size: 12px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  padding: 8px 15px !important; }
  .btn.btn-sm {
    padding: 4px 15px !important; }
  .btn.btn-md {
    padding: 8px 20px !important; }
  .btn.btn-lg {
    padding: 18px 36px !important; }
  .btn:hover, .btn:active, .btn:focus {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none !important; }

.btn-primary {
  background: #2c98f0;
  color: #fff;
  border: 2px solid #2c98f0; }
  .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
    background: #44a4f2 !important;
    border-color: #44a4f2 !important; }
  .btn-primary.btn-outline {
    background: transparent;
    color: #2c98f0;
    border: 2px solid #2c98f0; }
    .btn-primary.btn-outline:hover, .btn-primary.btn-outline:focus, .btn-primary.btn-outline:active {
      background: #2c98f0;
      color: #fff; }

.btn-success {
  background: #5cb85c;
  color: #fff;
  border: 2px solid #5cb85c; }
  .btn-success:hover, .btn-success:focus, .btn-success:active {
    background: #4cae4c !important;
    border-color: #4cae4c !important; }
  .btn-success.btn-outline {
    background: transparent;
    color: #5cb85c;
    border: 2px solid #5cb85c; }
    .btn-success.btn-outline:hover, .btn-success.btn-outline:focus, .btn-success.btn-outline:active {
      background: #5cb85c;
      color: #fff; }

.btn-info {
  background: #5bc0de;
  color: #fff;
  border: 2px solid #5bc0de; }
  .btn-info:hover, .btn-info:focus, .btn-info:active {
    background: #46b8da !important;
    border-color: #46b8da !important; }
  .btn-info.btn-outline {
    background: transparent;
    color: #5bc0de;
    border: 2px solid #5bc0de; }
    .btn-info.btn-outline:hover, .btn-info.btn-outline:focus, .btn-info.btn-outline:active {
      background: #5bc0de;
      color: #fff; }

.btn-warning {
  background: #f0ad4e;
  color: #fff;
  border: 2px solid #f0ad4e; }
  .btn-warning:hover, .btn-warning:focus, .btn-warning:active {
    background: #eea236 !important;
    border-color: #eea236 !important; }
  .btn-warning.btn-outline {
    background: transparent;
    color: #f0ad4e;
    border: 2px solid #f0ad4e; }
    .btn-warning.btn-outline:hover, .btn-warning.btn-outline:focus, .btn-warning.btn-outline:active {
      background: #f0ad4e;
      color: #fff; }

.btn-danger {
  background: #d9534f;
  color: #fff;
  border: 2px solid #d9534f; }
  .btn-danger:hover, .btn-danger:focus, .btn-danger:active {
    background: #d43f3a !important;
    border-color: #d43f3a !important; }
  .btn-danger.btn-outline {
    background: transparent;
    color: #d9534f;
    border: 2px solid #d9534f; }
    .btn-danger.btn-outline:hover, .btn-danger.btn-outline:focus, .btn-danger.btn-outline:active {
      background: #d9534f;
      color: #fff; }

.btn-outline {
  background: none;
  border: 2px solid gray;
  font-size: 16px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }
  .btn-outline:hover, .btn-outline:focus, .btn-outline:active {
    -webkit-box-shadow: none;
    box-shadow: none; }

.form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  background: transparent;
  border: transparent;
  background: #f2f3f7;
  height: 54px;
  font-size: 16px;
  font-weight: 400;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: transparent;
    background: #f0f0f0; }

#message {
  height: 130px; }

.colorlib-nav-toggle {
  cursor: pointer;
  text-decoration: none; }
  .colorlib-nav-toggle.active i::before, .colorlib-nav-toggle.active i::after {
    background: #000; }
  .colorlib-nav-toggle.dark.active i::before, .colorlib-nav-toggle.dark.active i::after {
    background: #000; }
  .colorlib-nav-toggle:hover, .colorlib-nav-toggle:focus, .colorlib-nav-toggle:active {
    outline: none;
    border-bottom: none !important; }
  .colorlib-nav-toggle i {
    position: relative;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
    *display: inline;
    width: 30px;
    height: 2px;
    color: #000;
    font: bold 14px/.4 Helvetica;
    text-transform: uppercase;
    text-indent: -55px;
    background: #000;
    -webkit-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out; }
    .colorlib-nav-toggle i::before, .colorlib-nav-toggle i::after {
      content: '';
      width: 30px;
      height: 2px;
      background: #000;
      position: absolute;
      left: 0;
      -webkit-transition: 0.2s;
      -o-transition: 0.2s;
      transition: 0.2s; }
  .colorlib-nav-toggle.dark i {
    position: relative;
    color: #000;
    background: #000;
    -webkit-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out; }
    .colorlib-nav-toggle.dark i::before, .colorlib-nav-toggle.dark i::after {
      background: #000;
      -webkit-transition: 0.2s;
      -o-transition: 0.2s;
      transition: 0.2s; }

.colorlib-nav-toggle i::before {
  top: -7px; }

.colorlib-nav-toggle i::after {
  bottom: -7px; }

.colorlib-nav-toggle:hover i::before {
  top: -10px; }

.colorlib-nav-toggle:hover i::after {
  bottom: -10px; }

.colorlib-nav-toggle.active i {
  background: transparent; }

.colorlib-nav-toggle.active i::before {
  top: 0;
  -webkit-transform: rotateZ(45deg);
  -moz-transform: rotateZ(45deg);
  -ms-transform: rotateZ(45deg);
  -o-transform: rotateZ(45deg);
  transform: rotateZ(45deg); }

.colorlib-nav-toggle.active i::after {
  bottom: 0;
  -webkit-transform: rotateZ(-45deg);
  -moz-transform: rotateZ(-45deg);
  -ms-transform: rotateZ(-45deg);
  -o-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg); }

.colorlib-nav-toggle {
  position: fixed;
  left: -5px;
  top: 0px;
  z-index: 9999;
  cursor: pointer;
  opacity: 1;
  visibility: hidden;
  padding: 20px;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s; }
  @media screen and (max-width: 768px) {
    .colorlib-nav-toggle {
      opacity: 1;
      visibility: visible; } }

@media screen and (max-width: 480px) {
  .col-xxs-12 {
    float: none;
    width: 100%; } }

.row-bottom-padded-lg {
  padding-bottom: 7em; }
  @media screen and (max-width: 768px) {
    .row-bottom-padded-lg {
      padding-bottom: 1em; } }

.row-bottom-padded-md {
  padding-bottom: 3em; }
  @media screen and (max-width: 768px) {
    .row-bottom-padded-md {
      padding-bottom: 1em; } }

.row-bottom-padded-sm {
  padding-bottom: 1em; }
  @media screen and (max-width: 768px) {
    .row-bottom-padded-sm {
      padding-bottom: 1em; } }

.row-pt-md {
  padding-top: 3em; }

.col-padding {
  padding: 10px !important; }

.js .animate-box {
  opacity: 0; }

</style> -->
