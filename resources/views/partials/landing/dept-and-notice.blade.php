<div class="container mx-auto pt-5 px-5 pb-10 my-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="col-span-1 lg:col-span-2 w-full">
            <p class="text-center mb-8 text-3xl md:text-5xl font-bold " data-aos="fade-up">
                Departments
            </p>
            <hr class="w-48 h-1 mx-auto bg-green-400 border-0 rounded mb-10" data-aos="fade-down">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <x-departments-card name="Computer Science & Engineering" image="images/card/cse-dept.jpg"
                            url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Electrical & Electronics Engineering" image="images/card/cse-dept.jpg"
                            url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Civil <br> Engineering" image="images/card/cse-dept.jpg"
                            url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Computer Science & Engineering" image="images/card/cse-dept.jpg"
                            url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Electrical & Electronics Engineering" image="images/card/cse-dept.jpg"
                            url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Civil <br> Engineering" image="images/card/cse-dept.jpg"
                            url="#" is-home-page="true" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="w-full col-span-1">
            <p class="text-center mb-8 text-3xl md:text-5xl font-bold " data-aos="fade-up">
                Notices
            </p>
            <hr class="w-48 h-1 mx-auto bg-green-400 border-0 rounded mb-10" data-aos="fade-down" />
            <div class="relative bg-gray-100 rounded-lg overflow-hidden h-[510px]">
                <!-- Notice Container -->
                <div class="overflow-hidden relative h-full">
                    <div class="notice-wrapper space-y-4 animate-scroll p-3">
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 1: New event coming up!</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 2: Meeting tomorrow at 10 AM</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 3: Assignment submission extended</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 4: Holidays announced for next
                                week</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 5: New project deadline is next
                                Monday</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 6: Team meeting at 3 PM today</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 7: New library timings from next
                                week</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 8: Graduation ceremony dates
                                announced</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 9: Sports event registration opens
                                tomorrow</a>
                        </div>
                        <div class="notice py-2 mx-2 text-lg bg-white border px-3 rounded-lg shadow-lg">
                            <a class="hover:text-blue-500" href=""> Notice 10: Office hours updated for next
                                week</a>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-4 left-1/2 w-[91%] text-center transform -translate-x-1/2 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold py-3 px-4 rounded-lg shadow-md hover:shadow-lg hover:from-blue-600 hover:to-blue-800 transition duration-300 ease-in-out">
                    <a href="#">View more</a>
                </div>
            </div>

        </div>

    </div>
</div>
