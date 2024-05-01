 

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

         <title></title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('style/style.css')}}">
 

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main >
            <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>{{$item->nama}}</h3>
                </div>
                
            </div>
            <hr class="my-1 mb-2">
            <div class="row">
                <div class="col-4">
                    <div class="border p-1 text-center">
                         <img  src="/storage/{{ $item->url_cover_buku }}"  >
                     </div>
                </div>
                <div class="col-8">
                    <h6>Information</h6>
                    <hr class="my-1">
                    <div class="d-flex justify-content-between">
                        <label class="">Item Name : {{$item->nama}}</label>
                     </div>
                    <div class="d-flex justify-content-between">
                        <label class="">Harga : {{$item->harga}} </label>
                     </div>
                    <div class="d-flex justify-content-between">
                        <label class="">Jumlah: {{$item->jumlah}}</label>
                     </div>
                     <div>
                        description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum minima, odit dicta obcaecati numquam sunt!
                     </div>
                     <div class="d-flex justify-content-between">
                     <form action="{{url('order')}}" method="POST" style="display:inline;">
                                        @csrf
                                         <input type="text" name="item_id" value="{{ $item->id }}" style="display:none;" >
                                         <button class="btn btn-outline-success mt-2">add item</button>
                                    </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
            </main>
        </div>

 
   
</body>

</html> 