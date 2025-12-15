<head>
  <title>Happy Birthday Abbie</title>
  <meta name="description" content="Tis Abbie day"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/assets/Logo-brown-flav.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="/assets/css/Colours.css">
</head>
<body class="bg-[#6b705c]">
<div class="justify-center bg-section-background mx-6 my-6 rounded-xl sm:py-16">
  
  <div class="text-center px-8 py-4">
    <span class="mt-2 text-2xl font-bold tracking-tight text-primary">Dear</span>
    <span class="mt-2 text-2xl font-bold tracking-tight text-colour">Abbie</span>
    <br>
  </div>
<div class="box">
  <img src="/assets/image.png" alt="">
</div>
  <div class="relative w-full max-w-4xl mx-auto mt-10"> 
    <div class="overflow-hidden">
      <div id="carousel" class="flex transition-transform duration-500 space-x-6">       
        <div class="flex-none w-full rounded-2xl">
          <div class="bg-div-background p-4 py-4 rounded-xl">
            <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-2xl">Angry Abbie</p>
            <div className="flex justify-center md:justify-end md:order-2">
            <img className="h-auto max-w-full rounded-lg shadow-lg" 
                    src="/assets/AngryAbbie.JPG"
                    alt="wait for image to load"/>
            </div>
          </div>
        </div>

        <div class="flex-none w-full rounded-2xl">
          <div class="bg-div-background p-4 py-4 rounded-xl">
            <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-2xl">Swollen Abbie</p>
            <div className="flex justify-center md:justify-end md:order-2">
            <img className="h-auto max-w-full rounded-lg shadow-lg" 
                    src="/assets/SwollenAbbie.JPG"
                    alt="wait for image to load"/>
            </div>
          </div>
        </div>
        
        <div class="flex-none w-full rounded-2xl">
          <div class="bg-div-background p-4 py-4 rounded-xl">
            <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-2xl">Abbie striking a pose</p>
            <div className="flex justify-center md:justify-end md:order-2">
            <img className="h-auto max-w-full rounded-lg shadow-lg" 
                    src="/assets/StrikingAPoseAbbie.JPG"
                    alt="wait for image to load"/>
            </div>
          </div>
        </div>
        
        <div class="flex-none w-full rounded-2xl">
          <div class="bg-div-background p-4 py-4 rounded-xl">
            <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-2xl">Ecstatic Abbie</p>
            <div className="flex justify-center md:justify-end md:order-2">
            <img className="h-auto max-w-full rounded-lg shadow-lg" 
                    src="/assets/EcstaticAbbie.jpg"
                    alt="wait for image to load"/>
            </div>
          </div>
        </div>

        <div class="flex-none w-full rounded-2xl">
          <div class="bg-div-background p-4 py-4 rounded-xl">
            <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-2xl">Leader Abbie</p>
            <div className="flex justify-center md:justify-end md:order-2">
            <img className="h-auto max-w-full rounded-lg shadow-lg" 
                    src="/assets/BossyAbbie.JPG"
                    alt="wait for image to load"/>
            </div>
          </div>
        </div>

        <div class="flex-none w-full rounded-2xl">
          <div class="bg-div-background p-4 py-4 rounded-xl">
            <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-2xl">Abbie in a debate</p>
            <div className="flex justify-center md:justify-end md:order-2">
            <img className="h-auto max-w-full rounded-lg shadow-lg" 
                    src="/assets/AbbieInDebates.JPG"
                    alt="wait for image to load"/>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <button onclick="prevSlide()" 
      class="absolute top-1/2 -left-6 transform -translate-y-1/2 bg-primary bg-action p-3 rounded-full shadow z-10">
      ‹
    </button>
    <button onclick="nextSlide()" 
      class="absolute top-1/2 -right-6 transform -translate-y-1/2 bg-primary bg-action p-3 rounded-full shadow z-10">
      ›
    </button>
  </div>

  <div class="text-center px-6 py-15">
    <p class="mt-10 text-2xl font-bold tracking-tight text-colour">Hope you have a wonderful birthday Abbie, you truly deserve it. You are such a good and patient friend. I appreciate your heart and how you yearn for others, you have inspired me to be a better person and christian. Thank you for being in my life :)</p>
  </div>
  <div class="box">
    <img src="/assets/image.png" alt="">
  </div>
    <div class="box2">
    <img src="/assets/image.png" alt="">
  </div>
  <div class="mx-auto max-w-4xl px-2 py-10 text-center">
    <span class="mt-2 text-2xl font-bold tracking-tight text-primary">From</span>
    <span class="mt-2 text-2xl font-bold tracking-tight text-colour">Ben</span>
  </div>

  
</div>


<script>
  let currentIndex = 0;
  const carousel = document.getElementById("carousel");
  const slides = carousel.children;
  const totalSlides = slides.length;

  function updateCarousel() {
    const slideWidth = slides[0].offsetWidth + 24; // include space-x-6 (24px)
    carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
    loadVideo(currentIndex, true);
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
    loadVideo(currentIndex, true);
  }

  


  window.addEventListener("load", () => {
    updateCarousel();
  });
  window.addEventListener("resize", updateCarousel);

</script>

<style>
  .box img {
    position: absolute;
    top:50px;
    right: 0;
    width: 30vw; 
  }
  .box2 img {
    position: absolute;
    top:60vh;
    left: 0;
    width: 30vw; 
  }
</style>
