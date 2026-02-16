<header class="py-2 shadow text-center">

    <nav class="container flex justify-between items-center">
        <div>
            <img class="h-[40px]" src="/images/logo.png" alt="Logo">
        </div>

        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'text-[red]' : '' }} ">Home</a>
            <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'text-[red]' : '' }} ">About</a>
            <a href="{{ route('service') }}" class="{{ Request::routeIs('service') ? 'text-[red]' : '' }} ">Service</a>
            <a href="{{ route('admission.index') }}" class="{{ Request::routeIs('admission*') ? 'text-[red]' : '' }} ">Admission</a>

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                type="button" class="flex items-end {{ Request::routeIs('course_*') ? 'text-[red]' : '' }} ">
                Course
                <svg class="w-4 h-4 ms-1 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 9-7 7-7-7" />
                </svg>
            </button>

            <a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'text-[red]' : '' }} ">Contact</a>
        </div>
    </nav>
</header>

<!-- Dropdown menu -->
<div id="dropdown"
    class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
    <ul class="p-2 text-sm text-body font-medium" aria-labelledby="dropdownDefaultButton">
        <li>
            <a href="{{route('course_list')}}"
                class="inline-flex {{ Request::routeIs('course_list') ? 'text-[red]' : '' }}  items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">List</a>
        </li>
        <li>
            <a href="{{route('course_create')}}"
                class="inline-flex items-center {{ Request::routeIs('course_create') ? 'text-[red]' : '' }}  w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Create</a>
        </li>
    </ul>
</div>
