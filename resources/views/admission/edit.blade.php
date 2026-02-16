<x-layout>


    <section class="py-10">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Admission Edit</h1>
                <a href="{{ route('admission.index') }}" class="bg-[green] text-white px-4 py-1 rounded-4xl">
                    go back
                </a>
            </div>


            <div class="mt-8">
                <form action="{{ route('admission.update', $admission->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="grid grid-cols-2 gap-4">

                        <div>
                            <label for="course">Select Course</label>
                            <select name="course" id="course" class="border border-gray-300 w-full px-2 py-1">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ $admission->course_id == $course->id ? 'selected' : '' }}>
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
                            <input type="text" name="name" id="name" value="{{ old('name') ?? $admission->name }}"
                                class="border border-gray-300 w-full px-2 py-1" placeholder="Your Name">
                            @error('name')
                                <div class="text-[red] text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') ?? $admission->email }}"
                                class="border border-gray-300 w-full px-2 py-1">
                            @error('email')
                                <div class="text-[red] text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') ?? $admission->phone }}"
                                class="border border-gray-300 w-full px-2 py-1">
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
                </form>
            </div>
        </div>
    </section>

</x-layout>
