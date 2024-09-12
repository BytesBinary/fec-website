@props([
'url' => 'images/bytebinary.png',
'number' => '200',
'Name' => 'Students',
])

<div x-data="countUp()" class="container mx-auto flex flex-col items-center justify-center">
    <!-- Image container with transparent background -->
    <div class="rounded-full w-36 h-36 flex items-center justify-center overflow-hidden shadow-lg shadow-gray-500 mb-4 bg-zinc-50/60">
        <img class="w-full h-full object-cover" src="{{ asset($url) }}" alt="FEC" />
    </div>
    <!-- Text container -->
    <div class="text-center text-white">
        <!-- Count-up animation -->
        <p x-ref="count" class="font-bold text-3xl">{!! $number !!}</p>
        <p>{{$Name}}</p>
    </div>
</div>

<script>
    function countUp() {
        return {
            init() {
                let countElement = this.$refs.count;
                let endValue = parseInt(countElement.textContent.replace(/[^0-9]/g, ''));
                let duration = 2000; // Duration in milliseconds
                let startTime = null;

                function animateCount(timestamp) {
                    if (!startTime) startTime = timestamp;
                    let progress = timestamp - startTime;
                    let currentCount = Math.min(Math.floor((progress / duration) * endValue), endValue);
                    countElement.textContent = currentCount.toLocaleString(); // Add commas for thousands
                    if (progress < duration) {
                        requestAnimationFrame(animateCount);
                    } else {
                        countElement.textContent = endValue.toLocaleString();
                    }
                }

                requestAnimationFrame(animateCount);
            }
        }
    }

</script>
