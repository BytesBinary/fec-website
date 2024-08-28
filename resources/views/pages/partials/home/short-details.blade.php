<section class="section short-description position-relative">
    <div class="overlay position-absolute w-100 h-100 top-0 start-0"></div>
    <div class="container position-relative">
        <div class="row justify-content-center align-items-center ">
            @foreach ($short_details['short_details'] as $detail)
                <x-short-details iconClass="{{ $detail['icon'] }}"
                    text="{{ $detail['title'] }}: <br/> <span class='count-up' data-count='{{ $detail['value'] }}'>0</span>" animation="{{ $detail['animation'] }}"/>
            @endforeach
        </div>
    </div>
</section>

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    const countTo = +el.dataset.count,
                        duration = 2000,
                        startTime = performance.now();

                    const updateCount = (currentTime) => {
                        const progress = Math.min((currentTime - startTime) / duration, 1);
                        el.textContent = Math.floor(progress * countTo);
                        if (progress < 1) requestAnimationFrame(updateCount);
                    };
                    requestAnimationFrame(updateCount);
                    obs.unobserve(el);
                });
            }, {
                threshold: 0.1
            }); // starts when 10% is seen

            document.querySelectorAll('.count-up').forEach(el => observer.observe(el));
        });
    </script>
@endsection
