<?php
require_once 'src/Views/Shared/Header.php';
?>

<div class="bg-section-background mx-4 my-6 rounded-xl sm:py-16">

  <!-- Title -->
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-primary">Saint Peter's Net:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-colour sm:text-5xl">Church Website Updates and Maintance</p>
  </div> 

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="/assets/Fishing-net.jpg" 
        alt="Chatting">
    </div>

    <div class="mx-auto max-w-2xl text-center md:text-left md:order-1">
      <div class="py-6">
        <p class="mt-2 text-lg font-bold tracking-tight text-colour sm:text-2xl">Fixing bugs, creating updates and making adjustments</p>
        <p class="mt-6 py-2 text-lg leading-8 text-colour">
          If your church website does what it says on the tin, if you like familiarity, let us support you in that. Rather than rebuilding the world we can make fixes, updates and tweaks, we charge a flat rate of £25 pounds per hour on non-stpetersnet websites. In some occasions it may be more advisable to switch to our hosting, as you may end up saving more. We might even be able to recreate your previous appearance!
        </p>
      </div>
    </div>
  </div>

  <!-- Languages Section -->
  <div class="px-4 sm:px-6 lg:px-12 mt-8">
    <p class="text-2xl sm:text-3xl underline py-4 font-bold text-colour text-center">Programming language experience</p>
    <div class="flex flex-col gap-4 w-full">
      <?php
      $languages = [
        "Wix" => 80,
        "PHP" => 60,
        "Flutter (Dart)" => 55,
        "C#" => 45,
        "JavaScript/HTML/CSS" => 45,
        "WordPress" => 30,
        "Python" => 30,
        "Delphi" => 30,
        "Java" => 25,
        "SQL & NoSQL Databases" => 50
      ];
      foreach ($languages as $lang => $percent) {
        echo '<div>
                  <span class="block text-sm font-medium mb-1">' . $lang . '</span>
                  <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
                    <div class="h-4 bg-primary rounded-lg w-0 animate-fill" style="--target-width: ' . $percent . '%;"></div>
                  </div>
                </div>';
      }
      ?>
    </div>
  </div>
  <p class="mt-6 py-2 px-12 text-lg leading-8 text-colour">
     Don't see the programming language you use, no worries! Being affective in so many languages gives the great opportunity to learn new languages quickly. 
  </p>

  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeIn {
      animation: fadeIn 1s ease forwards;
    }

    @keyframes fill {
      from {
        width: 0;
      }

      to {
        width: var(--target-width);
      }
    }

    .animate-fill {
      animation: fill 1.5s ease forwards;
    }
  </style>

</div>
<?php
require_once 'src/Views/Shared/Footer.php';
?>