<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="container">
                <form action="{{url('item')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">nama: </label>
                        <input class="form-control" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">kategori: </label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $item)
                            <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">harga: </label>
                        <input class="form-control" type="number" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="">jumlah: </label>
                        <input class="form-control" type="number" name="jumlah">
                    </div>
                    <div class="form-group">
                        <label for="">cover buku: </label>
                        <input  type="file" name="url_cover_buku">
                    </div>

                   <button class="btn btn-success">submit</button>
                </form>
                </div>
           

                    <!-- <form action="{{url('item')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        nama:
                        <input type="text" name="nama">
                        <br>
                        kategori:
                        <select name="category_id" >
                            @foreach($categories as $item)
                            <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        harga:
                        <input type="number" name="harga">
                        <br>
                        jumlah:
                        <input type="number" name="jumlah">
                        <br>
                        cover buku:
                        <input type="file" name="url_cover_buku">
                    
                        <button>submit</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


