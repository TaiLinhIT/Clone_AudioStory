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
                  <a class="navLinks py-4 px-1 inline-flex items-center gap-2 border-b-4 border-red-700  whitespace-nowrap focus:outline-none focus:  dark:text-red-500" href="{{ route('liststory') }}" aria-current="page">
                    Truyện
                  </a>
                  <a class="navLinks py-4 px-1 inline-flex items-center gap-2 border-b-4   whitespace-nowrap hover:  focus:outline-none focus:text-blue-600 dark:text-red-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="{{ route('gamelink') }}">
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
                <h1 class="font-extrabold text-3xl mb-3">Tất cả truyện</h1>
                <div class="flex justify-between">
                    <p class="mb-10 text-base text-[#6b7280] leading-6">Lắng nghe 1 bộ truyện chữ với đa dạng thể loại được chuyển sang âm thanh</p>
                    <div>
                        <label for="hs-trailing-button-add-on-with-icon-and-button" class="sr-only">Label</label>
                        <div class="relative flex rounded-lg shadow-sm">
                          <input type="text" id="hs-trailing-button-add-on-with-icon-and-button" name="hs-trailing-button-add-on-with-icon-and-button" class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                          <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="shrink-0 size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <circle cx="11" cy="11" r="8"></circle>
                              <path d="m21 21-4.3-4.3"></path>
                            </svg>
                          </div>
                          <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Search</button>
                        </div>
                      </div>
                </div>
                <div class="leading-6">
                    <hr class="my-3"/>
                    <div class="flex w-70">
                        <div class="text-justify">
                        <a href="#" class="text-lg font-bold text-[#4b5563]">Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</a>
                        <p>Lục Hàm Chi sống lại thành nam phụ ác độc, bóp chết con ruột của mình để vào Đông Cung làm Lương Thị trong cuốn tiểu thuyết cung đấu “Đoạt đích”. Cậu thành thật gói ghém tay nải, bế theo đứa con nguyê...</p>
                        <p class="text-[#6b7280] leading-5 text-sm">Apr 28,2024</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-28 h-24 ml-8"/>
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

