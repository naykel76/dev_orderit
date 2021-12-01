<x-gotime-app-layout layout="{{ config('naykel.template') }}">

    <livewire:cart-button />


    <h1>List of products</h1>

    <div class="grid cols-4">

        @forelse($products as $item)

            <div class="product">

                <div class="bx">

                    <div id="product-thumbnail" class="bx-header nbdr nbg tac np">

                        <img src="{{ $item->imageUrl() }}" alt="{{ $item->name }}">

                    </div>

                    <div class="bx-content">

                        <a href="{{ route('product.show', $item->id) }}">
                            <h3>${{ $item->price }}</h3>
                            {{ $item->name }}
                        </a>

                    </div>

                    <div class="bx-footer">

                        <button>add</button>
                        {{-- <livewire:add-to-cart-button :item="$item" /> --}}

                    </div>

                </div>

            </div>

        @empty

            <p>There are no products available.</p>

        @endforelse
    </div>

</x-gotime-app-layout>


{{-- @foreach(session('cart')->items as $item)

<div class="cart-item flex nowrap">

    <div class="fs0" style="width: 80px;">
        <img src="{{ asset('storage/courses/' . $item['image']) }}">
</div>

<div class="item-details fg1 ml">
    <small><a class="link" href="{{ route('courses.show', (App\Models\Course::find($item['id'])->slug)) }}">{{ $item['title'] }}</a></small>

    <div class="fg1 tar mt">
        <div class="subtotal">${{ $item['price'] }}</div>
        <small><a href="{{ route('cart.remove', $item['id']) }}" class="txt-muted"> Remove </a></small>
    </div>

</div>

</div>

@endforeach--}}
