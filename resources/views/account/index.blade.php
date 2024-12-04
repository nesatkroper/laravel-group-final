<x-layout>
    <div class=" d-flex gap-3">
        <button type="button" class="btn btn-success mb-2 " data-bs-toggle="modal"
            data-bs-target="#staticBackdropstaff">
            {{
            __("Add Account for Admin and Staff")
            }}
        </button>
        <button type="button" class="btn btn-success mb-2 " data-bs-toggle="modal" data-bs-target="#staticBackdropuser">
            {{
            __("Add Account for Student")
            }}
        </button>

        <!-- Modal -->
        <div class="modal fade " id="staticBackdropstaff" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">{{__('Create a new Account')}}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <label for="basic-url" class="form-label fw-bold">{{__('Select Staff or Lecture')}}</label>
                            <div class="input-group mb-3">
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    @forelse($staffs as $row)
                                    <option value="{{$row->fname . ' '. $row->lname}}">{{$row->fname . ' '.
                                        $row->lname}}</option>
                                    @empty
                                    <option disabled>{{__('No Data')}}</option>
                                    @endforelse
                                </select>
                            </div>
                            <label for="basic-url" class="form-label fw-bold">{{__('Email')}}</label>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="someone@example.com">
                            </div>
                            <label for="basic-url" class="form-label fw-bold">{{__('Password')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="must be strong">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{__('Close')}}</button>
                            <button type="button" class="btn btn-success">{{__('Submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade " id="staticBackdropuser" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">{{__('Create a new Account')}}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <label for="basic-url" class="form-label fw-bold">{{__('Select Student')}}</label>
                            <div class="input-group mb-3">
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    @forelse($student as $row)
                                    <option value="{{$row->en_fname . ' '.
                                        $row->en_lname}}">{{$row->en_fname . ' '.
                                        $row->en_lname}}</option>
                                    @empty
                                    <option disabled>{{__('No Data')}}</option>
                                    @endforelse
                                </select>
                            </div>
                            <label for="basic-url" class="form-label fw-bold">{{__('Email')}}</label>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="someone@example.com">
                            </div>
                            <label for="basic-url" class="form-label fw-bold">{{__('Password')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="must be strong">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{__('Close')}}</button>
                            <button type="button" class="btn btn-success">{{__('Submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if(session('create'))
    <div class="alert alert-success">
        {{ session("create") }}
    </div>
    @elseif(session('update'))
    <div class="alert alert-warning">
        {{ session("update") }}
    </div>
    @elseif(session('delete'))
    <div class="alert alert-danger">
        {{ session("delete") }}
    </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">{{ __("Admin") }}</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>{{ __("Name") }}</th>
                        <th>{{ __("Email") }}</th>
                        <th>{{ __("student.action") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($admin as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td style="width: 100px;">
                            <div class="dropdown-center">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __("global.option") }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('student.edit', $row->id) }}">
                                            <i class="bi bi-pencil pe-2 text-sm"></i>{{ __("global.edit") }}
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('student.destroy', $row->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="dropdown-item text-danger" type="submit">
                                                <i class="bi bi-trash pe-2 text-sm"></i>{{ __("Delete Account") }}
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="12" class="text-center">
                            {{ __("student.nodata") }}
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">{{ __("Staff or Lecture") }}</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>{{ __("Name") }}</th>
                        <th>{{ __("Email") }}</th>
                        <th>{{ __("student.action") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($staff as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td style="width: 100px;">
                            <div class="dropdown-center">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __("global.option") }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('student.edit', $row->id) }}">
                                            <i class="bi bi-pencil pe-2 text-sm"></i>{{ __("global.edit") }}
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('student.destroy', $row->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="dropdown-item text-danger" type="submit">
                                                <i class="bi bi-trash pe-2 text-sm"></i>{{ __("Delete Account") }}
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="12" class="text-center">
                            {{ __("student.nodata") }}
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">{{ __("User or Student") }}</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>{{ __("Name") }}</th>
                        <th>{{ __("Email") }}</th>
                        <th>{{ __("student.action") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($user as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td style="width: 100px;">
                            <div class="dropdown-center">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __("global.option") }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('student.edit', $row->id) }}">
                                            <i class="bi bi-pencil pe-2 text-sm"></i>{{ __("global.edit") }}
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('student.destroy', $row->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="dropdown-item text-danger" type="submit">
                                                <i class="bi bi-trash pe-2 text-sm"></i>{{ __("Delete Account") }}
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="12" class="text-center">
                            {{ __("student.nodata") }}
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>