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
                        <x-departments-card name="Computer Science & Engineering" image="images/card/cse-dept.jpg" url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Electrical & Electronics Engineering" image="images/card/cse-dept.jpg" url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Civil <br> Engineering" image="images/card/cse-dept.jpg" url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Computer Science & Engineering" image="images/card/cse-dept.jpg" url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Electrical & Electronics Engineering" image="images/card/cse-dept.jpg" url="#" is-home-page="true" />
                    </div>
                    <div class="swiper-slide">
                        <x-departments-card name="Civil <br> Engineering" image="images/card/cse-dept.jpg" url="#" is-home-page="true" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="w-full col-span-1 flex flex-col">
            <p class="text-center mb-8 text-3xl md:text-5xl font-bold " data-aos="fade-up">
                Notices
            </p>
            <hr class="w-48 h-1 mx-auto bg-green-400 border-0 rounded mb-10" data-aos="fade-down">
            <div class="relative bg-gray-100 rounded-lg overflow-hidden flex-1">
                <!-- Notice Container -->
                <div class="overflow-hidden relative h-full">
                    <div class="notice-wrapper space-y-4 animate-scroll p-3">
                        <div class="notice py-2">Notice 1: New event coming up!</div>
                        <div class="notice py-2">Notice 2: Meeting tomorrow at 10 AM</div>
                        <div class="notice py-2">Notice 3: Assignment submission extended</div>
                        <div class="notice py-2">Notice 4: Holidays announced for next week</div>
                        <div class="notice py-2">Notice 5: New project deadline is next Monday</div>
                        <div class="notice py-2">Notice 6: Team meeting at 3 PM today</div>
                        <div class="notice py-2">Notice 7: New library timings from next week</div>
                        <div class="notice py-2">Notice 8: Graduation ceremony dates announced</div>
                        <div class="notice py-2">Notice 9: Sports event registration opens tomorrow</div>
                        <div class="notice py-2">Notice 10: Office hours updated for next week</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
