<div>
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">Upcoming Events</h2>
                <p class="text-gray-600 mt-4 max-w-xl mx-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam atque, nisi optio, repellat voluptate iste eaque inventore soluta assumenda est, repudiandae fugit. Fugiat nemo rem facere nobis sequi! Deserunt, culpa.</p>
            </div>

            <!-- Event Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event Card -->
                <x-card.events-card title="Disco Diwane" pic="images/club/professionals.jpg" date="09.DECEMBER.2024" location="Baitul Aman"
                url="{{ route('event') }}" wire:navigate is-home-page="true" />
                <x-card.events-card title="Disco Diwane" pic="images/club/professionals.jpg" date="09.JULY.2024" location="Baitul Aman"
                url="{{ route('event') }}" wire:navigate is-home-page="true" />
                <x-card.events-card title="Disco Diwane" pic="images/club/professionals.jpg" date="09.DECEMBER.2024" location="Baitul Aman"
                url="{{ route('event') }}" wire:navigate is-home-page="true" />
                <x-card.events-card title="Disco Diwane" pic="images/club/professionals.jpg" date="09.DECEMBER.2024" location="Baitul Aman"
                url="{{ route('event') }}" wire:navigate is-home-page="true" />
                <x-card.events-card title="Disco Diwane" pic="images/club/professionals.jpg" date="09.DECEMBER.2024" location="Baitul Aman"
                url="{{ route('event') }}" wire:navigate is-home-page="true" />
                <x-card.events-card title="Disco Diwane" pic="images/club/professionals.jpg" date="09.DECEMBER.2024" location="Baitul Aman"
                url="{{ route('event') }}" wire:navigate is-home-page="true" />
            </div>
        </div>
    </section>
</div>
