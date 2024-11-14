@extends('layouts.home-layput')

@section('content')
    <main>
        <div class="max-w-7xl grid-cols-7 gap-6 mx-auto py-12 md:grid space-y-6 sm:px-6 lg:px-8 md:space-y-0 p-4">
            <div class="col-span-2">
                <div class="space-y-1">
                    <a class="shadow-md p-4 bg-slate-900  sm:rounded-lg text-gray-100 hover:bg-slate-800 flex items-center space-x-2"
                        href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                            </path>
                        </svg>
                        <span> নতুন আলোচনা </span>
                    </a>
                    <a class="shadow-md p-4 bg-slate-900  sm:rounded-lg text-gray-100 hover:bg-slate-800 flex items-center space-x-2"
                        href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                            </path>
                        </svg>
                        <span> সকল আলোচনা </span>
                    </a>
                    <a class="shadow-md p-4 bg-slate-900  sm:rounded-lg text-gray-100 hover:bg-slate-800 flex items-center space-x-2"
                        href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z">
                            </path>
                        </svg>
                        <span> কোন উত্তর পাওয়া যায়নি </span>
                    </a>
                    <a class="shadow-md p-4 bg-slate-900  sm:rounded-lg text-gray-100 hover:bg-slate-800 flex items-center space-x-2"
                        href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z">
                            </path>
                        </svg>
                        <span> সমাধান হয়ে গিয়েছে </span>
                    </a>
                    <a class="shadow-md p-4 bg-slate-900  sm:rounded-lg text-gray-100 hover:bg-slate-800 flex items-center space-x-2"
                        href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z">
                            </path>
                        </svg>
                        <span> কোন সমাধান হয়নি </span>
                    </a>
                </div>
            </div>
            <div class="col-span-5">
                <div class="space-y-3">
                    <div
                        class="p-6 overflow-hidden text-gray-900 bg-white dark:bg-slate-900 sm:rounded-lg dark:text-gray-100">
                        <div>
                            <select name="topic" id="topic"
                                class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-800  dark:text-white dark:border-slate-700 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">All Topics</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->title }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="space-y-3 mt-6">
                    @foreach ($threads as $thread)
                        @php
                        @endphp
                        <a href="{{ route('forum.singe', $thread) }}"
                            class="block p-6 overflow-hidden  text-gray-900 bg-white shadow-sm  dark:bg-slate-900 dark:text-gray-100 sm:rounded-lg">
                            <div class="flex items-center space-x-6">
                                <div class="flex-grow">
                                    <div class="flex items-center space-x-3">
                                        <span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-slate-700 dark:text-slate-300">{{ $thread->category->title }}</span>
                                        <h1 class="text-lg font-medium">{{ $thread->title }}</h1>
                                    </div>
                                    <div class="mt-3 text-sm text-gray-400 line-clamp-1">
                                        <p>{{ $thread->description }}</p>
                                    </div>
                                    <span class="inline-block mt-3 text-sm text-gray-400">Last Post By
                                        {{ $thread->user->username }} {{ $thread->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="flex flex-col items-end flex-shring-4">
                                    <div class="flex -space-x-4 rtl:space-x-reverse">
                                        @foreach ($thread->replies as $reply)
                                            <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-600"
                                                src="https://www.gravatar.com/avatar/a7aa07a958b3e5d626792d37767d77f4?d=monsterid"
                                                alt="{{ $reply->user->name }}">
                                        @endforeach
                                    </div>
                                    <div class="mt-3 text-xs text-gray-400">{{ $thread->replies_count }} replies</div>
                                </div>
                            </div>


                        </a>
                    @endforeach
                    <div class="pagination">{{ $threads->links() }}</div>
                </div>
            </div>
        </div>
    </main>
@endsection
