<!DOCTYPE html>
<html lang="pt-br" class="scroll-pt-20 scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="API responsável por fornecer dados centralizados e acessíveis sobre as províncias de Angola">
    <meta name="theme-color" content="#fff">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/manifest.json')}}">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Angola API, API provincias de Angola, Angola, Api, provincias Angola">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Portuguese">
    <meta name="author" content="Amaral Salgado">
    <title> {{ config('app.name') }} - @yield('metaTitle')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/default.js'])
</head>


<body class="bg-white text-black dark:text-white dark:bg-zinc-800 overflow-hidden">

    <main class="grid grid-cols-[1fr] grid-rows-[60px_1fr] lg:grid-cols-[320px_1fr] h-[100vh]" id="main">

        <header
            class="p-[10px_20px] z-10 bg-white sticky top-0 border-b-[1px] border-zinc-200 dark:border-zinc-800 dark:bg-zinc-900 col-start-1 col-end-3 grid-cols-[1fr_30px_60px] lg:grid-cols-[1fr_30px_80px] grid items-center justify-between">
            <div class="flex items-center ">

                <button
                    class="text-2xl h-[40px] w-[40px] dark:active:dark:bg-zinc-800 dark:bg-transparent bg-zinc-100 p-[20px] rounded-full lg:hidden flex items-center justify-center"
                    id="btn-show-aside">
                    <i class=" mdi mdi-menu"></i>
                </button>

                <h1 class="font-semibold ml-1 text-[16px] lg:text-[20px] lg:ml-0"><x-api-name></x-api-name></h1>
            </div>

            <div class="flex justify-end">
                <a href="{{config('app.github_repository')}}" target="_blank">
                    <img src="{{asset('images/github-mark.png')}}" alt="GitHub">
                </a>
            </div>

            <div class="flex justify-end">
                <input type="checkbox" title="Tema" name="theme" id="btn-theme"
                    class="w-[50px] h-[25px] lg:w-[60px] lg:h-[30px] bg-zinc-100 appearance-none rounded-full relative before:content-[''] before:absolute before:left-[0px] before:top-[50%] before:translate-y-[-50%] before:w-[28px] before:h-[28px] before:bg-[url(../images/sun.png)] before:bg-no-repeat before:bg-[0_0] before:bg-[length:100%] before:rounded-full lg:checked:before:left-[calc(100%_-_30px)] checked:before:left-[calc(100%_-_28px)] checked:bg-zinc-700 checked:before:bg-[url(../images/moon.png)] before:transition-[left_1s] cursor-pointer ">
            </div>

        </header>

        <aside
            class="p-[20px_60px] left-[-320px] bg-[#f5f5fa] dark:bg-zinc-900 h-[100vh] overflow-y-auto lg:sticky fixed top-[60px] lg:block lg:col-start-1 lg:col-end-2 z-10 transition-[left_1s] hidden"
            id="aside">

            <x-docs.menu.menu />

        </aside>

        <section
            class="md:p-[40px_60px] p-[40px_40px] col-start-1 col-end-2 lg:col-start-2 lg:col-end-3 overflow-x-hidden overflow-y-auto">

            <div>
                <h1 class="md:text-4xl font-semibold mb-5 text-2xl">@yield('title')</h1>
            </div>

            @yield('content')

        </section>
    </main>

</body>

</html>
