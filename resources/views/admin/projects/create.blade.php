@extends('admin.layouts.app')

@section('page-title', 'Add New Project')

@section('content')
<div class="max-w-2xl">
    <div class="bg-white dark:bg-neutral-800 rounded-3xl shadow-md border border-gray-100 dark:border-neutral-700 overflow-hidden mb-8">
        <div class="p-8 border-b border-gray-200 dark:border-neutral-700">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-sm">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Add New Project</h2>
                    <p class="text-gray-600 dark:text-neutral-400 mt-1">Fill out the form below to create a new portfolio project</p>
                </div>
            </div>
        </div>
        
        <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" class="p-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Title -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">Project Title *</label>
                    <input type="text" name="title" required 
                           value="{{ old('title') }}"
                           class="w-full px-5 py-4 border border-gray-300 dark:border-neutral-600 rounded-xl bg-white dark:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all duration-300 @error('title') border-red-500 ring-red-500/20 @enderror"
                           placeholder="Enter project title">
                    @error('title')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">Project Image</label>
                    <div class="border-2 border-dashed border-gray-300 dark:border-neutral-600 rounded-xl p-8 text-center hover:border-blue-400 transition-colors cursor-pointer hover:bg-gray-50 dark:hover:bg-neutral-700/50 @error('image') border-red-500 @enderror" id="image-dropzone">
                        <input type="file" name="image" accept="image/*" class="hidden" id="image-input">
                        <svg class="w-12 h-12 mx-auto mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <p class="text-base font-medium text-gray-900 dark:text-white mb-1">Upload Image</p>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">PNG, JPG up to 5MB</p>
                        @if(old('image'))
                            <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-400">Selected: {{ old('image') }}</p>
                        @endif
                    </div>
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
                          placeholder="Describe your project in detail...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Link -->
            <div class="mt-8">
                <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">Live Demo Link (optional)</label>
                <input type="url" name="link" 
                       value="{{ old('link') }}"
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
                        class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-medium transition-colors shadow-sm flex items-center justify-center whitespace-nowrap">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Create Project
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('image-dropzone').addEventListener('click', () => {
    document.getElementById('image-input').click();
});

document.getElementById('image-input').addEventListener('change', (e) => {
    const fileName = e.target.files[0]?.name || '';
    const dropzone = document.getElementById('image-dropzone');
    
    if (fileName) {
        dropzone.innerHTML = `
            <div class="flex items-center justify-center p-8">
                <img src="${URL.createObjectURL(e.target.files[0])}" class="w-24 h-24 object-cover rounded-xl shadow-lg mr-4">
                <div>
                    <p class="font-semibold text-gray-900 dark:text-white mb-1">${fileName}</p>
                    <p class="text-sm text-green-600 dark:text-green-400">${e.target.files[0].size / 1024 / 1024 < 0.1 ? '< 0.1MB' : (e.target.files[0].size / 1024 / 1024).toFixed(1) + 'MB'}</p>
                </div>
            </div>
            <button type="button" onclick="document.getElementById('image-input').value=''; location.reload();" class="absolute top-4 right-4 p-2 bg-white/80 dark:bg-neutral-900/80 rounded-full shadow-lg hover:bg-white dark:hover:bg-neutral-900 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        `;
    }
});
</script>
@endsection