@extends('templates/layoutTemplate')
    <link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')

    <h1>MacthHouse</h1>

    <div class="container">
      <div id="content">
        <form class='form-inline'>
          <div class="input-group">
            <input type='text' id='search' class="search-form" placeholder="Search">
            <span class="input-group-btn" style="width:39px">
              <button id="search-this"type="button">
                  <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        
        <section>
            <p id="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus et ullam dolorem maiores minus cupiditate voluptas eius voluptatem suscipit veniam, qui tempore nobis perferendis cumque iste deserunt vel quod eaque?</p>
        </section>
            
    </div>
  </div>

 @endsection



