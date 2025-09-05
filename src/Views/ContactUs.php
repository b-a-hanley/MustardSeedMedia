<?php
require_once 'src/Views/Shared/Header.php';
?>

<div class="bg-section-background justify-center mx-6 my-6 rounded-xl sm:py-16">
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-primary">Saint Peter's Net:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-colour sm:text-5xl">Contact us</p>
  </div> 

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="/assets/Fishing-net.jpg" 
        alt="Chatting">
    </div>

    <div class="text-center md:text-left md:order-1">
      <p class="mt-2 py-6 text-2xl font-bold tracking-tight text-colour sm:text-3xl">Email</p>
      <div class="flex w-full gap-1">
      <a href="mailto:benhanley321@gmail.com" 
        class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action rounded-lg">
        Contact us
      </a>
    </div>

      <div class="py-6">
        <p class="mt-2 py-6 text-2xl font-bold tracking-tight text-colour sm:text-3xl">Address</p>
        <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-xl">Fareham</p>
        <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-xl">Hampshire</p>
        <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-xl">England</p>  
      </div>
    </div>
  </div>

  <div class="mx-6 my-12 px-6">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40303.639587267244!2d-1.2362482267514863!3d50.85010139763092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4874425648aac7c9%3A0xf7ae008bffaf7876!2sFareham!5e0!3m2!1sen!2suk!4v1756918070037!5m2!1sen!2suk"
      class="w-full h-[450px] rounded-xl shadow-lg border-0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>


  <div class="mx-auto max-w-4xl px-2 py-12 text-center">
    <p class="mt-2 text-2xl font-bold tracking-tight text-colour sm:text-2xl">Read more</p>
  </div>

  <div class="mt-6 grid md:grid-cols-2 gap-4">
    <a href="/pricing">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-button transition">
        <h3 class="text-lg font-semibold leading-8">Pricing</h3>
      </div>
    </a>
    <a href="/our-story">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-button transition">
        <h3 class="text-lg font-semibold leading-8">Our Story</h3>
      </div>
    </a>
  </div>
</div>

<?php
require_once 'src/Views/Shared/Footer.php';
?>
