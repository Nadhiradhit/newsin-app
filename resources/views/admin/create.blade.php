@extends('layouts.dashboard')

@section('container')

    <section id="form">
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                @if(Session::has("status"))
                  <div id="myToast" class="toast toast-top toast-end z-20">
                    <div class="alert alert-success">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>{{Session::get("message")}}</span>
                    </div>
                  </div>
            @endif
                <div class="w-full text-black">
                    <h1 class="font-medium text-[1.5rem] my-2">Add Data NewsIn</h1>
                    <form action="new" method="POST">
                        @csrf
                        <div class="mb-6 mt-6">
                            <label for="" class="block mb-2 font-medium">Judul</label>
                            <input type="text" name="header" id="header" placeholder="Type here" class="input input-bordered w-full max-w-2xl" required/>
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="" class="block mb-2 font-medium">Kategori</label>
                            <select name="category_id" id="category" class="select select-bordered w-full max-w-2xl">
                                <option value="" disabled selected>Pilih Kategori</option>
                                @foreach ($categoryData as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="" class="block mb-2 font-medium">Author</label>
                            <input type="text" name="author" id="author" placeholder="Type here" class="input input-bordered w-full max-w-2xl" required/>
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="" class="block mb-2 font-medium">Deskripsi</label>
                            <input type="text" name="description_news" id="description_news" placeholder="Type here" class="input input-bordered w-full max-w-2xl" required/>
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="" class="block mb-2 font-medium">Content</label>
                            <textarea name="content" id="content" class="textarea textarea-bordered" cols="60" rows="8"></textarea>
                        </div>
                        <div class="flex justify-end gap-5 mb-6 mt-6">
                            <button class="btn btn-primary w-24 text-sm" type="submit">Submit</button>
                            <button class="btn btn-error w-24 tex-sm">
                                <a href="{{ url("dashboard/admin")}}">Back</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>    


@endsection