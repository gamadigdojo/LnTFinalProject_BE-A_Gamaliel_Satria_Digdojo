<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                

                @php($counter=0)
                <div class="container">
                @while($counter < count($items))
                    <div class="row mb-3">
                    @for($x=0;  $x< 3; $x++)
                            @if($counter>=count($items))
                                @break
                            @endif

                            @php($item=$items[$counter++])
                            <div class="col-3 mr-3">
                            <div class="card" style="width: 18rem;">
                                <div style="height: 250px; overflow:hidden;" class="img-thumbnail">
                                     <img class="card-img-top" src="storage/{{ $item->url_cover_buku }}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"> <strong> {{$item->nama }} </strong></h3>
                                    <p> Kategori: {{$item->category->name}}  </p>
                                    <p >Quantity: {{$item->jumlah}}</p>
                                    <p>Price @: Rp.{{$item->harga}}</p>
                                    <p>Total Price: Rp.{{$item->harga * $item->jumlah}}</p>
                                    <a href="{{ route('item.show',$item->id) }}" class="btn btn-success mt-2">show item</a>
                                    <form action="{{url('order')}}" method="POST" style="display:inline;">
                                        @csrf
                                         <input type="text" name="item_id" value="{{ $item->id }}" style="display:none;" >
                                         <button class="btn btn-outline-success mt-2">add item</button>
                                    </form>
                                </div>
                            </div>                             
                            </div>
                        @endfor
                    </div>
                @endwhile
                </div>
                
                
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
