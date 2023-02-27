<?php require('header.php'); ?>

<link href="/uploader/dist/image-uploader.min.css" rel="stylesheet">
<script src="/uploader/dist/image-uploader.min.js"></script>
<link rel="stylesheet" type="text/css" href="/color-picker/dist/coloris.min.css">
<link rel="stylesheet" href="progress-bar/css/asProgress.css">

<style>
  .app.rref-cal.top-content-app {
    margin: 25px auto;
  }

  div#category {
    max-width: 700px;
    width: 100%;
    margin: 0 auto;
  }

  div#category a {
    background: #fff;
    box-shadow: 1px 1px 17px -3px #047556;
    border: 0px solid;
    border-radius: 10px;
    padding: 20px;
    display: inline-block;
    margin-bottom: 32px;
    width: 100%;
    font-size: 16px;
    font-weight: 700;
  }

  .row.justify-content-center {
    justify-content: center !important;
    display: flex;
  }

  .blog-single img {
    width: 100%;
    height: 250px;
    object-fit: cover;
  }

  div#blog-home,
  .group {
    float: left;
  }

  h4 {
    line-height: 26px;
  }

  @media only screen and (max-width: 991px) {
    .row.justify-content-center {
      justify-content: center !important;
      display: block;
    }
  }
</style>

