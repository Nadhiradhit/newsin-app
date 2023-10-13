@extends('layouts.dash')

@section('container')
    
    <section id="header" class="dark:bg-gray-900 rounded-b-[2rem]">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">NewsIN is a new revolution of newspaper</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-secondary">
                        Get started
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="{{ url('img/illustration.jpeg')}}" class="w-full max-w-sm rounded-lg shadow-2xl"/>
                </div>                
            </div>
    </section>

    <section id="content" class="w-full mt-10">
      <p class="text-[1.2rem] text-secondary font-semibold mx-7">News Update</p>
        <div class="grid grid-cols-8 mt-2">
          <div class="col-span-8 md:col-span-4 lg:col-span-2">
            <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="{{ url('img/lingkungan.jpg')}}" alt="game"/></figure>
                    <div class="card-body">
                      <h2 class="card-title">A lost town?</h2>
                      <p class="text-justify">De Mirage is a urban legend for people in kunazwahxok, people who known that urban legend think the town have many stack of gold and emerald.</p>
                      <div class="card-actions justify-end mt-2">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-span-8 md:col-span-4 lg:col-span-2">
            <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
              <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="{{ url('img/lingkungan.jpg')}}" alt="game"/></figure>
                <div class="card-body">
                  <h2 class="card-title">A lost town?</h2>
                  <p class="text-justify">De Mirage is a urban legend for people in kunazwahxok, people who known that urban legend think the town have many stack of gold and emerald.</p>
                  <div class="card-actions justify-end mt-2">
                    <button class="btn btn-primary">Read More</button>
                  </div>
                </div>
            </div>
            </div>
          </div>
          <div class="col-span-8 md:col-span-4 lg:col-span-2">
            <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
              <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="{{ url('img/lingkungan.jpg')}}" alt="game"/></figure>
                <div class="card-body">
                  <h2 class="card-title">A lost town?</h2>
                  <p class="text-justify">De Mirage is a urban legend for people in kunazwahxok, people who known that urban legend think the town have many stack of gold and emerald.</p>
                  <div class="card-actions justify-end mt-2">
                    <button class="btn btn-primary">Read More</button>
                  </div>
                </div>
            </div>
            </div>
          </div>
          <div class="col-span-8 md:col-span-4 lg:col-span-2">
            <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
              <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="{{ url('img/lingkungan.jpg')}}" alt="game"/></figure>
                <div class="card-body">
                  <h2 class="card-title">A lost town?</h2>
                  <p class="text-justify">De Mirage is a urban legend for people in kunazwahxok, people who known that urban legend think the town have many stack of gold and emerald.</p>
                  <div class="card-actions justify-end mt-2">
                    <button class="btn btn-primary">Read More</button>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
    </section>

@endsection