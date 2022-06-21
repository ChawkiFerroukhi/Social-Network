<nav class="border-gray-200 px-2 sm:px-4 py-3" style="background-color: rgb(36,37,38);">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            <img src="" class="mr-3 h-6 sm:h-9" />
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Zak</span>
        </a>
        <div class="flex items-center relative text-gray-600">
            <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none" style= "background-color: rgb(58,59,60)";>
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </div>
        <div class="flex items-center md:order-2">
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                <img class="w-8 h-8 rounded-full" src="http://2.bp.blogspot.com/-gIJ2xPerkME/TyY_yKpfC7I/AAAAAAAACVw/HvieIubca2E/s1600/50313_70590530709_7943_n.jpg">
            </button>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm text-gray-900 dark:text-white"><?php echo $user->getPropertyValue('username'); ?></span>
                    <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">med6.chawki@gmail.com</span>
                </div>
                <ul class="py-1" aria-labelledby="dropdown">
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <form action="index.php" method="post">
                            <input type="submit" name="logout" value="Sign out" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                        </form>
                    </li>
                </ul>
            </div>
            <span class="block pl-5 text-sm text-white dark:text-white"><?php echo $user->getPropertyValue('username'); ?></span>
            <div class="pl-10 pt-1">
                <button class="rounded-full">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAABmJLR0QA/wD/AP+gvaeTAAAFIElEQVRYhb2YW2wUVRjHf+fMbrtCu2ypsZe0qAktaiGIlkJvMoEIrQ+iGGx8I4EQEiOCEVFCuIYgeKFqjD4J+kb75FOhtlra7kJhYQulJpRLQltsi9Terzszx4de0tJ2L9L6f5r55v995zeZc85+ZwVhSNd126Bh6JpinYJXgSWAC3AC3UAH0KAQXizKIyO1CxUVFUao9UUoppW6Hm8fNnYh2ALEhcHfhuKMafpP1dTUtD0RjK7rjuFhYy+CvcBTYUA8rgGFOu5yOk+WlJQMhQ2TnZ29RCHOAsufAGKSFPwplFXg8XhuhgyTmZu7Rij1K4oFswUyQb2W4O1L1dVlQWFycnJ0S1ECOOYAZEwDKJnn8VRWzgiTmZn5gpBaDSOrY67VKQWrqqurG8YCcuxC13WH0LSi/wkEwGUpivLz8yOnwAwbxqcoloVbUdM05s+PQkoZ3DxVy7u6ej4euxEwuo/4jXuEuHyTkpJZvz6P5StWEB8XjxACpRStba1c9/koLS2hubk5VKB+lPW8x+N5qAE8l5i0H4EeLMtut7N123Z27HiflNRUoqOiEWJk2gkhiI6KZnFKCq+vz8PliqGu7gaWZQUtq4Q0mpsay4Wu6za/32hSEB8ow+FwcODAYRanpIb4wnDndgNHjhxkcHAwmLUtwm5LkoOGoQcDAdj54e6wQAAWp6Tywc7doVjj/H5/rtQU64I509MzSE/PCAtkTCtXhparhFgngfRgxrz8/BmfmaY5bXziXAmUP0HpUkFKIEdERARpadOv+M6ODvbs+Yha37VJENXVlTxobhqPpaUtw263ByRRilQJxAYyLVwYi6ZpU+I9Pd0cOXqI5qZGTp78nKtXr1B/s459n32CEJLkRc+OezVNIzb26YAwAmJt/IfWoL+/n2PHjuKMjublFa9Q67vGl1+cwDRNtm7bTnZ2TrglAebbgAEgaiZHe/sjLMsa32GHhob45cxPbNr0DhkZqzEMg+PHjlJ38wbvFrzHhg1T54dpmrS3PwoG06clL0reDsI1k8OyLF58KY24uJEGr7W1hdfW6CQnj3wGKSWrVmcSE7OQNze+NW2NurrrVFT8EZBEwV8SxO1gyGW/nR+/TkpKxmabPBkdDgd5+W/MmH/+3LlgQyDhllQIbzDjxYseamt9QQtOJ6/3Ml7v5aA+pfBKLMpDKfpN4dfcu3c3LJC7d27z3beFIXmlpFxGRmoXBLQGM/f19fLjD9+HVNiyLMrKSjl4cD8DAwOhpLQkJCRU2SoqKoysrJyfR08AAWVO2FVNw6CnpwdXTMx47GFbG7W1Ps6XnqOp8X5I4CNSp4uLi00bgGn6T2k2+05C2HMsy8LjrqKo6CytrS3MmzePiMhIent6MQx/GACjGNBnk7IQJvTA2dm5BxTqcKBEp9OJK8ZF4/3GsAedSQK1z+12H4cJbafTGXUCuB4osbu7e1ZBQPk6Ozu/GrsbhykpKRkSqAIEXbM4WiB1mJpWUF9fPzwFBsDtdt9SQmxk5CdiLjUgUBtrKisnbbhTWvqLVVUXBGotiPY5AulEyTy32131+INpzxdut/uSFCoLqJ1dDuUzNZnx+ElyTFMblVE1Nja2L12admZocHgQwWogcHcUCAH6JOpQV2fnVp/X+/dMvpD+n8nKynpGCW2XQG0BEsLgaAF1WpOysKqqakaIsGDGtHnzZu3Bg7Y1SGstkI5SSxAiBsUCBF1K8Y8QNGBxRQj1e2JiYmVxcfH0TfI0+hc+ruUBP9owqwAAAABJRU5ErkJggg==">
                </button>
            </div>
            <div class="pl-5 pt-1">
                <button class="rounded-full">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAABmJLR0QA/wD/AP+gvaeTAAAFD0lEQVRYhb2YX2zTVRTHP+f+fu1aYdiwubEo7UgwmpBAiJDQ0cF8UoYJMcYXEolPyAORaAYqBoKAhj+JEEFN9MF/EQjhDRwajbK2KyLRSIBIJMDWoZINlo0OBrS9x4exjZb9+VWQ70tz7z333E/vveecm59QguY2NExxc7lGsTQAMxCJgE66PdwLtAuctkJLznWbjx85csmrb/FiFK2vXyh5bUJYBDgefedQvgWzPZWKx+8JJBqNTjfG2aXwrMfFR1umGc2/mkqlzpUMUheLvYTyETDx3iCG1KfCK0eTyT0jDY64zXWx2BsoHwL++wQB4Bd4YerUcLCjI/3DuCDR+fPfEWTTfQQolBALhyPa0ZFuGRWkLhZ7SZCd/xvEsJ5+LBI+ezGdPjnMd1vRaHQ6xvldYMIDAAHoM8KsZDJ5HsAM9hrj7HqAEAATLXww2BCAWCzWYJWfHiDEkARd0NramjAAFpruyZkIwWBwqO04DsaYMWYMyyKrAWRuQ8MUXzbXAbilAoRCIZYuXca8aJRAIEAmkyGRaKEuOp++vgxNTa9hrR3PTQ61j7r+bHaxIiVD1EypYf2GjVRUVA71lZeX09j4HACKIuKpgrjgNLqqstBbxRlWJBzhrbfXMXlyxag2rckk+Xzem0OxCw0wwyuA67osWfI8m97bOiYEQKx+gVe3gJlhBkr52KqqeoRPPv2MSO00IpEIgbKycV2HQiEcx2uh1loDWj6eWWdnF1999TmLGxdz6NBBkomW8abQ09Pj5aIOapLnS5qIt5CItzBxYjm7dw/koVj9wlHtjx07iqp6dY8LkgEtOPCqHMzuF6rzgqvQ7cCpgOWcH/r6MgBjwnR1dbJ3z9eeIYCrLqrtCBUANVlY1mt4qn+EMOp16PApX4aUEwHFWjsiTHf3FTZv3MD169dK4JA2JxwOzwdmzbwhrOtyiGRHj+WHrVB/XciJcKZMUVWOH/+FqupqIpFabty4wcYN67n418USIAD0exc0Hs7KsqYrhoCHIxVgaa9w1RF+nDCwM19+8RlGhLb2NtrT7SVCgMAR1xjTvKJbNGCH05oFWiYovwaVmwKP3xIWZ4QJdwTByz2G3wJ5ehyYOWs2zYe/oe3ChZIhgKyqHjZ70+bJ6bcKc/GBhy0fT7ac9SuXXDgwybKtsjAUAxYW9Q0UtlMnT7BmzVrvmbRAcjiVSnUaVJYUDx0PQigPO/5x2PmPoTwPf5Qp14oK6tz+gd+enh7eenN1SeE6KCO6HcAV0SeK52+/NLzimTKlz4HqnBAsyk81WcEwcJRXrlwuGULhYDKZTAIY1dEz63k/bKm0BBVev2wofmE4gM9z8rxLGZ9jVg02XFHp1BEi9kyZsqXSogJvdhmmZe+26Re46e39UyxFZXk8Hh+63QbD0WKrEwHl3UrLLQMrug0VeaHTheIU82dZ6XcCAGF9KpXYd2eXcdADQMH//a7cvn/TQA7YUWFZWZNnZU2ec/7ChVsf+g8gytZUMrn5bjagY+qCXSKy8o7+/W0+rTzvp94KvsHOOf1C6HaEpn2wpjqP9f6oyqCyvHgnCkEeiwaN8ccV5njxeN3A2mrL3663HVE46HPMqjvvxIggABdqG0J+a/cp8sxYTjtd2FaZJ+0bywqALGizNWb7z4lE63jGBRurIH+FF7wIsgqYBwURe7bXkf1rqnLpblfqBJ0B1AKDH2quglwAe1rgiKoeTqVSnePi3ta/monbuBTtk9QAAAAASUVORK5CYII=">
                </button>
            </div>
            <div class="pl-5 pt-1">
                <button class="rounded-full" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAABmJLR0QA/wD/AP+gvaeTAAADgUlEQVRYhc3YT2gcZRjH8e/zzm4T/5BGCraNzQYRTUMjxRr/bJIl0+bS4KF4CLkWBE+KOQj12JsoSHspLSq02gptthc1sohRdrN/2sVAFJqCKbQQiSVK7a66TbIzO4+HZrVmXbuTP7v+TjPvvM/D5zDvvDMj+Iht24El17UtZVDhWaATaAVagN+A28CsIlN4fN3UZCXi8bhba3+pZdJztr0jWHRHEQ4D2334F1DOlErOsWw2u7AujG3bzcWiewThCPCAD8TqLCr6dmtLy7uxWGzZN6avr69TkQvA3nUg/hGFq6LeSCaTuVIzJhyJDIjqpyhbNwpyT/7whJcvp1IT98X09/fbnhIDmjcBUs4iag5mMpOTVTHhcHi3GCvL3dWx2ckZ4YVUKjVbHjDlA9u2m8WyxuoEAWj1lLGhoaGmCkzRdd9CebpOkHL25vO/v1k+EVh5jjjudda3fNeaO6j3eCaT+dkABIvuaIMgAA+qWKMAYtt2wHHcHxV2NAgDsLAlGNhlllzXbjAEYLvjOBFjKYMNhgCgIoMG6Gk0ZCU9RuHJRisAVHkqAGyrtSAQCDIwYGOMue9cz/NIJOK4rlNTb4FtAXwsadd1cF2H115/4z9BqsqpkydqhqzkIQMs+qlIJOKcOnkCVa0K+fCD95mY+MpPW4CC1R5qfxWk1U/VjRvXuVMo8My+fRXXPjl3lvHxz/xCUPjJag91vAQ84bd49tosgrCnu/uvsbEL57l4ccw3BMBA1toV6ugSiKylwczMFZq2NLG7q4vxLz7n3NmP1wQBQDkv4XBkUIxWvHXVGhEh3NvHpUy66n1US4yw//+yN918rG1nu4nH464qHzUQAujpaDRaMgClknMMn0t8wxhQsIw5DmABzM/PF0KhDgvYX2+MQY+mUqkv7x6vpKXl4XeA7+tL0elcLvfe37CVxGKxZUFHEPJ1ktwuWdbIzMxMsQIDkE6nf1CRQ2z+/bMo6KHs5OS1ewcrdrtLyWRC0AMgtzYJkkPNwXQ6nVx94V+33nQ6fdmI9gLfbaxDp0uWeX71l2Q5VrWyubm5W93de84sLxWXEF4EgmsmQMGgR/O53CvTU1O/VJtX0/+Z3t7eR1WsUUEPAzt9OG6CnraMOZ5MJqsifGHKGR4etubnFwYw3gGgB9VORB5B2YqQV+VXEWbx+FZEv2lra5uMRqOlWvv/CSM9UnfezSpHAAAAAElFTkSuQmCC">
                </button>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white bg-gray-700 rounded md:bg-transparent md:text-white md:p-0 dark:text-white" aria-current="page"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="28" width="28">
                            <path d="M17.5 23.979 21.25 23.979C21.386 23.979 21.5 23.864 21.5 23.729L21.5 13.979C21.5 13.427 21.949 12.979 22.5 12.979L24.33 12.979 14.017 4.046 3.672 12.979 5.5 12.979C6.052 12.979 6.5 13.427 6.5 13.979L6.5 23.729C6.5 23.864 6.615 23.979 6.75 23.979L10.5 23.979 10.5 17.729C10.5 17.04 11.061 16.479 11.75 16.479L16.25 16.479C16.939 16.479 17.5 17.04 17.5 17.729L17.5 23.979ZM21.25 25.479 17 25.479C16.448 25.479 16 25.031 16 24.479L16 18.327C16 18.135 15.844 17.979 15.652 17.979L12.348 17.979C12.156 17.979 12 18.135 12 18.327L12 24.479C12 25.031 11.552 25.479 11 25.479L6.75 25.479C5.784 25.479 5 24.695 5 23.729L5 14.479 3.069 14.479C2.567 14.479 2.079 14.215 1.868 13.759 1.63 13.245 1.757 12.658 2.175 12.29L13.001 2.912C13.248 2.675 13.608 2.527 13.989 2.521 14.392 2.527 14.753 2.675 15.027 2.937L25.821 12.286C25.823 12.288 25.824 12.289 25.825 12.29 26.244 12.658 26.371 13.245 26.133 13.759 25.921 14.215 25.434 14.479 24.931 14.479L23 14.479 23 23.729C23 24.695 22.217 25.479 21.25 25.479Z"></path>
                        </svg></a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="28" width="28">
                            <path d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.163 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.163 11.654C17.612 11.924 17.612 12.575 17.163 12.846ZM21.75 20.25C22.992 20.25 24 19.242 24 18L24 6.5C24 5.258 22.992 4.25 21.75 4.25L6.25 4.25C5.008 4.25 4 5.258 4 6.5L4 18C4 19.242 5.008 20.25 6.25 20.25L21.75 20.25ZM21.75 21.75 6.25 21.75C4.179 21.75 2.5 20.071 2.5 18L2.5 6.5C2.5 4.429 4.179 2.75 6.25 2.75L21.75 2.75C23.821 2.75 25.5 4.429 25.5 6.5L25.5 18C25.5 20.071 23.821 21.75 21.75 21.75Z"></path>
                        </svg></a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0">Pricing</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>