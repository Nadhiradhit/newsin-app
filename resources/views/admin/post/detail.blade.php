@extends('layouts.dashboard')

@section('container')
    <div class="p-4 sm:ml-64">
        <p class="text-2xl font-medium mb-2">Detail Content</p>
        <hr class="h-px my-2 bg-gray-200 border-0">
        <div class="w-full">
            <p class="text-2xl font-bold text-center">{{$post->header}}</p>
            <div class="w-full mb-4 mt-4 rounded bg-gray-50">
                <div class="overflow-x-auto">
                  <table class="table">
                     {{-- thead --}}
                     <thead class="text-[1rem] font-medium text-black">
                        <tr>
                           <th class="w-[25%]">Description</th>
                           <th class="w-[25%]">Content</th>
                           <th class="w-[25%]">Category</th>
                           <th class="w-[25%]">Author</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td>{{$post->description_news}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{$post->author}}</td>
                        </tr>
                     </tbody>
                </div>
            </div>
        </div>
    </div>
@endsection