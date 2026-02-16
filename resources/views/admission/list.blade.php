<x-layout>


    <section class="py-10">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Admissions List</h1>
                <a href="{{ route('admission.create') }}" class="bg-[green] text-white px-4 py-1 rounded-4xl">
                    add new
                </a>
            </div>


            <table class="mt-6 w-full text-center">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="p-2 border border-gray-400">SN</th>
                        <th class="p-2 border border-gray-400">Name</th>
                        <th class="p-2 border border-gray-400">Email</th>
                        <th class="p-2 border border-gray-400">Phone</th>
                        <th class="p-2 border border-gray-400">Course</th>
                        <th class="p-2 border border-gray-400">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($admissions as $i => $admission)
                        <tr>
                            <td class="p-2 border border-gray-300">{{ ++$i }}</td>
                            <td class="p-2 border border-gray-300">{{ $admission->name }}</td>
                            <td class="p-2 border border-gray-300">{{ $admission->email }}</td>
                            <td class="p-2 border border-gray-300">{{ $admission->phone }}</td>
                            <td class="p-2 border border-gray-300">{{ $admission->course->name }}</td>
                            <td class="p-2 border border-gray-300 flex items-center gap-1 justify-center">
                                <a href="{{ route('admission.edit', $admission->id) }}" class="border px-4 py-1 rounded">
                                    Edit
                                </a>

                                <form action="{{ route('admission.destroy', $admission->id) }}" method="post">
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
