<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<nav class="w-full bg-white shadow-md h-16 flex justify-between" style="background-color: #242526">
    <div class="w-full lg:w-4/6 xl:w-full  h-full flex items-center px-4 ">
        <svg class="fill-current w-8 h-8 lg:w-10 lg:h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3f6aff">
            <path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.04V9.41c0-3.02 1.8-4.7 4.54-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.5c-1.5 0-1.96.93-1.96 1.89v2.26h3.32l-.53 3.5h-2.8V24C19.62 23.1 24 18.1 24 12.07" />
        </svg>
        <div class="relative mx-3" x-data="{dropdown : false}">
            <input @click="dropdown = !dropdown" @click.away="dropdown = false" type="text" name="" id="" class="relative z-30 text-md justify-center w-8 h-8 lg:w-10 lg:h-10 xl:w-56 rounded-full  xl:px-10 py-2 focus:outline-none" placeholder="Search" style="background-color: #3A3B3C">
            <svg class="absolute z-30 top-0 my-2 mx-2  stroke-current text-gray-600  w-4 h-4 lg:w-5 lg:h-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#b0b0b0" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                <circle cx="11" cy="11" r="7"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>


            <div x-show.transition="dropdown" @click.away="dropdown = false" class=" absolute w-full   top-0 z-10 bg-white shadow-lg rounded  px-3 py-5">

                <ul class="flex flex-col w-full items-left mt-10">

                    <li class="my-2"><a href="user/{{$result->slug}}"><?php echo $user->getPropertyValue('username'); ?></a></li>

                </ul>

            </div>


        </div>
    </div>
    <div class="hidden md:flex w-full h-full justify-center">
        <div class="border-b-4 border-blue-600">
        <a href="index.php">
            <button class="flex items-center h-full md:w-16 lg:w-24 xl:w-32 justify-center focus:outline-none rounded-md">
                <svg class=" fill-current text-blue-500 w-6 h-6" width="80" height="78" viewBox="0 0 80 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.8212 1.30204C39.0046 0.0516549 40.9954 0.0516556 42.1788 1.30204L78.51 39.6878C80.32 41.6002 78.9643 44.75 76.3312 44.75H3.66882C1.03568 44.75 -0.320033 41.6002 1.48999 39.6878L37.8212 1.30204Z" />
                    <path d="M12 75.5V45C12 43.8954 12.8954 43 14 43H66.5C67.6046 43 68.5 43.8954 68.5 45V75.5C68.5 76.6046 67.6046 77.5 66.5 77.5H49.5C48.3954 77.5 47.5 76.6046 47.5 75.5V62C47.5 60.8954 46.6046 60 45.5 60H35C33.8954 60 33 60.8954 33 62V75.5C33 76.6046 32.1046 77.5 31 77.5H14C12.8954 77.5 12 76.6046 12 75.5Z" />
                </svg>
            </button>
        </a>
        </div>
        <div class="border-b-4 border-transparent hover:border-blue-600">
            <button class="flex items-center h-full md:w-16 lg:w-24 xl:w-32 justify-center  focus:outline-none rounded-md">
                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#b0b0b0" stroke-width="3" stroke-linecap="square" stroke-linejoin="round">
                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                    <line x1="4" y1="22" x2="4" y2="15"></line>
                </svg>
            </button>
        </div>
        <div class="border-b-4 border-transparent hover:border-blue-600">
            <button class="flex items-center h-full md:w-16 lg:w-24 xl:w-32 justify-center focus:outline-none rounded-md">
                <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M18 9.87V20H2V9.87a4.25 4.25 0 0 0 3-.38V14h10V9.5a4.26 4.26 0 0 0 3 .37zM3 0h4l-.67 6.03A3.43 3.43 0 0 1 3 9C1.34 9 .42 7.73.95 6.15L3 0zm5 0h4l.7 6.3c.17 1.5-.91 2.7-2.42 2.7h-.56A2.38 2.38 0 0 1 7.3 6.3L8 0zm5 0h4l2.05 6.15C19.58 7.73 18.65 9 17 9a3.42 3.42 0 0 1-3.33-2.97L13 0z" />
                </svg>
            </button>
        </div>
        <div class="border-b-4 border-transparent hover:border-blue-600">
            <button class="flex items-center h-full md:w-16 lg:w-24 xl:w-32 justify-center focus:outline-none rounded-md">
                <svg class=" fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#b0b0b0" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
            </button>
        </div>
        <div class="flex xl:hidden border-b-4 border-white">
            <button class="flex items-center h-full w-16 lg:w-24 xl:w-32 justify-center hover:bg-gray-200 focus:outline-none rounded-md">
                <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#b0b0b0" stroke-width="3" stroke-linecap="square" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>

    </div>
    <div class="w-full  h-full flex justify-end space-x-3 items-center px-3">
        <button class="w-8 h-8 lg:h-10 lg:w-10 bg-gray-300 focus:outline-none hover:bg-gray-400 rounded-full flex items-center justify-center">
            <a href="profile.php"><img class="rounded-full" name="profile" src="https://nakedsecurity.sophos.com/wp-content/uploads/sites/2/2013/08/facebook-silhouette_thumb.jpg" alt=""></a>
        </button>
        <button class="w-8 h-8 lg:h-10 lg:w-10 focus:outline-none hover:bg-gray-400 rounded-full flex items-center justify-center" style="background-color: #3A3B3C">
            <svg class="w-4 h-4 lg:w-6 lg:h-6 fill-current stroke-current " xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#b0b0b0" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" style="color: #E4E6EB">
                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
            </svg>
        </button>
        <button class="relative w-8 h-8 lg:h-10 lg:w-10 bg-gray-300 focus:outline-none hover:bg-gray-400 rounded-full flex items-center justify-center" style="background-color: #3A3B3C">
            <svg class="w-4 h-4 lg:w-6 lg:h-6 fill-current text-gray-600 stroke-current " xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#b0b0b0" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" style="color: #E4E6EB">
                <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
            </svg>
            <div class="absolute top-0 right-0 w-6 h-6 text-white -mr-2 rounded-full bg-red-500">
                3
            </div>
        </button>
        <div x-data="{ open: false }">
            <button @click="open = true" class="hidden xl:flex h-10 w-24 xl:w-10 bg-gray-300 focus:outline-none hover:bg-gray-400 rounded-full  flex items-center justify-center" style="background-color: #3A3B3C">
                <svg class="w-4 h-4 lg:w-6 lg:h-6 fill-current text-gray-600 stroke-current " xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#b0b0b0" stroke-width="3" stroke-linecap="square" stroke-linejoin="round" style="color: #E4E6EB">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <ul x-show="open" @click.away="open = false" class="absolute lw-20 shadow-md my-3 py-3 px-2" style="background-color: #242526">
                <form method="post">
                    <input type="submit" value="logout" name="logout" style="color: #E4E6EA">
                </form>
            </ul>
        </div>
    </div>
</nav>