<style>
  ul#color-plate li {
    margin-bottom: 10px;
    height: 30px;
    max-width: 300px;
    list-style: decimal;
    display: flex;
  }

  ul#color-plate li span {
    width: 100px;
    margin-right: 10px;
  }

  ul#color-plate {
    float: right;
  }

  .examples {
    display: flex;
    flex-wrap: wrap;
  }

  .example {
    flex-shrink: 0;
    width: 300px;
    margin-bottom: 30px;
  }

  .square .clr-field button,
  .circle .clr-field button {
    width: 22px;
    height: 22px;
    left: 5px;
    right: auto;
    border-radius: 5px;
  }

  .square .clr-field input,
  .circle .clr-field input {
    padding-left: 36px;
  }

  .circle .clr-field button {
    border-radius: 50%;
  }

  .full .clr-field button {
    width: 100%;
    height: 100%;
    border-radius: 5px;
  }


  .color-main {
    margin-bottom: 8px;
    float: left;
    width: 100%;
  }

  .color-main .color-main .clr-field {
    width: 50%;
    float: left;
    background: #f2f1f1;
    padding: 6px;
    margin-right: 0px;
  }

  ul#color-plate span {
    height: 20px;
    width: 20px;
    border-radius: 5px;
    display: inline-block;
    margin-right: 6px;
    margin-left: 0;
    float: left;
  }

  .color-main input {
    float: left;
    width: 100%;
    font-size: 13px;
    border: unset;
    background: #f2f1f1;
  }

  .clr-field button {
    width: 20px;
    height: 20px;
    border-radius: 5px;
    transform: translateY(0%);
    position: absolute;
    top: 3px;
    right: 3px;
  }

  div#color-change .color-main {
    margin-bottom: 3px;
  }

  .clr-field input {
    float: left;
    width: 100%;
    font-size: 13px;
    border: none;
    color: #000;
  }

  .color-main .clr-field {
    position: relative;
    padding: 4px;
    background: #f2f1f1;
  }

  input:focus,
  input:focus-visible {
    border: none;
  }

  div#color-main {
    float: right;
    width: 50%;
  }

  div#color-detected,
  div#color-change {
    float: left;
    width: 50%;
  }

  span.original-clr {
    width: 20px;
    height: 20px;
    border-radius: 5px;
    transform: translateY(0%);
    position: absolute;
    top: 3px;
    right: 3px;
  }

  div#color-detected .color-main {
    position: relative;
    padding: 4px;
    background: #f2f1f1;
  }

  div#color-detected h5,
  div#color-change h5 {
    background: #03a974;
    color: #fff;
    text-align: left;
    padding: 10px;
    margin-bottom: 2px;
    margin-top: 0;
  }

  div#preview-svg button {
    padding: 10px 0;
    background: #2fc781;
    font-size: 14px;
    font-weight: 500;
    width: 50%;
    display: block;
  }

  div#preview-svg {
    float: left;
    width: 100%;
    margin-top: 15px;
    text-align: center;
    display: flex;
  }

  div#download-svg {
    margin-top: 0;
    display: block;
    width: 50%;
    padding: 13px 0px;
    background: #00bcd4;
    border-radius: 3px;
    margin-left: 10px;
    color: #fff;
    cursor: pointer;
  }


  /******tool styles******/
  div#tool-main {
    border: 2px dotted #b5cfd5;
    padding: 30px;
    max-width: 700px;
    margin: 0 auto;
    width: 100%;
    min-height: 450px;
    border-radius: 5px;
  }

  /*****uploader*****/
  .image-uploader {
    min-height: 10rem;
    border: unset;
    position: relative;
  }

  div#upload-part .input-field {
    width: 285px;
    margin: 0 auto;
  }

  .image-uploader .upload-text button {
    background: #25d798;
    padding: 13px 20px;
    height: unset;
    margin-top: 18px;
    font-weight: 500;
    font-size: 15px;
    line-height: 15px;
  }

  .image-uploader .upload-text span {
    font-size: 18px;
    font-weight: 500;
    color: #3b3a3a;
  }

  div#upload-part {
    margin-top: 70px;
  }

  .uploaded-image {
    width: 100px !important;
    height: auto !important;
    padding-bottom: 0 !important;
    background: none !important;
  }

  .image-uploader .uploaded .uploaded-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: unset !important;
  }

  button.delete-image {
    visibility: hidden;
    height: 0;
  }

  div#loader-color-detect p {
    margin-top: -15px;
    margin-bottom: 15px;
  }

  .show {
    display: block !important;
    margin-bottom: -16px;
  }

  .input-images-1 {
    padding-top: 0 !important;
    margin-top: -15px !important;
  }


  /***progress bar****/
  .progress {
    height: 8px;
    padding: 1px;
    overflow: visible;
    background-color: #f7f7f7;
    border: none;
    border-radius: 10px;
    position: relative;
  }

  .progress__bar {
    display: block;
    height: 100%;
    background: #38e7a9;
    border-radius: 10px;
  }

  .progress__label {
    float: unset;
    padding: 0 2px;
    font-size: 11px;
    color: #a8a3a3;
    position: absolute;
    top: 10px;
    right: unset;
    z-index: 9999;
    left: 0;
    font-style: italic;
  }

  /*******edit part******/
  div#svg-container svg {
    width: 100%;
    height: auto;
  }

  ul#color-plate {
    float: right;
    padding-left: 0px;
    width: 55%;
  }

  div#edit-part {
    display: block;
    width: 100%;
  }

  div#svg-container {
    float: left;
    width: 50%;
    padding-right: 25px;
  }

  div#color-detected {
    margin-right: 1%;
    width: 49%;
  }

  /*****generate part******/
  div#generate-image {
    margin-top: 50px;
  }

  div#generate-image-prev {
    width: 100px;
    margin: 0 auto;
  }

  /******final step*******/
  div#svg-generate-image svg {
    width: 100%;
    height: auto;
  }

  div#final-step {
    display: flex;
  }

  div#svg-generate-final,
  div#svg-final-actions {
    width: 50%;
  }

  div#svg-generate-image {
    padding: 30px;
  }

  div#svg-final-actions h4 {
    font-weight: 600;
  }

  div#ads {
    border: 1px dotted #999;
    height: 90px;
    padding-top: 10px;
  }

  div#svg-final-actions div#action-btns button {
    margin-bottom: 15px;
    width: 200px;
    background: #04b295;
    font-size: 15px;
    font-weight: 500;
    display: inline-block;
  }

  div#svg-final-actions div#action-btns {
    text-align: center !important;
  }

  /*****steps progress bar******/
  #progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    counter-reset: step;
    padding-left: 0;
  }

  #progressbar li {
    list-style-type: none;
    color: #000;
    text-transform: uppercase;
    font-size: 12px;
    width: 33.33%;
    float: left;
    position: relative;
  }

  #progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 25px;
    line-height: 24px;
    display: block;
    font-size: 12px;
    color: #030303;
    background: #d2dcde;
    border-radius: 3px;
    margin: 0 auto 5px auto;
  }

  #progressbar li:after {
    content: '';
    width: 95%;
    height: 2px;
    background: #d2dcde;
    position: absolute;
    left: -46.2%;
    top: 12px;
    z-index: 0;
  }

  #progressbar li:first-child:after {
    content: none;
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
    background: #0abea0;
    color: #fff;
  }

  /*****manual entry******/
  div#manual_code button {
    display: inline-block;
    padding: 11px 23px;
    background: #009688;
    font-size: 15px;
    font-weight: 500;
    height: unset;
  }

  div#manual_code {
    text-align: center;
    margin-top: 30px
  }

  div#modal-manual {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    padding-top: 7%;
    background: rgba(0, 0, 0, 0.5);
  }

  div#modal-inner {
    max-width: 600px;
    width: 95%;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border: 0px solid;
    border-radius: 6px;
    position: relative;
  }

  div#modal-inner textarea {
    width: 100%;
    height: 350px;
    margin-bottom: 15px;
    padding: 10px;
  }

  span#close-modal {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
  }

  div#manula-svg-upload {
    width: 100px;
    margin: 0 auto;
  }

  @media only screen and (max-width: 400px) {
    #progressbar li {
      font-size: 10px;
    }

    div#upload-part .input-field {
      width: auto;
      margin: 0 auto;
    }

    #progressbar li:after {
      width: 75%;
      left: -36.2%;
    }

    div#tool-main {
      float: left;
      padding: 20px;
      height: 570px;
      margin-bottom: 50px;
    }

    div#edit-part {
      display: block;
      width: 100%;
      float: left;
    }

    div#color-main {
      float: left;
      width: 100%;
    }

    div#svg-container {
      float: left;
      width: 100%;
      padding: 30px;
      padding-bottom: 0;
    }

    div#svg-generate-final,
    div#svg-final-actions {
      width: 100%;
    }

    div#final-step {
      display: block;
    }

    div#upload-part {
      margin-top: 50%;
    }

  }
