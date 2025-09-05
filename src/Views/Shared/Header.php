<!DOCTYPE html>
<html lang="en">
<head>
  <title>St Peter's Net</title>
  <meta charset="utf-8">
</head>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<link rel="stylesheet" href="public_html/src/views/Colours.css">
<body class="text-colour">
<nav class="nav">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse group">
      <div class="relative w-20 h-20">
        <img src="/assets/Logo.png" alt="Logo" class="absolute inset-0 w-full h-full transition-opacity duration-300 group-hover:opacity-0">
        <img src="/assets/Logo-alt.png" alt="Logo Alt" class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 group-hover:opacity-100">
      </div>
      <span class="self-center text-2xl font-semibold">
        Saint Peter's Net
      </span>        
    </a>
    <div class="hidden w-full md:block md:w-auto nav" id="navbar-default">
      <ul class="font-medium flex flex-col p-0 mt-4 border border-white rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
  <li>
    <a href="our-story" class="block px-4 py-2 border-0 hover:text-primary">Our Story</a>
  </li>
  <li>
    <a href="ben-hanley" class="block px-4 py-2 border-0 hover:text-primary">Our Team</a>
  </li>
  <li>
    <a href="pricing" class="block px-4 py-2 border-0 hover:text-primary">Pricing</a>
  </li>
  <li>
    <a href="contact-us" 
       class="block px-4 py-2 border-0 bg-action rounded-lg text-white">
       Contact Us
    </a>
  </li>
</ul>

        <!-- <li>
          <a id="dropdownAboutUsLink" 
            data-dropdown-toggle="dropdownAboutUs" 
            class="flex items-center justify-between w-full py-2 px-3 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto select-none cursor-pointer">
            About us 
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </a>
          <div id="dropdownAboutUs" class="z-10 border border-background hidden font-normal nav divide-y divide-white rounded-lg shadow-sm w-44">
              <ul class="py-2 text-sm" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="our-story" class="block px-4 py-2 md:border-0 hover:text-primary">Our Story</a>
                </li>
                <li>
                  <a href="ben-hanley" class="block px-4 py-2 md:border-0 hover:text-primary">Our Team</a>
                </li>
              </ul>
          </div> -->
        <!-- </li>
        <li>
          <a id="dropdownWhatsOnLink" data-dropdown-toggle="dropdownWhatsOn" class="flex select-none cursor-pointer items-center justify-between w-full py-2 px-3 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto">What's on<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg></a>
          <div id="dropdownWhatsOn" class="z-10 border border-background hidden font-normal nav divide-y divide-white rounded-lg shadow-sm w-44">
              <ul class="py-2 text-sm " aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="sundays" class="block px-4 py-2 hover:bg-transparent border-0 hover:text-primary">Sundays</a>
                </li>
                <li>
                  <a href="midweek" class="block px-4 py-2 hover:bg-transparent border-0 hover:text-primary">Midweek</a>
                </li>
                <li>
                  <a href="students" class="block px-4 py-2 hover:bg-transparent border-0 hover:text-primary">Students</a>
                </li>
                <li>
                  <a href="children" class="block px-4 py-2 hover:bg-transparent border-0 hover:text-primary">Children</a>
                </li>
                <li>
                  <a href="events/manual" class="block px-4 py-2 border-0 hover:text-primary">Events</a>
                </li> -->
                <!-- <li aria-labelledby="dropdownNavbarLink">
                    <a id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 md:hover:bg-transparent md:border-0 hover-text-primary">Events<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg>
                    </a>
                    <div id="doubleDropdown" class="z-10 border border-background hidden font-normal bg-background divide-y divide-white rounded-lg shadow-sm w-44">
                      <ul class="py-2 text-sm" aria-labelledby="doubleDropdownButton">
                        <li>
                          <a href="events/manual" class="block px-4 py-2 border-0 hover:text-primary">Manual</a>
                        </li>
                        <li>
                          <a href="events/instagram" class="block px-4 py-2 border-0 hover:text-primary">Instagram</a>
                        </li>
                        <li>
                          <a href="events/churchsuite" class="block px-4 py-2 border-0 hover:text-primary">ChurchSuite</a>
                        </li> 
                      </ul>
                    </div>
                  </li> -->
              <!-- </ul>
          </div>
        </li> -->
        <!-- <li>
          <a id="dropdownLifeEventsLink" data-dropdown-toggle="dropdownLifeEvents" class="flex select-none cursor-pointer items-center justify-between w-full py-2 px-3  md:hover:bg-transparent md:border-0 hover-text-primary md:p-0 md:w-auto dark: md:dark:hover:text-primary dark:focus: dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Life Events<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg></a>
          <div id="dropdownLifeEvents" class="z-10 border border-background hidden font-normal nav divide-y divide-white rounded-lg shadow-sm w-44">
              <ul class="py-2 text-sm hover:text-primary" aria-labelledby="dropdownLargeButton">
                <li>
                    <a href="christenings" class="block px-4 py-2 border-0 hover:text-primary">Christenings</a>
                </li>
                <li>
                    <a href="baptisms" class="block px-4 py-2 border-0 hover:text-primary">Baptisms</a>
                </li>
                <li>
                    <a href="weddings" class="block px-4 py-2 border-0 hover:text-primary">Weddings</a>
                </li>
                <li>
                    <a href="funerals" class="block px-4 py-2 border-0 hover:text-primary">Funerals</a>
                </li>
              </ul>
          </div>
        </li> -->
    </div>
  </div>
</nav>