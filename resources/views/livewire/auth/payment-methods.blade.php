<div>
    <x-partials.title :title="'Welcome ' . auth()->user()->name"/>
    <div>
        <div class="container mt-36 flex flex-col md:flex-row gap-5">
            <div class="w-full md:w-1/3">
                <x-partials.profile_sidebar/>
            </div>
            <div class="w-full md:w-2/3">
                @if(session()->has('success'))
                    <div class="bg-light-yellow text-secondary p-5 rounded mb-4">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @foreach($paymentMethods['data'] as $paymentMethod)
                    <div class="bg-white shadow border-gray-200 rounded p-2 flex justify-between mb-4">
                        <div class="flex space-x-3 items-center">
                            @if($paymentMethod['brand'] == 'Visa')
                                <img src="{{ asset('img/visa.svg') }}" width="50" alt="">
                                <div class="font-bold">Visa</div>
                            @endif

                            @if($paymentMethod['brand'] == 'Mastercard')
                                <img src="{{ asset('img/mastercard.png') }}" width="50" alt="">
                                <div class="font-bold">Mastercard</div>
                            @endif

                            <div>{{ $paymentMethod['nickname'] }}</div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-sm">{{ $paymentMethod['masked_card'] }}</div>
                            <div class="text-sm">{{ $paymentMethod['expiry_month'] }}/{{ $paymentMethod['expiry_year'] }}</div>
                            @if($paymentMethod['id'] != auth()->user()->primary_card_id)
                                <button wire:click="setDefault('{{ $paymentMethod['id'] }}')"
                                        class="bg-secondary p-2 text-white text-sm rounded">
                                    Make Default
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
