<x-layout>
    <x-slot name="title">ログイン</x-slot>
    <x-slot name="pageTitle">Login</x-slot>
    
    <div class="w-100">
        <form method="post">
            @csrf
            <label class="block class="pb-2">
                <p class="pb-2">Name</p>
                <input type="text" class=" border" name="name">
                <div>
                    @error('name')
                        <p>{{ $errors->first("name") }}</p>
                    @enderror
                </div>
            </label>
            <label class="block pb-2">
                <p class="pb-2">Password</p>
                <input type="text" class="border" name="password">
                <div>
                    @error('password')
                        <p>{{ $errors->first("password") }}</p>
                    @enderror
                </div>
            </label>
            <button class="bg-gray-200 rounded-md px-2 mt-4">ログイン</button>
        </form>
    </div>
</x-layout>