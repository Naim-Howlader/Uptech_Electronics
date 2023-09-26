<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <div class="">
        <div class=" p-6  md:mx-auto">
          <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
              <path fill="currentColor"
                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
              </path>
          </svg>
          <div class="text-center">
              <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Your order placed successfully !</h3>
              <p class="text-gray-600 my-2">Thank you for make order form Uptech Electronics.</p>
              <p> Have a great day.</p>
              <div class="py-10 text-center">
                  <a href="{{route('index')}}" class="px-12 text-white font-semibold py-3">
                    <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium  focus:outline-none  rounded-full border border-gray-200 bg-blue-500 text-white focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 hover:bg-white hover:text-blue-500 duration-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">BACK TO WEBSITE</button>
                 </a>
              </div>
          </div>
      </div>
    </div>
</body>
</html>
