<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <title>SmartWatch Luxury</title>
    </head>
    <body class="container">
        <section>
            <div
                class="mx-auto flex flex-wrap pt-2 md:p-5 flex-col md:flex-row items-center"
            >
                <a
                    class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-orange-500 rounded-full"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
                        ></path>
                    </svg>
                    <span class="ml-3 text-xl">Luxy-SW</span>
                </a>
                <div class="m-0 flex flex-wrap items-center md:ml-auto md:m-2">
                    <nav class="md:block hidden font-bold">
                        <a href="#" class="p-2 hover:text-orange-500">Home</a>
                        <a href="#" class="p-2 hover:text-orange-500"
                            >Catalogue</a
                        >
                        <a href="#" class="p-2 hover:text-orange-500"
                            >Feature</a
                        >
                        <a href="#" class="p-2 hover:text-orange-500">About</a>
                        <a href="#" class="p-2 hover:text-orange-500"
                            >Testimonial</a
                        >
                        <a href="#" class="p-2 hover:text-orange-500"
                            >Contact Us</a
                        >
                    </nav>
                </div>
            </div>
        </section>

        <section>
            <div class="flex items-center flex-col-reverse md:flex-row">
                <div class="p-0 w-1/2 items-center justify-center md:p-10">
                    <div class="text-4xl font-bold mb-4">
                        Smart Digital Watch For Luxurious Life
                    </div>
                    <div class="text-xs text-gray-600 mb-4 text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Harum voluptatibus ad nostrum quidem est aliquam
                        excepturi aut quia quam et!
                    </div>
                    <button
                        class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-300 rounded text-lg"
                    >
                        Buys Product
                    </button>
                </div>
                <div class="w-1/2">
                    <img
                        class="object-center h-max w-max"
                        src="{{ asset('pic/smartUI/smartwatch.png') }}"
                    />
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="flex flex-col items-center">
                <div class="flex-col w-1/2">
                    <div class="text-center text-3xl font-bold mb-2">
                        Product Features
                    </div>
                    <div class="text-xs text-gray-600 text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error accusantium quasi culpa quisquam aspernatur
                        amet quo nulla dolor deleniti esse.
                    </div>
                </div>
                <div class="flex mt-5">
                    <div
                        class="flex flex-col items-center text-center w-1/4 m-2 p-5"
                    >
                        <div class="rounded-full w-20 h-20 bg-pink-200">
                            <img
                                class="object-center h-4/5 ml-2 mt-2"
                                src="{{ asset('pic/smartUI/quality.svg') }}"
                            />
                        </div>
                        <div class="font-bold text-xl my-3">High Quality</div>
                        <div class="text-xs text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Eveniet quos saepe eligendi numquam aliquid
                            consequuntur at aspernatur quam voluptas itaque?
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center text-center w-1/4 m-2 p-5"
                    >
                        <div class="rounded-full w-20 h-20 bg-pink-200">
                            <img
                                class="object-center h-2/3 ml-3 mt-4"
                                src="{{ asset('pic/smartUI/design.svg') }}"
                            />
                        </div>
                        <div class="font-bold text-xl my-3">Awesome Design</div>
                        <div class="text-xs text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Eveniet quos saepe eligendi numquam aliquid
                            consequuntur at aspernatur quam voluptas itaque?
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center text-center w-1/4 m-2 p-5"
                    >
                        <div class="rounded-full w-20 h-20 bg-pink-200">
                            <img
                                class="object-center h-4/5 ml-2 mt-2"
                                src="{{ asset('pic/smartUI/tech.svg') }}"
                            />
                        </div>
                        <div class="font-bold text-xl my-3">
                            Latest Technology
                        </div>
                        <div class="text-xs text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Eveniet quos saepe eligendi numquam aliquid
                            consequuntur at aspernatur quam voluptas itaque?
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center text-center w-1/4 m-2 p-5"
                    >
                        <div class="rounded-full w-20 h-20 bg-pink-200">
                            <img
                                class="object-center h-4/5 ml-2 mt-2"
                                src="{{ asset('pic/smartUI/friendly.svg') }}"
                            />
                        </div>
                        <div class="font-bold text-xl my-3">User Friendly</div>
                        <div class="text-xs text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Eveniet quos saepe eligendi numquam aliquid
                            consequuntur at aspernatur quam voluptas itaque?
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-10 flex items-center">
            <div class="w-1/2 items-center">
                <img
                    class="object-center h-max w-max"
                    src="{{ asset('pic/smartUI/smartwatch.png') }}"
                />
            </div>
            <div
                class="flex-col p-4 w-1/2 max-h-max items-center rounded overflow-hidden shadow-lg bg-gray-200"
            >
                <div class="font-bold text-3xl my-2">About The Product</div>
                <div class="text-xs text-gray-600 my-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Illum voluptas dolores libero in, reiciendis harum! Adipisci
                    ratione a saepe aliquam.
                </div>
                <div class="font-bold text-sm my-1 ml-2">Model No#2 Market</div>
                <div class="font-bold text-sm my-1 ml-2">
                    Camera Resolution 24 mp
                </div>
                <div class="font-bold text-sm my-1 ml-2">
                    Image Processor DISIC 7
                </div>
                <div class="font-bold text-sm my-1 ml-2">Aspec Ratio 3:2</div>
                <div class="font-bold text-sm my-1 ml-2">Lens Mount EP:GPE</div>
                <div class="font-bold text-sm my-1 ml-2">Water Resistant</div>
            </div>
        </section>
    </body>
</html>
