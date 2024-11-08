<x-layout>
    <h1>Hello from test</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout>
