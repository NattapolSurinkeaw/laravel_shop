@extends('layouts.main')
@section('content')
<div class="m-10"><a href="/createproduct" class="m- rounded-lg p-4 bg-blue-400">Create</a></div>
  <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      Product name
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Color
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Category
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Price
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
              </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{$product->nameproduct}}
                  </th>
                  <td class="px-6 py-4">
                    {{$product->description}}
                  </td>
                  <td class="px-6 py-4">
                    {{$product->price}}
                  </td>
                  <td class="px-6 py-4">
                    {{$product->quantity}}
                  </td>
                  <td class="px-6 py-4">
                    <a class="mr-4 bg-orange-400 rounded-xl text-white p-4" href="/editproduct/{{$product->id}}">Edit</a>
                    <a class="bg-red-600 rounded-xl text-white p-4" onClick="deleteProduct()">Delete</a>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
@endsection

<script>
    function deleteProduct() {
      console.log('deleteProduct')
    }
</script>
