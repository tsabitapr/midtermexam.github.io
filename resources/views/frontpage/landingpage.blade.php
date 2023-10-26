<!-- Include Pikaday CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">

<!-- Include Pikaday JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/plugins/moment.min.js"></script>

<x-home-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
                            <div class="flex items-center">
                                <!-- Date Range Picker -->
                                <div date-range-picker class="flex items-center space-x-4">
                                    <!-- Start Date Input -->
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <!-- You can replace this with a calendar icon -->
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"></svg>
                                        </div>
                                        <!-- Use the class 'datepicker' to indicate that this input should be a date picker -->
                                        <input name="start" placeholder="Select date start" class="bg-gray-50 border border-gray-300 text-gray-900 px-3 py-2 rounded-md focus:outline-none focus:ring focus:border-blue-300 datepicker">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <!-- End Date Input -->
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <!-- You can replace this with a calendar icon -->
                                            <svg></svg>
                                        </div>
                                        <!-- Use the class 'datepicker' to indicate that this input should be a date picker -->
                                        <input name="end" placeholder="Select date end" class="bg-gray-50 border border-gray-300 text-gray-900 px-3 py-2 rounded-md focus:outline-none focus:ring focus:border-blue-300 datepicker">
                                    </div>
                                    <!-- Availability Check Button -->
                                    <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 rounded-md hover:bg-blue-50 focus:outline-none focus:ring focus:border-blue-300">Check Availability</button>
                                </div>
                            </div>
                        </div>
                        <!-- Initialize Pikaday for date inputs -->
                        <script>
                            // Replace '.datepicker' with the actual class you are using for date inputs
                            var dateInputs = document.querySelectorAll('.datepicker');
                            dateInputs.forEach(function(input) {
                                new Pikaday({
                                    field: input
                                });
                            });
                        </script>
                        <section>
                            <div class="max-w-7xl mx-auto sm:px-6 lg:p-8">
                                <div class="py-6 px-4 sm:p-6 md:py-10 md:px-8 bg-white">
                                    <!-- card pertama -->
                                    <section>
                                        @foreach ($packages as $key=>$item)
                                        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
                                            <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
                                                <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white"> {{$item->package_name}}
                                                </h1>
                                                <p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">{{$item->community->community_name}}</p>
                                            </div>
                                            <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-10">
                                                <img src="/kecak_1.jpg" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
                                                <img src="/kecak.jpg" alt="" class="hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
                                                <img src="/kecak_2.jpg" alt="" class="hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
                                            </div>
                                            <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
                                                <dt class="sr-only">Reviews</dt>
                                                <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
                                                    <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current dark:stroke-indigo-500">
                                                        <path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>4.89 <span class="text-slate-400 font-normal">(128)</span></span>
                                                </dd>
                                                <dt class="sr-only">Location</dt>
                                                <dd class="flex items-center">
                                                    <svg width="2" height="2" aria-hidden="true" fill="currentColor" class="mx-3 text-slate-300">
                                                        <circle cx="1" cy="1" r="1" />
                                                    </svg>
                                                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
                                                        <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z" />
                                                        <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                                    </svg>
                                                    Bali
                                                </dd>
                                            </dl>
                                            <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
                                                <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">Check availability</button>
                                            </div>
                                            <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 sm:mb-10 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400 mb-10">
                                                {{$item->package_desc}}
                                            </p>
                                        </div>
                                        @endforeach
                                    </section>
                                </div>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>