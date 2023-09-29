<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Splide JS --}}
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
</head>
<body>
    <nav class="hidden xl:flex c-container justify-between items-center py-4 fixed z-50 w-full shadow-lg font-libre bg-custom-off-white">
        <a href="/">
            <img src="{{ asset('assets/logo/logo-horizontal-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-32 sm:w-36 md:w-40">
        </a>
        <span class="flex justify-center items-center gap-16">
            <span class="flex justify-center items-center gap-6 sm:gap-8 md:gap-10 text-sm sm:text-base md:text-md">
                <a href="#hero" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Home</a>

                <a href="#about-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green">About Us</a>

                <a href="#latest-project" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Projects</a>

                <a href="#contact-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Contact Us</a>

                <a href="/id" class="transition-colors text-custom-light-green hover:text-custom-dark-green">EN</a>
            </span>
        </span>
    </nav>

    <nav class="flex xl:hidden c-container bg-custom-off-white justify-between items-center py-4 fixed z-50 w-full shadow-lg">

        <a href="/">
            <img src="{{ asset('assets/logo/logo-horizontal-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-32 sm:w-36 md:w-40">
        </a>

        <button class="block rounded bg-custom-red p-3 transition" onclick="toggleNavbar()">
            <div class="h-6 w-6 relative">
                <span id="nav-icon-top" class="w-6 h-[0.125rem] bg-custom-light-green rounded-full absolute inset-x-0 mx-auto top-0.5 transition"></span>
                <span id="nav-icon-mid" class="w-6 h-[0.125rem] bg-custom-light-green rounded-full absolute inset-0 m-auto transition"></span>
                <span id="nav-icon-bottom" class="w-6 h-[0.125rem] bg-custom-light-green rounded-full absolute inset-x-0 mx-auto bottom-0.5 transition"></span>
            </div>
        </button>
    </nav>

    {{-- Mobile Links --}}
    <nav id="mobile-nav-links" class="c-container font-libre py-2 bg-custom-off-white hidden text-custom-light-green text-sm sm:text-base md:text-md fixed top-[83.39px] sm:top-[89.81px] md:top-[96.23px] left-0 z-40 w-full shadow-lg">
        <a href="#home" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">Home</a>

        <a href="#about-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">About Us</a>

        <a href="#latest-project" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">Projects</a>

        <a href="#contact-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">Contact Us</a>

        <a href="" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">EN</a>
    </nav>

    {{-- Hero --}}
    <div id="hero" class="pt-32 sm:pt-36 md:pt-40 lg:pt-44 xl:pt-40 pb-16 c-container bg-custom-off-white flex flex-col justify-center items-center gap-12 md:gap-10 xl:gap-14">
        <img src="{{ asset('assets/about-us/background.svg') }}?t={{ env('VERSION_TIME') }}" alt="about-us-background" class="w-full absolute bottom-[0rem] sm:-bottom-[4rem] md:-bottom-[12rem] lg:-bottom-[20rem] xl:-bottom-[28rem] 2xl:-bottom-[36rem] z-10">

        <div class="flex gap-16 justify-center items-center z-20">
            <div class="hidden xl:block">
                <img src="{{ asset('assets/hero/person-1.svg') }}?t={{ env('VERSION_TIME') }}" alt="person-1" class="w-[28rem]">
            </div>

            <div class="flex flex-col gap-8 justify-center items-center">
                <div class="flex flex-col justify-center items-center gap-2">
                    <img src="{{ asset('assets/logo/logo-icon-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="person-1" class="w-14 md:w-16 xl:w-18">
                    <p class="text-sm sm:text-base md:text-lg xl:text-xl font-libre text-center leading-tight sm:leading-tight md:leading-tight xl:leading-tight text-custom-dark-blue">Create With Us</p>
                </div>

                <h1 class="text-xl sm:text-2xl md:text-4xl xl:text-5xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">
                    Crafting Stunning Websites for Your Business
                </h1>

                <p class="font-montserrat font-medium text-center text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose  text-custom-dark-blue">Together, let's turn your website dreams into a reality, say "<span class="font-bold underline">Yes</span>" to extraordinary design with us!</p>

            </div>

            <div class="hidden xl:block">
                <img src="{{ asset('assets/hero/person-2.svg') }}?t={{ env('VERSION_TIME') }}" alt="person-2" class="w-[28rem]">
            </div>
        </div>

        <div class="flex justify-center items-center w-full z-20">
            <ul class="flex justify-center flex-wrap items-center w-full list-disc text-sm sm:text-base md:text-lg xl:text-xl font-libre text-center text-custom-dark-blue gap-x-8 md:gap-x-14 xl:gap-x-16 gap-y-6">
                <li>Personal Website</li>
                <li>E-Learning</li>
                <li>Company Profile</li>
                <li>Landing Page</li>
                <li>E-Commerce</li>
                <li>Many More ++</li>
            </ul>
        </div>

        <div class="z-20">
            <button class="bg-custom-dark-green text-custom-off-white hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] active:bg-[linear-gradient(rgb(0_0_0/20%)_0_0)] rounded-full py-2 md:py-3 xl:py-4 px-8 w-full font-montserrat text-base sm:text-base md:text-lg xl:text-xl font-medium">Let's Talk</button>
        </div>

        <a href="#about-us" class="text-base font-libre text-custom-lightest-green flex flex-col justify-center items-center animate-[bounce_2s_infinite] mt-3 z-20">
            <p class="text-custom-dark-green font-medium">Scroll Down</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 -m-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </a>
    </div>

    {{-- About Us --}}
    <div id="about-us" class="c-container min-h-screen flex justify-center items-center bg-custom-off-white py-32">
        <div class="c-container flex justify-center items-center gap-28 z-20">
            <div class="hidden xl:flex flex-col justify-center items-center z-20">
                <img src="{{ asset('assets/logo/logo-icon-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-[10rem] xl:w-[10rem] 2xl:w-[10rem]">
                <img src="{{ asset('assets/logo/logo-text-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-[20rem] xl:w-[20rem] 2xl:w-[20rem]">
            </div>
            <div class="flex flex-col items-start gap-8 z-20 flex-1">
                <span class="relative">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl xl:text-5xl 2xl:text-6xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">About Us.</h1>
                    <span id="nav-icon-bottom" class="w-3/4 h-[0.125rem] bg-custom-dark-green rounded-full absolute left-0 bottom-0"></span>
                </span>

                <p class="font-montserrat text-justify font-medium text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">Welcome to <span class="font-bold text-custom-dark-green">WebCreativs</span>, where <span class="font-bold text-custom-dark-green">passion</span> and <span class="font-bold text-custom-dark-green">innovation</span> converge. Founded in 2023 by a group of driven college students, we embody the creative force that brings your dream websites to life. Despite our academic pursuits, we've quickly garnered a reputation for <span class="font-bold text-custom-dark-green">excellence</span>, consistently offering top-tier, <span class="font-bold text-custom-dark-green">professional web solutions</span> at prices that simply make sense.

                    <br><br>
                    At <span class="font-bold text-custom-dark-green">WebCreativs</span>, your satisfaction is our paramount concern. With a user-centric and <span class="font-bold text-custom-dark-green">professional approach</span>, our dedicated team of college students is resolutely committed to delivering <span class="font-bold text-custom-dark-green">exceptional web solutions</span> tailored to your needs, all while ensuring they fit within realistic budgets. We understand the delicate balance between <span class="font-bold text-custom-dark-green">quality</span> and <span class="font-bold text-custom-dark-green">affordability</span>, and we pride ourselves on timely project completion. <span class="font-bold text-custom-dark-green">Trust Us</span> to transform your vision into reality with our <span class="font-bold text-custom-dark-green">high-quality work</span>, pragmatic pricing, and unwavering commitment to <span class="font-bold text-custom-dark-green">on-time delivery</span>.</p>
            </div>
        </div>
    </div>

    {{-- What we do --}}
    <div id="what-we-do" class="c-container min-h-screen bg-custom-lightest-green flex flex-col py-32 gap-8 sm:gap-10 md:gap-12 xl:gap-16">
        <div class="flex flex-col items-end gap-2">
            <h1 class="text-2xl sm:text-3xl md:text-4xl xl:text-5xl 2xl:text-6xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">What We Do?</h1>

            <p class="font-montserrat font-medium text-end text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">At <span class="font-bold text-custom-dark-green">WebCreativs</span>, we offer a wide range of services to cater to your diverse needs, including:</p>
        </div>

        <div class="flex overflow-x-scroll xl:overflow-x-visible xl:grid xl:grid-cols-2 2xl:grid-cols-3 gap-8 sm:gap-10 md:gap-12 xl:gap-16 text-center group">
            <div class="bg-white xl:bg-custom-off-white xl:hover:bg-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition xl:hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/personal-website.svg') }}?t={{ env('VERSION_TIME') }}" alt="personal-website" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-sm sm:text-base md:text-lg xl:text-xl">Personal Website</h1>

                <p class="font-medium text-center text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray -mt-6">We create personalized websites that encompass personal portfolios, blogs, and more. These websites serve as a comprehensive online platform to showcase your skills, experiences, and insights</p>
            </div>
            <div class="bg-white xl:bg-custom-off-white xl:hover:bg-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition xl:hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/company-profile.svg') }}?t={{ env('VERSION_TIME') }}" alt="company-profile" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-sm sm:text-base md:text-lg xl:text-xl">Company Profile</h1>

                <p class="font-medium text-center text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray -mt-6">We develop professional company profiles that showcase your business's identity, values, and achievements, helping you make a strong impression on potential clients and partners</p>
            </div>
            <div class="bg-white xl:bg-custom-off-white xl:hover:bg-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition xl:hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/landing-page.svg') }}?t={{ env('VERSION_TIME') }}" alt="landing-page" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-sm sm:text-base md:text-lg xl:text-xl">Landing Page</h1>

                <p class="font-medium text-center text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray -mt-6">Our expertly designed landing pages are tailored to capture the attention of your target audience and drive conversions effectively</p>
            </div>
            <div class="bg-white xl:bg-custom-off-white xl:hover:bg-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition xl:hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/e-learning.svg') }}?t={{ env('VERSION_TIME') }}" alt="e-learning" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-sm sm:text-base md:text-lg xl:text-xl">E-Learning</h1>

                <p class="font-medium text-center text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray -mt-6">Our e-learning solutions are designed to facilitate seamless online education, making it easy for you to share knowledge, courses, and resources with your audience.</p>
            </div>
            <div class="bg-white xl:bg-custom-off-white xl:hover:bg-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition xl:hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/e-commerce.svg') }}?t={{ env('VERSION_TIME') }}" alt="e-commerce" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-sm sm:text-base md:text-lg xl:text-xl">E-Commerce</h1>

                <p class="font-medium text-center text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray -mt-6">We create fully functional e-commerce websites that allow you to showcase and sell your products or services online, providing a seamless shopping experience for your customers</p>
            </div>
            <div class="bg-white xl:bg-custom-off-white xl:hover:bg-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition xl:hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/many-more.svg') }}?t={{ env('VERSION_TIME') }}" alt="many-more" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-sm sm:text-base md:text-lg xl:text-xl">Many More ++</h1>

                <p class="font-medium text-center text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray -mt-6">We love challenges and are open to working on a wide variety of web projects, from forums and social networks to community websites. Whatever your vision, we can bring it to life on the web
                </p>
            </div>
        </div>
    </div>

    {{-- Work Process --}}
    <div id="work-process" class="c-container bg-custom-off-white flex flex-col justify-center items-center py-32 gap-8 sm:gap-10 md:gap-12 xl:gap-24">
        <div class="c-container flex flex-col items-start w-full gap-8 z-20">
            <span class="relative">
                <h1 class="text-2xl sm:text-3xl md:text-4xl xl:text-5xl 2xl:text-6xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">Work Process.</h1>
                <span id="nav-icon-bottom" class="w-3/4 h-[0.125rem] bg-custom-dark-green rounded-full absolute left-0 bottom-0"></span>
            </span>

            <p class="font-montserrat font-medium text-xs sm:text-sm md:text-base xl:text-lg leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20 w-5/6">
                At <span class="font-bold text-custom-dark-green">WebCreativs</span>, we prioritize transparency, ensuring you're well-informed about each step in bringing your website vision to life.
            </p>
        </div>

        <div id="work-process-selectors" class="w-full flex justify-center items-center gap-2 md:gap-4 xl:gap-6 flex-wrap z-20">
            <div class="active work-process-selector flex justify-center items-center rounded-full sm:p-3 md:p-4 lg:p-5 xl:p-6 bg-white text-custom-light-green hover:bg-custom-light-green/30 shadow-[0px_3.13402px_3.13402px_0px_#5F6342] cursor-pointer transition" onclick="changeWorkProcess(this)" data-work-process="1">
                <svg class="w-2 sm:w-4 md:w-6 lg:w-8 xl:w-10 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule=" evenodd" clip-rule="evenodd" d="M2.11989 4.3838H5.78226V8.04617H20.4317V4.3838H24.0942V7.13058H25.9253V2.55261H20.2755C19.8983 1.48578 18.881 0.721436 17.6849 0.721436H8.52904C7.33307 0.721436 6.31563 1.48578 5.93855 2.55261H0.288696V31.8516H25.9253V26.358H24.0942V30.0204H2.11989V4.3838ZM7.61345 6.215V3.46822C7.61345 2.96253 8.02337 2.55261 8.52904 2.55261H17.6849C18.1907 2.55261 18.6006 2.96253 18.6006 3.46822V6.215H7.61345Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0881 8.86997L32.9659 12.7478C33.3439 13.1259 33.3439 13.7386 32.9659 14.1186L21.3324 25.752C21.1501 25.9323 20.9039 26.0351 20.6461 26.0351H16.7683C16.2331 26.0351 15.7988 25.6008 15.7988 25.0657V21.1878C15.7988 20.9299 15.9016 20.6837 16.0819 20.5035L27.7153 8.86997C28.0954 8.48996 28.7081 8.48996 29.0881 8.86997ZM26.4202 12.9068L28.9271 15.4138L30.9087 13.4322L28.4016 10.9252L26.4202 12.9068ZM17.7378 24.0963H20.2447L27.5563 16.7847L25.0494 14.2776L17.7378 21.5891V24.0963Z" fill="currentColor" />
                </svg>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 sm:w-8 md:w-10 xl:w-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

            <div class="work-process-selector flex justify-center items-center rounded-full p-2 sm:p-3 md:p-4 lg:p-5 xl:p-6 bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray shadow-[0px_3.13402px_3.13402px_0px_#5F6342] cursor-pointer transition" onclick="changeWorkProcess(this)" data-work-process="2">
                <svg class="w-2 sm:w-4 md:w-6 lg:w-8 xl:w-10 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.66936 18.509C9.88838 18.509 11.1645 19.1222 12.378 20.3099C13.8437 22.1606 14.3041 23.7313 13.7461 24.9742C12.5271 27.694 6.82978 28.9112 3.37714 29.3181C3.95719 27.9334 4.63667 25.6832 4.63667 22.7038C4.63667 21.076 5.75073 19.4279 7.28278 18.7871C7.73025 18.6011 8.19611 18.509 8.66936 18.509ZM12.5142 15.7083C13.4202 16.1925 14.2986 16.8039 15.1143 17.6104L15.3463 17.8719C15.8159 18.4649 16.1952 19.0449 16.5267 19.6176C16.0313 20.0577 15.5231 20.5015 15.0057 20.9508C14.6889 20.356 14.2838 19.7446 13.7848 19.1186L13.713 19.0375C12.9028 18.2384 12.0465 17.6399 11.17 17.244C11.6119 16.7303 12.0594 16.2183 12.5142 15.7083ZM30.0537 2.24755C30.1844 2.37828 30.3575 2.61216 30.3372 3.12222C30.236 5.73151 25.5717 11.4086 17.9261 18.3617C17.591 17.8204 17.2227 17.2753 16.79 16.7284L16.4125 16.3049C15.5875 15.4891 14.7129 14.8152 13.7977 14.2756C19.6736 7.80862 26.0026 1.96766 29.0538 1.84243C29.5731 1.8406 29.7996 1.99344 30.0537 2.24755ZM32.1768 3.19404C32.2118 2.29544 31.9282 1.51835 31.2359 0.825984C30.6613 0.251459 29.8622 -0.0321075 28.9801 0.00288789C23.8757 0.21095 13.6909 11.4565 9.21074 16.6989C8.31213 16.6087 7.42273 16.7339 6.57199 17.0912C4.34942 18.0174 2.79526 20.3265 2.79526 22.7038C2.79526 27.2042 1.05328 29.8392 1.03672 29.865L0 31.4044L1.84877 31.3013C3.00887 31.2387 13.2674 30.5408 15.4273 25.7292C15.8361 24.814 15.9172 23.8326 15.6943 22.7922C21.968 17.3987 31.9871 8.04801 32.1768 3.19404Z" fill="currentColor" />
                </svg>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 sm:w-8 md:w-10 xl:w-12">
                <path stroke-linecap=" round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

            <div class="work-process-selector flex justify-center items-center rounded-full p-2 sm:p-3 md:p-4 lg:p-5 xl:p-6 bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray shadow-[0px_3.13402px_3.13402px_0px_#5F6342] cursor-pointer" onclick="changeWorkProcess(this)" data-work-process="3">
                <svg class="w-2 sm:w-4 md:w-6 lg:w-8 xl:w-10 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V25.6947H7.9058V34.6654L19.1221 25.6947H31.6232V0H0ZM1.97645 1.97636H29.6467V23.7164H18.4304L9.88223 30.5546V23.7164H1.97645V1.97636Z" fill="currentColor" />
                </svg>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 sm:w-8 md:w-10 xl:w-12">
                <path stroke-linecap=" round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

            <div class="work-process-selector flex justify-center items-center rounded-full p-2 sm:p-3 md:p-4 lg:p-5 xl:p-6 bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray shadow-[0px_3.13402px_3.13402px_0px_#5F6342] cursor-pointer" onclick="changeWorkProcess(this)" data-work-process="4">
                <svg class="w-2 sm:w-4 md:w-6 lg:w-8 xl:w-10 aspect-square" viewBox="0 0 38 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5625 19.25C25.2144 19.25 24.8806 19.3883 24.6344 19.6344C24.3883 19.8806 24.25 20.2144 24.25 20.5625C24.25 20.9106 24.3883 21.2444 24.6344 21.4906C24.8806 21.7367 25.2144 21.875 25.5625 21.875H30.8125C31.1606 21.875 31.4944 21.7367 31.7406 21.4906C31.9867 21.2444 32.125 20.9106 32.125 20.5625C32.125 20.2144 31.9867 19.8806 31.7406 19.6344C31.4944 19.3883 31.1606 19.25 30.8125 19.25H25.5625ZM0.625 7.4375C0.625 5.69702 1.3164 4.02782 2.54711 2.79711C3.77782 1.5664 5.44702 0.875 7.1875 0.875H30.8125C32.553 0.875 34.2222 1.5664 35.4529 2.79711C36.6836 4.02782 37.375 5.69702 37.375 7.4375V20.5625C37.375 22.303 36.6836 23.9722 35.4529 25.2029C34.2222 26.4336 32.553 27.125 30.8125 27.125H7.1875C5.44702 27.125 3.77782 26.4336 2.54711 25.2029C1.3164 23.9722 0.625 22.303 0.625 20.5625V7.4375ZM34.75 8.75V7.4375C34.75 6.39321 34.3352 5.39169 33.5967 4.65327C32.8583 3.91484 31.8568 3.5 30.8125 3.5H7.1875C6.14321 3.5 5.14169 3.91484 4.40327 4.65327C3.66484 5.39169 3.25 6.39321 3.25 7.4375V8.75H34.75ZM3.25 11.375V20.5625C3.25 21.6068 3.66484 22.6083 4.40327 23.3467C5.14169 24.0852 6.14321 24.5 7.1875 24.5H30.8125C31.8568 24.5 32.8583 24.0852 33.5967 23.3467C34.3352 22.6083 34.75 21.6068 34.75 20.5625V11.375H3.25Z" fill="currentColor" />
                </svg>

            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 sm:w-8 md:w-10 xl:w-12">
                <path stroke-linecap=" round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

            <div class="work-process-selector flex justify-center items-center rounded-full p-2 sm:p-3 md:p-4 lg:p-5 xl:p-6 bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray shadow-[0px_3.13402px_3.13402px_0px_#5F6342] cursor-pointer" onclick="changeWorkProcess(this)" data-work-process="5">
                <svg class="w-2 sm:w-4 md:w-6 lg:w-8 xl:w-10 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.7708 22.7917H3.83333C3.44656 22.7917 3.07563 22.638 2.80214 22.3645C2.52865 22.091 2.375 21.7201 2.375 21.3333V3.83333C2.375 3.44656 2.52865 3.07563 2.80214 2.80214C3.07563 2.52865 3.44656 2.375 3.83333 2.375H27.1667C27.5534 2.375 27.9244 2.52865 28.1979 2.80214C28.4714 3.07563 28.625 3.44656 28.625 3.83333V16.9583H2.375M9.66667 28.625H14.7708M12.5833 22.7917L11.8542 28.625M27.1667 28.625L30.0833 25.7083L27.1667 22.7917M22.7917 22.7917L19.875 25.7083L22.7917 28.625" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 sm:w-8 md:w-10 xl:w-12">
                <path stroke-linecap=" round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

            <div class="work-process-selector flex justify-center items-center rounded-full p-2 sm:p-3 md:p-4 lg:p-5 xl:p-6 bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray shadow-[0px_3.13402px_3.13402px_0px_#5F6342] cursor-pointer" onclick="changeWorkProcess(this)" data-work-process="6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-4 sm:w-6 md:w-8 lg:w-10 xl:w-12 aspect-square">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 sm:w-8 md:w-10 xl:w-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

            <div class="work-process-selector flex justify-center items-center rounded-full p-2 sm:p-3 md:p-4 lg:p-5 xl:p-6 bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray shadow-[0px_3.13402px_3.13402px_0px_#5F6342] cursor-pointer" onclick="changeWorkProcess(this)" data-work-process="7">
                <svg class="w-2 sm:w-4 md:w-6 lg:w-8 xl:w-10 aspect-square" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.875 33.6738L19.4756 30.2744L17.625 32.125L22.875 37.375L33.375 26.875L31.5244 25.0244L22.875 33.6738Z" fill="currentColor" />
                    <path d="M26.8125 4.5625H22.875V3.25C22.8729 2.55445 22.5957 1.88797 22.1039 1.39614C21.612 0.904306 20.9456 0.627077 20.25 0.625H9.75C9.05445 0.627077 8.38797 0.904306 7.89614 1.39614C7.40431 1.88797 7.12708 2.55445 7.125 3.25V4.5625H3.1875C2.49195 4.56458 1.82547 4.84181 1.33364 5.33364C0.841806 5.82547 0.564577 6.49195 0.5625 7.1875V34.75C0.564577 35.4456 0.841806 36.112 1.33364 36.6039C1.82547 37.0957 2.49195 37.3729 3.1875 37.375H15V34.75H3.1875V7.1875H7.125V11.125H22.875V7.1875H26.8125V21.625H29.4375V7.1875C29.4354 6.49195 29.1582 5.82547 28.6664 5.33364C28.1745 4.84181 27.5081 4.56458 26.8125 4.5625ZM20.25 8.5H9.75V3.25H20.25V8.5Z" fill="currentColor" />
                </svg>

            </div>
        </div>

        <div class="c-container z-20">
            <div class="work-process-detail" data-work-process="1">
                <div class="c-container w-full flex flex-col xl:flex-row justify-center items-center bg-white p-12 sm:p-16 md:p-20 lg:p-24 xl:p-28 border border-custom-dark-green rounded-3xl gap-8 sm:gap-12 md:gap-16 lg:gap-20 xl:gap-32">
                    <div class="text-custom-light-green">
                        <svg class="w-16 sm:w-20 md:w-24 lg:w-28 xl:w-32 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule=" evenodd" clip-rule="evenodd" d="M2.11989 4.3838H5.78226V8.04617H20.4317V4.3838H24.0942V7.13058H25.9253V2.55261H20.2755C19.8983 1.48578 18.881 0.721436 17.6849 0.721436H8.52904C7.33307 0.721436 6.31563 1.48578 5.93855 2.55261H0.288696V31.8516H25.9253V26.358H24.0942V30.0204H2.11989V4.3838ZM7.61345 6.215V3.46822C7.61345 2.96253 8.02337 2.55261 8.52904 2.55261H17.6849C18.1907 2.55261 18.6006 2.96253 18.6006 3.46822V6.215H7.61345Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0881 8.86997L32.9659 12.7478C33.3439 13.1259 33.3439 13.7386 32.9659 14.1186L21.3324 25.752C21.1501 25.9323 20.9039 26.0351 20.6461 26.0351H16.7683C16.2331 26.0351 15.7988 25.6008 15.7988 25.0657V21.1878C15.7988 20.9299 15.9016 20.6837 16.0819 20.5035L27.7153 8.86997C28.0954 8.48996 28.7081 8.48996 29.0881 8.86997ZM26.4202 12.9068L28.9271 15.4138L30.9087 13.4322L28.4016 10.9252L26.4202 12.9068ZM17.7378 24.0963H20.2447L27.5563 16.7847L25.0494 14.2776L17.7378 21.5891V24.0963Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center xl:items-start gap-4 text-center xl:text-start">
                        <h1 class="text-custom-light-green font-montserrat font-bold text-base sm:text-lg md:text:xl xl:text-2xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">Initial Consultation and Vision</h1>
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray">We kick off with a comprehensive discussion to grasp your website's vision, goals, and specific requirements. This step ensures perfect alignment with your objectives.</p>
                    </div>
                </div>
            </div>
            <div class="work-process-detail hidden" data-work-process="2">
                <div class="cc-container w-full flex flex-col xl:flex-row justify-center items-center bg-white p-12 sm:p-16 md:p-20 lg:p-24 xl:p-28 border border-custom-dark-green rounded-3xl gap-8 sm:gap-12 md:gap-16 lg:gap-20 xl:gap-32">
                    <div class="text-custom-light-green">
                        <svg class="w-16 sm:w-20 md:w-24 lg:w-28 xl:w-32 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.66936 18.509C9.88838 18.509 11.1645 19.1222 12.378 20.3099C13.8437 22.1606 14.3041 23.7313 13.7461 24.9742C12.5271 27.694 6.82978 28.9112 3.37714 29.3181C3.95719 27.9334 4.63667 25.6832 4.63667 22.7038C4.63667 21.076 5.75073 19.4279 7.28278 18.7871C7.73025 18.6011 8.19611 18.509 8.66936 18.509ZM12.5142 15.7083C13.4202 16.1925 14.2986 16.8039 15.1143 17.6104L15.3463 17.8719C15.8159 18.4649 16.1952 19.0449 16.5267 19.6176C16.0313 20.0577 15.5231 20.5015 15.0057 20.9508C14.6889 20.356 14.2838 19.7446 13.7848 19.1186L13.713 19.0375C12.9028 18.2384 12.0465 17.6399 11.17 17.244C11.6119 16.7303 12.0594 16.2183 12.5142 15.7083ZM30.0537 2.24755C30.1844 2.37828 30.3575 2.61216 30.3372 3.12222C30.236 5.73151 25.5717 11.4086 17.9261 18.3617C17.591 17.8204 17.2227 17.2753 16.79 16.7284L16.4125 16.3049C15.5875 15.4891 14.7129 14.8152 13.7977 14.2756C19.6736 7.80862 26.0026 1.96766 29.0538 1.84243C29.5731 1.8406 29.7996 1.99344 30.0537 2.24755ZM32.1768 3.19404C32.2118 2.29544 31.9282 1.51835 31.2359 0.825984C30.6613 0.251459 29.8622 -0.0321075 28.9801 0.00288789C23.8757 0.21095 13.6909 11.4565 9.21074 16.6989C8.31213 16.6087 7.42273 16.7339 6.57199 17.0912C4.34942 18.0174 2.79526 20.3265 2.79526 22.7038C2.79526 27.2042 1.05328 29.8392 1.03672 29.865L0 31.4044L1.84877 31.3013C3.00887 31.2387 13.2674 30.5408 15.4273 25.7292C15.8361 24.814 15.9172 23.8326 15.6943 22.7922C21.968 17.3987 31.9871 8.04801 32.1768 3.19404Z" fill="currentColor" />
                        </svg>

                    </div>
                    <div class="flex flex-col items-center xl:items-start gap-4 text-center xl:text-start">
                        <h1 class="text-custom-light-green font-montserrat font-bold text-base sm:text-lg md:text:xl xl:text-2xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">Designing UI/UX</h1>
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray">Building on your insights, our skilled design team creates a visually appealing and user-friendly interface (UI/UX) that embodies your brand identity and enhances the user experience.</p>
                    </div>
                </div>
            </div>
            <div class="work-process-detail hidden" data-work-process="3">
                <div class="cc-container w-full flex flex-col xl:flex-row justify-center items-center bg-white p-12 sm:p-16 md:p-20 lg:p-24 xl:p-28 border border-custom-dark-green rounded-3xl gap-8 sm:gap-12 md:gap-16 lg:gap-20 xl:gap-32">
                    <div class="text-custom-light-green">
                        <svg class="w-16 sm:w-20 md:w-24 lg:w-28 xl:w-32 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V25.6947H7.9058V34.6654L19.1221 25.6947H31.6232V0H0ZM1.97645 1.97636H29.6467V23.7164H18.4304L9.88223 30.5546V23.7164H1.97645V1.97636Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center xl:items-start gap-4 text-center xl:text-start">
                        <h1 class="text-custom-light-green font-montserrat font-bold text-base sm:text-lg md:text:xl xl:text-2xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">Design Review and Feedback</h1>
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray">Your input is invaluable. We share initial design concepts for your review and feedback, ensuring the design aligns with your expectations.</p>
                    </div>
                </div>
            </div>
            <div class="work-process-detail hidden" data-work-process="4">
                <div class="cc-container w-full flex flex-col xl:flex-row justify-center items-center bg-white p-12 sm:p-16 md:p-20 lg:p-24 xl:p-28 border border-custom-dark-green rounded-3xl gap-8 sm:gap-12 md:gap-16 lg:gap-20 xl:gap-32">
                    <div class="text-custom-light-green">
                        <svg class="w-16 sm:w-20 md:w-24 lg:w-28 xl:w-32 aspect-square" viewBox="0 0 38 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5625 19.25C25.2144 19.25 24.8806 19.3883 24.6344 19.6344C24.3883 19.8806 24.25 20.2144 24.25 20.5625C24.25 20.9106 24.3883 21.2444 24.6344 21.4906C24.8806 21.7367 25.2144 21.875 25.5625 21.875H30.8125C31.1606 21.875 31.4944 21.7367 31.7406 21.4906C31.9867 21.2444 32.125 20.9106 32.125 20.5625C32.125 20.2144 31.9867 19.8806 31.7406 19.6344C31.4944 19.3883 31.1606 19.25 30.8125 19.25H25.5625ZM0.625 7.4375C0.625 5.69702 1.3164 4.02782 2.54711 2.79711C3.77782 1.5664 5.44702 0.875 7.1875 0.875H30.8125C32.553 0.875 34.2222 1.5664 35.4529 2.79711C36.6836 4.02782 37.375 5.69702 37.375 7.4375V20.5625C37.375 22.303 36.6836 23.9722 35.4529 25.2029C34.2222 26.4336 32.553 27.125 30.8125 27.125H7.1875C5.44702 27.125 3.77782 26.4336 2.54711 25.2029C1.3164 23.9722 0.625 22.303 0.625 20.5625V7.4375ZM34.75 8.75V7.4375C34.75 6.39321 34.3352 5.39169 33.5967 4.65327C32.8583 3.91484 31.8568 3.5 30.8125 3.5H7.1875C6.14321 3.5 5.14169 3.91484 4.40327 4.65327C3.66484 5.39169 3.25 6.39321 3.25 7.4375V8.75H34.75ZM3.25 11.375V20.5625C3.25 21.6068 3.66484 22.6083 4.40327 23.3467C5.14169 24.0852 6.14321 24.5 7.1875 24.5H30.8125C31.8568 24.5 32.8583 24.0852 33.5967 23.3467C34.3352 22.6083 34.75 21.6068 34.75 20.5625V11.375H3.25Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center xl:items-start gap-4 text-center xl:text-start">
                        <h1 class="text-custom-light-green font-montserrat font-bold text-base sm:text-lg md:text:xl xl:text-2xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">Project Initiation (50% Payment)</h1>
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray">Upon design approval, we kick-start the project by requesting a 50% payment. This secures your project's spot in our queue and enables us to proceed confidently</p>
                    </div>
                </div>
            </div>
            <div class="work-process-detail hidden" data-work-process="5">
                <div class="cc-container w-full flex flex-col xl:flex-row justify-center items-center bg-white p-12 sm:p-16 md:p-20 lg:p-24 xl:p-28 border border-custom-dark-green rounded-3xl gap-8 sm:gap-12 md:gap-16 lg:gap-20 xl:gap-32">
                    <div class="text-custom-light-green">
                        <svg class="w-16 sm:w-20 md:w-24 lg:w-28 xl:w-32 aspect-square" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.7708 22.7917H3.83333C3.44656 22.7917 3.07563 22.638 2.80214 22.3645C2.52865 22.091 2.375 21.7201 2.375 21.3333V3.83333C2.375 3.44656 2.52865 3.07563 2.80214 2.80214C3.07563 2.52865 3.44656 2.375 3.83333 2.375H27.1667C27.5534 2.375 27.9244 2.52865 28.1979 2.80214C28.4714 3.07563 28.625 3.44656 28.625 3.83333V16.9583H2.375M9.66667 28.625H14.7708M12.5833 22.7917L11.8542 28.625M27.1667 28.625L30.0833 25.7083L27.1667 22.7917M22.7917 22.7917L19.875 25.7083L22.7917 28.625" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="flex flex-col items-center xl:items-start gap-4 text-center xl:text-start">
                        <h1 class="text-custom-light-green font-montserrat font-bold text-base sm:text-lg md:text:xl xl:text-2xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">Development</h1>
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray">With the design in place, our development team takes over. They work diligently on both the front-end (the visible part of your website) and back-end (the behind-the-scenes functionality) to bring your vision to life.
                        </p>
                    </div>
                </div>
            </div>
            <div class="work-process-detail hidden" data-work-process="6">
                <div class="cc-container w-full flex flex-col xl:flex-row justify-center items-center bg-white p-12 sm:p-16 md:p-20 lg:p-24 xl:p-28 border border-custom-dark-green rounded-3xl gap-8 sm:gap-12 md:gap-16 lg:gap-20 xl:gap-32">
                    <div class="text-custom-light-green">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-16 sm:w-20 md:w-24 lg:w-28 xl:w-32 aspect-square">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center xl:items-start gap-4 text-center xl:text-start">
                        <h1 class="text-custom-light-green font-montserrat font-bold text-base sm:text-lg md:text:xl xl:text-2xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">Domain and Hosting Setup</h1>
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray">We handle all technical aspects, including domain registration and hosting setup, ensuring your website enjoys a secure and reliable online presence.</p>
                    </div>
                </div>
            </div>
            <div class="work-process-detail hidden" data-work-process="7">
                <div class="cc-container w-full flex flex-col xl:flex-row justify-center items-center bg-white p-12 sm:p-16 md:p-20 lg:p-24 xl:p-28 border border-custom-dark-green rounded-3xl gap-8 sm:gap-12 md:gap-16 lg:gap-20 xl:gap-32">
                    <div class="text-custom-light-green">
                        <svg class="w-16 sm:w-20 md:w-24 lg:w-28 xl:w-32 aspect-square" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.875 33.6738L19.4756 30.2744L17.625 32.125L22.875 37.375L33.375 26.875L31.5244 25.0244L22.875 33.6738Z" fill="currentColor" />
                            <path d="M26.8125 4.5625H22.875V3.25C22.8729 2.55445 22.5957 1.88797 22.1039 1.39614C21.612 0.904306 20.9456 0.627077 20.25 0.625H9.75C9.05445 0.627077 8.38797 0.904306 7.89614 1.39614C7.40431 1.88797 7.12708 2.55445 7.125 3.25V4.5625H3.1875C2.49195 4.56458 1.82547 4.84181 1.33364 5.33364C0.841806 5.82547 0.564577 6.49195 0.5625 7.1875V34.75C0.564577 35.4456 0.841806 36.112 1.33364 36.6039C1.82547 37.0957 2.49195 37.3729 3.1875 37.375H15V34.75H3.1875V7.1875H7.125V11.125H22.875V7.1875H26.8125V21.625H29.4375V7.1875C29.4354 6.49195 29.1582 5.82547 28.6664 5.33364C28.1745 4.84181 27.5081 4.56458 26.8125 4.5625ZM20.25 8.5H9.75V3.25H20.25V8.5Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center xl:items-start gap-4 text-center xl:text-start">
                        <h1 class="text-custom-light-green font-montserrat font-bold text-base sm:text-lg md:text:xl xl:text-2xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">Final Quality Assurance and Delivery</h1>
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray">Before delivery, we ensure your website works flawlessly on all devices. Once approved, and the remaining 50% payment is received, your site goes live, ready to make an impact online.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="self-end font-montserrat z-20">
            <p class="text-custom-dark-gray text-sm sm:text-base text-end">**You'll receive project reports every week to stay updated on our progress and milestones.</p>
        </div>
    </div>

    {{-- Latest Project --}}
    <div id="latest-project" class="bg-custom-off-white flex flex-col justify-center items-center py-48 pb-32 gap-8 sm:gap-10 md:gap-12 xl:gap-16 relative">
        <img src="{{ asset('assets/about-us/background.svg') }}?t={{ env('VERSION_TIME') }}" alt="about-us-background" class="w-full absolute -top-[50rem] z-10 rotate-180">

        <div class="c-container z-20 flex flex-col justify-center items-center gap-8 sm:gap-10 md:gap-12 xl:gap-16">
            <span class="relative ">
                <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl 2xl:text-5xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">Latest Project.</h1>
                <span id="nav-icon-bottom" class="w-3/4 h-[0.125rem] bg-custom-dark-green rounded-full absolute left-0 -bottom-2 mx-auto right-0"></span>
            </span>

            <div class="">
                <h1 class="text-custom-light-green font-montserrat font-bold text-lg sm:text-xl md:text:2xl xl:text-3xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose">asetaset.com</h1>
            </div>

            <div class="">
                <a href="https://asetaset.com/" target="_blank" ref="noopener noreferrer" class="text-base font-montserrat text-custom-light-green font-bold underline">www.asetaset.com</a>
            </div>
        </div>

        {{-- <section id="image-carousel" class="splide" aria-label="Beautiful Images">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide flex justify-center">
                        <img src="{{asset("assets/latest-project/project-1.png")}}" alt="project-1">
        </li>
        <li class="splide__slide flex justify-center">
            <img src="{{asset("assets/latest-project/project-1.png")}}" alt="project-1">
        </li>
        <li class="splide__slide flex justify-center">
            <img src="{{asset("assets/latest-project/project-1.png")}}" alt="project-1">
        </li>
        </ul>
    </div>
    </section> --}}

    {{-- <div class="c-container font-montserrat w-full xl:w-[800px] flex flex-col gap-4 z-20">
            <p class="font-bold text-8xl -mb-14 -ml-16">“</p>
            <p class="font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray italic">WebCreativs was the best choice for our online presence. They delivered a stunning, user-friendly site, supported us consistently, and adapted to our needs, all at a reasonable price. Our vision became a digital reality, thanks to their excellence in web development.</p>
            <p class="text-custom-dark-blue text-base">Wilhelmus Rio, Founder of asetaset.com</p>
            <p class="font-bold text-8xl self-end -mt-8 -mr-4">”</p>
        </div> --}}
    </div>

    {{-- Our Team --}}
    <div id="our-team" class="c-container bg-custom-lightest-green/40 flex flex-col justify-center items-center py-32 gap-12 sm:gap-16 md:gap-20 xl:gap-24">
        <span class="relative">
            <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl 2xl:text-5xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">Our Team.</h1>
            <span id="nav-icon-bottom" class="w-3/4 h-[0.125rem] bg-custom-dark-green rounded-full absolute left-0 -bottom-2 mx-auto right-0"></span>
        </span>

        <div class="flex flex-col md:flex-row justify-center gap-16 sm:gap-20 md:gap-24 lg:gap-28 xl:gap-32 2xl:gap-36 w-full c-container text-center md:items-start">
            <div class="flex flex-col justify-center items-center font-montserrat gap-4 text-2xl ">
                <div>
                    <img src="{{asset("assets/our-team/christopher.svg")}}" alt="christopher" class="w-48 md:w-64">
                </div>
                <h2 class="font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">Christopher N. Tessy</h2>
                <h2 class="font-semibold opacity-50 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">Front End Developer</h2>
                <div class="flex justify-center items-center gap-4">
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-linked-in.svg")}}" alt="linked-in" class="w-8">
                    </a>
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-instagram.svg")}}" alt="instagram" class="w-8">
                    </a>
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-gmail.svg")}}" alt="gmail" class="w-8">
                    </a>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center font-montserrat gap-4 text-2xl md:translate-y-12 lg:translate-y-14 xl:translate-y-16">
                <div>
                    <img src="{{asset("assets/our-team/gama.svg")}}" alt="gama" class="w-48 md:w-64">
                </div>
                <h2 class="font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">Gamaliel Satria D.</h2>
                <h2 class="font-semibold opacity-50 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">Founder</h2>
                <div class="flex justify-center items-center gap-4">
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-linked-in.svg")}}" alt="linked-in" class="w-8">
                    </a>
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-instagram.svg")}}" alt="instagram" class="w-8">
                    </a>
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-gmail.svg")}}" alt="gmail" class="w-8">
                    </a>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center font-montserrat gap-4 text-2xl">
                <div>
                    <img src="{{asset("assets/our-team/joshua.svg")}}" alt="joshua" class="w-48 md:w-64">
                </div>
                <h2 class="font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">Joshua Jevon I.</h2>
                <h2 class="font-semibold opacity-50 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">Back End Developer</h2>
                <div class="flex justify-center items-center gap-4">
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-linked-in.svg")}}" alt="linked-in" class="w-8">
                    </a>
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-instagram.svg")}}" alt="instagram" class="w-8">
                    </a>
                    <a href="">
                        <img src="{{asset("assets/our-team/icon-gmail.svg")}}" alt="gmail" class="w-8">
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Us --}}
    <div id="contact-us" class="c-container bg-custom-lightest-green/40 flex flex-col justify-center items-center py-32 gap-12 sm:gap-16 md:gap-20 xl:gap-24">
        <div class="c-container flex flex-col items-start w-full gap-8 z-20">
            <span class="relative">
                <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl 2xl:text-5xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">Contact Us.</h1>
                <span id="nav-icon-bottom" class="w-3/4 h-[0.125rem] bg-custom-dark-green rounded-full absolute left-0 bottom-0"></span>
            </span>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-16">
                <div class="col-span-1 flex flex-col gap-8">
                    <img src="{{ asset('assets/logo/logo-horizontal-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-32 sm:w-36 md:w-64">

                    <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">
                        Got a project in mind? Don't hesitate to reach out and connect with us. Whether it's a design challenge or a project that needs expert management, we're here to collaborate and bring your ideas to life!
                    </p>

                    <a href="mailto:info@webcreativs.com" class="flex items-center gap-4">
                        <img src="{{asset("assets/contact-us/icon-gmail.svg")}}" alt="gmail" class="w-8 md:w-9 xl:w-10">
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">info@webcreativs.com</p>
                    </a>

                    <a href="https://wa.me/6288211033984" target="_blank" rel="nonoopener noreferrer" class="flex items-center gap-4">
                        <img src="{{asset("assets/contact-us/icon-whatsapp.svg")}}" alt="whatsapp" class="w-8 md:w-9 xl:w-10">
                        <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">088211033984</p>
                    </a>
                </div>

                {{-- Contact Form --}}
                <div class="col-span-1">
                    <form id="form-contact-us" method="POST" action="{{ route('contact') }}" class="font-montserrat flex-1 flex flex-col gap-6 sm:gap-7 md:gap-8 justify-center items-center w-full" onsubmit="contactUs(event)">
                        @csrf
                        <div class="flex flex-col gap-1 md:gap-2 w-full">
                            <input type="text" name="name" :value="old('name')" id="name" placeholder="Name" class="bg-transparent p-4 xl:p-5 border border-custom-light-green rounded-2xl text-xs sm:text-sm md:text-base placeholder:font-bold placeholder:text-custom-light-green focus:border-2 font-medium" />
                            <p id="error-name" class="text-xs sm:text-sm md:text-base text-red-800"></p>
                        </div>

                        <div class="flex flex-col gap-1 md:gap-2 w-full">
                            <input type="text" name="email" :value="old('email')" id="email" placeholder="Email" class="bg-transparent p-4 xl:p-5 border border-custom-light-green rounded-2xl text-xs sm:text-sm md:text-base placeholder:font-bold placeholder:text-custom-light-green focus:border-2 font-medium" />
                            <p id="error-email" class="text-xs sm:text-sm md:text-base text-red-800"></p>
                        </div>

                        <div class="flex flex-col gap-1 md:gap-2 w-full">
                            <input type="text" name="subject" :value="old('subject')" id="subject" placeholder="Subject" class="bg-transparent p-4 xl:p-5 border border-custom-light-green rounded-2xl text-xs sm:text-sm md:text-base placeholder:font-bold placeholder:text-custom-light-green focus:border-2 font-medium" />
                            <p id="error-subject" class="text-xs sm:text-sm md:text-base text-red-800"></p>
                        </div>

                        <div class="flex flex-col gap-1 md:gap-2 w-full">
                            <textarea name="mail" :value="old('mail')" id="mail" placeholder="Message" class="bg-transparent p-4 xl:p-5 border border-custom-light-green rounded-2xl text-xs sm:text-sm md:text-base placeholder:font-bold placeholder:text-custom-light-green focus:border-2 font-medium h-40 xl:h-48 resize-none"></textarea>
                            <p id="error-message" class="text-xs sm:text-sm md:text-base text-red-800"></p>
                        </div>

                        <button id="contact-submit-button" type="submit" class="flex justify-center items-center bg-custom-light-green hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] active:bg-[linear-gradient(rgb(0_0_0/20%)_0_0)] rounded-2xl text-white p-3 sm:p-3.5 md:p-4 w-full font-semibold text-base sm:text-lg md:text-xl">
                            Submit
                        </button>

                        <div class="flex w-full justify-center items-center text-xs sm:text-sm md:text-base">
                            <p id="contact-validation-message" class="text-center font-medium">
                            </p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="c-container py-16">
        <div class="pb-8 border-b border-custom-light-green grid grid-cols-3 gap-8">
            <div class="flex flex-col gap-8 col-span-2">
                <img src="{{ asset('assets/logo/logo-horizontal-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-44 sm:w-48 md:w-80">

                <span class="flex flex-wrap gap-8 sm:gap-10 md:gap-12 text-sm sm:text-base md:text-lg font-montserrat">

                    <a href="#about-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green">About Us</a>

                    <a href="#what-we-do" class="transition-colors text-custom-light-green hover:text-custom-dark-green">What We Do</a>

                    <a href="#work-process" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Work Process</a>

                    <a href="#latest-project" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Projects</a>

                    <a href="#our-team" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Our Team</a>

                    <a href="#contact-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Contact Us</a>
                </span>
            </div>
            <div class="flex flex-col gap-8 font-montserrat col-span-1">
                <h1 class="flex gap-8 sm:gap-10 md:gap-12 text-base sm:text-md md:text-xl text-custom-light-green">Get the freshest news from us</h1>

                <form id="form-subscribe" method="POST" action="{{ route('storeEmail') }}" class="flex flex-col w-full gap-4" onsubmit="subscribe(event)">
                    @csrf
                    <div class="flex gap-4">
                        <input type="text" name="Email" :value="old('Email')" id="subscribe-email" placeholder="Your email address..." class="bg-custom-light-green text-white p-3 xl:p-4 rounded-xl text-xs sm:text-sm md:text-base placeholder:text-white w-full" />

                        <button id="subscribe-submit-button" type="submit" class="bg-custom-lightest-green hover:bg-[linear-gradient(rgb(0_0_0/5%)_0_0)] active:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] transition p-3 xl:p-4 px-6 xl:px-8 rounded-xl text-xs sm:text-sm md:text-base text-custom-dark-gray">Subscribe</button>
                    </div>
                    <p id="subscribe-validation-message" class="flex items-center text-sm sm:text-base md:text-lg"></p>
                </form>
            </div>
        </div>

        <div class="flex justify-between items-center font-montserrat pt-8 text-xs sm:text-sm md:text-base italic">
            <p class="text-custom-dark-gray">Unlock the limitless possibilities of your online presence with <span class="font-bold text-custom-light-green">WebCreativs </span><br>- where excellence is just the beginning.</p>

            <p class="text-custom-light-gray">© WebCreativs 2023. All right reserved</p>
        </div>
    </footer>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    {{-- Splide JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    {{-- Scripts --}}
    <script src="{{ asset('js/navbar.js') }}?t={{ env('VERSION_TIME') }}"></script>
    <script src="{{ asset('js/work-process.js') }}?t={{ env('VERSION_TIME') }}"></script>
    <script src="{{ asset('js/latest-project.js') }}?t={{ env('VERSION_TIME') }}"></script>
    <script src="{{ asset('js/contact-us.js') }}?t={{ env('VERSION_TIME') }}"></script>
    <script src="{{ asset('js/footer.js') }}?t={{ env('VERSION_TIME') }}"></script>
</body>
</html>
