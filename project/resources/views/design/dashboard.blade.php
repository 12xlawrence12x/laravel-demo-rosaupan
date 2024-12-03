<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>


<body class="h-screen flex flex-col justify-center items-center">
    @if(Auth::user()->hasRole('admin'))
        <!-- Centered Content for Admin -->
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-4">WELCOME ADMIN, <span>{{ Auth::user()->name }}</span></h1>

            <!-- Add Event Button -->
            <div x-data="{ open: false }">
                <button @click="open = true" class="text-center bg-blue-500 text-white py-2 px-4 rounded-lg">
                    Add Event
                </button>

                <!-- Modal -->
                <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                    <div class="bg-white p-6 rounded-lg shadow-lg max-w-xl w-full border-2 border-black">
                        <div class="flex justify-between items-center mb-4">
                            <p class="text-xl font-bold">Add Event</p>
                            <button @click="open = false" class="text-black">X</button>
                        </div>
                        <div>
                            <h1>THIS IS THE MODAL BODY!</h1>
                            <form action ="{{route('admin.add_event')}}" method="POST" class="mt-5">
                                @csrf
                                <div>
                                    <label for = "event_name" class="flex justify-start">Event</label>
                                    <input type ="text"
                                            name="event_name"
                                            id="event_name"
                                            value="{{old('event_name')}}"
                                            class="shadow appearance-none rounded w-full py-2 px-3 text-grey-700
                                            leading-tight focus:outline-none focus:shadow-outline
                                            @error('event_name') is-invalid @enderror"required>
                                </div>

                                <div>
                                    <label for = "event_name" class="flex justify-start">Event</label>
                                    <input type ="text"
                                            name="event_description"
                                            id="event_description"
                                            value="{{old('event_description')}}"
                                            class="shadow appearance-none rounded w-full py-2 px-3 text-grey-700
                                            leading-tight focus:outline-none focus:shadow-outline
                                            @error('event_description') is-invalid @enderror"required>
                                </div>
                                <button type ="submit" class="mt-3 mb-3 bg-blue-500 text-white w-full px-2 py-2">
                                    ADD EVENT
                                </button>
                            
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->hasRole('registrar'))
        <div class="text-center">
            <h1 class="text-3xl font-bold">WELCOME REGISTRAR, <span>{{ Auth::user()->name }}</span></h1>
        </div>
    @elseif(Auth::user()->hasRole('faculty'))
        <div class="text-center">
            <h1 class="text-3xl font-bold">WELCOME FACULTY, <span>{{ Auth::user()->name }}</span></h1>
        </div>
    @endif

    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            {{ __('Log out') }}
        </x-dropdown-link>
    </form>
</body>



</html>