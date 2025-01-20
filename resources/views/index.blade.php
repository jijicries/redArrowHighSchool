<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- @vite('resources/css/app.css') -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-white">
<header class="relative z-50">
    <!-- First navbar (RAHS logo) -->
    <nav>
    <div class="flex items-center justify-center mx-auto max-w-screen-xl p-4">
          <a href="" class="flex items-center space-x-4 rtl:space-x-reverse">
              <img src="img/rahs_logo-removebg.png" class="h-24" alt="RAHS Logo" />
              <div class="flex flex-col">
                <span class="text-6xl font-bold text-maroon">RAHS</span>
                <span class="text-lg font-semibold text-maroon">
                    Red Arrow High School
                </span>
                <span class="text-sm text-gray-500 dark:text-white hover:underline">
                    Magsaysay St. San Nicolas, Pangasinan
                </span>
            </div>
          </a>
      </div>
    </nav>
    
    <div id="marketing-banner" tabindex="-1" class="fixed z-50 flex flex-col md:flex-row justify-between w-[calc(100%-2rem)] p-4 -translate-x-1/2 bg-white border border-gray-100 rounded-lg shadow-sm lg:max-w-7xl left-1/2 top-6 dark:bg-gray-700 dark:border-gray-600">
    <div class="flex flex-col items-start mb-3 me-4 md:items-center md:flex-row md:mb-0">
        <a href="#" class="flex items-center mb-2 border-gray-200 md:pe-4 md:me-4 md:border-e md:mb-0 dark:border-gray-600">
            <img src="img/rahs_logo-removebg.png" class="h-6 me-2" alt="RAHS Logo"> <!-- RAHS Logo -->
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">Red Arrow High School</span>
        </a>
        <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
            Join RAHS today and start your journey towards excellence. Enroll now and unlock endless opportunities!
        </p>
    </div>
    <div class="flex items-center flex-shrink-0">
        <a href="#" class="px-5 py-2 me-2 text-xs font-medium text-white bg-maroon rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-maroon-300 dark:bg-maroon dark:hover:bg-red-700 focus:outline-none dark:focus:ring-maroon-800">
            Start your Journey with Us!
        </a>
        <button data-dismiss-target="#marketing-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close banner</span>
        </button>
    </div>
</div>



    <nav class="bg-white border-gray-200 dark:bg-gray-900 inset-x-0 top-0 z-40">

      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <!-- Enroll Now Button -->
            <button type="button" class="text-white bg-maroon hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-maroon-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-maroon dark:hover:bg-red-700 dark:focus:ring-maroon-800">
                ENROLL NOW!
            </button>

            <!-- Hamburger Menu Button (unchanged, but you can also adjust it) -->
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>

</header>


<div class="bg-white relative">
    <!-- Background Image with Low Opacity -->
    <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('img/dlc.jpg');"></div>

    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div>
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Empowering Minds, Shaping Futures – Discover Excellence at <span class="text-maroon">Red Arrow High School</span>
            </h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            At Red Arrow High School, we cultivate future leaders through academic excellence, character development, and passion for success.
            </p>
        </div>
    </div>


    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>


<div>
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <!-- <a href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span class="text-sm font-medium">Explore the strands offered at our school!</span> 
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
            </a> -->
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Choose Your Path: Explore Our Educational Strands</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">At <span class="text-lg font-bold text-maroon">Red Arrow High School</span>, we offer various academic strands designed to meet your interests and career aspirations. Whether you are inclined towards Science, Business, Humanities, or Technical Vocational Education, we have a path for you!</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- STEM -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md dark:bg-gray-800">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">STEM</h2>
                    <p class="text-gray-600 dark:text-gray-400">The Science, Technology, Engineering, and Mathematics (STEM) strand prepares students for careers in engineering, technology, research, and more.</p>
                </div>
                
                <!-- ABM -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md dark:bg-gray-800">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">ABM</h2>
                    <p class="text-gray-600 dark:text-gray-400">The Accountancy, Business, and Management (ABM) strand is perfect for students interested in business, finance, and management careers.</p>
                </div>

                <!-- HUMMS -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md dark:bg-gray-800">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">HUMMS</h2>
                    <p class="text-gray-600 dark:text-gray-400">The Humanities and Social Sciences (HUMMS) strand is ideal for those interested in arts, communication, psychology, and other human-centered fields.</p>
                </div>

                <!-- TVL -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md dark:bg-gray-800">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">TVL</h2>
                    <p class="text-gray-600 dark:text-gray-400">The Technical-Vocational-Livelihood (TVL) strand equips students with practical skills in fields such as hospitality, electronics, and more.</p>
                </div>
            </div>
        </div>
    </section>
</div>


  <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="img/faculty.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="img/dlc.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="img/a3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="img/a2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="img/a1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
  </div>

  <footer class="bg-white ">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="" class="hover:underline">Red Arrow High School™</a>. All Rights Reserved.</span>
      </div>
  </footer>


</div>


</body>
</html>