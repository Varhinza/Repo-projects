<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="<?= base_url('assets2/js/jquery-1.3.2.min.js') ?>"></script>
    <!-- <script src="jquery.dimensions.js"></script> -->
    <link href="<?= base_url('assets2/css/float.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets2/css/modal.css')?>" rel="stylesheet">
</head>
<body>
    <div id="page-wrap">
        
        <div class="div" id="Div1">
        </div>
        <div class="div" id="Div2">
        </div>
    </div>
    <!-- The Modal -->
    <div id="floatDiv" class="child_div">
        <button class="tombol">x</button>
        <video id="vid" width="320" height="240" controls>
            <source src="videowall.webm" type="video/webm">
          Your browser does not support the video tag.
          </video>
    </div>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <!-- <img class="modal-content" id="img01"> -->
        <video class="modal-content" id="video01"  controls> 
            <source src="videowall.webm" type="video/webm">
            Your browser does not support the video tag.     
        </video> 
        <div id="caption"></div>
    </div>
    <script src="<?= base_url('assets2/js/animation-scroll-video.js') ?>"></script>
</body>
</html>