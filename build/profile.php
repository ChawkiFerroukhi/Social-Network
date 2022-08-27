<?php


require_once "vendor/autoload.php";
require_once "core/init.php";

use classes\{Database, Config, Validation, Common, Session, Token, Hash, Redirect, Cookie};

if (!$user->getPropertyValue("isLoggedIn")) {
    Redirect::to("login.php");
}

/*if (Session::exists('Register_success')) {
        echo Session::flash('Register_success');
    }*/


if (isset($_POST["logout"])) {
    if (Token::check(Common::getInput($_POST, "token_log"), "logout")) {
        $user->logout();
        Redirect::to("login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">

    <title>Profile</title>
</head>

<body style="background-color: #242526">
    <header class="sticky top-0 z-50">
        <?php include 'navbar.php' ?>
    </header>
    <div class="container mx-auto" style="height: 600px;">
        <div class="top-0 bg-center bg-cover" style='height: 70%; background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'></div>
        <div class="bottom-0 flex mx-auto">
            <img src="https://nakedsecurity.sophos.com/wp-content/uploads/sites/2/2013/08/facebook-silhouette_thumb.jpg" class="w-32 h-32 rounded-full shadow-lg">
            <div class="m-5">
                <p class="text-white font-bold tracking-wide capitalize">chawki ferroukhi</p>
                <p class="mt-2 font-bold tracking-wide capitalize" style="color: #B0B3B8">1052 Friends</p>
            </div>
            <div class="w-9/12 mt-auto ">
                <button type="button" class="float-right text-white hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Edit Profile
                </button>
                <button type="button" class="float-right text-white hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Add Friend
                </button>
            </div>
        </div>
        <hr class="mt-3" style="border-color: #66686B">
        <div class="text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">Posts</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">About</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Photos</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Videos</a>
                </li>
                <li>
                    <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Friends</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mt-4 h-screen" style=" background-color: #18191A">
        <div class="container mx-auto">
            <div class="flex flex-row space-x-4">
                <div class="flex-1 ">
                    <div class="mt-4 p-6 max-w-lg rounded-lg shadow-md space-y-4" style="background-color: #242526">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-200 dark:text-white">Intro</h5>
                        <button class="w-full m-auto items-center py-2.5 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #3A3B3C">
                            Add biography
                        </button>
                        <button class="w-full items-center py-2.5 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #3A3B3C">
                            Add education
                        </button>
                        <button class="w-full items-center py-2.5 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #3A3B3C">
                            Edit details
                        </button>
                    </div>
                    <div class="mt-4 p-6 max-w-lg rounded-lg shadow-md" style="background-color: #242526">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-200 dark:text-white">Photos</h5>
                        <div class="flex flex-wrap -m-1 md:-m-2">
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
                                </div>
                            </div>
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-6 max-w-lg rounded-lg shadow-md" style="background-color: #242526">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-200 dark:text-white">Friends</h5>
                        <p class="mt-2 font-bold tracking-wide capitalize" style="color: #B0B3B8">1052 Friends</p>
                        <div class="flex flex-wrap -m-1 md:-m-2">
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
                                </div>
                            </div>
                            <div class="flex flex-wrap w-1/3">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 grow-0">
                    <div class="mt-4 p-6 max-w rounded-lg shadow-md space-y-4" style="background-color: #242526">
                        <div class="flex">
                            <div class="flex-none">
                                <img src="https://nakedsecurity.sophos.com/wp-content/uploads/sites/2/2013/08/facebook-silhouette_thumb.jpg" class="w-12 h-12 rounded-full shadow-lg">
                            </div>
                            <div class="mx-4 my-1 flex-1 w-64">
                                <input class="text-gray-900 text-md rounded-2xl block w-full p-2.5 focus:outline-none" placeholder="What's on your mind?" style="background-color: #4E4F50">
                            </div>
                        </div>
                        <hr class="mt-3" style="border-color: #66686B">
                        <div class="flex flex-nowrap">
                            <button class="m-auto items-center py-2.5 px-3 text-sm font-medium text-center text-white bg-white-700 rounded-lg hover:bg-blue-800 focus:outline-none" style="background-color: #3A3B3C">
                                Live video
                            </button>
                            <button class="m-auto items-center py-2.5 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none" style="background-color: #3A3B3C">
                                Photo/video
                            </button>
                            <button class="m-auto items-center py-2.5 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none" style="background-color: #3A3B3C">
                                Life event
                            </button>
                        </div>
                    </div>
                    <?php include 'posts.php' ?>
                </div>
            </div>
        </div>
    </div>



    <script src="../node_modules/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>