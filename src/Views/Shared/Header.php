<!DOCTYPE html>
<html lang="en">
<head>
  <title>St Peter's Net</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="/assets/css/Colours.css">
</head>
<body class="text-colour">
<nav class="nav">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
    <!-- Logo -->
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse group">
      <div class="relative w-12 h-12">
        <img src="/assets/Logo.png" alt="Logo" class="absolute inset-0 w-full h-full transition-opacity duration-300 group-hover:opacity-0">
        <img src="/assets/Logo-alt.png" alt="Logo Alt" class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 group-hover:opacity-100">
      </div>
      <span class="self-center text-2xl font-semibold">Saint Peter's Net</span>        
    </a>

    <!-- Mobile hamburger button -->
    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm rounded-lg md:hidden bg-action group" aria-controls="mobile-menu" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6 stroke-white group-hover:stroke-black hover:stroke-black transition-colors duration-200" fill="none" viewBox="0 0 20 20" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h14M3 10h14M3 15h14" />
      </svg>
    </button>

    <!-- Desktop & mobile menu -->
    <div class="hidden w-full md:flex md:w-auto" id="mobile-menu">
      <ul class="font-medium flex flex-col md:flex-row md:space-x-8 mt-4 md:mt-0">
        <li><a href="our-story" class="block px-4 py-2 border-0 hover:text-primary">Our Story</a></li>
        <li><a href="ben-hanley" class="block px-4 py-2 border-0 hover:text-primary">Our Team</a></li>
        <li><a href="pricing" class="block px-4 py-2 border-0 hover:text-primary">Pricing</a></li>
        <li><a href="contact-us" class="block px-4 py-2 border-0 bg-action rounded-lg text-white">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<script>
  // Flowbite mobile menu toggle
  const toggleButton = document.querySelector('[data-collapse-toggle]');
  const menu = document.getElementById('mobile-menu');

  toggleButton.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
