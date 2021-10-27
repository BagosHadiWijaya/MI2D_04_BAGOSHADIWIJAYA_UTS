<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
        <style>
        body {
            background-image: url('https://th.bing.com/th/id/R.8ebfc50fb5b9b20123051d909eca6493?rik=ztmmwjqzrDSVPg&riu=http%3a%2f%2f4.bp.blogspot.com%2f-bXMdRwW-15U%2fU1hX1flpFbI%2fAAAAAAAAAgE%2fOU8tao5peAA%2fs1600%2fsaar-river-near-saarlouis-full-HD-nature-background-wallpaper-for-laptop-widescreen.jpg&ehk=wEl9PVWxQ0eYMlrDpUsXpEdG2wMz%2fKNiwZ1KeZVr48M%3d&risl=&pid=ImgRaw&r=0');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <body class="antialiased">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8" >
                    <h1 style="text-align:center" > <font color = "#FFFFFF"> SELAMAT DATANG DI WISATA MALANG</h1></font>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"></svg>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/1d/51/2c/mount-semeru-volcano.jpg?w=1200&h=-1&s=1" width="400" height="200"a style="border:0;" allowfullscreen="" loading="lazy"></img>
                                    <div class="ml-0 text-lg leading-7 font-semibold"><a href="https://www.youtube.com/watch?v=0iRE22UA0a4" class="underline text-gray-900 dark:text-white">GUNUNG API SEMERU</a></div>
                                    <br>Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut (mdpl) 
                                    <a href="https://id.wikipedia.org/wiki/Gunung_Semeru" class="underline text-gray-900 dark:text-white">Selengkapnya... </a>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3949.9283122161405!2d112.9241962!3d-8.1087822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd63e89e1d817bb%3A0x9c14d4ed3c488f54!2sSemeru!5e0!3m2!1sen!2sid!4v1635313948527!5m2!1sen!2sid" width="435" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"></svg>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/76/1b/d7/img-20170504-wa0062-largejpg.jpg?w=1100&h=-1&s=1" width="410" height="200"a style="border:0;" allowfullscreen="" loading="lazy"></img>
                                        <div class="ml-0 text-lg leading-7 font-semibold"><a href="https://www.youtube.com/watch?v=SqKbi1xE7qo" class="underline text-gray-900 dark:text-white">PULAU SEMPU</a></div>
                                        <br>Pulau Sempu adalah sebuah pulau kecil yang terletak di sebelah selatan Pulau Jawa; secara administratif berada di Desa Tambakrejo, Kecamatan Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur.
                                        <a href="https://id.wikipedia.org/wiki/Pulau_Sempu" class="underline text-gray-900 dark:text-white">Selengkapnya... </a>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31572.330521801156!2d112.67770431899767!3d-8.446621111267312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd60120edbc901f%3A0x8efd89687a308993!2sSempu%20Island!5e0!3m2!1sen!2sid!4v1635336515234!5m2!1sen!2sid" width="435" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"></svg>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/fe/20/d6/goa-cina-beach.jpg?w=1200&h=-1&s=1" width="410" height="200"a style="border:0;" allowfullscreen="" loading="lazy"></img>
                                        <div class="ml-0 text-lg leading-7 font-semibold"><a href="https://www.youtube.com/watch?v=17fbYa0LtE0" class="underline text-gray-900 dark:text-white"> PANTAI GOA CINA</a></div>
                                    <br>Pantai Goa Cina adalah sebuah pantai di pesisir selatan yang terletak di Dusun Tumpak Awu, Desa Sitiarjo, Kecamatan Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur.[1] Nama asli dari pantai ini adalah Pantai Rowo Indah.
                                    <a href="https://id.wikipedia.org/wiki/Pantai_Goa_Cina" class="underline text-gray-900 dark:text-white">Selengkapnya... </a>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31572.631525610544!2d112.64795586899602!3d-8.442941861431708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd601b40a1c6d45%3A0x33697e2746fd1876!2sTeluk%20Asmara%20Beach!5e0!3m2!1sen!2sid!4v1635336653927!5m2!1sen!2sid" width="435" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"></svg>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/c9/d4/f2/candi-singosari.jpg?w=1200&h=-1&s=1" width="410" height="200"a style="border:0;" allowfullscreen="" loading="lazy"></img>
                                        <div class="ml-0 text-lg leading-7 font-semibold"><a href="https://www.youtube.com/watch?v=nbnktk9Yay8" class="underline text-gray-900 dark:text-white"> CANDI SINGOSARI</a></div>
                                    <br>Candi Singasari merupakan candi Hindu - Buddha peninggalan bersejarah dari Kerajaan Singasari berlokasi di Desa Candirenggo, Kecamatan Singosari, Kabupaten Malang, Jawa Timur, Indonesia, sekitar 10 km dari Kota Malang.
                                    <a href="https://id.wikipedia.org/wiki/Candi_Singasari" class="underline text-gray-900 dark:text-white">Selengkapnya... </a>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.068503086136!2d112.66159431477882!3d-7.887902194317363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62a52713474b1%3A0xfd729898cb0cdc0d!2sSingosari%20Temple!5e0!3m2!1sen!2sid!4v1635336716192!5m2!1sen!2sid" width="435" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>