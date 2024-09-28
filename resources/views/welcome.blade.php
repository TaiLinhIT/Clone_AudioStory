<!DOCTYPE html>

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
    <body class="font-custom text-gray-900 antialiased">
        <header class="bg-[#ECEEF5] min-h-64 flex flex-col justify-between">
            <div class="font-custom flex flex-col items-center">
                <a href="#"><img src="images/img1.png" alt="" class="w-24 h-24 ml-8"/></a>
                <div class="text-center">
                    <h1 class="font-extrabold text-3xl">Truyện chữ Audio</h1>
                </div>
            </div>
            <nav class="mt-auto flex justify-center gap-x-6 font-bold text-xl text-black">
                <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent whitespace-nowrap hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="">
                  Trang chủ
                </a>
                <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-blue-500 font-medium whitespace-nowrap focus:outline-none focus:text-blue-800 dark:text-blue-500" href="#" aria-current="page">
                  Truyện
                </a>
                <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent whitespace-nowrap hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                  Giải trí
                </a>
            </nav>
        </header>



        <section class="grid grid-cols-3 border border-solid shadow-md  mx-352 rounded-md mt-8" >
            <article class="mx-5 col-span-2">
                <p class="mb-10 text-xl">Website nghe truyện Danda, được xây dựng bởi <a href="#" class="underline font-extrabold">Harry</a> bao gồm tất cả bộ truyện được dịch từ <a href="#" class="underline font-semibold">website đọc truyện chính thức</a> của chúng tôi và chuyển thành audio.</p>
                <h1 class="text-[#6b7280] font-semibold">MỚI NHẤT</h1>
                <div>
                    <hr class="my-3"/>
                    <div class="flex w-70">
                        <button class="mr-5">
                        <svg fill="#675cbc" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6.4 -6.4 76.80 76.80" enable-background="new 0 0 64 64" xml:space="preserve" stroke="#675cbc"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-6.4" y="-6.4" width="76.80" height="76.80" rx="38.4" fill="#7ed0ec" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Play"> <path d="M46.0136986,31.1054993L25.1973,20.6973c-0.3096008-0.1532993-0.6777992-0.1387005-0.9727001,0.0438995 C23.9297009,20.9237995,23.75,21.2451,23.75,21.5918007v20.8163986c0,0.3467026,0.1797009,0.6679993,0.4745998,0.8506012 C24.3848,43.3583984,24.5674,43.4081993,24.75,43.4081993c0.1532993,0,0.3057003-0.035099,0.4473-0.1054001l20.8163986-10.4081993 c0.3388023-0.1699982,0.5527-0.5157013,0.5527-0.8945999C46.5663986,31.6210995,46.3525009,31.2754002,46.0136986,31.1054993z M25.75,40.7901001v-17.580101L43.330101,32L25.75,40.7901001z"></path> <path d="M32,0C14.3268995,0,0,14.3268995,0,32s14.3268995,32,32,32s32-14.3269005,32-32S49.6730995,0,32,0z M32,62 C15.4579,62,2,48.542099,2,32C2,15.4580002,15.4579,2,32,2c16.5419998,0,30,13.4580002,30,30C62,48.542099,48.5419998,62,32,62z"></path> </g> </g></svg>
                        </button>
                        <div class="text-justify">
                        <h2 class="text-lg font-bold">[Chương 70] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</h2>
                        <p>Khi cảm giác mềm mại truyền tới, dường như Vũ Văn Mân đã bị thứ tình hương mê người kia xông lên đầu.</p>
                        <p>Hắn giật lùi về sau một bước, Lục Hàm Chi mất thăng bằng, suýt đã ngã lăn ra đất.</p>
                        <p>V...</p>
                        <p>Apr 28,2024 / Chap:70</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-24 h-24 ml-8"/>
                    </div>
                </div>
                <div>
                    <hr class="my-3"/>
                    <div class="flex w-70">
                        <button class="mr-5">
                        <svg fill="#675cbc" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6.4 -6.4 76.80 76.80" enable-background="new 0 0 64 64" xml:space="preserve" stroke="#675cbc"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-6.4" y="-6.4" width="76.80" height="76.80" rx="38.4" fill="#7ed0ec" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Play"> <path d="M46.0136986,31.1054993L25.1973,20.6973c-0.3096008-0.1532993-0.6777992-0.1387005-0.9727001,0.0438995 C23.9297009,20.9237995,23.75,21.2451,23.75,21.5918007v20.8163986c0,0.3467026,0.1797009,0.6679993,0.4745998,0.8506012 C24.3848,43.3583984,24.5674,43.4081993,24.75,43.4081993c0.1532993,0,0.3057003-0.035099,0.4473-0.1054001l20.8163986-10.4081993 c0.3388023-0.1699982,0.5527-0.5157013,0.5527-0.8945999C46.5663986,31.6210995,46.3525009,31.2754002,46.0136986,31.1054993z M25.75,40.7901001v-17.580101L43.330101,32L25.75,40.7901001z"></path> <path d="M32,0C14.3268995,0,0,14.3268995,0,32s14.3268995,32,32,32s32-14.3269005,32-32S49.6730995,0,32,0z M32,62 C15.4579,62,2,48.542099,2,32C2,15.4580002,15.4579,2,32,2c16.5419998,0,30,13.4580002,30,30C62,48.542099,48.5419998,62,32,62z"></path> </g> </g></svg>
                        </button>
                        <div class="text-justify">
                        <h2 class="text-lg font-bold">[Chương 70] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</h2>
                        <p>Khi cảm giác mềm mại truyền tới, dường như Vũ Văn Mân đã bị thứ tình hương mê người kia xông lên đầu.</p>
                        <p>Hắn giật lùi về sau một bước, Lục Hàm Chi mất thăng bằng, suýt đã ngã lăn ra đất.</p>
                        <p>V...</p>
                        <p>Apr 28,2024 / Chap:70</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-24 h-24 ml-8"/>
                    </div>
                </div>
                <div>
                    <hr class="my-3"/>
                    <div class="flex w-70">
                        <button class="mr-5">
                        <svg fill="#675cbc" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6.4 -6.4 76.80 76.80" enable-background="new 0 0 64 64" xml:space="preserve" stroke="#675cbc"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-6.4" y="-6.4" width="76.80" height="76.80" rx="38.4" fill="#7ed0ec" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Play"> <path d="M46.0136986,31.1054993L25.1973,20.6973c-0.3096008-0.1532993-0.6777992-0.1387005-0.9727001,0.0438995 C23.9297009,20.9237995,23.75,21.2451,23.75,21.5918007v20.8163986c0,0.3467026,0.1797009,0.6679993,0.4745998,0.8506012 C24.3848,43.3583984,24.5674,43.4081993,24.75,43.4081993c0.1532993,0,0.3057003-0.035099,0.4473-0.1054001l20.8163986-10.4081993 c0.3388023-0.1699982,0.5527-0.5157013,0.5527-0.8945999C46.5663986,31.6210995,46.3525009,31.2754002,46.0136986,31.1054993z M25.75,40.7901001v-17.580101L43.330101,32L25.75,40.7901001z"></path> <path d="M32,0C14.3268995,0,0,14.3268995,0,32s14.3268995,32,32,32s32-14.3269005,32-32S49.6730995,0,32,0z M32,62 C15.4579,62,2,48.542099,2,32C2,15.4580002,15.4579,2,32,2c16.5419998,0,30,13.4580002,30,30C62,48.542099,48.5419998,62,32,62z"></path> </g> </g></svg>
                        </button>
                        <div class="text-justify">
                        <h2 class="text-lg font-bold">[Chương 70] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</h2>
                        <p>Khi cảm giác mềm mại truyền tới, dường như Vũ Văn Mân đã bị thứ tình hương mê người kia xông lên đầu.</p>
                        <p>Hắn giật lùi về sau một bước, Lục Hàm Chi mất thăng bằng, suýt đã ngã lăn ra đất.</p>
                        <p>V...</p>
                        <p>Apr 28,2024 / Chap:70</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-24 h-24 ml-8"/>
                    </div>
                </div>
                <div>
                    <hr class="my-3"/>
                    <div class="flex w-70">
                        <button class="mr-5">
                        <svg fill="#675cbc" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6.4 -6.4 76.80 76.80" enable-background="new 0 0 64 64" xml:space="preserve" stroke="#675cbc"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-6.4" y="-6.4" width="76.80" height="76.80" rx="38.4" fill="#7ed0ec" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Play"> <path d="M46.0136986,31.1054993L25.1973,20.6973c-0.3096008-0.1532993-0.6777992-0.1387005-0.9727001,0.0438995 C23.9297009,20.9237995,23.75,21.2451,23.75,21.5918007v20.8163986c0,0.3467026,0.1797009,0.6679993,0.4745998,0.8506012 C24.3848,43.3583984,24.5674,43.4081993,24.75,43.4081993c0.1532993,0,0.3057003-0.035099,0.4473-0.1054001l20.8163986-10.4081993 c0.3388023-0.1699982,0.5527-0.5157013,0.5527-0.8945999C46.5663986,31.6210995,46.3525009,31.2754002,46.0136986,31.1054993z M25.75,40.7901001v-17.580101L43.330101,32L25.75,40.7901001z"></path> <path d="M32,0C14.3268995,0,0,14.3268995,0,32s14.3268995,32,32,32s32-14.3269005,32-32S49.6730995,0,32,0z M32,62 C15.4579,62,2,48.542099,2,32C2,15.4580002,15.4579,2,32,2c16.5419998,0,30,13.4580002,30,30C62,48.542099,48.5419998,62,32,62z"></path> </g> </g></svg>
                        </button>
                        <div class="text-justify">
                        <h2 class="text-lg font-bold">[Chương 70] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</h2>
                        <p>Khi cảm giác mềm mại truyền tới, dường như Vũ Văn Mân đã bị thứ tình hương mê người kia xông lên đầu.</p>
                        <p>Hắn giật lùi về sau một bước, Lục Hàm Chi mất thăng bằng, suýt đã ngã lăn ra đất.</p>
                        <p>V...</p>
                        <p>Apr 28,2024 / Chap:70</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-24 h-24 ml-8"/>
                    </div>
                </div>
            </article>
            <aslide class="justify-center ml-10">
                <div class="flex mt-8 mb-3 space-x-2 items-center">
                    <button>
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M50.6,30.2C50.6,15.8,39.7,4,26.2,4S1.7,15.8,1.7,30.2c0,3.4,0.6,6.8,1.8,10c1.4,3.9,4.9,6.7,9.1,6.8 c1.2,0,2.2-1,2.2-2.2V32.3c0-1.2-1-2.2-2.2-2.2c-2.2,0-4.3,0.8-5.9,2c-0.1-0.7-0.1-1.3-0.1-2c0-11.8,8.8-21.3,19.6-21.3 s19.6,9.6,19.6,21.3c0,0.7,0,1.4-0.1,2c-1.6-1.3-3.6-2.1-5.9-2.1c-1.2,0-2.2,1-2.2,2.2v12.4c0,1.2,1,2.2,2.2,2.2 c2.4,0,4.9-0.9,6.5-2.7c1.7-1.8,2.5-3.8,3.2-6.2C50.2,35.5,50.6,32.9,50.6,30.2z"></path> </g></svg>
                    </button>
                    <label class="text-[#6b7280]">NGHE VÀ ĐỌC TẠI</label>
                </div>
                <div class="flex flex-col items-start space-y-4">

                    <button type="button" class="w-auto transition duration-0 hover:duration-150 ease-in-out py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 focus:outline-none focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600">
                        <svg width="30px" height="30px" viewBox="0 -7 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Youtube-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -368.000000)" fill="#CE1312"> <path d="M219.044,391.269916 L219.0425,377.687742 L232.0115,384.502244 L219.044,391.269916 Z M247.52,375.334163 C247.52,375.334163 247.0505,372.003199 245.612,370.536366 C243.7865,368.610299 241.7405,368.601235 240.803,368.489448 C234.086,368 224.0105,368 224.0105,368 L223.9895,368 C223.9895,368 213.914,368 207.197,368.489448 C206.258,368.601235 204.2135,368.610299 202.3865,370.536366 C200.948,372.003199 200.48,375.334163 200.48,375.334163 C200.48,375.334163 200,379.246723 200,383.157773 L200,386.82561 C200,390.73817 200.48,394.64922 200.48,394.64922 C200.48,394.64922 200.948,397.980184 202.3865,399.447016 C204.2135,401.373084 206.612,401.312658 207.68,401.513574 C211.52,401.885191 224,402 224,402 C224,402 234.086,401.984894 240.803,401.495446 C241.7405,401.382148 243.7865,401.373084 245.612,399.447016 C247.0505,397.980184 247.52,394.64922 247.52,394.64922 C247.52,394.64922 248,390.73817 248,386.82561 L248,383.157773 C248,379.246723 247.52,375.334163 247.52,375.334163 L247.52,375.334163 Z" id="Youtube"> </path> </g> </g> </g></svg>
                        <div>
                            <p class="text-sl">NGHE TRÊN</p>
                            <p class="font-bold text-black text-sl">YouTube</p>
                        </div>
                    </button>
                    <button type="button" class="w-auto transition duration-0 hover:duration-150 ease-in-out py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 focus:outline-none focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600">
                        <svg fill="#ed0707" width="30px" height="30px" viewBox="0 0 512 512" id="_x30_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ed0707"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M418.275,146h-46.667 c-5.365-22.513-12.324-43.213-20.587-61.514c15.786,8.776,30.449,19.797,43.572,32.921C403.463,126.277,411.367,135.854,418.275,146 z M452,256c0,17.108-2.191,33.877-6.414,50h-64.034c1.601-16.172,2.448-32.887,2.448-50s-0.847-33.828-2.448-50h64.034 C449.809,222.123,452,238.892,452,256z M256,452c-5.2,0-21.048-10.221-36.844-41.813c-6.543-13.087-12.158-27.994-16.752-44.187 h107.191c-4.594,16.192-10.208,31.1-16.752,44.187C277.048,441.779,261.2,452,256,452z M190.813,306 c-1.847-16.247-2.813-33.029-2.813-50s0.966-33.753,2.813-50h130.374c1.847,16.247,2.813,33.029,2.813,50s-0.966,33.753-2.813,50 H190.813z M60,256c0-17.108,2.191-33.877,6.414-50h64.034c-1.601,16.172-2.448,32.887-2.448,50s0.847,33.828,2.448,50H66.414 C62.191,289.877,60,273.108,60,256z M256,60c5.2,0,21.048,10.221,36.844,41.813c6.543,13.087,12.158,27.994,16.752,44.187H202.404 c4.594-16.192,10.208-31.1,16.752-44.187C234.952,70.221,250.8,60,256,60z M160.979,84.486c-8.264,18.301-15.222,39-20.587,61.514 H93.725c6.909-10.146,14.812-19.723,23.682-28.593C130.531,104.283,145.193,93.262,160.979,84.486z M93.725,366h46.667 c5.365,22.513,12.324,43.213,20.587,61.514c-15.786-8.776-30.449-19.797-43.572-32.921C108.537,385.723,100.633,376.146,93.725,366z M351.021,427.514c8.264-18.301,15.222-39,20.587-61.514h46.667c-6.909,10.146-14.812,19.723-23.682,28.593 C381.469,407.717,366.807,418.738,351.021,427.514z"></path></g></svg>
                        <div>
                            <p class="text-sl">ĐỌC TRUYỆN</p>
                            <p class="font-bold text-black text-sl">Website</p>
                        </div>
                    </button>
                </div>
            </aslide>

            <hr class="col-span-3 mx-8 my-8 "/>

            <footer class="col-span-3 space-y-8">

                <div class="flex items-center space-x-5">

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


    </body>
</html>
