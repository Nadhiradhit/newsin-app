@extends('layouts.dashboard')

@section('container')
<div class="p-4 sm:ml-64">
    {{-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"> --}}
       <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="col-span-3">
         <div class="flex h-24 rounded bg-gray-50 justify-start py-7 px-8">
            <p class="text-2xl text-gray-700 font-semibold">
               Welcome To Dashboard, 
            </p>
         </div>
       <div class="flex justify-between gap-10 items-center mt-6">
            <h1 class="font-bold sm:text-lg text-black">News Data Entry</h1>
            <input type="text" class="flex">
       </div>
       <div class="w-full h-48 mb-4 mt-4 rounded bg-gray-50">
          <div class="overflow-x-auto">
            <table class="table">
               {{-- thead --}}
               <thead class="text-[1rem] font-medium text-black">
                  <tr>
                     <th>No</th>
                     <th>Judul</th>
                     <th>Author</th>
                     <th>Description</th>
                     <th>Content</th>
                     <th>Category</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($postData as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->header }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->description_news }}</td>
                        <td>{{ $item->content }}</td>
                        <td>{{ $item->category['name'] }}</td>
                        <td>
                           <div class="flex gap-2">
                              <button class="btn btn-info w-24 h-5">Edit</button>
                              <button class="btn btn-error">Delete</button>
                           </div>
                        </td>
                      </tr>
                  @endforeach
               </tbody>
            </table>
          </div>
       </div>
       {{-- <div class="grid grid-cols-2 gap-4 mb-4">
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
       <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="grid grid-cols-2 gap-4">
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div> --}}
    </div>
 </div>
@endsection