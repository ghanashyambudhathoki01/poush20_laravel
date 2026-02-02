<x-layout>


    <section class="py-10">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Course List</h1>
                <a href="{{ route('course_create') }}" class="bg-[green] text-white px-4 py-1 rounded-4xl">
                    add new
                </a>
            </div>

            {{-- {{ $courses }} --}}

            <table class="mt-6 w-full text-center">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="p-2 border border-gray-400">SN</th>
                        <th class="p-2 border border-gray-400">Name</th>
                        <th class="p-2 border border-gray-400">Price</th>
                        <th class="p-2 border border-gray-400">Duration</th>
                        <th class="p-2 border border-gray-400">Admission</th>
                        <th class="p-2 border border-gray-400">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $i => $c)
                        <tr>
                            <td class="p-2 border border-gray-300">{{ ++$i }}</td>
                            <td class="p-2 border border-gray-300">{{ $c->name }}</td>
                            <td class="p-2 border border-gray-300">Rs.{{ $c->price }}</td>
                            <td class="p-2 border border-gray-300">{{ $c->duration }}</td>
                            <td class="p-2 border border-gray-300">{{ $c->admissions->count() }}</td>
                            <td class="p-2 border border-gray-300 flex items-center gap-1 justify-center">
                                <a href="{{ route('course_edit', $c->id) }}" class="border px-4 py-1 rounded">
                                    Edit
                                </a>

                                <form action="{{ route('course_delete', $c->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-[red] border px-4 py-1 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</x-layout>
