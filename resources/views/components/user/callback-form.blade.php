<div tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 w-full h-screen p-4 overflow-x-hidden overflow-y-auto bg-black/50 md:inset-0"
    x-cloak
    x-show='showCallbackModal'
    x-transition>

    @php
        $hour = now()->format('H');
        $isDay = $hour >= 8 && $hour < 20;
    @endphp

    <div class="relative mx-auto mt-20 bg-white w-min md:mt-30" x-on:click.away='showCallbackModal=false'>


        <button @click="showCallbackModal = false" class="absolute text-xl top-2 right-2">&times;</button>

        <h2 class="mb-4 text-2xl">Request a Callback</h2>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="p-4 mb-4 text-red-800 bg-red-100 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('callback.submit') }}" class="space-y-4">
            @csrf

            {{-- Name Input --}}
            <div>
                <label for="name" class="block">Name *</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="w-full p-2 border rounded" required>
            </div>


        </form>

    </div>

</div>
