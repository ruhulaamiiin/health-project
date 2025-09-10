<div class="md:w-1/3 w-full bg-white p-4 rounded shadow">
    <h2 class="text-md font-semibold mb-2">Add Category</h2>

    <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Category Name -->
        <div>
            <label for="name" class="block text-[14px] font-medium text-gray-700">Category Name</label>
            <input type="text" name="category_name" class="mt-1 py-1 px-2 block w-full rounded-md shadow-sm outline-1">
            @error('category_name') <span class="text-red-500 text-sm"> {{ $message }} fdsgs</span>
                
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="cursor-pointer inline-flex text-sm items-center px-2 py-1 bg-blue-600 border border-transparent rounded-md text-white">
                Add Category
            </button>
        </div>
    </form>
</div>
