<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Value Studio</title>
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
</head>
<body>
    
<div class="container-fluid bg-dark fixed-top px-lg-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#">
                <img src="{{ asset('assets/logo.png') }}" alt="" style="width: 100px;">
              </a>
              <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-lg-3">
                    <a class="nav-link text-white" aria-current="page" href="{{ url('/#home') }}">Home</a>
                  </li>
                  <li class="nav-item mx-lg-3">
                    <a class="nav-link text-white" href="{{ url('/#about') }}">About</a>
                  </li>
                  <li class="nav-item mx-lg-3">
                    <a class="nav-link text-white" href="{{ url('/#service') }}">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
</div>

<div style="margin-top:100px;">
    @yield('content')
</div>

<!-- contact section start  -->

<div class="container-fluid bg-dark py-5 px-5" id="contact">
        <div class="row">
            <div class="col-md-3">
                <h5 class="text-white ms-lg-5">
                    <img src="{{ asset('assets/logo.png') }}" alt="" style="width: 200px;">
                </h5>
            </div>
            <div class="col-md-3">
                <h5 class="text-white">Connect With Us</h5>
                <span class="text-white h6 mt-3">Facebook</span> <br>
                <span class="text-white h6 mt-3">Instagram</span> <br>
                <span class="text-white h6 mt-3">Youtube</span> <br>
                <span class="text-white h6 mt-3">LinkedIn</span>
            </div>
            <div class="col-md-3">
                <h5 class="text-white">Our Location</h5>
                <span class="text-white h6 mt-3">Kone Ta La Paung</span> <br>
                <span class="text-white h6 mt-3">Mingalardon</span> <br>
                <span class="text-white h6 mt-3">Yangon</span>
            </div>
            <div class="col-md-3">
              <i class="fa-brands fa-facebook"></i>
                <h5 class="text-white">CONTACT</h5>
                <span class="text-white h6 mt-3"><i class="fa-solid fa-phone me-3"></i> 0999808089</span> <br>
                <span class="text-white h6 mt-3"><i class="fa-regular fa-envelope me-3"></i>lovevalue@gmail.com</span>
    
        </div>

</div>

