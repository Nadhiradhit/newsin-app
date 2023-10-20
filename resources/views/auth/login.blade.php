@extends('layouts.auth')

@section('container')
    <section id="login">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        @if(Session::has("status"))
            <div id="myToast" class="toast toast-top toast-end z-20">
              <div class="alert alert-error">
                  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                  <span>{{Session::get("message")}}</span>
              </div>
            </div>
        @endif
            <a href="#" class="flex items-center mb-6 text-2xl font-medium text-gray-900">
                <img class="w-8 h-8 mr-2" src="{{ url('img/newspaper.png')}}" alt="logo">
                    NewsIN Administrator   
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Sign in to your account
                        </h1>
                    <form class="space-y-4 md:space-y-6" action="login" method="POST">
                        @csrf
                            <div class="my-3">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Admin</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
                            </div>
                            <div class="my-3">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password Admin</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                            </div>
                            <button type="submit" class="w-full text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 my-5 text-center">Sign in</button>
                    </form>
                </div>
            </div>
        </div>        
    </section>
@endsection

