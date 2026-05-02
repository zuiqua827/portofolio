@extends('admin.layouts.app')

@section('page-title', 'Projects Management')

@section('content')
<div class="bg-white dark:bg-neutral-800 rounded-3xl shadow-md border border-gray-100 dark:border-neutral-700 overflow-hidden">
    <!-- Header -->
    <div class="p-8 border-b border-gray-200 dark:border-neutral-700">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Projects</h2>
                <p class="text-gray-600 dark:text-neutral-400 mt-1">{{ $projects->total() }} total projects</p>
            </div>
            <a href="{{ route('admin.projects.create') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-medium text-sm transition-colors whitespace-nowrap flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add New Project
            </a>
        </div>
    </div>

    <!-- Projects Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-neutral-700">
                <tr>
                    <th class="px-8 py-6 text-left text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider">Image</th>
                    <th class="px-8 py-6 text-left text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider">Title</th>
                    <th class="px-8 py-6 text-left text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider">Description</th>
                    <th class="px-8 py-6 text-left text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider">Link</th>
                    <th class="px-8 py-6 text-left text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider">Created</th>
                    <th class="px-8 py-6 text-center text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @forelse($projects as $project)
                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                        <td class="px-8 py-6 whitespace-nowrap">
                            @if($project->image_url)
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-16 h-16 object-cover rounded-xl shadow-md">
                            @else
                                <div class="w-16 h-16 bg-gray-100 dark:bg-neutral-800 rounded-xl flex items-center justify-center border border-gray-200 dark:border-neutral-700">
                                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                        </td>
                        <td class="px-8 py-6">
                            <div class="font-semibold text-gray-900 dark:text-white line-clamp-2 max-w-md">{{ $project->title }}</div>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-gray-600 dark:text-neutral-400 line-clamp-2 max-w-lg">{{ $project->description }}</p>
                        </td>
                        <td class="px-8 py-6">
                            @if($project->link && $project->link !== '#')
                                <a href="{{ $project->link }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium truncate max-w-xs" title="{{ $project->link }}">
                                    {{ Str::limit($project->link, 40) }}
                                </a>
                            @else
                                <span class="text-gray-500 dark:text-neutral-500 italic">No link</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-sm text-gray-500 dark:text-neutral-400">
                            {{ $project->created_at->format('d M Y') }}
                        </td>
                        <td class="px-8 py-6 text-center whitespace-nowrap text-sm font-medium space-x-2">
                            <a href="{{ route('admin.projects.edit', $project) }}" 
                               class="inline-flex items-center px-3 py-1.5 bg-white dark:bg-neutral-800 border border-gray-300 dark:border-neutral-600 hover:bg-gray-50 dark:hover:bg-neutral-700 text-gray-700 dark:text-neutral-300 rounded-lg transition-colors text-xs font-medium">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Edit
                            </a>
                            <button onclick="deleteProject({{ $project->id }})" 
                                    class="inline-flex items-center px-3 py-1.5 bg-white dark:bg-neutral-800 border border-red-200 dark:border-red-900/50 hover:bg-red-50 dark:hover:bg-red-900/20 text-red-600 dark:text-red-400 rounded-lg transition-colors text-xs font-medium">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-8 py-16 text-center bg-gray-50 dark:bg-neutral-800/50">
                            <div class="w-16 h-16 bg-white dark:bg-neutral-800 rounded-full flex items-center justify-center mx-auto mb-4 border border-gray-200 dark:border-neutral-700">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">No projects yet</h3>
                            <p class="text-gray-500 dark:text-neutral-400 mb-6">Get started by creating your first project.</p>
                            <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-medium transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Create First Project
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($projects->hasPages())
        <div class="px-8 py-6 border-t border-gray-200 dark:border-neutral-700 bg-gray-50 dark:bg-neutral-700">
            {{ $projects->links() }}
        </div>
    @endif
</div>

<script>
function deleteProject(id) {
    if (confirm('Are you sure you want to delete this project? This action cannot be undone.')) {
        fetch(`/admin/projects/${id}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error deleting project');
            }
        })
        .catch(error => {
            alert('Error: ' + error);
        });
    }
}
</script>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection
</content>
</xai:function_call name="create_file">