<!-- contact section end  -->

    <div id="welcome-screen" class="welcome-screen-state-outro">
        <style> #welcome-screen { position: fixed; overflow: hidden; left: 0; top: 0; width: 100%; height: 100%; z-index: 99999; background: #fff; } #welcome-screen-background { position: absolute; left: 0; top: 0; width: 100%; height: 100%; background: #4eb7f5; } #welcome-screen-foreground { position: absolute; left: 0; top: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; } #welcome-screen-logo { position: relative; overflow: hidden; width: 120px; height: 120px; flex: 0 0 auto; display: flex; align-items: center; justify-content: center; } #welcome-screen-logo-image { max-width: 400px; max-height: 100%; } #welcome-screen-logo-cover { position: absolute; left: 0; top: 0; width: 100%; height: 100%; background: #4eb7f5; opacity: 0; } #welcome-screen.welcome-screen-state-bg-intro > #welcome-screen-foreground { display: none; } #welcome-screen.welcome-screen-state-outro { background: none; } .welcome-screen-state-logo-intro #welcome-screen-logo { animation: welcome-screen-logo-intro-logo 900ms both cubic-bezier(0.165, 0.84, 0.44, 1); } @keyframes welcome-screen-logo-intro-logo { 0% { opacity: 0; transform: scale(0.5) rotate(-180deg); } 100% { opacity: 1; transform: scale(1) rotate(0); } } .welcome-screen-state-outro #welcome-screen-logo { animation: welcome-screen-outro-logo 300ms 0ms both ease; } @keyframes welcome-screen-outro-logo { 0% { opacity: 1 } 100% { opacity: 0 } } .welcome-screen-state-bg-intro #welcome-screen-background { animation: welcome-screen-bg-intro-background 900ms both cubic-bezier(0.645, 0.045, 0.355, 1); } @keyframes welcome-screen-bg-intro-background { 0% { transform: scaleX(0); } 100% { transform: scaleX(1); } } .welcome-screen-state-outro #welcome-screen-background { animation: welcome-screen-outro-background 900ms reverse both cubic-bezier(0.645, 0.045, 0.355, 1); } @keyframes welcome-screen-outro-background { 0% { transform: scaleX(0); } 100% { transform: scaleX(1); } } .welcome-screen-state-loop #welcome-screen-logo-cover { animation: welcome-screen-loop-logo-cover 2200ms infinite ease-in-out; opacity: 0.85; } @keyframes welcome-screen-loop-logo-cover { 0% { transform: translateX(-120px) } 50% { transform: translateX( 120px) } 100% { transform: translateX( 120px) } } </style>
        <div id="welcome-screen-background"></div>
        <div id="welcome-screen-foreground">
            <div id="welcome-screen-logo">
                <img id="welcome-screen-logo-image" src="{{ asset('assets/logo.png') }}" alt="">
                <div id="welcome-screen-logo-cover"></div>
            </div>
        </div>
        <script>(function create_js_createController() {
    let closeRequested = false;
    window.requestCloseWelcomeScreen = () => {
    closeRequested = true;
    };
    const phaseStatic = 'static';
    const phaseBackgroundIntro = 'bg-intro';
    const phaseLogoIntro = 'logo-intro';
    const phaseLoop = 'loop';
    const phaseOutro = 'outro';
    const rootNode = document.getElementById('welcome-screen');
    const backgroundNode = document.getElementById('welcome-screen-background');
    const logoNode = document.getElementById('welcome-screen-logo');
    rootNode.addEventListener('touchstart', (event) => event.preventDefault());
    function sleep(ms) {
    return new Promise((done) => setTimeout(done, ms));
    }
    function onAnimationEnd(node) {
    return new Promise((done) => node.addEventListener('animationend', done, { once: true }));
    }
    function onAnimationIteration(node, breakCondition) {
    return new Promise((done) => {
        const listener = () => {
            if (breakCondition()) {
                node.removeEventListener('animationiteration', listener);
                done();
            }
        };
        node.addEventListener('animationiteration', listener);
    });
    }
    function setPhase(stateName) {
    rootNode.className = `welcome-screen-state-${stateName}`;
    }
    function playStatic() {
    setPhase(phaseStatic);
    }
    function playBackgroundIntro() {
    setPhase(phaseBackgroundIntro);
    return onAnimationEnd(backgroundNode);
    }
    function playLogoIntro() {
    setPhase(phaseLogoIntro);
    return onAnimationEnd(logoNode);
    }
    function playIntro() {
    return playBackgroundIntro().then(playLogoIntro);
    }
    function playOutro() {
    setPhase(phaseOutro);
    return onAnimationEnd(backgroundNode);
    }
    function playLoopUntilCloseRequested() {
    setPhase(phaseLoop);
    return onAnimationIteration(logoNode, () => closeRequested);
    }
    function playIntroAndOutro() {
    return playIntro()
        .then(() => sleep(500))
        .then(() => playOutro())
        .then(() => sleep(1000))
        .then(() => playStatic());
    }
    function play() {
    return playIntro()
        .then(() => sleep(500))
        .then(() => (closeRequested ? null : playLoopUntilCloseRequested()))
        .then(() => playOutro())
        .then(() => rootNode.remove());
    }
    return {
    play,
    playStatic,
    playLogoIntro,
    playIntro,
    playIntroAndOutro,
    };
    })().play();</script>
    </div>

<!-- contact section end  -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $('#owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    autoplay :true,
    nav: false,
    responsive : {
        0 : {
            items : 1
        },
        600 : {
            items : 2
        },
        1000 : {
            items : 5
        }

    }
})

</script>
<script>
    if (window.requestCloseWelcomeScreen) {
        window.requestCloseWelcomeScreen()
    }
</script>
</body>
</html>