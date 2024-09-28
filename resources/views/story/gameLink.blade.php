<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#FFFFFF]">

    <header class="relative h-64 bg-[#ECEEF5] min-h-64 grid grid-rows-5">
        <div class="col-start-2 col-end-4 absolute flex  left-1/2 transform -translate-x-1/2 items-end w-2/3 mx-8">
            <a href="#" class="relative">
              <img src="images/img1.png" alt="" class="w-40 h-32"/>
            </a>
            <div class="font-custom flex flex-col justify-start items-center ml-8">
              <div class="text-center">
                <h1 class="font-extrabold text-3xl">Truyện chữ Audio</h1>
              </div>
              <nav class="font-bold text-xl text-black leading-5">
                <a class="navLinks py-4 px-1 inline-flex items-center gap-2 border-b-4   whitespace-nowrap hover: focus:outline-none focus:text-red-600 dark:text-red-500 dark:hover:text-red-500 dark:focus:text-red-500" href="{{ route('story') }}">
                    Trang chủ
                  </a>
                  <a class="navLinks py-4 px-1 inline-flex items-center gap-2 border-b-4   whitespace-nowrap focus:outline-none focus:  dark:text-red-500" href="{{ route('liststory') }}" aria-current="page">
                    Truyện
                  </a>
                  <a class="navLinks py-4 px-1 inline-flex items-center gap-2 border-b-4 border-red-700  whitespace-nowrap hover:  focus:outline-none focus:text-blue-600 dark:text-red-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="{{ route('gamelink') }}">
                    Giải trí
                  </a>
              </nav>
            </div>
          </div>

    </header>
    <!-- Thẻ đè lên một phần ở cạnh dưới của thẻ nền -->
    <div class="relative font-custom">
        <section class="absolute top-full left-1/2 transform -translate-x-1/2 mt-[-2rem] bg-white p-4 shadow-lg rounded w-2/3 text-[#1f2937]">
            <article class="mx-5">
                <h1 class="font-extrabold text-3xl mb-8">Chơi và thư giãn</h1>
                <div class="justify-between">
                    <p class="mb-10 text-lg font-normal text-[#1f2937] leading-8">Tận hưởng những giây phút giải trí tuyệt vời và khám phá những trò chơi độc đáo và đầy màu sắc mà chúng tôi đã chuẩn bị cho bạn!</p>
                    <div class="flex items-center gap-x-2">

                        <svg height="30px" width="30px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#765b5b" stroke="#765b5b"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#12afa5;} </style> <g> <path class="st0" d="M509.143,400.165l-0.071-0.322l-0.079-0.338l-26.418-112.338l-0.102-0.416l-0.102-0.417 c-16.612-62.006-73.052-105.303-137.248-105.303H166.877c-64.196,0-120.628,43.297-137.24,105.303l-0.118,0.417l-0.094,0.416 L3.007,399.506l-0.079,0.33l-0.063,0.322c-9.719,46.273,16.863,92.184,61.825,106.803l1.578,0.51 c9.209,2.998,18.826,4.529,28.53,4.529c32.557,0,62.909-17.342,79.482-45.338l22.485-33.225l0.558-0.832l0.502-0.872 c0.793-1.382,2.269-2.245,3.854-2.245h108.648c1.578,0,3.054,0.863,3.847,2.245l0.51,0.872l0.557,0.832l22.477,33.225 C354.292,494.658,384.651,512,417.217,512c9.696,0,19.313-1.531,28.569-4.545l1.531-0.494 C492.263,492.35,518.838,446.43,509.143,400.165z M438.697,480.456l-1.539,0.502c-6.588,2.143-13.307,3.172-19.942,3.172 c-22.571,0-44.137-11.909-55.898-32.322l-22.988-33.986c-5.77-10.018-16.455-16.204-28.004-16.204H201.68 c-11.556,0-22.241,6.186-28.011,16.204l-22.979,33.986c-11.769,20.413-33.327,32.322-55.89,32.322 c-6.642,0-13.362-1.028-19.949-3.172l-1.539-0.502c-31.325-10.182-49.939-42.34-43.172-74.567l26.418-112.337 c13.377-49.932,58.63-84.656,110.32-84.656h178.246c51.69,0,96.942,34.724,110.32,84.656l26.418,112.337 C488.62,438.116,470.021,470.273,438.697,480.456z"></path> <polygon class="st0" points="157.786,262.862 124.357,262.862 124.357,301.244 85.967,301.244 85.967,334.658 124.357,334.658 124.357,373.064 157.786,373.064 157.786,334.658 196.177,334.658 196.177,301.244 157.786,301.244 "></polygon> <path class="st0" d="M365.346,296.935c11.627,0,21.04-9.421,21.04-21.032c0-11.627-9.413-21.04-21.04-21.04 c-11.611,0-21.024,9.413-21.024,21.04C344.322,287.514,353.735,296.935,365.346,296.935z"></path> <path class="st0" d="M323.281,296.935c-11.619,0-21.04,9.413-21.04,21.024c0,11.627,9.421,21.048,21.04,21.048 c11.619,0,21.032-9.421,21.032-21.048C344.314,306.348,334.901,296.935,323.281,296.935z"></path> <path class="st0" d="M365.346,338.999c-11.611,0-21.024,9.413-21.024,21.04c0,11.619,9.413,21.024,21.024,21.024 c11.627,0,21.04-9.405,21.04-21.024C386.386,348.412,376.973,338.999,365.346,338.999z"></path> <path class="st0" d="M407.419,296.935c-11.619,0-21.032,9.413-21.032,21.024c0,11.627,9.413,21.048,21.032,21.048 c11.62,0,21.04-9.421,21.04-21.048C428.459,306.348,419.039,296.935,407.419,296.935z"></path> <path class="st0" d="M177.193,49.869C199.647,34.402,226.74,25.358,256,25.351c29.26,0.007,56.346,9.051,78.806,24.518 c5.771,3.972,13.661,2.512,17.634-3.243c3.972-5.77,2.519-13.66-3.242-17.632C322.701,10.74,290.536-0.007,256,0 c-34.536-0.007-66.709,10.74-93.197,28.994c-5.763,3.972-7.215,11.87-3.242,17.632C163.533,52.389,171.423,53.841,177.193,49.869z"></path> <path class="st0" d="M317.378,94.486c3.408-4.947,2.159-11.714-2.779-15.113h-0.007C297.955,67.887,277.708,61.126,256,61.134 c-21.708-0.008-41.955,6.752-58.599,18.238c-4.946,3.399-6.194,10.166-2.787,15.105c3.4,4.946,10.168,6.186,15.105,2.787 c13.206-9.092,29.088-14.391,46.281-14.406c17.194,0.015,33.068,5.314,46.266,14.406C307.211,100.664,313.97,99.423,317.378,94.486 z"></path> <path class="st0" d="M231.984,129.72c-4.122,2.842-5.158,8.479-2.332,12.592c2.834,4.122,8.471,5.166,12.593,2.332 c3.934-2.7,8.62-4.27,13.755-4.27c5.127,0,9.822,1.578,13.739,4.262c4.122,2.842,9.758,1.798,12.593-2.316 c2.842-4.114,1.798-9.751-2.316-12.592c-6.807-4.695-15.129-7.459-24.016-7.459C247.105,122.261,238.791,125.04,231.984,129.72z"></path> </g> </g></svg>
                        <h1 class="text-[#6b7280] font-semibold">GIẢI TRÍ NGAY</h1>
                    </div>
                </div>
                <div class="leading-6">
                    <div>
                        <button>

                        </button>
                    </div>
                </div>


            </article>

            <hr class="mx-8 my-8 col-span-4 border-2"/>

            <footer class="col-span-4 space-y-8 mx-8">

                <div class="flex items-center space-x-5 ">

                    <a href="#" ><svg fill="#2a5fcb" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M169.5,357.6l-2.9,38.3h-39.3v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3 c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z"></path> </g></svg></a>
                    <a href="#"><svg fill="#f00f0f" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-271 311.2 256 179.8" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M-59.1,311.2h-167.8c0,0-44.1,0-44.1,44.1v91.5c0,0,0,44.1,44.1,44.1h167.8c0,0,44.1,0,44.1-44.1v-91.5 C-15,355.3-15,311.2-59.1,311.2z M-177.1,450.3v-98.5l83.8,49.3L-177.1,450.3z"></path> </g></svg></a>
                </div>
                <div class="space-y-5">
                    <p>Copyright Danda</p>
                    <p>© 2024 Danda</p>
                </div>
                <hr class="w-full"/>
                <div>

                </div>


            </footer>
        </section>
    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
  </body>

</html>

