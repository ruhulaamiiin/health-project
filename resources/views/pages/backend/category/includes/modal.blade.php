<div id="categoryModal" data-target="#categoryModal" data-backdrop="false"
    class="modal-body fixed inset-0 z-50 justify-center items-center backdrop-blur-sm transition-opacity duration-300 opacity-0 hidden">
    <div class="modal-content bg-background rounded shadow-md w-full max-w-md p-4 border transition-all duration-150">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-md font-semibold modal-title"></h3>
            <button class="close-modal text-muted-foreground hover:text-foreground" data-target="#categoryModal">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6L6 18"></path>
                    <path d="M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <form action="" class="" id="categoryForm">
            @csrf
            <div class="">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium mb-1">Category Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-3 py-2 rounded-md border border-input bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent" />
                        <span class="error-text error-name text-[12px] text-red-500"></span>
                </div>
                <div class="mb-4">
                    <label for="slug" class="block text-sm font-medium mb-1">Slug (optional)</label>
                    <input type="text" id="slug" name="slug"
                        class="w-full px-3 py-2 rounded-md border border-input bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent" />
                <span class="error-text error-slug text-[12px] text-red-500"></span>
                    </div>
                <div class="mb-4">
                    <label for="parent_id" class="block text-sm font-medium mb-1">Parent Category</label>
                    <select id="parent_id" name="parent_id"
                        class="w-full px-3 py-2 rounded-md border border-input bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent">
                        <option value="">None</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="is_visible" name="is_visible" value="1"
                        class="rounded border-input focus:ring-ring cursor-pointer" />
                    <label for="is_visible" class="ml-2 text-sm cursor-pointer">Make category visible</label>
                </div>
                <div class="mt-4 flex justify-end space-x-3">
                    <button type="button" data-target="#categoryModal"
                        class="close-modal px-3 py-1 cursor-pointer rounded-md border border-input bg-background text-foreground hover:bg-accent transition-colors">
                        Cancel
                    </button>
                    <button type="submit"
                        class="btn-title px-3 py-1 cursor-pointer rounded-md text-sm font-medium transition-colors gap-2 bg-foreground text-background hover:bg-foreground/80">

                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
