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

    @if($students)
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __("No") }}</th>
                        <th>{{ __("student.enname") }}</th>
                        <th>{{ __("student.phone") }}</th>
                        <th>{{ __("student.class") }}</th>
                        <th>{{ __("student.status") }}</th>
                        <th>{{ __("student.action") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->en_fname." ".$row->en_lname}}</td>
                        <td>+855 {{$row->phone}}</td>
                        <td>{{strtoupper($row->class)}}</td>
                        <td class="{{$row->status== 'active'?" text-success":"text-danger"}}">
                            {{__("student.$row->status")}}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Update
                            </button>
                            <!-- Modal -->
                            <form action="" method="post">
                                @csrf
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5">Update Payment</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

</x-layout>