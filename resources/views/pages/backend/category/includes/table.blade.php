<div class="overflow-x-auto bg-white shadow rounded-xl">
    <table class="w-full text-sm text-left text-gray-600">
        <thead class="text-xs uppercase bg-gray-100 text-gray-700">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Slug</th>
                <th scope="col" class="px-6 py-3 text-center">Ordering</th>
                <th scope="col" class="px-6 py-3 text-center">Visible</th>
                <th scope="col" class="px-6 py-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse ($categories as $category)
                <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition-colors duration-200">
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 font-semibold text-gray-800">{{ $category->name }}</td>
                    <td class="px-6 py-4">{{ $category->slug }}</td>
                    <td class="px-6 py-4 text-center">{{ $category->ordering }}</td>
                    <td class="px-6 py-4 text-center">
                        @if($category->is_visible)
                            <span class="inline-flex items-center px-2 py-1 rounded-lg bg-green-100 text-green-700 text-xs font-medium">
                                ✓ Visible
                            </span>
                        @else
                            <span class="inline-flex items-center px-2 py-1 rounded-lg bg-red-100 text-red-700 text-xs font-medium">
                                ✕ Hidden
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('categories.edit', $category->id) }}"
                               class="px-3 py-1 rounded-md text-xs font-semibold bg-blue-50 text-blue-600 hover:bg-blue-100">
                                Edit
                            </a>
                            <form method="POST" action="{{ route('categories.destroy', $category->id) }}"
                                  onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-3 py-1 rounded-md text-xs font-semibold bg-red-50 text-red-600 hover:bg-red-100">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="px-6 py-6 text-center text-gray-400 text-sm italic">
                        No categories found
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
