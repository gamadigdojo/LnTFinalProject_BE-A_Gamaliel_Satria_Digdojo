<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <x-nav-link :href="route('item.create')" :active="request()->routeIs('dashboard')" class="mb-2 create-button item-button">
                        Create Item
                </x-nav-link>
                
                <div class="order-list">
                  <strong> Oder List: </strong>
                    <ul>
                        @foreach ($orderlists as $order)
                        <li>Invoice No: {{$order->invoice}}, User: {{$order->user}}, Total Price: {{$order->total_price}} <br> 
                        <a href="/order/{{$order->id}}" class="btn btn-sm btn-outline-success">detail</a> </li>
                         @endforeach
                    </ul>
                </div>
               
                <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                    <th scope="col">gambar</th>
                    <th scope="col">nama</th>
                    <th scope="col">kategori</th>
                    <th scope="col">harga</th>
                    <th scope="col">jumlah</th>
                    </tr>
                </thead>
                     @foreach($items as $item)
                     <tr>
                        <td>
                         <div style="height: 150px; overflow:hidden;"  >
                          <img class="img-thumbnail img-fluid" height="auto" src="storage/{{ $item->url_cover_buku }}" width=500 height=500 alt="">
                        </div>
                        </td>
                        <td>
                            <p> {{$item->nama }}   </p>
                           
                        </td>
                        <td>
                           {{$item->category->name}}
                        </td>
                        <td>
                            <p> {{$item->harga }}   </p>
                           
                        </td>
                        <td>
                            <p> {{$item->jumlah }}   </p>
                        </td>
                        <td>
                             <a class="btn btn-success" href="{{ route('item.show',$item->id) }}">show </a>
                        </td>
                        <td>
                             <a href="{{ route('item.edit',$item->id) }}"><button class="btn btn-primary">Edit</button></a>
                        </td>
                        <td>
                        <form class="destroy-form" action="{{ route('item.destroy',$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this user?')">Delete</button>
                        </form>
                        </td>
                     </tr>
                        
                    @endforeach
                    </tr>
                 </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


