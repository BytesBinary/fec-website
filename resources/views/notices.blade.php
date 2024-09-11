@extends('layouts.app')

@section('title', 'Notices')

@section('content')
    @if( !$notices->isEmpty() )
        <div class="container mx-auto py-8"
             x-data="noticeBoard({{ json_encode($notices->first()->id) }}, '{{ json_encode($notices->first()->title) }}', '{{ asset('storage/' . $notices->first()->pdf ) }}')">
            <x-breadcrumb :links="[
            ['label' => 'Home', 'url' => '/', 'icon' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z', 'active' => false],
            ['label' => 'Notices', 'icon' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z']
         ]"/>
            <h1 class="text-2xl font-bold mb-2">Notice Board</h1>
            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" placeholder="Search by title..." class="w-full p-2 border rounded"
                       x-model="searchQuery"
                       @input="filterNotices" />
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="col-span-1 cursor-pointer">
                    <ul class="space-y-4">
                        <template x-for="(notice, index) in filteredNotices" :key="notice.id">
                            <li :class="currentId === notice.id ? 'bg-gray-200' : 'bg-white'"
                                class="p-4 rounded-lg shadow hover:bg-gray-300"
                                @click="changeNotice(notice.id, notice.title, notice.pdf)">
                                <a href="#" class="text-md font-semibold" x-text="notice.title"></a>
                                <p class="text-sm text-gray-600" x-text="formatDate(notice.publish_date)"></p>
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
@endsection

@push('script')
    <script>
        function noticeBoard(defaultId, defaultTitle, defaultPdf) {
            return {
                currentId: defaultId,
                currentTitle: defaultTitle,
                currentPdf: defaultPdf,
                searchQuery: '',
                filteredNotices: @json($notices->items()),

                changeNotice(id, title, pdfUrl) {
                    this.currentId = id;
                    this.currentTitle = title;
                    this.currentPdf = pdfUrl;
                },

                filterNotices() {
                    const query = this.searchQuery.toLowerCase();
                    this.filteredNotices = @json($notices->items()).filter(notice => {
                        return notice.title.toLowerCase().includes(query);
                    });
                },

                formatDate(date) {
                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    return new Date(date).toLocaleDateString(undefined, options);
                }
            }
        }
    </script>
@endpush
