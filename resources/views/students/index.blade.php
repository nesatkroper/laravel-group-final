<x-layout>
    <a href="{{ route('student.create') }}" class="btn btn-success mb-3">{{
        __("student.add")
    }}</a>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
