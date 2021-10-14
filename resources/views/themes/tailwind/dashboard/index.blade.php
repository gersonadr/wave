@extends('theme::layouts.app')


@section('content')


	<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
	    <div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
				<div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
					<svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				</div>
				<div class="relative flex-1">
	                <h3 class="text-lg font-medium leading-6 text-gray-700">
	                    Welcome to your Dashboard
	                </h3>
	                <p class="text-sm leading-5 text-gray-500 mt">
	                    Learn More Below
	                </p>
				</div>

	        </div>
	        <div class="relative p-5">
	            <p class="text-base leading-loose text-gray-500">This is your application <a href="{{ route('wave.dashboard') }}" class="underline text-wave-500">dashboard</a>, you can customize this view inside of <code class="px-2 py-1 font-mono text-base font-medium text-gray-600 bg-gray-100 rounded-md">{{ theme_folder('/dashboard/index.blade.php') }}</code><br><br> (Themes are located inside the <code>resources/views/themes</code> folder)</p>
				<span class="inline-flex mt-5 rounded-md shadow-sm">
	                <a href="{{ url('docs') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
	                    Read The Docs
	                </a>
				</span>
			</div>
		</div>
		<div class="flex flex-col justify-start flex-1 overflow-hidden bg-white border rounded-lg lg:ml-3 border-gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
				<div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
					<svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
				</div>
				<div class="relative flex-1">
	                <h3 class="text-lg font-medium leading-6 text-gray-700">
						Learn more about Wave
	                </h3>
	                <p class="text-sm leading-5 text-gray-500 mt">
						Are you more of a visual learner?
	                </p>
				</div>

	        </div>
	        <div class="relative p-5">
				<p class="text-base leading-loose text-gray-500">Make sure to head on over to the Wave Video Tutorials to learn more how to use and customize Wave.<br><br>Click on the button below to checkout the video tutorials.</p>
				<span class="inline-flex mt-5 rounded-md shadow-sm">
	                <a href="https://devdojo.com/course/wave" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
						Watch The Videos
	                </a>
				</span>
			</div>
	    </div>
	</div>

	<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
		<div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
			<p> Paste dodgy section here</p>
		</div>
	</div>


	<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
		<div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
			
<!-- Section 1 -->
<section class="box-border relative w-full font-sans leading-6 text-gray-700 bg-white border-0 border-gray-200 border-solid">
    <div class="box-border flex flex-col items-center px-8 py-20 mx-auto leading-6 border-solid max-w-7xl xl:px-16 md:items-stretch md:justify-center md:py-24">
        
        <div class="z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
            <!-- Feature 1 -->
            <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <path d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3M12 12l8-4.5M12 12v9M12 12L4 7.5M16 5.25l-8 4.5"></path></svg>
                    </div>
                    <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">Projects</h6>
                        <p class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                            Take advantage of our unlimited projects for your tasks and automated workflow.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <path d="M7 12l5 5L22 7M2 12l5 5m5-5l5-5"></path></svg>

                    </div>
                    <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">Tasks</h6>
                        <p class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                            Unlimited tasks that perform some of your most important applications functionality.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <path d="M9 4.55a8 8 0 016 14.9M15 15v5h5M5.63 7.16v.01M4.06 11v.01M4.63 15.1v.01M7.16 18.37v.01M11 19.94v.01"></path></svg>
                    </div>
                    <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">Automation</h6>
                        <p class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                            Set it, and forget it. Our automated tools will allow you to automate your workflow.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <path d="M3 12h3M12 3v3M7.8 7.8L5.6 5.6M16.2 7.8l2.2-2.2M7.8 16.2l-2.2 2.2M12 12l9 3-4 2-2 4-3-9"></path></svg>
                    </div>
                    <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">Simple</h6>
                        <p class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                            We've built one of the simplest tools to integrate into your current system.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 5 -->
            <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <path d="M13 3v7h6l-8 11v-7H5l8-11"></path></svg>
                    </div>
                    <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">Fast</h6>
                        <p class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                            We have the fastest response times than any other service in our industry.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 6 -->
            <div class="col-span-3 font-sans text-gray-700 border-0 bg-gray-50 rounded-3xl">
                <div class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <rect x="3" y="4" width="18" height="8" rx="3"></rect>
                            <rect x="3" y="12" width="18" height="8" rx="3"></rect>
                            <path d="M7 8v.01M7 16v.01"></path></svg>

                    </div>
                    <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">Reliable</h6>
                        <p class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                            We pride ourselves in our up-time metrics. We focus a lot of our energy on being reliable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

		</div>
	</div>







	<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
		<div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">

		
