<?php
include_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Peter munene">
    <title>News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.14/tailwind.min.css" integrity="sha512-zXhmHxwXn8kUvZApt3iuxFG7cAHa2wongnyRnq2uAxppI5t/J5pz7I0mrm409qZaAu4KLhRtFTaNhO86OWQv5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    <header class="p-2 bg-blue-100 text-gray-800">
        <div class="container flex justify-between h-16 mx-auto">
            <a href="#" class="flex items-center p-2">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg> 
                </div>
            </a>
            <ul class="items-stretch hidden space-x-3 md:flex">
                <li class="flex">
                    <a href="#" class="flex items-center -mb-0.5 border-b-2 px-4 border-transparent text-blue-600 border-blue-600">My Feed</a>
                </li>
                <li class="flex">
                    <a href="#" class="flex items-center -mb-0.5 border-b-2 px-4 border-transparent">News</a>
                </li>
                <li class="flex">
                    <a href="#" class="flex items-center -mb-0.5 border-b-2 px-4 border-transparent">Weather</a>
                </li>

                <li class="flex">
                    <a href="#" class="flex items-center -mb-0.5 border-b-2 px-4 border-transparent">Traffic</a>
                </li>
                <li class="flex">
                    <a href="#" class="flex items-center -mb-0.5 border-b-2 px-4 border-transparent">Money</a>
                </li>
            </ul>
            <button class="flex justify-end p-4 md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>

    <section class="bg-white mt-5">
        <div class="flex">
            <div class="flex flex-col justify-start mr-6  ml-2 md:p-4 shadow-lg rounded-lg ">
                <p class="p-2 text-sm font-medium tracking-wider text-center uppercase">Top stories</p>
                <div class="grid gap-8 md:gap-6 sm:p-3 md:grid-cols-2 lg:px-4 xl:px-6">
                    <?php foreach ($dataforHeadlines->articles as $news) : ?>
                        <div class="p-2">
                            <div class="flex flex-row items-center">
                                <a href="#" class="flex items-center p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </a>
                                <a href="<?= $news->url ?>" class="ml-2 font-semibold text-gray-800 hover:underline"><?= $news->title ?> </a>
                            </div>
                            <?php foreach ($news->source as $source) : ?>
                                <?php $source = $source; ?>
                            <?php endforeach; ?>
                            <p class="mt-1 ml-10 text-gray-600"><?php print_r($source); ?> . <?= time_elapsed_string($news->publishedAt) ?> </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class=" mr-4  mt-4 ">
                <div class="max-w-md p-8 shadow-lg rounded-lg  bg-yellow-100  text-gray-800">
                    <h1 class="text-xl font-semibold text-center">Nairobi</h1>
                    <div class="flex justify-between space-x-8">
                        <div class="flex flex-col items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="w-24 h-24 p-2 text-yellow-400 fill-current"    viewbox="0 0 64 64">
                                <defs>
                                    <filter id="blur" width="200%" height="200%">
                                        <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
                                        <feOffset dx="0" dy="4" result="offsetblur" />
                                        <feComponentTransfer>
                                            <feFuncA type="linear" slope="0.05" />
                                        </feComponentTransfer>
                                        <feMerge>
                                            <feMergeNode />
                                            <feMergeNode in="SourceGraphic" />
                                        </feMerge>
                                    </filter>
                                </defs>
                                <g filter="url(#blur)" id="cloudy-day-1">
                                    <g transform="translate(20,10)">
                                        <g transform="translate(0,16)">
                                            <g class="am-weather-sun">
                                                <g>
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                                <g transform="rotate(45)">
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                                <g transform="rotate(90)">
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                                <g transform="rotate(135)">
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                                <g transform="rotate(180)">
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                                <g transform="rotate(225)">
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                                <g transform="rotate(270)">
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                                <g transform="rotate(315)">
                                                    <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                                                </g>
                                            </g>
                                            <circle cx="0" cy="0" fill="orange" r="5" stroke="orange" stroke-width="2" />
                                        </g>
                                        <g class="am-weather-cloud-2">
                                            <path d="M47.7,35.4c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3    c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#C6DEFF" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-20,-11)" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h1 class="text-lg font-semibold"><?= $Weatherdata->description ?></h1>
                        </div>
                        <span class="font-bold text-4xl"><?= trim($Weatherdata->temperature, ' °C' );?></span>
                    </div>
                </div>
                <div class="mt-2 shadow-lg p-4 rounded-lg ">
                    <p class="p-2 text-sm font-medium tracking-wider text-center uppercase">Money|Markets</p>
                    <div class="flex flex-row justify-between p-3">
                        <div class="text-xl font-semibold leading-tight">W1DOW </div>
                        <div class="text-xl  leading-tight">552.68</div>
                        <div class="text-xl leading-tight bg-red-600 rounded-lg px-1 py-1">-0.02%</div>
                    </div>
                    <div class="flex flex-row justify-between p-3">
                        <div class="text-xl font-semibold leading-tight">W1DOW </div>
                        <div class="text-xl  leading-tight">552.68</div>
                        <div class="text-xl leading-tight bg-green-500 rounded-lg px-1 py-1">+0.02%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white text-gray-800">
        <div class=" max-w-6xl mx-auto p-6 space-y-6 sm:space-y-12">
            <div class="grid justify-center grid-cols-1 gap-2 sm:grid-cols-1 lg:grid-cols-2">
               <?php foreach ($featuredata->articles as $news) : ?>
                    <div class="relative h-80 w-full flex items-center justify-center  bg-cover bg-center  rounded-lg" style="background-image:url(<?= $news->urlToImage; ?>);">

                        <div class="absolute h-full w-1/2 top-0 right-0 ">
                            <main class="p-8 z-10 bg-gradient-to-r from-transparent to-blue-900">
                                <div class="flex flex-row items-end mb-8">
                                    <a href="#" class="flex items-center p-2">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </a>
                                    <?php foreach ($news->source as $source) : ?>
                                        <?php $source = $source; ?>            
                                    <?php endforeach; ?>
                                    <p class="ml-2 font-semibold text-white"><?php print_r($source); ?> . <?= time_elapsed_string($news->publishedAt) ?> </p>
                                </div>
                                <a href="<?= $news->url ?>" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline"> <?= $news->title ?>
                                </a>
                                <div class="border-1 border-gray-100"></div>
                                <p class="mt-2 text-gray-100"> <?= strlen($news->content) > 100 ? substr($news->content, 0, 100) . "..." : $news->content; ?></p>
                            </main>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div> 
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($dataAll->articles as $news) : ?>
               <div class="h-64 w-full flex items-end justify-start text-left bg-cover bg-center rounded-lg" style="background-image:url(<?= $news->urlToImage; ?>;">
                    <main class="p-5 z-10 bg-gradient-to-b from-transparent to-blue-900 "> 
                        <div class="flex flex-row items-center">
                            <a href="<?= $news->url ?>"  class="flex items-center p-2">

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>

                            </a>
                            <?php foreach ($news->source as $source) : ?>
                                        <?php $source = $source; ?>            
                                    <?php endforeach; ?>
                            <p class="ml-2 font-semibold text-white"><?php print_r($source); ?> . <?= time_elapsed_string($news->publishedAt) ?></p>
                        </div>
                        <a href="<?= $news->url ?>" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline"><?= $news->title ?>
                        </a>
                    </main> 
                </div> 
                <?php endforeach; ?>
            </div>
            <div class="flex justify-center">
                <button class="px-6 py-3 text-sm rounded-md hover:underline bg-gray-200 text-gray-600">Load more News...</button>
            </div>
        </div>
    </section>

    <footer class="py-6 bg-gray-100 text-gray-900">
        <div class="container px-6 mx-auto space-y-6 divide-y divide-gray-400 md:space-y-12 divide-opacity-50">
            <div class="grid grid-cols-12">
                <div class="pb-6 col-span-full md:pb-0 md:col-span-6">
                    <a href="#" class="flex justify-center space-x-3 md:justify-start">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                        <span class="self-center text-2xl font-semibold">News</span>
                    </a>
                </div>
            </div>
            <div class="grid justify-center pt-6 lg:justify-between">
                <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                    <span>©2021 All rights reserved</span>
                    <a href="#">
                        <span>Peter Munene</span>
                    </a>

                </div>
                <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                    <a href="https://twitter.com/peternjega7" class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </a>
                    <a href="mailto:peternjega7@gmail.com" class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor" class="w-5 h-5">
                            <path d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z"></path>
                        </svg>
                    </a>
                    <a href="https://github.com/munenepeter" class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
