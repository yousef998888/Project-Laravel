<x-layout>
    @include('components._product-header')

<main class="max-w-6xl mx-auto mt lg:mt-20 space-y-6">
    @if($products->count())
      <x-products-grid :products="$products"/>
    @else
        <h1 class="text-center">No Product Yet</h1>
    @endif

</main>
</x-layout>