<!-- Section 1 -->
<section class="bg-white">
    <div class="max-w-6xl py-12 mx-auto">
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12 ">
            <a href="#_" class="flex flex-col p-6 space-y-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div class="flex items-center justify-center w-16 h-16 border border-indigo-200 shadow-inner bg-gradient-to-br from-indigo-50 to-indigo-200 rounded-xl lg:h-20 lg:w-20">
                    <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                </div>
                <div class="flex-1">
                    <h5 class="mt-1 mb-2 text-xl font-bold lg:text-2xl">Fully Customizable</h5>
                    <p class="mb-6 text-lg text-gray-600">Each component is fully customizable</p>
                    <span class="flex items-center text-lg font-bold text-indigo-600">
                        Customzation Details
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </div>
            </a>
            <a href="#_" class="flex flex-col p-6 space-y-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div class="flex items-center justify-center w-16 h-16 border border-indigo-200 shadow-inner bg-gradient-to-br from-indigo-50 to-indigo-200 rounded-xl lg:h-20 lg:w-20">
                    <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                </div>
                <div class="flex-1">
                    <h5 class="mt-1 mb-2 text-xl font-bold lg:text-2xl">Integrates Easily</h5>
                    <p class="mb-6 text-lg text-gray-600">Integrate each component with your stack</p>
                    <span class="flex items-center text-lg font-bold text-indigo-600">
                        Integration Details
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="bg-white">
    <div class="max-w-6xl py-12 mx-auto">
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12 ">
            <a href="#_" class="flex flex-col p-6 space-y-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div class="flex items-center justify-center w-16 h-16 border border-indigo-200 shadow-inner bg-gradient-to-br from-indigo-50 to-indigo-200 rounded-xl lg:h-20 lg:w-20">
                    <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                </div>
                <div class="flex-1">
                    <h5 class="mt-1 mb-2 text-xl font-bold lg:text-2xl">Fully Customizable</h5>
                    <p class="mb-6 text-lg text-gray-600">Each component is fully customizable</p>
                    <span class="flex items-center text-lg font-bold text-indigo-600">
                        Customzation Details
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </div>
            </a>
            <a href="#_" class="flex flex-col p-6 space-y-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div class="flex items-center justify-center w-16 h-16 border border-indigo-200 shadow-inner bg-gradient-to-br from-indigo-50 to-indigo-200 rounded-xl lg:h-20 lg:w-20">
                    <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                </div>
                <div class="flex-1">
                    <h5 class="mt-1 mb-2 text-xl font-bold lg:text-2xl">Integrates Easily</h5>
                    <p class="mb-6 text-lg text-gray-600">Integrate each component with your stack</p>
                    <span class="flex items-center text-lg font-bold text-indigo-600">
                        Integration Details
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

		
		</div>
	</div>


	<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
		<div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">


<!-- Section 1 -->
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row">

            <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                <p class="font-medium text-blue-500 uppercase">Building Businesses</p>
                <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                    Changing The Way People Do Business.
                </h2>
                <p class="text-xl text-gray-600 md:pr-16">Learn how to engage with your visitors and teach them about your mission. We're revolutionizing the way customers and businesses interact.</p>
            </div>

            <div class="w-full mt-16 md:mt-0 md:w-2/5">
                <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                    <h3 class="mb-6 text-2xl font-medium text-center">Sign in to your Account</h3>
                    <input type="text" name="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Email address" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                    <input type="password" name="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                    <div class="block">
                        <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Log Me In</button>
                    </div>
                    <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="#_" class="text-blue-500 underline">Sign up here</a></p>
                </div>
            </div>

			</div>
    </div>

	</div>
    </div>



@endsection
