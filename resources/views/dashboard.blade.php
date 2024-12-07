<x-layouts.app>
    <div>dashboard</div>
    <a href="{{ route('logout') }}">Logout</a>

    <div class="border border-gray-700 w-7/12 mx-auto p-3 space-y-3 rounded-md">
        <span>Create New</span>
        <form action="/create-post" method="POST">
            @csrf
            <div class=" space-y-3">
                <input type="text" name="title" placeholder="Title" class="border border-blue-200">
                <textarea class="border border-blue-200" name="body" placeholder="Body"></textarea>
                <button class="bg-zinc-200 rounded-md p-1">Save Post</button>
            </div>
        </form>

    </div>
</x-layouts.app>
