<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php
                        $invoice="";
                        $total_keseluruhan=0;

                        for ($x = 0; $x < 5; $x++) {
                            $invoice=$invoice . rand(0,9); 
                        }
           
                        foreach ($items as $item) {
                           $total_harga_barang= $item->harga * $item->jumlah;
                           $total_keseluruhan+=$total_harga_barang;
                        }        
                    @endphp
                
                    <p>nomor invoice: {{ $invoice }}</p>
                    <p>nama pembeli: {{$user}}</p>
                    <h1>Total Pesanan: Rp {{ $total_keseluruhan }}</h1>
                    <p>daftar pesanan:</p>
                    <ul class="list-group" style="width:25%;">
                    @foreach($items as $item)
                    <li class="list-group-item">{{$item->nama}},quantity: {{$item->jumlah}}</li>
                     @endforeach
                    </ul>
                     
                    <button class="btn-outline-success">cetak faktur</button>
                    <br> <br>  

                    <form action="/checkout" method="POST" style="width:25%;">
                        @csrf
                        <input type="text" name="invoice" value="{{$invoice}}" style="display:none;">
                        <input type="text" name="user" value="{{$user}}" style="display:none;">
                        <input type="text" name="total_price" value="{{$total_keseluruhan}}" style="display:none;">
                        <input type="hidden" name="items[]" value="{{ $items }}" />
                        Alamat:
                        <input type="text" name="alamat" class="form-control"> <br>
                        Kodepos
                        <input type="number" name="kodepos" class="form-control"> <br>
                        <button class="btn btn-success mt-3"> Lanjut Bayar </button>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>


