<x-layout>


    <section class="py-10">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Course Edit</h1>
                <a href="{{ route('course_list') }}" class="bg-[green] text-white px-4 py-1 rounded-4xl">
                    go back
                </a>
            </div>


            <div class="mt-8">
                <form action="{{ route('course_update', $course->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="border border-gray-300 w-full px-2 py-1" value="{{ $course->name }}"
                                placeholder="Course Name">
                        </div>

                        <div>
                            <label for="price">Price (in Rs.)</label>
                            <input type="number" name="price" id="price"
                                class="border border-gray-300 w-full px-2 py-1" value="{{ $course->price }}">
                        </div>

                        <div>
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="duration"
                                class="border border-gray-300 w-full px-2 py-1" value="{{ $course->duration }}">
                        </div>

                        <div class="col-span-2">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="6" class="border border-gray-300 w-full px-2 py-1">{{ $course->description }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="bg-[green] text-white px-5 py-2 rounded-lg">Update
                                Record</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-layout>
