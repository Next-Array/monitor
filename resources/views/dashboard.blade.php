<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Active Monitors') }}
        </h2>
    </x-slot>

    <div style="display: grid; grid-template-columns: 30fr 60fr;  gap: 2rem;">
        <div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        {{ __("You do not have a monitor yet") }}
                        <a href="{{route('new')}}">
                            <x-primary-button style="width: 100%">
                                <span href="{{route('new')}}" style="width: 100%">Add a new monitor</span>
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="border-bottom: 2px solid #ffffffbd;">
                    <span>Account Overview</span>
                </div>
                <div class="p-4 text-gray-900 dark:text-gray-100"
                    style="display: grid; grid-template-columns: 60fr 30fr; gap: 1rem; ">
                    <div style="display: flex; flex-direction: column; gap: 2rem;">
                        <div style="display: flex; flex-direction: column;">
                            <span class="text-gray-900 dark:text-gray-400">Name</span>
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                        <div style="display: flex; flex-direction: column;">
                            <span class="text-gray-900 dark:text-gray-400">Email</span>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                        <div style="display: flex; flex-direction: column;">
                            <span class="text-gray-900 dark:text-gray-400">Account Credit</span>
                            {{-- <p>{{ Auth::user()->credit }}</p> --}}
                            <p>$0.00</p>
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 2rem;">
                        <div style="display: flex; flex-direction: column;">
                            <span class="text-gray-900 dark:text-gray-400">Active plan</span>
                            <p>{{ Auth::user()->plan->name }} </p>
                            <span class="text-gray-900 dark:text-gray-400">{{
                                Auth::user()->plan->description }}</span>
                        </div>
                        <div style="display: flex; flex-direction: column;">
                            <span class="text-gray-900 dark:text-gray-400">Total monitors</span>
                            <p>@if(Auth::user()->plan->monitors > 499) Unlimited @else {{ Auth::user()->plan->monitors
                                }} @endif</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>