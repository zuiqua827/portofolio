@extends('admin.layouts.app')

@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
    <!-- Stats Cards -->
    <div class="bg-white dark:bg-neutral-800 rounded-2xl p-6 shadow-sm border border-gray-200 dark:border-neutral-700">
        <div class="flex items-center">
            <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl">
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <div class="ml-6">
                <p class="text-sm font-medium text-gray-600 dark:text-neutral-400 uppercase tracking-wide">Total Projects</p>
                <p class="text-4xl font-bold text-gray-900 dark:text-white mt-1">{{ \App\Models\Project::count() }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-neutral-800 rounded-2xl p-6 shadow-sm border border-gray-200 dark:border-neutral-700">
        <div class="flex items-center">
            <div class="p-3 bg-emerald-100 dark:bg-emerald-900/30 rounded-xl">
                <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </div>
            <div class="ml-6">
                <p class="text-sm font-medium text-gray-600 dark:text-neutral-400 uppercase tracking-wide">Portfolio Visitors</p>
                <p class="text-4xl font-bold text-gray-900 dark:text-white mt-1">12,450</p>
                <span class="inline-block bg-emerald-100 dark:bg-emerald-900/50 text-emerald-700 dark:text-emerald-200 px-3 py-1 rounded-full text-sm font-semibold mt-2">+18% this month</span>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-neutral-800 rounded-2xl p-6 shadow-sm border border-gray-200 dark:border-neutral-700 lg:col-span-2 xl:col-span-1">
        <div class="flex items-center mb-4">
            <div class="p-3 bg-indigo-100 dark:bg-indigo-900/30 rounded-xl">
                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600 dark:text-neutral-400 uppercase tracking-wide">Quick Actions</p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <a href="{{ route('admin.projects.create') }}" class="flex items-center justify-center p-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-medium text-sm transition-colors border border-transparent">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add Project
            </a>
            <a href="{{ route('portfolio.projects') }}" target="_blank" class="flex items-center justify-center p-3 bg-white dark:bg-neutral-800 hover:bg-gray-50 dark:hover:bg-neutral-700 text-gray-700 dark:text-neutral-300 rounded-xl font-medium text-sm transition-colors border border-gray-200 dark:border-neutral-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                View Portfolio
            </a>
        </div>
    </div>
</div>

<!-- Recent Projects -->
<div class="mt-12">
    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">Recent Projects</h3>
    @php
        $recent = \App\Models\Project::latest()->take(4)->get();
    @endphp
    
    @if($recent->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($recent as $project)
                <div class="bg-white dark:bg-neutral-800 rounded-2xl p-5 border border-gray-200 dark:border-neutral-700 hover:shadow-md transition-shadow group">
                    <div class="mb-4">
                        @if($project->image_url)
                            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-40 object-cover rounded-xl border border-gray-100 dark:border-neutral-700">
                        @else
                            <div class="w-full h-40 bg-gray-100 dark:bg-neutral-900 rounded-xl flex items-center justify-center border border-gray-200 dark:border-neutral-700">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <h4 class="font-bold text-gray-900 dark:text-white text-base mb-1 line-clamp-1">{{ $project->title }}</h4>
                    <p class="text-gray-500 dark:text-neutral-400 text-sm line-clamp-2 mb-4">{{ $project->description }}</p>
                    <div class="flex items-center justify-between mt-auto">
                        <span class="text-xs font-medium text-gray-400 dark:text-neutral-500">{{ $project->created_at->format('M d, Y') }}</span>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium text-sm flex items-center">
                            Edit
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 bg-white dark:bg-neutral-800 rounded-2xl border border-gray-200 dark:border-neutral-700">
            <div class="w-16 h-16 bg-gray-100 dark:bg-neutral-900 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">No projects yet</h3>
            <p class="text-gray-500 dark:text-neutral-400 mb-6 max-w-sm mx-auto">You haven't created any projects. Add your first project to showcase your work.</p>
            <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-medium transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Create Project
            </a>
        </div>
    @endif
</div>
@endsection