<x-layouts.guest>
    <div class="">
        <div class="flex justify-center items-center min-h-screen bg-neutral-200">
            <div class="w-96 bg-white p-5 rounded-md flex-col flex gap-y-5 ">
                <div class="text-xl font-semibold tracking-wider text-teal-500">Login</div>
                <form action="/login" method="POST" class="flex-col flex gap-y-5">
                    @csrf
                    <input name="name" type="text" placeholder="name"
                           class="border rounded-md py-2 px-1 text-xs focus:border-0">
                    <input name="password" type="password" placeholder="password"
                           class="border rounded-md py-2 px-1 text-xs focus:border-2 focus:ring-0 focus:outline-0">
                    <button class="max-w-max bg-blue-500 text-white font-semibold px-2 py-3 rounded-md text-xs">Login
                        Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guest>
