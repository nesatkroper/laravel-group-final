<x-layout>

    <form action="{{route('payment-search')}}" method="post">
        @csrf
        <div class="input-group mb-3 ">
            <input name="search" type="text" class="form-control rounded"
                placeholder="Search Name, Phone, or Email for payment" required>
            <button class="btn btn-primary ms-4 rounded" type="submit">
                <i class="bi bi-search me-3"></i>
                Search</button>
        </div>
    </form>
    <a href="{{route('info-payment')}}" class="btn btn-warning mb-3">Clear Data</a>

</x-layout>