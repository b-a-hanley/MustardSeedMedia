<?php
require_once 'src/Views/Shared/CustomHeader.php';
?>

<section class="bg-section-background flex justify-center items-center mx-4 my-6 rounded-xl sm:py-12 min-h-screen">
  <div class="text-center px-4 py-6 w-full">
    <h3 class="text-base font-semibold leading-7 text-primary">
      Christian Union Scavenger Hunt:
    </h3>
    <p class="mt-2 text-3xl sm:text-5xl font-bold tracking-tight text-colour">
      _ _ _ _ _ / tower
    </p>

    <div class="mt-6 bg-div-background p-4 sm:p-6 rounded-xl w-full max-w-3xl mx-auto">
      <p class="text-2xl sm:text-3xl font-bold text-colour mb-4">Rosme Doce</p>

      <!-- Responsive YouTube Embed -->
      <div class="relative w-full overflow-hidden rounded-xl" style="padding-bottom: 56.25%;">
        <iframe 
          class="absolute top-0 left-0 w-full h-full"
          src="https://www.youtube.com/embed/kH2MT4FrRc8?si=ZLeEU6C_YcSuLWr5"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen>
        </iframe>
      </div>
  </div>
</section>

<?php
require_once 'src/views/Shared/Footer.php';
?>
