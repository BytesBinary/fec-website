@extends('layouts.app')

@section('title', 'Notices')

@section('content')
@if( !$notices->isEmpty() )
<div class="container mx-auto p-5 mb-3 shadow-lg shadow-gray-500 bg-gray-100 rounded" x-data="noticeBoard({{ json_encode($notices->first()->id) }}, '{{ json_encode($notices->first()->title) }}', '{{ asset('storage/' . $notices->first()->pdf ) }}')">

    <h1 class="text-4xl font-bold mb-6 text-center  p-3 rounded-lg">Notice Board</h1>
    <!-- Search Bar -->
    <div class="mb-4">
        <input type="text" placeholder="Search by title..." class="w-full p-2 bg-white border border-gray-400 rounded" x-model="searchQuery" @input="filterNotices" />
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-0 lg:gap-4">
        <div class="col-span-1 cursor-pointer">
            <ul class="space-y-4">
                <template x-for="(notice, index) in filteredNotices" :key="notice.id">
                    <li :class="currentId === notice.id ? 'bg-cyan-200' : 'bg-cyan-50'" class="p-4 rounded-lg shadow hover:bg-cyan-300 flex justify-between items-center" @click="changeNotice(notice.id, notice.title, notice.pdf)">
                        <div>
                            <a href="#" class="text-md font-semibold" x-text="notice.title"></a>
                            <p class="text-sm text-gray-600" x-text="formatDate(notice.publish_date)"></p>
                        </div>
                        <x-svg-icon.download />
                    </li>
                </template>
            </ul>

            <!-- Pagination Links -->
            <div class="mt-4">
                {{$notices->links()}}
            </div>
        </div>

        <div class="col-span-3 invisible lg:visible">
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4" x-text="currentTitle"></h2>
                <embed :src="currentPdf" type="application/pdf" class="w-full h-screen" />
            </div>
        </div>
    </div>
</div>
@endif
<script>
    function noticeBoard(defaultId, defaultTitle, defaultPdf) {
        return {
            currentId: defaultId
            , currentTitle: defaultTitle
            , currentPdf: defaultPdf
            , searchQuery: ''
            , filteredNotices: @json($notices->items()),

            changeNotice(id, title, pdfUrl) {
                this.currentId = id;
                this.currentTitle = title;
                this.currentPdf = pdfUrl;

                // Check if the screen width is mobile-sized (less than lg breakpoint)
                if (window.innerWidth < 1024) {
                    this.downloadPdf(pdfUrl, title);
                }
            },

            downloadPdf(pdfUrl, title) {
                // Trigger PDF download
                const link = document.createElement('a');
                link.href = pdfUrl;
                link.download = `${title}.pdf`;
                link.click();
            },

            filterNotices() {
                const query = this.searchQuery.toLowerCase();
                this.filteredNotices = @json($notices->items()).filter(notice => {
                    return notice.title.toLowerCase().includes(query);
                });
            },

            formatDate(date) {
                const options = {
                    year: 'numeric'
                    , month: 'long'
                    , day: 'numeric'
                };
                return new Date(date).toLocaleDateString(undefined, options);
            }
        }
    }

</script>

@endsection