</style>

<h1>Change SVG Color</h1>
<div class="calculator" style="text-align: center;">
  <div class="myads" style="width:100%;height:250px;">
    <!-- SVGcolor -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8262249082547358" data-ad-slot="1321198875" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <br><br>
  <p>A simple tool to change the color of SVG’s in less than 1 minute. Simply upload your SVG and replace the colors
    below.</p>
  <br>
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active" id="progress-step-1">Upload SVG</li>
    <li id="progress-step-2">Edit SVG Color</li>
    <li id="progress-step-3">Download SVG</li>
  </ul>
  <!----Tool Start---->
  <div id="tool-main">

    <div id="upload-part">
      <form method="POST" name="form-example-1" id="form-example-1" enctype="multipart/form-data">
        <div class="input-field">
          <div class="input-images-1" style="padding-top: .5rem;"></div>
        </div>
      </form>
      <div id="manual_code">
        <button id="enter-code">Enter Code</button> <br>
        <div id="modal-manual" style="display:none;">
          <div id="modal-inner">
            <h4 style="margin-top:0;">Enter SVG code</h4>
            <textarea id="code-svg" placeholder="Paste your code here.."></textarea><br>
            <button id="submit-svg-code">Submit Code</button>
            <span id="close-modal">&#x2715</span>
          </div>
        </div>
      </div>
      <div id="manula-svg-upload"></div>
    </div>
    <div id="step-2" style="display:none;">
      <div id="loader-color-detect">
        <img src="assets/images/Ellipsis-2s-200px.svg" style="width: 80px;">
        <p>Detecting Colors..</p>
      </div>
      <div class="show">
        <div class="progress" role="progressbar">
          <div class="progress__bar"><span class="progress__label"></span></div>
        </div>
      </div>
    </div>
    <div id="edit-part" style="display:none;">
      <div id="color-main">
        <div id="color-detected">
          <h5>Detected Colors</h5>
        </div>
        <div id="color-change">
          <h5>Change Color to</h5>
        </div>
        <div id="preview-svg">
          <button onclick="changeColorSVG()">Preview Changes</button>
          <div id="download-svg" onclick="downloadSVG()">Download SVG</div>
        </div>
      </div>
      <div id="svg-container"></div>
    </div>

    <div id="generate-image" style="display:none;">
      <div id="generate-image-prev"></div>
      <div id="loader-generate-image">
        <img src="assets/images/Ellipsis-2s-200px.svg" style="width: 80px;">
        <p>Generating SVG...</p>
      </div>
      <div class="show">
        <div class="progress" role="progressbar">
          <div class="progress__bar"><span class="progress__label"></span></div>
        </div>
      </div>
    </div>

    <div id="final-step" style="display:none;">
      <div id="svg-generate-final">
        <div id="svg-generate-image"></div>
      </div>
      <div id="svg-final-actions">
        <h4>Select Size and Download SVG</h4>
        <div id="action-btns">
          <button id="svg-original-size" onclick="svgOriginalSize()">Original Size</button><br>
          <button id="svg-2x-size" onclick="svgOriginalSize()">2x Original Size</button><br>
          <button id="svg-half-size" onclick="svgOriginalSize()">50% of Original Size</button>
        </div>
      </div>
    </div>

  </div>
  <br>
  <!----Tool End---->
  <div class="myads" style="width:100%;height:250px;float:left;">
    <!-- SVGcolor -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8262249082547358" data-ad-slot="1321198875" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <br>
  <div class="group" style="text-align: center;">
    <h2 style="width: 100%;">FEATURES</h2>
    <br>
    <article class="one_third first">
      <i class="fa fa-cogs" aria-hidden="true"></i>
      <h3 class="heading">Automatic Color Detection</h3>
      <p>This is the only SVG recoloring tool enabled with a color detection AI system.</p>
    </article>

    <article class="one_third">
      <i class="fa fa-check-square-o" aria-hidden="true"></i>
      <h3 class="heading">100% Free to Use</h3>
      <p>This is an easy to use online tool with no payment or registration required. This will remain free forever, so
        feel free to bookmark this.</p>
    </article>

    <article class="one_third last">
      <i class="fa fa-clipboard" aria-hidden="true"></i>
      <h3 class="heading">No Watermark</h3>
      <p>Your SVG will remain watermark free and in high resolution, we just recolor it for you without making any other
        changes.</p>
    </article>
  </div>

  <div class="myads" style="width:100%;height:250px;float:left;">
    <!-- SVGcolor -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8262249082547358" data-ad-slot="1321198875" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>

  <div id="blog-home">
    <h2 style="width:100%;">BLOG</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="blog-single">
          <img src="/blog-img/image5.jpg">
          <a href="/what-is-a-svg-icon">
            <h4>What is a svg icon?</h4>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-single">
          <img src="/blog-img/image2.jpg">
          <a href="/how-to-change-svg-color-in-an-img-tag">
            <h4>How to change svg color in an img tag</h4>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-single">
          <img src="/blog-img/image1.jpg">
          <a href="/how-to-change-the-color-of-svg-using-css">
            <h4>How to change the color of svg using css</h4>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-single">
          <img src="/blog-img/image4.jpg">
          <a href="/what-is-a-svg-file-for-cricut">
            <h4>What is a svg file for cricut</h4>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-single">
          <img src="/blog-img/image3.jpg">
          <a href="/which-program-opens-svg-files">
            <h4>Which program opens svg files</h4>
          </a>
        </div>
      </div>

    </div>
  </div>

  <br><br><br>
