<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1>Order Lists</h1>
                <hr>

                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Order Name</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total price</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>Rp.{{$item->harga}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>Rp.{{ $item->harga * $item->jumlah }} </td>
                        <td>
                            <form  action="/order/" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="text" name="item_id" value="{{$item->id}}" style="display:none;" >
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete this user?')">Delete</button>
                            </form>
                        </td>
                     
                     </tr>
                    @endforeach
                </tbody>
                </table>
                <hr>

                @php($total_keseluruhan=0)
                @foreach ($items as $item)
                    @php($total_harga_barang= $item->harga * $item->jumlah)
                    @php($total_keseluruhan+=$total_harga_barang)
                @endforeach

                <h3 class="mt-4 mb-2">Total Price: Rp.{{ $total_keseluruhan }}</h3>
                <a href="{{route('checkout')}}" class="btn btn-outline-success">Checkout Pesanan</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


