<?php
require_once 'src/Views/Shared/Header.php';
?>

<section class="bg-section-background justify-center mx-6 my-6 rounded-xl sm:py-16">
  <div class="text-center px-6 py-6">
    <h3 class="text-base font-semibold leading-7 text-primary">Saint Peter's Net:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-colour sm:text-5xl">Enterprise</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="/assets/Fishing-net.jpg" 
        alt="Chatting">
    </div>

    <div class="text-center md:text-left md:order-1">
      <p class="mt-2 py-6 text-2xl font-bold tracking-tight text-colour sm:text-3xl">We are sorry!</p>
        <p class="mt-6 text-xl leading-8 text-colour">
            Currently we are still new to the scene and don't believe we can fairly offer this package, just yet :(
        </p>
        <br>
        <p class="mt-6 text-xl leading-8 text-colour">
            We would recommend you purchase the premium package and we will update you when we are ready.
        </p>
    </div>
  </div>
  
</section>

<?
require_once 'src/Views/Shared/Footer.php';
?>
