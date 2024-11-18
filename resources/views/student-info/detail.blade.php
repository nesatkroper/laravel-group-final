<x-layout>
    <div class="row">
        <div class="col-4 col-xl-3 col-xxl-2 ps-2 pe-1">
            <div class="card rounded-3 shadow">
                <div class="card-body p-0 position-relative">
                    <a href="{{ route('student.edit', $student->student_id) }}"
                        class="btn btn-warning m-2 btn-sm rounded-2 position-absolute end-0">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <img src="{{ asset('uploads/student/'.$student->image) }}" alt="student-image"
                        class="w-100 rounded-top-3" />
                    <div class="p-2 d-flex flex-column">
                        <label for="" class="fw-bold mt-1">Personal Information</label>
                        <hr class="mt-0 mb-1" />
                        <label>Khmer Name: </label>
                        <label class="fw-semibold ms-3">{{$student->kh_fname.' '. $student->kh_lname}}</label>
                        <label>English Name: </label>
                        <label class="fw-semibold ms-3">
                            {{$student->en_fname.' '. $student->en_lname}}</label>
                        <label>Gender: </label>
                        <label class="fw-semibold ms-3">
                            {{ __("student.$student->gender") }}</label>
                        <label>Date of Birth: </label>
                        <label class="fw-semibold ms-3"> {{$student->dob}}</label>
                        <label>Phone: </label>
                        <label class="fw-semibold ms-3">+855 {{$student->phone}}</label>
                        <label>Email: </label>
                        <label class="fw-semibold ms-3"> {{$student->email}}</label>
                        <label>Degree Type: </label>
                        <label class="fw-semibold ms-3">
                            {{ __("student.$student->degree_type") }}</label>
                        <label>Class: </label>
                        <label class="fw-semibold ms-3"> {{$student->class}}</label>
                        <label>Subject: </label>
                        <label class="fw-semibold ms-3"> {{$student->subject}}</label>
                        <label>Annual: </label>
                        <label class="fw-semibold ms-3"> {{$student->annual}}</label>
                        <label>Grade: </label>
                        <label class="fw-semibold ms-3">
                            {{ __("student.$student->grade") }}</label>
                        <label>Grade Year: </label>
                        <label class="fw-semibold ms-3"> {{$student->graded_year}}</label>
                        <label>Grade Level: </label>
                        <label class="fw-semibold ms-3">
                            {{strtoupper($student->graded_level)}}</label>
                        <label>Village: </label>
                        <label class="fw-semibold ms-3"> {{$student->village}}</label>
                        <label>Commune: </label>
                        <label class="fw-semibold ms-3"> {{$student->commune}}</label>
                        <label>District: </label>
                        <label class="fw-semibold ms-3"> {{$student->district}}</label>
                        <label>Province: </label>
                        <label class="fw-semibold ms-3"> {{$student->province}}</label>
                        <label>Payment: </label>
                        <label class="fw-semibold ms-3 {{$student->payment == " complete"? "text-success"
                            :"text-danger"}}">
                            {{ __("student.$student->payment") }}</label>
                        <label>Status: </label>
                        <label class="fw-semibold ms-3 {{$student->status == " active"? "text-success"
                            :"text-danger"}}">
                            {{ __("student.$student->status") }}</label>
                        <hr class="mt-0 mb-1" />
                        <a href="{{ route('student.edit', $student->student_id) }}"
                            class="btn btn-warning m-1 rounded-2 end-0">
                            <i class="bi bi-pencil-square me-3"></i>Edit Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 col-xl-9 col-xxl-10 px-2 d-flex flex-column gap-2 ">
            <div class="card rounded-3 ">
                <div class="card-header m-0  ">
                    <h5 class="fw-bold m-0">Payment Details</h5>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __("No") }}</th>
                                    <th>{{ __("Date") }}</th>
                                    <th>{{ __("Amount") }}</th>
                                    <th>{{ __("Paid") }}</th>
                                    <th>{{ __("Remain") }}</th>
                                    <th>{{ __("Note") }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{__("10-12-2024")}}</td>
                                    <td>$ {{number_format(600,2)}}</td>
                                    <td>$ {{number_format(600,2)}}</td>
                                    <td>$ {{number_format(0,2)}}</td>
                                    <td>$ {{__("N/A")}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card rounded-3">
                <div class="card-header m-0">
                    <h5 class="fw-bold m-0">Student Score Term 1</h5>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __("Subject") }}</th>
                                    <th>{{ __("System Analysis") }}</th>
                                    <th>{{ __("Linux System") }}</th>
                                    <th>{{ __("Client Application") }}</th>
                                    <th>{{ __("Netword") }}</th>
                                    <th>{{ __("Advance PHP") }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Quiz</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                                <tr>
                                    <td>Assignment</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                                <tr>
                                    <td>Midterm</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                                <tr>
                                    <td>Final</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card rounded-3">
                <div class="card-header m-0">
                    <h5 class="fw-bold m-0">Student Score Term 1</h5>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __("Subject") }}</th>
                                    <th>{{ __("System Analysis") }}</th>
                                    <th>{{ __("Linux System") }}</th>
                                    <th>{{ __("Client Application") }}</th>
                                    <th>{{ __("Netword") }}</th>
                                    <th>{{ __("Advance PHP") }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Quiz</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                                <tr>
                                    <td>Assignment</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                                <tr>
                                    <td>Midterm</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                                <tr>
                                    <td>Final</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                    <td>{{number_format(3, 2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>