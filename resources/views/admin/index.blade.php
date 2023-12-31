@extends('layouts.dashboard')

@section('container')
<div class="p-4 sm:ml-64">
    {{-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"> --}}
       <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="col-span-3">
         <div class="flex h-24 rounded bg-gray-50 justify-start py-7 px-8 border-2 border-gray-900">
            <p class="text-2xl text-gray-700 font-semibold">
               Welcome To Dashboard, 
               {{Auth::user()->name}}
            </p>
         </div>
      
       <div class="flex justify-between gap-10 items-center mt-6">
            <h1 class="font-bold sm:text-lg text-black">News Data Entry</h1>
            @if(Session::has("status"))
                  <div id="myToast" class="toast toast-top toast-end z-20">
                    <div class="alert alert-success">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>{{Session::get("message")}}</span>
                    </div>
                  </div>
            @endif
       </div>
       <div class="w-full mb-4 mt-4 rounded bg-gray-50">
          <div class="overflow-x-auto">
            <table class="table">
               {{-- thead --}}
               <thead class="text-[1rem] font-medium text-black">
                  <tr>
                     <th class="w-[5%]">No</th>
                     <th class="w-[25%]">Judul</th>
                     <th class="w-[25%]">Description</th>
                     <th class="w-[25%]">Category</th>
                     <th class="w-[25%]">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($postData as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->header }}</td>
                        <td>{{ $item->description_news }}</td>
                        <td>{{ $item->category['name'] }}</td>
                        <td>
                           <div class="flex gap-2">
                              <button class="btn btn-info w-20 h-5">
                                 <a href="news/{{$item->id}}">Detail</a>
                              </button>
                              <button class="btn btn-primary w-20 h-5">
                                 <a href="news-edit/{{$item->id}}">Edit</a>
                              </button>
                              <form action="/news-delete/{{$item->id}}" method="POST" style="display: inline-block" onsubmit="return confirm('Apakah Yakin Ingin Menghapus Data?')">
                                 @csrf
                                 @method("DELETE")
                                 <button type="submit" class="btn btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                     </svg>                                     
                                 </button>
                              </form>
                           </div>
                        </td>
                      </tr>
                  @endforeach
               </tbody>
            </table>
            <div class="flex justify-center my-2">
               {{$postData->links()}}
            </div>
          </div>
       </div>
    </div>
 </div>
@endsection