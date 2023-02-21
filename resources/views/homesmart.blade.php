<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <title>HomeSmart</title>
    </head>
    <body
        class="mx-auto text-neutral-900 dark:text-neutral-200 bg-white dark:bg-neutral-800"
    >
        <nav class="mx-auto p-3 bg-amber-400">
            <div class="container mx-auto flex items-center justify-between">
                <a
                    href="#"
                    class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 lg:absolute lg:top-0 lg:left-1/2 lg:-translate-x-1/2 z-50 hover:opacity-50 transition-opacity"
                    aria-label="Go to homepage"
                >
                    <img
                        src="{{ asset('pic/homesmart/logo.svg') }}"
                        alt="Home Smart Logo"
                        width="200"
                        class="w-48 md:w-64 lg:w-72"
                    />
                </a>
                <button
                    id="menu"
                    aria-expanded="false"
                    aria-label="Open Menu"
                    class="lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:text-neutral-600"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-8 h-8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>
                </button>
                <div
                    role="menubar"
                    class="flex hidden flex-col gap-4 absolute right-0 left-0 top-8 bg-amber-400 shadow-xl text-center text-lg p-6 items-center lg:flex lg:flex-row lg:top-0 lg:p-2 lg:justify-between z-40"
                >
                    <a
                        role="menuitem"
                        class="py-1 px-6 dark:text-neutral-900 text-neutral-900 hover:text-neutral-600"
                        href="#"
                        >Home</a
                    >
                    <a
                        role="menuitem"
                        class="py-1 px-6 dark:text-neutral-900 text-neutral-900 hover:text-neutral-600 lg:mr-auto"
                        href="#"
                        >Contact</a
                    ><a
                        role="menuitem"
                        class="py-1 px-6 dark:text-neutral-900 text-neutral-900 hover:text-neutral-600"
                        href="#"
                        >Login</a
                    ><a
                        role="menuitem"
                        class="py-2 px-6 dark:text-neutral-900 text-white hover:text-neutral-200 bg-teal-900 hover:bg-teal-700 rounded-lg shadow-lg"
                        href="#"
                        >Sign Up</a
                    >
                </div>
            </div>
        </nav>
        <header class="relative pt-16 md:pt-24">
            <div
                class="absolute inset-0 bottom-8 md:bottom-24 lg:bottom-32 bg-gradient-to-b from-amber-400 to-amber-600 -z-10"
            ></div>
            <div
                class="container mx-auto grid grid-rows-1 place-items-end px-2"
            >
                <img
                    class="row-start-1 row-end-1 col-start-1 col-end-2"
                    src="{{ asset('pic/homesmart/couch.png') }}"
                />
                <img
                    class="row-start-1 row-end-1 col-start-1 col-end-2 mx-auto w-40 sm:w-52 md:w-64 lg:w-72"
                    src="{{ asset('pic/homesmart/app.svg') }}"
                />
            </div>
        </header>
        <main class="grid gap-12 sm:gp-16 md:gap-24 lg:gap32">
            <a
                href="#"
                class="flex bg-amber-400 rounded-lg px-6 py-2 my-12 mx-auto shadow-lg"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                    />
                </svg>
                <span>Download the App</span>
            </a>

            <section aria-labelledby="qualities" class="relative">
                <img
                    src="{{ asset('pic/homesmart/dots.svg') }}"
                    aria-hidden="true"
                    class="hidden lg:block absolute top-1/2 -translate-y-1/2 -left-16 xl:-left-7"
                />
                <img
                    src="{{ asset('pic/homesmart/dots.svg') }}"
                    aria-hidden="true"
                    class="hidden lg:block absolute top-1/2 -translate-y-1/2 -right-16 xl:-right-7"
                />
                <h2 id="qualitites" class="sr-only">Our Qualities</h2>
                <div
                    class="container mx-auto max-w-5xl gap-12 flex flex-wrap items-start justify-center md:justify-between"
                >
                    <div
                        class="grid gap-4 justify-items-center text-center md:flex-1"
                    >
                        <div class="rounded-full border-8 border-amber-400 p-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-14 w-14"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                />
                            </svg>
                        </div>

                        <h3 class="text-3xl font-bold">Safe</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur</p>
                    </div>
                    <div
                        class="grid gap-4 justify-items-center text-center md:flex-1"
                    >
                        <div class="rounded-full border-8 border-amber-400 p-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="w-14 h-14"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>

                        <h3 class="text-3xl font-bold">Effisien</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur</p>
                    </div>
                    <div
                        class="grid gap-4 justify-items-center text-center md:flex-1"
                    >
                        <div class="rounded-full border-8 border-amber-400 p-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="w-12 h-12"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>

                        <h3 class="text-3xl font-bold">Proven</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur</p>
                    </div>
                </div>
            </section>
            <section
                aria-labelledby="patners"
                class="text-center grid gap-8 place-items-center"
            >
                <h2 id="partners" class="text-4xl font-bold text-amber-400">
                    Our Partners
                </h2>
                <p class="max-w-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                    doloremque quae reiciendis fugit ipsa natus repellendus quam
                    labore repudiandae vitae.
                </p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-x-16 max-w-2xl mx-auto"
                >
                    <div
                        class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md"
                    >
                        <img
                            src="{{ asset('pic/homesmart/partner1.svg') }}"
                            alt="Partner"
                            class="h-16 w-16"
                        />
                    </div>
                    <div
                        class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md"
                    >
                        <img
                            src="{{ asset('pic/homesmart/partner2.svg') }}"
                            alt="Partner"
                            class="h-16 w-16"
                        />
                    </div>
                    <div
                        class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md"
                    >
                        <img
                            src="{{ asset('pic/homesmart/partner3.svg') }}"
                            alt="Partner"
                            class="h-16 w-16"
                        />
                    </div>
                    <div
                        class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md"
                    >
                        <img
                            src="{{ asset('pic/homesmart/partner4.svg') }}"
                            alt="Partner"
                            class="h-16 w-16"
                        />
                    </div>
                    <div
                        class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md"
                    >
                        <img
                            src="{{ asset('pic/homesmart/partner5.svg') }}"
                            alt="Partner"
                            class="h-16 w-16"
                        />
                    </div>
                    <div
                        class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md"
                    >
                        <img
                            src="{{ asset('pic/homesmart/partner6.svg') }}"
                            alt="Partner"
                            class="h-16 w-16"
                        />
                    </div>
                    <div
                        class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md"
                    >
                        <img
                            src="{{ asset('pic/homesmart/partner7.svg') }}"
                            alt="Partner"
                            class="h-16 w-16"
                        />
                    </div>
                </div>
            </section>
            <section aria-labelledby="home" class="relative">
                <div class="flex flex-wrap-reverse gap-8 justify-center">
                    <div
                        class="flex gap-6 flex-wrap flex-col items-start lg:justify-center"
                    >
                        <h2 class="text-4xl font-bold">Relax, you're home!</h2>
                        <p class="max-w-md">
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Quam tenetur impedit distinctio nihil eaque.
                            Nostrum, ipsum facilis. Eaque, perspiciatis ea?
                        </p>
                        <a
                            href="#"
                            class="flex bg-amber-400 rounded-lg px-6 py-2 mx-auto shadow-lg"
                        >
                            <span>Sign Up</span>
                        </a>
                    </div>
                    <img src="{{ asset('pic/homesmart/table.png') }}" />
                </div>
                <div
                    class="absolute -bottom-2 -right-32 -z-10 aspect-square md:border-8 border-amber-400 rounded-full md:w-64 lg:w-96 xl:max-w-lg"
                ></div>
                <div
                    class="bg-teal-900 h-20 mt-12 xl:h-28 xl:absolute xl:w-screen xl:-bottom-2 -z-10"
                ></div>
            </section>
        </main>
        <section class="container mx-auto px-8 overflow-hidden">
            <div
                class="container flex flex-wrap justify-center gap-12 md:gap-6 lg:gap-20"
            >
                <div class="md:flex-1 md:max-w-sm relative">
                    <img
                        src="{{ asset('pic/homesmart/lamp.png') }}"
                        class="mx-auto"
                    />
                    <a
                        href="#"
                        class="py-2 px-6 bg-amber-400 dark:text-neutral-900 mx-auto mt-12 md:mb-12 flex gap-2 shadow-xl w-max hover:shadow-none transition-shadow focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white dark:ring-amber-400 dark:ring-offset-neutral-800"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                            />
                        </svg>
                        <span>Download the App</span>
                    </a>
                    <img
                        src="{{ asset('pic/homesmart/app.svg') }}"
                        alt="app"
                        width="240"
                        class="hidden md:block drop-shadow-xl absolute left-1/2 -translate-x-1/2 max-w-16 lg:max-w-sm"
                    />
                </div>
                <form
                    class="relative border-8 border-neutral-900 p-6 rounded-lg grid gap-8 md:flex-1 md:max-w-lg my-4 md:my-12 lg:my-16 bg-white dark:bg-neutral-800 w-full"
                >
                    <h2 id="contact" class="text-3xl font-bold">
                        Let's Connect
                    </h2>
                    <div class="relative">
                        <input
                            type="text"
                            id="name"
                            class="peer w-full border-4 border-amber-400 rounded-md focus:ring-4 dark:focus:ring-offset-2 focus:ring-amber-400 focus:border-amber-400 focus:outline-none dark:bg-amber-400 dark:text-neutral-400 placeholder-transparent"
                            placeholder="Your Name"
                        />
                        <label
                            for="name"
                            class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-4 transition-all peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300"
                            >Your Name</label
                        >
                    </div>
                    <div class="relative">
                        <input
                            type="email"
                            id="email"
                            class="peer w-full border-4 border-amber-400 rounded-md focus:ring-4 dark:focus:ring-offset-2 focus:ring-amber-400 focus:border-amber-400 focus:outline-none dark:bg-amber-400 dark:text-neutral-400 placeholder-transparent"
                            placeholder="Your Email"
                        />
                        <label
                            for="email"
                            class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-4 transition-all peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300"
                            >Your Email</label
                        >
                    </div>
                    <div class="relative">
                        <textarea
                            name="content"
                            id="content"
                            cols="5"
                            rows="10"
                            class="peer w-full border-4 border-amber-400 rounded-md focus:ring-4 dark:focus:ring-offset-2 focus:ring-amber-400 focus:border-amber-400 focus:outline-none dark:bg-amber-400 dark:text-neutral-400 placeholder-transparent"
                            placeholder="How can we help?"
                        ></textarea>
                        <label
                            for="email"
                            class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-4 transition-all peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300"
                            >How we can help you?</label
                        >
                    </div>
                    <a
                        href="#"
                        class="py-2 px-6 bg-amber-400 dark:text-neutral-900 mx-auto md:mb-12 flex gap-2 shadow-xl w-max hover:shadow-none transition-shadow focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white dark:ring-amber-400 dark:ring-offset-neutral-800"
                    >
                        <span>Sign Up</span>
                    </a>
                </form>
            </div>
        </section>
        <script src="{{ asset('js/app_home.js') }}"></script>
    </body>
</html>
