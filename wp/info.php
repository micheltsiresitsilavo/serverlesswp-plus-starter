<?php 

$server = $_SERVER['SERVER_NAME'];

include 'head.php';
?>



<body>
    <div  class="bg-white dark:bg-gray-900 dark:text-gray-100">

        <div
        class="container relative mx-auto flex flex-col space-y-16 px-4 py-16 text-center lg:flex-row lg:space-y-0 lg:px-8 lg:py-32 lg:text-left xl:max-w-7xl"
      >
        <div class="lg:flex lg:w-1/2 lg:items-center">
          <div>
            <div
              class="mb-2 inline-flex rounded border border-gray-200 bg-gray-100 px-2 py-1 text-sm font-medium leading-4 text-gray-800 dark:border-gray-600/50 dark:bg-gray-700/50 dark:text-gray-200"
            >
             PHP version <?= phpversion(); ?>
            </div>
            <h1 class="mb-4 text-4xl font-black text-black dark:text-white">
              My server on
              <span class="text-blue-600 dark:text-blue-500"><?= $server ?></span>
            </h1>
            <h2
              class="text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300"
            >
           Ireo misy information avy any amin'ny php, ahitantsika verion sy ilay serveur misy azy.
            </h2>
            <div
              class="flex flex-col justify-center space-y-2 pb-16 pt-10 sm:flex-row sm:items-center sm:space-x-2 sm:space-y-0 lg:justify-start"
            >
              <a
                href="./index.php"
                class="inline-flex items-center justify-center space-x-2 rounded-lg border border-blue-700 bg-blue-700 px-7 py-3.5 font-semibold leading-6 text-white hover:border-blue-600 hover:bg-blue-600 hover:text-white focus:ring focus:ring-blue-400 focus:ring-opacity-50 active:border-blue-700 active:bg-blue-700 dark:focus:ring-blue-400 dark:focus:ring-opacity-90"
              >
              
               <svg xmlns="http://www.w3.org/2000/svg" class="hi-mini hi-arrow-down-tray inline-block size-5 opacity-75" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-left"><path d="M6 8L2 12L6 16"/><path d="M2 12H22"/></svg>
                <span>Go Home</span>
              </a>
              <a
                href="javascript:void(0)"
                class="inline-flex items-center justify-center space-x-2 rounded-lg border border-gray-200 bg-white px-7 py-3.5 font-semibold leading-6 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-transparent dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 dark:active:border-gray-700"
              >
                <span>Learn more</span>
              </a>
            </div>
          </div>
        </div>
        <div class="lg:ml-16 lg:flex lg:w-1/2 lg:items-center lg:justify-center">
          <div class="relative mx-5 lg:w-96">
            <div
              class="bg-tranparent absolute left-0 top-0 -ml-20 -mt-16 size-40 rounded-full border border-blue-200 dark:border-blue-900 lg:size-72"
            ></div>
            <div
              class="bg-tranparent absolute left-0 top-0 -ml-14 -mt-20 size-40 rounded-full border border-blue-100 dark:border-blue-950 lg:size-72"
            ></div>
            <div
              class="bg-tranparent absolute bottom-0 right-0 -mb-16 -mr-20 size-40 rounded-full border border-blue-200 dark:border-blue-900 lg:size-72"
            ></div>
            <div
              class="bg-tranparent absolute bottom-0 right-0 -mb-20 -mr-14 size-40 rounded-full border border-blue-100 dark:border-blue-950 lg:size-72"
            ></div>
            <div
              class="absolute inset-0 -m-6 -rotate-2 rounded-xl bg-gray-200 dark:bg-gray-800"
            ></div>
            <div
              class="absolute inset-0 -m-6 rotate-1 rounded-xl bg-blue-800 bg-opacity-75 shadow-inner dark:bg-blue-900 dark:bg-opacity-75"
            ></div>
            <img
              src="https://cdn.tailkit.com/media/placeholders/photo-RSCirJ70NDM-800x1000.jpg"
              class="relative mx-auto rounded-lg shadow-lg"
              alt="Hero Image"
            />
          </div>
        </div>
      </div>
    </div>
</body>
</html>



