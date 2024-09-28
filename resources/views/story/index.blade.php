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
    <script src="https://kit.fontawesome.com/6b966f6f77.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body class="bg-[#FFFFFF] font-custom justify-between ">
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
                <a class="navLinks py-4 px-1 inline-flex items-center gap-2 border-b-4 border-red-700  whitespace-nowrap hover: focus:outline-none focus:text-red-600 dark:text-red-500 dark:hover:text-red-500 dark:focus:text-red-500" href="{{ route('story') }}">
                  Trang chủ
                </a>
                <a class="navLinks py-4 px-1 inline-flex items-center gap-2 border-b-4   whitespace-nowrap focus:outline-none focus:  dark:text-red-500" href="{{ route('liststory') }}" aria-current="page">
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
    <div class="relative">
        <section class="absolute grid grid-cols-4 top-full left-1/2 transform -translate-x-1/2 mt-[-2rem] bg-white p-4 shadow-lg rounded w-2/3 text-[#1f2937]">
            <article class="mx-5 col-span-3 w-full">
                <p class="mb-10 text-xl leading-8">Website nghe truyện Danda, được xây dựng bởi <a href="https://www.facebook.com/Trdung99/" target="_self" class="underline font-extrabold">Harry</a> bao gồm tất cả bộ truyện được dịch từ <a href="#" class="underline font-semibold">website đọc truyện chính thức</a> của chúng tôi và chuyển thành audio.</p>
                <h1 class="text-[#6b7280] font-semibold">MỚI NHẤT</h1>
                <div class="leading-6">
                    <hr class="my-3"/>
                    <div class="flex w-full">
                        <button type="button" id="play_pause_1" class="mr-5 content-button" data-content="70">

                            <i id="icon_1" class="fa-solid fa-circle-play fa-2xl"></i>

                        </button>
                        <div class="text-justify">
                            <a href="" class="text-lg font-bold text-[#4b5563]">[Chương 70] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</a>
                            <p>Khi cảm giác mềm mại truyền tới, dường như Vũ Văn Mân đã bị thứ tình hương mê người kia xông lên đầu.</p>
                            <p>Hắn giật lùi về sau một bước, Lục Hàm Chi mất thăng bằng, suýt đã ngã lăn ra đất.</p>
                            <p>V...</p>
                            <p class="text-[#6b7280] leading-5 text-sm">Apr 28,2024 / Chap:70</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-28 h-24 ml-8"/>
                    </div>
                </div>
                <div class="leading-6">
                    <hr class="my-3"/>
                    <div class="flex w-full ">
                        <button type="button" id="play_pause_2" class="mr-5 content-button" data-content="69">

                            <i id="icon_2" class="fa-solid fa-circle-play fa-2xl"></i>


                        </button>
                        <div class="text-justify ">
                            <a href="" class="text-lg font-bold text-[#4b5563]">[Chương 69] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</a>
                            <p>Cô nương kia chính là Thái Tử phi - Quận chúa Chiêu Vân.</p>
                            <p>Sau khi cưới hơn nửa tháng, Quận chúa Chiêu Vân vẫn luôn ở lại phủ Công chúa không</p>
                            <p>chịu lộ mặt. Trưởng công chúa cũng không hề hối thú...</p>
                            <p class="text-[#6b7280] leading-5 text-sm">Apr 28,2024 / Chap:69</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-28 h-24 ml-8 items-end"/>
                    </div>
                </div>
                <div class="leading-6">
                    <hr class="my-3"/>
                    <div class="flex w-70">
                        <button type="button" id="play_pause_3" class="mr-5 content-button" data-content="68">

                            <i id="icon_3" class="fa-solid fa-circle-play fa-2xl"></i>

                        </button>
                        <div class="text-justify">
                        <a href="" class="text-lg font-bold text-[#4b5563]">[Chương 68] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</a>
                        <p>Khóe miệng nam hồ ly tinh giật giật, không biết nên đối mặt với hình dung của thanh</p>
                        <p>niên trước mắt như thế nào.</p>
                        <p>Vũ Văn Mân quyết định đi theo quy trình, không để ý đến sự trêu đùa của cậu.</p>
                        <p class="text-[#6b7280] leading-5 text-sm">Apr 28,2024 / Chap:68</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-28 h-24 ml-8"/>
                    </div>
                </div>
                <div class="leading-6">
                    <hr class="my-3"/>
                    <div class="flex w-70">
                        <button type="button" id="play_pause_4" class="mr-5 content-button" data-content="67">

                            <i id="icon_4" class="fa-solid fa-circle-play fa-2xl"></i>

                        </button>
                        <div class="text-justify">
                        <a href="" class="text-lg font-bold text-[#4b5563]">[Chương 67] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</a>
                        <p>Nung gốm sứ cũng phải mất mấy ngày, sau khi Lục Hàm Chi tiếp nhận nhiệm vụ đầu tiên</p>
                        <p>của giai đoạn 3 thì không đến thôn trang nữa, toàn tâm toàn ý bắt đầu chuẩn bị hôn lễ.</p>
                        <p>Lục Hàm Chi lặng lẽ...</p>
                        <p class="text-[#6b7280] leading-5 text-sm">Apr 28,2024 / Chap:67</p>
                        </div>
                        <img src="images/img1.png" alt="" class="w-28 h-24 ml-8"/>
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
    <footer class="fixed bottom-0 left-0  bg-white text-white text-center shadow-xl p-4 m-2 font-custom rounded border border-[#ECEEF5]">
        <div class="flex  text-[#6b7280]">
            <button type="button" id="play_pause_footer" class="mr-5 ">
                <i id="icon_footer_1" class="fa-solid fa-circle-play fa-2xl" style="color:#1F2937"></i>
            </button>
            <div class="">
                <p class="text-sm leading-3 font-medium text-[#6b7280]" id="content">[Chương 70] - Sinh cục cưng cho bạo quân phản diện rồi phải làm sao đây?</p>
                <div class="bg-[#a9afba] rounded-lg cursor-pointer h-2 w-full my-2" id="player-progress">
                    <div class="bg-[#5c6168] rounded-lg h-full transition-all duration-100 ease-linear" id="progress">
                        <h3 class="text-white text-xs leading-tight"></h3>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex items-center gap-x-2 ">
                        <i class="fa-solid fa-arrow-rotate-left" style="color: #a9afba;"></i>
                        <button id="speedUp" type="button" class="border border-[#a9afba] rounded-md">
                            <p class="px-1">1.5x</p>
                        </button>
                        <i class="fa-solid fa-rotate-right" style="color: #a9afba;"></i>
                        <audio id="audioPlayer" controls style="width: 100%; display: none;">
                            <source id="audioSource" src="" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="flex gap-x-2">
                        <p id="currentTime">00:00</p>
                        <p>|</p>
                        <p id="totalTime">00:00</p>
                    </div>
                </div>

            </div>


        </div>

    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const playPauseButton_1 = document.getElementById('play_pause_1');
        const playPauseButton_2 = document.getElementById('play_pause_2');
        const playPauseButton_3 = document.getElementById('play_pause_3');
        const playPauseButton_4 = document.getElementById('play_pause_4');
        const playPauseButtonFooter = document.getElementById('play_pause_footer');
        const icon_1 = document.getElementById('icon_1');
        const icon_2 = document.getElementById('icon_2');
        const icon_3 = document.getElementById('icon_3');
        const icon_4 = document.getElementById('icon_4');
        const icon_footer_1 = document.getElementById('icon_footer_1');

        const audioPlayer = document.getElementById('audioPlayer');
        const audioSource = document.getElementById('audioSource');
        const currentTimeElem = document.getElementById('currentTime');
        const totalTimeElem = document.getElementById('totalTime');
        const progressElem = document.getElementById('progress');
        const progressContainer = document.getElementById('player-progress');

        var buttons = document.querySelectorAll('.content-button');
        buttons.forEach(function(button){
            button.addEventListener('click',function(){
                var contentButton = button.getAttribute('data-content');
                var contentFooter =  document.getElementById('content');
                contentFooter.innerHTML = "[Chương " + contentButton + "] " + "- Sinh cục cương cho bạo quân phản diện rồi phải làm sao đây?";
            });
        });


        function formatTime(seconds) {
                const minutes = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
            }

            function updateProgress() {
                const currentTime = audioPlayer.currentTime;
                const duration = audioPlayer.duration;
                const progressPercent = (currentTime / duration) * 100;
                progressElem.style.width = `${progressPercent}%`;
                currentTimeElem.textContent = formatTime(currentTime);
                totalTimeElem.textContent = formatTime(duration);
            }

        playPauseButton_1.addEventListener('click', function () {
            if (icon_1.classList.contains('fa-circle-play')) {
                icon_1.classList.remove('fa-circle-play');
                icon_1.classList.add('fa-circle-pause');
                icon_footer_1.classList.remove('fa-circle-play');
                icon_footer_1.classList.add('fa-circle-pause');
                icon_footer_1.style.color = '#1F2937';
                 // Set audio source and play
                audioSource.src = 'https://danda.vn/file/1ad7785b-3755-4959-987d-f64240509756';
                audioPlayer.style.display = 'block';
                audioPlayer.load();
                audioPlayer.play();
            } else {
                icon_1.classList.remove('fa-circle-pause');
                icon_1.classList.add('fa-circle-play');
                icon_footer_1.classList.remove('fa-circle-pause');
                icon_footer_1.classList.add('fa-circle-play');
                icon_footer_1.style.color = '#1F2937';
                // Pause audio
                audioPlayer.pause();
                audioPlayer.style.display = 'none';
            }
        });
        playPauseButton_2.addEventListener('click', function () {
            if (icon_2.classList.contains('fa-circle-play')) {
                icon_2.classList.remove('fa-circle-play');
                icon_2.classList.add('fa-circle-pause');
                icon_footer_1.classList.remove('fa-circle-play');
                icon_footer_1.classList.add('fa-circle-pause');
                icon_footer_1.style.color = '#1F2937';
                 // Set audio source and play
                audioSource.src = 'https://danda.vn/file/7bebaecb-acec-40f9-8d79-ff06a14dd76d';
                audioPlayer.style.display = 'block';
                audioPlayer.load();
                audioPlayer.play();
            } else {
                icon_2.classList.remove('fa-circle-pause');
                icon_2.classList.add('fa-circle-play');
                icon_footer_1.classList.remove('fa-circle-pause');
                icon_footer_1.classList.add('fa-circle-play');
                icon_footer_1.style.color = '#1F2937';
                // Pause audio
                audioPlayer.pause();
                audioPlayer.style.display = 'none';
            }
        });
        playPauseButton_3.addEventListener('click', function () {
            if (icon_3.classList.contains('fa-circle-play')) {
                icon_3.classList.remove('fa-circle-play');
                icon_3.classList.add('fa-circle-pause');
                icon_footer_1.classList.remove('fa-circle-play');
                icon_footer_1.classList.add('fa-circle-pause');
                icon_footer_1.style.color = '#1F2937';
                 // Set audio source and play
                audioSource.src = 'https://danda.vn/file/1ad7785b-3755-4959-987d-f64240509756';
                audioPlayer.style.display = 'block';
                audioPlayer.load();
                audioPlayer.play();
            } else {
                icon_3.classList.remove('fa-circle-pause');
                icon_3.classList.add('fa-circle-play');
                icon_footer_1.classList.remove('fa-circle-pause');
                icon_footer_1.classList.add('fa-circle-play');
                icon_footer_1.style.color = '#1F2937';
                // Pause audio
                audioPlayer.pause();
                audioPlayer.style.display = 'none';
            }
        });
        playPauseButton_4.addEventListener('click', function () {
            if (icon_4.classList.contains('fa-circle-play')) {
                icon_4.classList.remove('fa-circle-play');
                icon_4.classList.add('fa-circle-pause');
                icon_footer_1.classList.remove('fa-circle-play');
                icon_footer_1.classList.add('fa-circle-pause');
                icon_footer_1.style.color = '#1F2937';
                 // Set audio source and play
                audioSource.src = 'https://danda.vn/file/9f9669ca-18b3-451b-839d-522c21a4e7cd';
                audioPlayer.style.display = 'block';
                audioPlayer.load();
                audioPlayer.play();
            } else {
                icon_4.classList.remove('fa-circle-pause');
                icon_4.classList.add('fa-circle-play');
                icon_footer_1.classList.remove('fa-circle-pause');
                icon_footer_1.classList.add('fa-circle-play');
                icon_footer_1.style.color = '#1F2937';
                // Pause audio
                audioPlayer.pause();
                audioPlayer.style.display = 'none';
            }
        });

        audioPlayer.addEventListener('timeupdate', updateProgress);
        audioPlayer.addEventListener('loadedmetadata', updateProgress);

    });
</script>
  </body>

</html>

