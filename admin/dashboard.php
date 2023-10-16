<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
</head>

<body>
    <div class="min-h-full">
        <div class="bg-gray-800 pb-32">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="border-b border-gray-700">
                        <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-20" src="https://minesa.live/assets/images/main_logo.png"
                                        alt="Minesa">
                                </div>
                                <div class="hidden md:block">
                                    <div class="ml-10 flex items-baseline space-x-4">
                                        <a href="#"
                                            class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                            aria-current="page">Dashboard</a>
                                        <a href="./create-customer.php"
                                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Create</a>
                                        <a href="./read-customer.php"
                                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Read</a>
                                        <a href="./update-customer.php"
                                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Update</a>
                                        <a href="./delete-customer.php"
                                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="-mr-2 flex md:hidden">
                                <button type="button"
                                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="absolute -inset-0.5"></span>
                                    <span class="sr-only">Open main menu</span>
                                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-700 md:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 py-3 sm:px-3">
                        <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                            aria-current="page">Dashboard</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
                    </div>
                </div>
            </nav>
            <header class="py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-white">Dashboard</h1>
                </div>
            </header>
        </div>
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-1">
            <li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-32 object-cover rounded-full"
                        src="../images/furkan.jpg"
                        alt="">
                    <h3 class="mt-6 text-sm font-medium text-gray-900">Furkan Baykal</h3>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                        <dt class="sr-only">Title</dt>
                        <dd class="text-sm text-gray-500">Software Developer</dd>
                        <dt class="sr-only">Role</dt>
                        <dd class="mt-3">
                            <span
                                class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Admin</span>
                        </dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="flex w-0 flex-1">
                            <a href="mailto:furkanbaykal2014@hotmail.com"
                                class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path
                                        d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                    <path
                                        d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                </svg>
                                Email
                            </a>
                        </div>
                        <div class="-ml-px flex w-0 flex-1">
                            <a href="tel:+31648763275"
                                class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                        clip-rule="evenodd" />
                                </svg>
                                Call
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>

    </div>
</body>

</html>