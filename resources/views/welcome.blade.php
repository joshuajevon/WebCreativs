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

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="hidden xl:flex c-container justify-between items-center py-4 fixed z-50 w-full shadow-lg font-libre bg-custom-off-white">
        <a href="/">
            <img src="{{ asset('assets/logo/logo-horizontal-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-32 sm:w-36 md:w-40">
        </a>
        <span class="flex justify-center items-center gap-16">
            <span class="flex justify-center items-center gap-8 sm:gap-10 md:gap-12 text-sm sm:text-base md:text-lg">
                <a href="#hero" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Home</a>

                <a href="#about-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green">About Us</a>

                <a href="" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Projects</a>

                <a href="" class="transition-colors text-custom-light-green hover:text-custom-dark-green">Contact Us</a>

                <a href="" class="transition-colors text-custom-light-green hover:text-custom-dark-green">EN</a>
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
    <nav id="mobile-nav-links" class="c-container font-libre py-2 bg-custom-off-white hidden text-custom-light-green text-sm sm:text-base md:text-lg fixed top-[83.39px] sm:top-[89.81px] md:top-[96.23px] left-0 z-40 w-full shadow-lg">
        <a href="#home" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">Home</a>

        <a href="#about-us" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">About Us</a>

        <a href="" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">Projects</a>

        <a href="" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">Contact Us</a>

        <a href="" class="transition-colors text-custom-light-green hover:text-custom-dark-green block py-3">EN</a>
    </nav>

    {{-- Hero --}}
    <div id="hero" class="pt-40 sm:pt-44 md:pt-48 pb-20 c-container bg-custom-off-white flex flex-col justify-center items-center gap-12 md:gap-10 xl:gap-16">
        <img src="{{ asset('assets/about-us/background.svg') }}?t={{ env('VERSION_TIME') }}" alt="about-us-background" class="w-full absolute bottom-[0rem] sm:-bottom-[4rem] md:-bottom-[12rem] lg:-bottom-[20rem] xl:-bottom-[28rem] 2xl:-bottom-[36rem] z-10">

        <div class="flex gap-16 justify-center items-center z-20">
            <div class="hidden xl:block">
                <img src="{{ asset('assets/hero/person-1.svg') }}?t={{ env('VERSION_TIME') }}" alt="person-1" class="w-[28rem]">
            </div>

            <div class="flex flex-col gap-8 justify-center items-center">
                <div class="flex flex-col justify-center items-center gap-2">
                    <img src="{{ asset('assets/logo/logo-icon-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="person-1" class="w-16 md:w-18 xl:w-20">
                    <p class="text-lg sm:text-xl md:text-2xl xl:text-3xl font-libre text-center leading-tight sm:leading-tight md:leading-tight xl:leading-tight text-custom-dark-blue">Create With Us</p>
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl 2xl:text-7xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">
                    Crafting Stunning Websites for Your Business
                </h1>

                <p class="font-montserrat font-medium text-center text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose  text-custom-dark-blue">Together, let's turn your website dreams into a reality, say "<span class="font-bold underline">Yes</span>" to extraordinary design with us!</p>

            </div>

            <div class="hidden xl:block">
                <img src="{{ asset('assets/hero/person-2.svg') }}?t={{ env('VERSION_TIME') }}" alt="person-2" class="w-[28rem]">
            </div>
        </div>

        <div class="flex justify-center items-center w-full z-20">
            <ul class="flex justify-center flex-wrap items-center w-full list-disc text-base sm:text-lg md:text-xl xl:text-2xl font-libre text-center text-custom-dark-blue gap-x-8 md:gap-x-16 xl:gap-x-24 gap-y-6">
                <li>Personal Website</li>
                <li>E-Learning</li>
                <li>Company Profile</li>
                <li>Landing Page</li>
                <li>E-Commerce</li>
                <li>Many More ++</li>
            </ul>
        </div>

        <div class="z-20">
            <button class="bg-custom-dark-green text-custom-off-white hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] active:bg-[linear-gradient(rgb(0_0_0/20%)_0_0)] rounded-full py-3 md:py-4 xl:py-5 px-10 w-full font-montserrat text-base sm:text-lg md:text-xl xl:text-2xl font-medium">Let's Talk</button>
        </div>
    </div>

    {{-- About US --}}
    <div id="about-us" class="c-container min-h-screen flex justify-center items-center bg-custom-off-white py-20">
        <div class="c-container flex justify-center items-center gap-24 z-20">
            <div class="hidden xl:flex flex-col justify-center items-center z-20">
                <img src="{{ asset('assets/logo/logo-icon-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-[10rem] xl:w-[12rem] 2xl:w-[14rem]">
                <img src="{{ asset('assets/logo/logo-text-green.svg') }}?t={{ env('VERSION_TIME') }}" alt="logo" class="w-[20rem] xl:w-[22rem] 2xl:w-[24rem]">
            </div>
            <div class="flex flex-col items-start gap-8 z-20 flex-1">
                <span class="relative">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl 2xl:text-5xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">About Us.</h1>
                    <span id="nav-icon-bottom" class="w-3/4 h-[0.125rem] bg-custom-dark-green rounded-full absolute left-0 bottom-0"></span>
                </span>

                <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">Welcome to <span class="font-bold text-custom-dark-green">WebCreativs</span>, where <span class="font-bold text-custom-dark-green">passion</span> and <span class="font-bold text-custom-dark-green">innovation</span> converge. Founded in 2023 by a group of driven college students, we embody the creative force that brings your dream websites to life. Despite our academic pursuits, we've quickly garnered a reputation for <span class="font-bold text-custom-dark-green">excellence</span>, consistently offering top-tier, <span class="font-bold text-custom-dark-green">professional web solutions</span> at prices that simply make sense.

                    <br><br>
                    At <span class="font-bold text-custom-dark-green">WebCreativs</span>, your satisfaction is our paramount concern. With a user-centric and <span class="font-bold text-custom-dark-green">professional approach</span>, our dedicated team of college students is resolutely committed to delivering <span class="font-bold text-custom-dark-green">exceptional web solutions</span> tailored to your needs, all while ensuring they fit within realistic budgets. We understand the delicate balance between <span class="font-bold text-custom-dark-green">quality</span> and <span class="font-bold text-custom-dark-green">affordability</span>, and we pride ourselves on timely project completion. <span class="font-bold text-custom-dark-green">Trust Us</span> to transform your vision into reality with our <span class="font-bold text-custom-dark-green">high-quality work</span>, pragmatic pricing, and unwavering commitment to <span class="font-bold text-custom-dark-green">on-time delivery</span>.</p>
            </div>
        </div>
    </div>

    {{-- What we do --}}
    <div class="c-container min-h-screen bg-custom-lightest-green flex flex-col py-20 gap-8 sm:gap-10 md:gap-12 xl:gap-16">
        <div class="flex flex-col items-end gap-2">
            <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl 2xl:text-5xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">What We Do?</h1>

            <p class="font-montserrat font-medium text-end text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">At <span class="font-bold text-custom-dark-green">WebCreativs</span>, we offer a wide range of services to cater to your diverse needs, including:</p>
        </div>

        <div class="flex overflow-x-scroll xl:overflow-x-visible xl:grid xl:grid-cols-2 2xl:grid-cols-3 gap-8 sm:gap-10 md:gap-12 xl:gap-16 text-center group">
            <div class="bg-custom-off-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/personal-website.svg') }}?t={{ env('VERSION_TIME') }}" alt="personal-website" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-base sm:text-lg md:text-xl xl:text-2xl">Personal Website</h1>

                <p class="font-medium text-center text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray ">We create personalized websites that encompass personal portfolios, blogs, and more. These websites serve as a comprehensive online platform to showcase your skills, experiences, and insights</p>
            </div>
            <div class="bg-custom-off-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/company-profile.svg') }}?t={{ env('VERSION_TIME') }}" alt="company-profile" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-base sm:text-lg md:text-xl xl:text-2xl">Company Profile</h1>

                <p class="font-medium text-center text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray ">We develop professional company profiles that showcase your business's identity, values, and achievements, helping you make a strong impression on potential clients and partners</p>
            </div>
            <div class="bg-custom-off-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/landing-page.svg') }}?t={{ env('VERSION_TIME') }}" alt="landing-page" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-base sm:text-lg md:text-xl xl:text-2xl">Landing Page</h1>

                <p class="font-medium text-center text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray ">Our expertly designed landing pages are tailored to capture the attention of your target audience and drive conversions effectively</p>
            </div>
            <div class="bg-custom-off-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/e-learning.svg') }}?t={{ env('VERSION_TIME') }}" alt="e-learning" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-base sm:text-lg md:text-xl xl:text-2xl">E-Learning</h1>

                <p class="font-medium text-center text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray ">Our e-learning solutions are designed to facilitate seamless online education, making it easy for you to share knowledge, courses, and resources with your audience.</p>
            </div>
            <div class="bg-custom-off-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/e-commerce.svg') }}?t={{ env('VERSION_TIME') }}" alt="e-commerce" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-base sm:text-lg md:text-xl xl:text-2xl">E-Commerce</h1>

                <p class="font-medium text-center text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray ">We create fully functional e-commerce websites that allow you to showcase and sell your products or services online, providing a seamless shopping experience for your customers</p>
            </div>
            <div class="bg-custom-off-white text-custom-dark-green flex flex-col items-center gap-6 sm:gap-8 md:gap-10 xl:gap-12 p-10 sm:p-12 md:p-14 xl:p-16 rounded-xl transition hover:scale-105 font-montserrat w-72 sm:w-80 md:w-96 xl:w-auto flex-none">
                <img src="{{ asset('assets/what-we-do/many-more.svg') }}?t={{ env('VERSION_TIME') }}" alt="many-more" class="h-36 sm:h-40 md:h-44 xl:h-48">

                <h1 class="font-bold text-base sm:text-lg md:text-xl xl:text-2xl">Many More ++</h1>

                <p class="font-medium text-center text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray ">We love challenges and are open to working on a wide variety of web projects, from forums and social networks to community websites. Whatever your vision, we can bring it to life on the web
                </p>
            </div>
        </div>
    </div>

    {{-- Work Process --}}
    <div class="c-container bg-custom-off-white flex flex-col min-h-screen py-20 gap-8 sm:gap-10 md:gap-12 xl:gap-16">
        <div class="flex flex-col items-start gap-8 z-20 flex-1">
            <span class="relative">
                <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl 2xl:text-5xl font-bold font-libre text-center leading-tight sm:leading-tight md:leading-tight lg:leading-tight xl:leading-tight 2xl:leading-tight text-custom-dark-gray">Work Process.</h1>
                <span id="nav-icon-bottom" class="w-3/4 h-[0.125rem] bg-custom-dark-green rounded-full absolute left-0 bottom-0"></span>
            </span>

            <p class="font-montserrat font-medium text-sm sm:text-base md:text-lg xl:text-xl leading-loose sm:leading-loose md:leading-loose xl:leading-loose text-custom-dark-gray z-20">
                At <span class="font-bold text-custom-dark-green">WebCreativs</span>, we prioritize transparency, ensuring you're well-informed about each step in bringing your website vision to life.
            </p>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/navbar.js') }}?t={{ env('VERSION_TIME') }}"></script>
</body>
</html>
