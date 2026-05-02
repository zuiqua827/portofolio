@extends('admin.layouts.app')

@section('page-title', 'Edit Project')

@section('content')
<div class="max-w-2xl">
    <div class="bg-white dark:bg-neutral-800 rounded-3xl shadow-md border border-gray-100 dark:border-neutral-700 overflow-hidden mb-8">
        <div class="p-8 border-b border-gray-200 dark:border-neutral-700">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-sm">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Edit Project</h2>
                    <p class="text-gray-600 dark:text-neutral-400 mt-1">Update the project details below</p>
                </div>
            </div>
        </div>
        
        <form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data" class="p-8">
            @method('PUT')
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Title -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">Project Title *</label>
                    <input type="text" name="title" required 
                           value="{{ old('title', $project->title) }}"
                           class="w-full px-5 py-4 border border-gray-300 dark:border-neutral-600 rounded-xl bg-white dark:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all duration-300 @error('title') border-red-500 ring-red-500/20 @enderror"
                           placeholder="Enter project title">
                    @error('title')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">Project Image</label>
                    @if($project->image_url)
                        <div class="relative mb-4">
                            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-64 object-cover rounded-xl border border-gray-200 dark:border-neutral-700">
                            <label class="absolute -top-3 -right-3 bg-white dark:bg-neutral-700 px-4 py-2 rounded-xl text-sm font-semibold text-gray-700 dark:text-neutral-300 border border-gray-200 dark:border-neutral-600 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-neutral-600 transition">
                                Replace
                                <input type="file" name="image" accept="image/*" class="hidden">
                            </label>
                        </div>
                    @else
                        <div class="border-2 border-dashed border-gray-300 dark:border-neutral-600 rounded-xl p-8 text-center hover:border-blue-400 transition-colors cursor-pointer hover:bg-gray-50 dark:hover:bg-neutral-700/50">
                            <input type="file" name="image" accept="image/*" class="hidden" id="edit-image-input">
                            <svg class="w-12 h-12 mx-auto mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="text-base font-medium text-gray-900 dark:text-white mb-1">Upload Image</p>
                            <p class="text-sm text-gray-500 dark:text-neutral-400">PNG, JPG up to 5MB</p>
                        </div>
                    @endif
                    @error('image')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Description -->
            <div class="mt-8">
                <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">Description *</label>
                <textarea name="description" required rows="5" 
                          class="w-full px-5 py-4 border border-gray-300 dark:border-neutral-600 rounded-xl bg-white dark:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all duration-300 resize-vertical @error('description') border-red-500 ring-red-500/20 @enderror"
                          placeholder="Describe your project in detail...">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Link -->
            <div class="mt-8">
                <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">Live Demo Link (optional)</label>
                <input type="url" name="link" 
                       value="{{ old('link', $project->link) }}"
                       class="w-full px-5 py-4 border border-gray-300 dark:border-neutral-600 rounded-xl bg-white dark:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all duration-300"
                       placeholder="https://your-project-url.com">
                <p class="mt-2 text-xs text-gray-500 dark:text-neutral-400 italic">Leave empty if no live demo available</p>
                @error('link')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col sm:flex-row gap-4 mt-8 pt-8 border-t border-gray-200 dark:border-neutral-700 items-center justify-end">
                <a href="{{ route('admin.projects.index') }}" 
                   class="w-full sm:w-auto bg-white dark:bg-neutral-800 border border-gray-300 dark:border-neutral-600 hover:bg-gray-50 dark:hover:bg-neutral-700 text-gray-700 dark:text-neutral-300 px-6 py-3 rounded-xl font-medium text-center transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                        class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-medium transition-colors shadow-sm whitespace-nowrap">
                    Update Project
                </button>
            </div>
        </form>
        
        <!-- Delete Form - Moved OUTSIDE the update form -->
        <div class="px-8 pb-8">
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project? This action cannot be undone.')">
                @method('DELETE')
                @csrf
                <button type="submit" 
                        class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 text-sm font-medium underline flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    Delete Project
                </button>
            </form>
        </div>
    </div>
</div>

<script>
document.querySelector('#edit-image-input')?.addEventListener('change', (e) => {
    const fileName = e.target.files[0]?.name || '';
    // Update preview similar to create form
});
</script>
@endsection