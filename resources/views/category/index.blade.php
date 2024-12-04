<x-layout>
  <div class="d-flex flex-column">
    <div class="row px-1 ">
      <div class="col-6  ">
        @if(session('create'))
        <div class="alert alert-success">
          {{ session("create") }}
        </div>
        @endif
        <!--  -->
        @if(session('update'))
        <div class="alert alert-warning">
          {{ session("update") }}
        </div>
        @endif
        <!--  -->
        @if(session('delete'))
        <div class="alert alert-danger">
          {{ session("delete") }}
        </div>
        @endif
        <div class="card mb-4">
          <div class="card-header">
            <a href="{{ route('class.create') }}" class="btn btn-success">{{
              __("class.addc")
              }}</a>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped  ">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>{{ __("cate.name") }}</th>
                  <th>{{ __("cate.des") }}</th>
                  <th style="width: 150px">{{ __("global.action") }}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($class as $row)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{ $row->des }}</td>
                  <td>
                    <div class="dropdown-center">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __("global.option") }}
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="{{route('class.edit', $row->class_id)}}"><i
                              class="bi bi-pencil pe-2 text-sm"></i>Edit
                            Information</a>
                        </li>
                        <li>
                          <form action="{{route('class.destroy', $row->class_id)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="dropdown-item text-danger" type="submit">
                              <i class="bi bi-trash pe-2 text-sm"></i>Delete
                              {{ __("class.class") }}
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
                    {{ __("global.nodata") }}
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-6  ">
        @if(session('create'))
        <div class="alert alert-success">
          {{ session("create") }}
        </div>
        @endif
        <!--  -->
        @if(session('update'))
        <div class="alert alert-warning">
          {{ session("update") }}
        </div>
        @endif
        <!--  -->
        @if(session('delete'))
        <div class="alert alert-danger">
          {{ session("delete") }}
        </div>
        @endif
        <div class="card mb-4">
          <div class="card-header">
            <a href="{{ route('dep.create') }}" class="btn btn-success">{{
              __("class.addd")
              }}</a>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>{{ __("cate.name") }}</th>
                  <th>{{ __("cate.des") }}</th>
                  <th style="width: 150px">{{ __("global.action") }}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($department as $row)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{ $row->des }}</td>
                  <td>
                    <div class="dropdown-center">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __("global.option") }}
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="{{route('dep.edit', $row->department_id)}}"><i
                              class="bi bi-pencil pe-2 text-sm"></i>Edit
                            Information</a>
                        </li>
                        <li>
                          <form action="{{route('dep.destroy', $row->department_id)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="dropdown-item text-danger" type="submit">
                              <i class="bi bi-trash pe-2 text-sm"></i>Delete
                              {{ __("class.dep") }}
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
                    {{ __("global.nodata") }}
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row px-1 ">
      <div class="col-6">
        @if(session('create'))
        <div class="alert alert-success">
          {{ session("create") }}
        </div>
        @endif
        <!--  -->
        @if(session('update'))
        <div class="alert alert-warning">
          {{ session("update") }}
        </div>
        @endif
        <!--  -->
        @if(session('delete'))
        <div class="alert alert-danger">
          {{ session("delete") }}
        </div>
        @endif
        <div class="card mb-4">
          <div class="card-header">
            <a href="{{ route('class.create') }}" class="btn btn-success">{{
              __("Add Major")
              }}</a>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped  ">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>{{ __("cate.name") }}</th>
                  <th>{{ __("cate.des") }}</th>
                  <th style="width: 150px">{{ __("global.action") }}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($major as $row)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{ $row->des }}</td>
                  <td>
                    <div class="dropdown-center">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __("global.option") }}
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="{{route('class.edit', $row->class_id)}}"><i
                              class="bi bi-pencil pe-2 text-sm"></i>Edit
                            Information</a>
                        </li>
                        <li>
                          <form action="{{route('class.destroy', $row->class_id)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="dropdown-item text-danger" type="submit">
                              <i class="bi bi-trash pe-2 text-sm"></i>Delete
                              {{ __("class.class") }}
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
                    {{ __("global.nodata") }}
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-6">
        @if(session('create'))
        <div class="alert alert-success">
          {{ session("create") }}
        </div>
        @endif
        <!--  -->
        @if(session('update'))
        <div class="alert alert-warning">
          {{ session("update") }}
        </div>
        @endif
        <!--  -->
        @if(session('delete'))
        <div class="alert alert-danger">
          {{ session("delete") }}
        </div>
        @endif
        <div class="card mb-4">
          <div class="card-header">
            <a href="{{ route('dep.create') }}" class="btn btn-success">{{
              __("class.addd")
              }}</a>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>{{ __("cate.name") }}</th>
                  <th>{{ __("cate.des") }}</th>
                  <th style="width: 150px">{{ __("global.action") }}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($other as $row)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{ $row->des }}</td>
                  <td>
                    <div class="dropdown-center">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __("global.option") }}
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="{{route('dep.edit', $row->department_id)}}"><i
                              class="bi bi-pencil pe-2 text-sm"></i>Edit
                            Information</a>
                        </li>
                        <li>
                          <form action="{{route('dep.destroy', $row->department_id)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="dropdown-item text-danger" type="submit">
                              <i class="bi bi-trash pe-2 text-sm"></i>Delete
                              {{ __("class.dep") }}
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
                    {{ __("global.nodata") }}
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>