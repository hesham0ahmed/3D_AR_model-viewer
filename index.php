<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
  <title>3D / AR</title>
  <link rel="icon" type="image/x-icon" href="img/fav.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="script/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

  <header class="py-2 text-bg-dark navbarDark" style="width: 100vw;">
    <div class="container">


      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#cam" class="nav-link px-2 text-white">Features</a></li>
        <li><i class="bi bi-gem"></i></li>
        <li><a href="#price" class="nav-link px-2 text-white">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
      </ul>





    </div>
  </header>

  <div class="container" style="
  height: 45vh;">
    <div class=" text-secondary px-4 pt-5 text-center firstSec ">
      <div class="pt-5">
        <h1 class="display-6 fw-bold text-white">PacePhone 16 Ultimate</h1>

        <div class="col-lg-6 mx-auto">

          <p class="fs-6 mb-4">With PacePhone 16 Ultimate, you have multiple focal lengths to work with. It’s like having twenty pro lenses in your pocket, everywhere you go.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold rounded-pill " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Sale starts on 01.01.2024">Buy PacePhone</button>
          </div>
          <div class="d-block loading text-center" style="margin-top: 250px;">
            <button class="btn btn-outline-info rounded-pill justify-content-center" type="button" disabled>
              <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
              <span role="status">Loading...</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="2nd3d sticky" style="height: 145vh;">
    <model-viewer alt="" src="img/cdx.glb" ar ar-tracking disable-zoom interaction-prompt="none" shadow-intensity="1" shadow-softness="1" style="width: 99%;
  height: 84vh;" loading="lazy" webxr scene-viewer quick-look></model-viewer>
  </div>
  <div class="contia">
    <div class="warning text-center">
      <p>⚠️ Your browser does not support Scroll-driven Animations. Please use Chrome 115 or newer.</p>
    </div>
  </div>


  <div class="bg-dark text-secondary my-4 px-4 py-5 text-center secondSec">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">PacePhone 16 Ultimate</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-flex gap-2 d-sm-flex justify-content-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Learn more</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4">Buy</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row row-cols w-100">
    <div class="col p-5">
      <h2 class="featurette-heading fw-normal lh-1 text-white text-center fw-bold pt-5">And lastly, this one. Pro-class GPU.</h2>
      <p class="fs-5 mb-4 text-center text-secondary pt-5">Titanium has one of the best strength‑to‑weight ratios of any metal, making these our lightest Pro models ever. You’ll notice the difference.</p>

    </div>
    <div class="col p-0 pt-5" style="justify-content: center;">
      <model-viewer alt="" src="img/cdx1.glb" ar ar-tracking disable-zoom auto-rotate camera-controls interaction-prompt="none" shadow-intensity="0" shadow-softness="0" rotation-per-second="60deg" style="width: 100%;
  height: 60vh;" webxr scene-viewer quick-look></model-viewer>
      <img src="" alt="">
    </div>
  </div>
  </div>


  <div class="bg-dark  px-3  text-center overflow-hidden" id="cam">
    <div class="imageSide row row-cols-1 row-cols-md-1 text-center mx-5 ">
      <div class="col">
        <h1 class="display-5 fw-bold text-white my-5">Super-high-resolution (86MP - 24K)</h1>
        <img src="img/Image_0.006a.webp" class="phoneLand w-100">
      </div>
    </div>
  </div>



  <div class="imageSide row row-cols-1 row-cols-md-2 text-center my-5 mx-5 py-3">
    <div class="col">
      <img src="img/Image_0.004a.webp" class="phoneLand  w-75">
    </div>
    <div class="col">
      <img src="img/Image_0.003a.webp" class="phoneLand  w-75">
    </div>
  </div>



  <div class=" d-md-flex flex-md-equal w-100 my-md-0  justify-content-center">
    <div class="   px-3  text-center overflow-hidden">
      <div class="imageSide row row-cols-1 row-cols-md-1 text-center mx-5 ">
        <div class="col">
          <img src="img/Image_0.002.webp" class="phoneLand  w-100">
        </div>
      </div>
    </div>
  </div>


  <div class="conti bg-dark py-3" id="price">
    <h2 class="text-white text-center fw-bold py-2">Pricing</h2>
    <div class="row row-cols-1 row-cols-md-3  text-center mx-5 py-3">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$999</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>X1s Pro chip
                with 10-core GPU</li>
              <li>512 GB of storage</li>
              <li>Pro camera system</li>
              <li>Forged in titanium.</li>
              <li><i class="bi bi-battery-full"></i></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Buy</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ultra</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$1199</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>X2s Ultra chip
                with 12-core GPU</li>
              <li>1 TB of storage</li>
              <li>Ultra camera system</li>
              <li>Forged in titanium</li>
              <li><i class="bi bi-battery-full"></i></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Buy</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-info">
          <div class="card-header py-3 text-bg-info border-info">
            <h4 class="my-0 fw-normal">Ultimate</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$1299</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>X2s Ultimate
                with 16-core GPU</li>
              <li>2 TB of storage</li>
              <li>Ultimate camera system</li>
              <li>Forged in titanium</li>
              <li><i class="bi bi-battery-full"></i></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-info">Buy</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="py-3 my-4 position-static">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">About</a></li>
    </ul>
    <p class="text-center text-secondary">&copy; 2023 h0a, Inc</p>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>
<script type="module" src="script/script.js"></script>

<script type="module">
  const modelViewer2 = document.querySelector("model-viewer");
  const annotationClicked = (annotation) => {
    let dataset = annotation.dataset;
    modelViewer2.cameraTarget = dataset.target;
    modelViewer2.cameraOrbit = dataset.orbit;
    modelViewer2.fieldOfView = '45deg';
  }

  const animate = (now) => {
    modelViewer.shadowIntensity = oscillate(0, 2, 4000, now - time);
    requestAnimationFrame(animate);
  };
  modelViewer2.querySelectorAll('button').forEach((hotspot) => {
    hotspot.addEventListener('click', () => annotationClicked(hotspot));
  });
</script>

</html>