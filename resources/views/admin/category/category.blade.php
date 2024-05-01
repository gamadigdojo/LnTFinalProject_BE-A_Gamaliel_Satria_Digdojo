<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <x-nav-link :href="route('category.create')" :active="request()->routeIs('dashboard')"  class="mb-5 create-button item-button" > 
                        Create Category
                </x-nav-link>

               

                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Item related</th>
                    </tr>
                </thead>
                     @foreach($categories as $category)
                     <tr>
                        
                        <td>
                            <p> {{ $category->name }} </p>
                        </td>
                        <td>
                            <a href="/item" class="category-items-btn">items</a>
                        </td>
                        <td>
                             <a class="btn btn-success"  href="{{ route('category.show',$category->id) }}">show</a>
                         </td>
                        <td>
                           <a href="{{ route('category.edit',$category->id) }}"><button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button></a>

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


