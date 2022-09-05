<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            {{--            <img src="{{ asset('storage/'. $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">--}}
            {{--   <img src="{{ asset('storage/') . $post->thumbnail }}" alt="Blog Post illustration" class="rounded-xl">--}}
                       <img src="{{ asset('images/im1.jfif') }}" alt="Blog Post illustration" class="rounded-xl">
            {{--            <img src="{{ storage_path('aJHEn2uIG1kLv2rlNPWDRNU9DNm8iV3mA1dBDdZ6.png') }}" alt="Blog Post illustration" class="rounded-xl">--}}

        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$product->category" />

                </div>



                <div class="mt-4">
                    <h1 class="text-3xl">
                            {{ $product->title }}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $product->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 ">
                <p> {{ $product->excerpt }} </p>
            </div>



            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                  <img src="/images/im2.jfif" width="50px" height="50px">
                    <div class="ml-3">
                            <h5 class="font-bold" {{ $product->author->name }}">
                        <h6>Yousef</h6>
                            </h5>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/products/{{ $product->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
