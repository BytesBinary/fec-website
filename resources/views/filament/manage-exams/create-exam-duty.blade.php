<x-filament-panels::page>
    <x-filament-panels::form>
        {{ $this->form }}

        <div
            x-data="{
                dutyDetails: @entangle('duty_details'),
                teacherMap: @js(\App\Models\User::where('designation', \App\Models\Designation::where('designation', 'Teacher')->first()->id)->pluck('name', 'id'))
            }"
            class="mt-6 space-y-4"
        >
            <template x-for="(detail, index) in dutyDetails" :key="index">
                <div class="border p-4 rounded-xl shadow-sm bg-white dark:bg-gray-900">
                    <div class="mb-2 font-semibold text-gray-700 dark:text-gray-200">
                        Duty Detail #<span x-text="index + 1"></span>
                    </div>

                    <!-- Supervisor count display -->
                    <div class="text-sm text-gray-800 dark:text-gray-100">
                        <span class="font-medium">Supervisors:</span>
                        <template x-for="id in detail.supervisor ?? []" :key="id">
                            <span class="inline-block bg-blue-100 dark:bg-blue-800 text-blue-800 dark:text-blue-100 px-2 py-1 rounded-full text-xs mr-1 mb-1">
                                <span x-text="teacherMap[id]"></span>
                                (<span x-text="countTeacher(id, 'supervisor')"></span>)
                            </span>
                        </template>
                    </div>

                    <!-- Invigilator count display -->
                    <div class="text-sm text-gray-800 dark:text-gray-100 mt-2">
                        <span class="font-medium">Invigilators:</span>
                        <template x-for="id in detail.invigilator ?? []" :key="id">
                            <span class="inline-block bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-100 px-2 py-1 rounded-full text-xs mr-1 mb-1">
                                <span x-text="teacherMap[id]"></span>
                                (<span x-text="countTeacher(id, 'invigilator')"></span>)
                            </span>
                        </template>
                    </div>
                </div>
            </template>

            <script>
                function countTeacher(id, type) {
                    let count = 0;
                    for (const item of this.dutyDetails) {
                        const list = item[type] || [];
                        if (list.includes(id)) count++;
                    }
                    return count;
                }
            </script>
        </div>

        @if(empty($record))
            <x-filament-panels::form.actions :actions="$this->getFormActions()" />
        @else
            <x-filament-panels::form.actions :actions="$this->getFormActions('update')" />
        @endif
    </x-filament-panels::form>
</x-filament-panels::page>
