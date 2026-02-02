<x-layout>


    <section class="py-10">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Admission Create</h1>
                <a href="{{ route('admission.index') }}" class="bg-[green] text-white px-4 py-1 rounded-4xl">
                    go back
                </a>
            </div>


            <div class="mt-8">
                <form action="{{ route('admission.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">

                        <div>
                            <label for="course">Select Course</label>
                            <select name="course" id="course" class="border border-gray-300 w-full px-2 py-1">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course') == $course->id ? 'selected' : '' }}>
                                        {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('course')
                                <div class="text-[red] text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="border border-gray-300 w-full px-2 py-1" placeholder="Your Name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="text-[red] text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                class="border border-gray-300 w-full px-2 py-1" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-[red] text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone"
                                class="border border-gray-300 w-full px-2 py-1" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="text-[red] text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-[green] text-white px-5 py-2 rounded-lg">Save
                                Record</button>
                        </div>
                    </div>

                    {{-- <div>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" class="border border-gray-300">
                    </div>

                    <div>
                        <label for="gender">Gender</label>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" value="male"
                            class="border border-gray-300">

                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female" value="female"
                            class="border border-gray-300">
                    </div>

                    <div>
                        <label for="course">Course</label>
                        <label for="web">Web</label>
                        <input type="checkbox" name="course" id="web" value="web"
                            class="border border-gray-300">

                        <label for="app">Mobile App</label>
                        <input type="checkbox" name="course" id="app" value="app"
                            class="border border-gray-300">
                    </div>

                    <div>
                        <label for="qualification">Qualification</label>
                        <select name="qualification" id="qualification" class="border border-gray-300">
                            <option value="see">SEE</option>
                            <option value="intermediate">+2/intermediate</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="master">Master</option>
                            <option value="other">Other</option>
                        </select>
                    </div> --}}
                </form>
            </div>
        </div>
    </section>

</x-layout>
