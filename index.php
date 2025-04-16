<!DOCTYPE html>
<html>
  <head>
    <title>AR.js Image Tracker</title>
    <script src="https://cdn.jsdelivr.net/gh/aframevr/aframe@1c2407b26c61958baa93967b5412487cd94b290b/dist/aframe-master.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
    <link rel="stylesheet" href="style.css?v=7">
  </head>
  <body style="margin: 0; overflow: hidden;">

    <script src="https://cdn.rawgit.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>

    <div class="box box-1">
        <p>magazi eksw</p>
    </div>

    <div class="box box-2">
        <p>potiri krasi</p>
    </div>

    <div class="arjs-loader">
      <div>Loading, please wait...</div>
    </div>

    <!-- a-frame scene -->
    <a-scene
    vr-mode-ui="enabled: false;"
    renderer="logarithmicDepthBuffer: true;"
    embedded
    arjs="trackingMethod: best; sourceType: webcam;debugUIEnabled: false;"
    >

    <!-- a-nft is the anchor that defines an Image Tracking entity -->
    <!-- on 'url' use the path to the Image Descriptors created before. -->
    <!-- the path should end with the name without the extension e.g. if file is 'pinball.fset' the path should end with 'pinball' -->
    <a-nft
    type="nft"
    url="https://catalyticademo.com/vouka/marker/vouka"
    smooth="true"
    smoothCount="10"
    smoothTolerance=".01"
    smoothThreshold="5"
    id="my-nft-marker"
    >
    </a-nft>

    <a-nft
    type="nft"
    url="https://catalyticademo.com/vouka/marker-2/ar-test"
    smooth="true"
    smoothCount="10"
    smoothTolerance=".01"
    smoothThreshold="5"
    id="my-nft-marker-2"
    >
    </a-nft>

    <!-- static camera that moves according to the device movemenents -->
    <a-entity camera></a-entity>
    </a-scene>
    
    <script src="index.js?v=7"></script>
    </body>
</html>
