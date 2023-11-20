<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InProject - Project management for freelancers.</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Epilogue:400,600,800,900&display=swap" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Epilogue', sans-serif;
        }
    </style>

</head>

<body class="antialiased">

    <section class="relative flex items-center justify-center bg-[#f5f5f5]">
        <div class="relative mx-auto w-full max-w-7xl items-center">
            <div>
                <div class="flex justify-center py-12">
                    <img width="100" height="100" src="/rocket.png" alt="InProject" />
                </div>
                <div class="text-center">
                    <span class="w-auto"><span class="text-sm font-semibold uppercase text-[#4354ff]">In Project</span></span>
                    <p class="mt-8 text-3xl font-extrabold tracking-tight text-black md:text-5xl">Project management<br />for freelancers</p>
                    <p class="mx-auto mt-4 max-w-xl text-base text-slate-500 lg:text-xl">Easy-to-use web app built specifically for freelancers to manage their projects and business operations.</p>
                </div>
                <div>
                    <div class="mt-10 flex flex-col items-center justify-center gap-3 lg:flex-row">
                        <a href="/admin/login" class="inline-flex w-full items-center justify-center rounded-full border-2 border-black bg-black px-6 py-2.5 text-center text-sm text-white duration-200 hover:border-black hover:bg-transparent hover:text-black focus:outline-none focus-visible:outline-black focus-visible:ring-black lg:w-auto"> Getting started </a>
                        <a href="#_" class="inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600"> Learn more → </a>
                    </div>
                </div>
            </div>
            <div class="mx-auto max-w-lg py-12">
                <ul class="space-y-3" role="list">
                    <li>
                        <div class="group relative flex items-start space-x-3 rounded-2xl bg-white p-4 shadow">
                            <div class="min-w-0 flex-1">
                                <div class="text-lg font-medium text-gray-900">
                                    <a class="flex w-full justify-between font-bold text-gray-700" href="#_"><span class="absolute inset-0" aria-hidden="true"></span> Organize Clients and Projects</a>
                                </div>
                                <p class="mt-1 text-gray-500">Keep all your projects and client details organized in one place. Easily view upcoming deadlines and task lists.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="group relative flex items-start space-x-3 rounded-2xl bg-white p-4 shadow">
                            <div class="min-w-0 flex-1">
                                <div class="text-lg font-medium text-gray-900">
                                    <a class="flex w-full justify-between font-bold text-gray-700" href="#_"><span class="absolute inset-0" aria-hidden="true"></span> Track Time and Get Paid Faster</a>
                                </div>
                                <p class="mt-1 text-gray-500">Easily log billable hours on projects and generate invoices right from the app. Get paid faster by sending professional invoices directly to clients.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>