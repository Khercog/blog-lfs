<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 -rounded-xl">
            <h1 class="text-center font-bold text-xl">Log in!</h1>


            <form method="POST" action="/sessions">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Email
                    </label>

                    <input type="email"
                           class="border border-gray-400 p-2 w-full"
                           name="email"
                           id="email"
                           value="{{old('name')}}"
                           required
                    >

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Password
                    </label>

                    <input type="password"
                           class="border border-gray-400 p-2 w-full"
                           name="password"
                           id="password"
                           required
                    >

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Submit

                    </button>

                </div>

            </form>
        </main>
    </section>
</x-layout>
