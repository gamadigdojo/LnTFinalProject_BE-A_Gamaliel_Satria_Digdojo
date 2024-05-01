<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{url('category')}}" method="POST">
                        @csrf
                        nama kategori:
                        <input type="text" name="name">
                        <button>submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



