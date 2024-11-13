<x-layout>
  <a href="{{ route('student.create') }}" class="btn btn-success mb-3">{{
    __("student.add")
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
      <h3 class="card-title">{{ __("student.table") }}</h3>
    </div>

    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>{{ __("student.img") }}</th>
            <th>{{ __("student.khname") }}</th>
            <th>{{ __("student.enname") }}</th>
            <th>{{ __("student.gender") }}</th>
            <th>{{ __("student.phone") }}</th>
            <th>{{ __("student.degree") }}</th>
            <th>{{ __("student.subject") }}</th>
            <th>{{ __("student.annual") }}</th>
            <th>{{ __("student.payment") }}</th>
            <th>{{ __("student.status") }}</th>
            <th>{{ __("student.action") }}</th>
          </tr>
        </thead>
        <tbody>
          @forelse($students as $row)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>
              <img
                src="{{$row->image ? asset('uploads/student/'.$row->image) : asset('images/defaul.webp')}}"
                alt="image"
                style="height: 60px"
                class="rounded-2"
              />
            </td>
            <td>{{$row->kh_fname.' '. $row->kh_lname}}</td>
            <td>{{$row->en_fname.' '. $row->en_lname}}</td>
            <td>{{ __("student.$row->gender") }}</td>
            <td>+855 {{$row->phone}}</td>
            <td>{{ __("student.$row->degree_type") }}</td>
            <td>{{ __("student.$row->subject") }}</td>
            <td>$ {{number_format($row->annual, 2)}}</td>
            <td>{{ __("student.$row->payment") }}</td>
            <td>{{ __("student.$row->status") }}</td>
            <td>
              <div class="dropdown-center">
                <button
                  class="btn btn-secondary btn-sm dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  {{ __("global.option") }}
                </button>
                <ul class="dropdown-menu">
                  <li class="d-flex flex-row">
                    <a class="dropdown-item" href="">
                      <i class="bi bi-search pe-2 text-sm"></i>{{ __("global.view") }}
                  </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('student.edit', $row->student_id) }}">
                      <i class="bi bi-pencil pe-2 text-sm"></i>{{ __("global.edit") }}
                  </a>
                  </li>
                  <li>
                    <form
                      action="{{route('student.destroy', $row->student_id)}}"
                      method="post"
                    >
                      @csrf @method('DELETE')
                      <button class="dropdown-item text-danger" type="submit">
                        <i class="bi bi-trash pe-2 text-sm"></i>{{ __("global.delete") }}
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
  <button>ok</button>
</x-layout>
