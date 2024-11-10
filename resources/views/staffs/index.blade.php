<x-layout>
  <a href="{{ route('staff.create') }}" class="btn btn-success mb-3">{{
    __("staff.add")
  }}</a>
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
      <h3 class="card-title">{{ __("staff.table") }}</h3>
    </div>

    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>{{ __("staff.image") }}</th>
            <th>{{ __("staff.name") }}</th>
            <th>{{ __("staff.gender") }}</th>
            <th>{{ __("staff.dob") }}</th>
            <th>{{ __("staff.phone") }}</th>
            <th>{{ __("staff.email") }}</th>
            <th>{{ __("staff.department") }}</th>
            <th>{{ __("staff.salary") }}</th>
            <th>{{ __("staff.payment") }}</th>
            <th>{{ __("staff.status") }}</th>
            <th>{{ __("staff.action") }}</th>
          </tr>
        </thead>
        <tbody>
          @forelse($staff as $row)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>
              <img
                src="{{$row->image ? asset('uploads/staff/'.$row->image) : asset('images/defaul.webp')}}"
                alt="image"
                style="height: 60px"
                class="rounded-2"
              />
            </td>
            <td>{{$row->fname.' '. $row->lname}}</td>
            <td>{{ __("staff.$row->gender") }}</td>
            <td>{{$row->dob}}</td>
            <td>+855 {{ $row->phone }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ __("staff.$row->department") }}</td>
            <td>$ {{number_format($row->salary, 2)}}</td>
            <td>{{ __("staff.$row->payment") }}</td>
            <td>{{ __("staff.$row->status") }}</td>
            <td>
              <div class="dropdown-center">
                <button
                  class="btn btn-secondary btn-sm dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Option
                </button>
                <ul class="dropdown-menu">
                  <li class="d-flex flex-row">
                    <a class="dropdown-item" href=""
                      ><i class="bi bi-search pe-2 text-sm"></i>View
                      Information</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="{{route('staff.edit', $row->staff_id)}}"
                      ><i class="bi bi-pencil pe-2 text-sm"></i>Edit
                      Information</a
                    >
                  </li>
                  <li>
                    <form
                      action="{{route('staff.destroy', $row->staff_id)}}"
                      method="post"
                    >
                      @csrf @method('DELETE')
                      <button class="dropdown-item text-danger" type="submit">
                        <i class="bi bi-trash pe-2 text-sm"></i>Delete Loan
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
              {{ __("staff.nodata") }}
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</x-layout>
