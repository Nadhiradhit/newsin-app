@extends('layouts.dashboard')

@section('container')
    
    <section id="form">
        <div class="p-4 sm:ml-64">
            <div class="w-full text-black">
                <h1 class="font-medium text-[1.5rem] my-2">Form NewsIn</h1>
                <form action="" method="post">
                    <div class="mb-6 mt-6">
                        <label for="" class="block mb-2 font-medium">Judul</label>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="mb-6 mt-6">
                        <label for="" class="block mb-2 font-medium">Judul</label>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="mb-6 mt-6">
                        <label for="" class="block mb-2 font-medium">Author</label>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="mb-6 mt-6">
                        <label for="" class="block mb-2 font-medium">Deskripsi</label>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="mb-6 mt-6">
                        <label for="" class="block mb-2 font-medium">Content</label>
                        <textarea name="" id="" class="textarea textarea-bordered" cols="60" rows="8"></textarea>
                    </div>
                    <div class="mb-6 mt-6">
                        <button class="btn btn-primary w-24 text-sm">Submit</button>
                        <button class="btn btn-error w-24 tex-sm">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </section>    


@endsection