</div>

<script type="text/javascript" src="progress-bar/jquery-asProgress.js"></script>
<!----progress bar----->
<script type="text/javascript">
  jQuery(function($) {
    $('.progress').asProgress({
      namespace: 'progress',
      bootstrap: false,
      min: 0,
      max: 100,
      goal: 100,
      speed: 30, // speed of 1/100
      easing: 'ease'
    });

  });
</script>

<script>
  // SVG uploader
  $(function() {
    $('.input-images-1').imageUploader({
      extensions: ['.svg'],
      maxSize: 2 * 1024 * 1024,
      maxFiles: 1
    });
  });

  // After svg upload

  // Initialize variables
  var uploadedSVG = "";
  var htmlStr_color_detected = "";
  var htmlStr_color_change = "";
  var colors = [];
  var re = /#[0-9a-f]{3,6}/gi;

  $(document).ready(function() {
    // manual entry
    $('#enter-code').click(function() {
      $('#modal-manual').show();
    });

    $('span#close-modal').click(function() {
      $('#modal-manual').hide();
    });

    $('button#submit-svg-code').click(function() {
      var textarea = $('textarea#code-svg').val();
      if (textarea == '') {
        alert('Please enter svg code');
        return;
      }
      if (textarea.includes('<svg') == false || textarea.includes('</svg>') == false) {
        alert('The code you entered is not a valid svg');
        return;
      }

      uploadedSVG = $('textarea#code-svg').val();
      $('#manula-svg-upload').html(uploadedSVG);
      $('#modal-manual').hide();
      $('div#manual_code').hide();
      $('form#form-example-1').hide();
      $('#step-2').show();
      $('.progress').asProgress('go', '100%');

      colors = uploadedSVG.match(re);
      console.log(colors);
      var svgClrs = [];
      colors.map(hax => {
        console.log("current color", hax);
        if (svgClrs.includes(hax.toString()) == false) {
          svgClrs.push(hax.toString());
          console.log(svgClrs);
        }
      });

      if (svgClrs.length > 7) {
        alert('Sorry number of detecetd colors exceeds the color limit! Try with another SVG');
        $('#step-2').hide();
        location.replace('https://svgcolor.com/');
        return;
      }

      svgClrs.map(hax => {
        htmlStr_color_detected = "<div class='color-main'><input type='text' value='" + hax.toString() +
          "' readonly><span class='original-clr' style='background:" + hax.toString() + ";'></span></div>";

        htmlStr_color_change = "<div class='color-main'><input type='text' data-color='" + hax.toString() +
          "' class='coloris instance2' value='" + hax.toString() + "'></div>";

        $('#color-detected').append(htmlStr_color_detected);
        $('#color-change').append(htmlStr_color_change);
        colorPicker();
      });

      setTimeout(function() {
        $('#svg-container').html(uploadedSVG);
        $('div#upload-part').hide();
        $('div#step-2').hide();
        $('#edit-part').show();
        $('#progress-step-2').addClass('active');
        $('.progress').asProgress('go', '0%');
      }, 3000);


    });

    // Image Upload logic 
    $("input").change(function() {
      $('button#enter-code').hide();
      setTimeout(function() {
        $("#form-example-1").submit();
      }, 100);
    });

    $("#form-example-1").on('submit', (function(e) {
      // Submit form ajax and get svg as string
      $('#step-2').show();
      $('.progress').asProgress('go', '100%');

      e.preventDefault();
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          setTimeout(function() {
            // Get xml file as string             
            $.get(data, function(svg) {
              uploadedSVG = svg;
              colors = uploadedSVG.match(re);
              console.log(colors);
              var svgClrs = [];
              colors.map(hax => {
                console.log("current color", hax);
                if (svgClrs.includes(hax.toString()) == false) {
                  svgClrs.push(hax.toString());
                  console.log(svgClrs);
                }
              });

              if (svgClrs.length > 7) {
                alert(
                  'Sorry number of detecetd colors exceeds the color limit! Try with another SVG'
                );
                $('#step-2').hide();
                location.replace('https://svgcolor.com/');
                return;
              }

              svgClrs.map(hax => {
                htmlStr_color_detected =
                  "<div class='color-main'><input type='text' value='" + hax.toString() +
                  "' readonly><span class='original-clr' style='background:" + hax
                  .toString() + ";'></span></div>";

                htmlStr_color_change =
                  "<div class='color-main'><input type='text' data-color='" + hax
                  .toString() + "' class='coloris instance2' value='" + hax.toString() +
                  "'></div>";

                $('#color-detected').append(htmlStr_color_detected);
                $('#color-change').append(htmlStr_color_change);
                colorPicker();
              });

              $('#svg-container').html(uploadedSVG);
              $('div#upload-part').hide();
              $('div#step-2').hide();
              $('#edit-part').show();
              $('#progress-step-2').addClass('active');
              $('.progress').asProgress('go', '0%');

            }, 'text');
          }, 3000);

        },
        error: function(data) {
          console.log("error");
          console.log(data);
        }
      });
    }));

  });

  // Change SVG color
  function changeColorSVG() {
    var result = uploadedSVG;
    $('.coloris').each(function() {
      var value = $(this).val();
      var value_original = $(this).data('color');
      var strr = "value: " + value + "original value: " + value_original;
      console.log(strr);
      result = result.replaceAll(value_original, value);
    });
    //uploadedSVG = result;

    $('#svg-container').html(result);
  }

  function downloadSVG() {
    var result = uploadedSVG;
    $('.coloris').each(function() {
      var value = $(this).val();
      var value_original = $(this).data('color');
      var strr = "value: " + value + "original value: " + value_original;
      console.log(strr);
      result = result.replaceAll(value_original, value);
    });
    uploadedSVG = result;

    $('#generate-image-prev').html(uploadedSVG);
    $('div#edit-part').hide();
    $('#generate-image').show();
    $('.progress').asProgress('go', '100%');
    setTimeout(function() {
      $('#generate-image').hide();
      $('#svg-generate-image').html(uploadedSVG);
      $('#final-step').show();
      $('#progress-step-3').addClass('active');
    }, 3000);
  }

  function svgOriginalSize() {
    var a = document.createElement("a");
    //a.innerHTML = "Download SVG";
    a.download = "edited.svg";
    a.href = "data:image/svg+xml," + encodeURIComponent(uploadedSVG);
    //$('#download-svg').html(a);
    a.click();
  }
</script>

<script type="text/javascript" src="/color-picker/dist/coloris.min.js"></script>
<script type="text/javascript">
  function colorPicker() {
    /** Default configuration **/
    Coloris({
      el: '.coloris',
      swatches: [
        '#264653',
        '#2a9d8f',
        '#e9c46a',
        '#f4a261',
        '#e76f51',
        '#d62828',
        '#023e8a',
        '#0077b6',
        '#0096c7',
        '#00b4d8',
        '#48cae4'
      ]
    });

    /** Instances **/
    Coloris.setInstance('.instance2', {
      theme: 'pill',
      themeMode: 'dark',
      formatToggle: true,
      swatches: [
        '#067bc2',
        '#84bcda',
        '#80e377',
        '#ecc30b',
        '#f37748',
        '#d56062'
      ]
    });

    Coloris.setInstance('.instance2', {
      theme: 'polaroid'
    });

    Coloris.setInstance('.instance3', {
      theme: 'polaroid',
      swatchesOnly: true
    });
  }
</script>

<?php require('footer.php'); ?>