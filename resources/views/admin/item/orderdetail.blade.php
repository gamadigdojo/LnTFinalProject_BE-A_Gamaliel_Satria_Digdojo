<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Nama pembeli: {{ $orderlist->user }} </p>
                    <p>Invoice: {{$orderlist->invoice}} </p>
                    <p>Alamat: {{$orderlist->alamat}} </p>
                    <p>Kodepos: {{$orderlist->kodepos}}</p>
                    <p>Total biaya: {{$orderlist->total_price}}</p>

                    @foreach($orderlist->order_lists as $item)
                       @php($decode=json_decode($item, true))
                    @endforeach

                    <table class="table mt-3" style="width:50%;">
                    <thead>
                        <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($decode as $item)
                        <tr>
                            <td>{{  $item['nama']  }}</td>
                            <td>{{  $item['jumlah']  }}</td>
                        </tr>
                         @endforeach
                    </tbody>
                    </table>

                 


                    <form  action="{{ route('order.destroy',$orderlist->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-success mt-4" onclick="return confirm('Are you sure to mark this as complete?')">mark as completed</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





 