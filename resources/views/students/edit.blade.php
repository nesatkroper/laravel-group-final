<x-layout>
  <form
    action="{{ route('student.update', $student->student_id) }}"
    method="post"
    enctype="multipart/form-data"
  >
    @csrf @method('PUT')
    <div class="card card-success card-outline mb-4">
      <div class="card-header">
        <div class="card-title">{{ __("student.add") }}</div>
      </div>
      <div class="card-body">
        <!--   -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.kfname")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="សុក"
                name="kh_fname"
                value="{{ $student->kh_fname}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.klname")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="សាន"
                name="kh_lname"
                value="{{ $student->kh_lname}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.efname")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Sok"
                name="en_fname"
                value="{{ $student->en_fname}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.elname")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="San"
                name="en_lname"
                value="{{ $student->en_lname}}"
                required
              />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.gender")
            }}</label>
            <div class="input-group mb-3">
              <div class="w-100">
                <select class="form-select" name="gender" required>
                  <option value="{{$student->gender}}" selected>
                    {{ __("student.$student->gender") }}
                  </option>
                  <option value="male">
                    {{ __("student.male") }}
                  </option>
                  <option value="female">
                    {{ __("student.female") }}
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.dob")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="date"
                class="form-control"
                name="dob"
                value="{{ $student->dob}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.phone")
            }}</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">+855</span>
              <input
                type="number"
                class="form-control"
                placeholder="10 280 xxx"
                name="phone"
                value="{{ $student->phone}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.email")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="email"
                class="form-control"
                placeholder="example@example.com"
                value="{{ $student->email}}"
                name="email"
              />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.degree")
            }}</label>
            <div class="input-group mb-3">
              <div class="w-100">
                <select class="form-select" name="degree_type" required>
                  <option value="{{ $student->degree_type}}" selected>
                    {{ __("student.$student->degree_type") }}
                  </option>

                  <option value="bachelor">
                    {{ __("student.bachelor") }}
                  </option>
                  <option value="asscoiate">
                    {{ __("student.associate") }}
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.subject")
            }}</label>
            <div class="input-group mb-3">
              <div class="w-100">
                <select class="form-select" name="subject" required>
                  <option selected value="{{ $student->subject}}">
                    {{ __("student.$student->subject") }}
                  </option>
                  <option value="it">
                    {{ __("student.it") }}
                  </option>
                  <option value="en">
                    {{ __("student.en") }}
                  </option>
                  <option value="ac">
                    {{ __("student.ac") }}
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.annual")
            }}</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">$</span>
              <input
                type="number"
                class="form-control"
                placeholder="600"
                name="annual"
                value="{{ $student->annual}}"
                required
              />
              <span class="input-group-text" id="basic-addon1">.00</span>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.class")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="C-100"
                value="{{ $student->class}}"
                name="class"
              />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.vil")
            }}</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="village" value="{{ $student->village


              }}" placeholder="{{ __("student.vil") }}" />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.com")
            }}</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="commune" value="{{ $student->commune


              }}" placeholder="{{ __("student.com") }}" />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.dis")
            }}</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="district" value="{{ $student->district


              }}" placeholder="{{ __("student.dis") }}" />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.pro")
            }}</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="province" value="{{ $student->province


              }}" placeholder="{{ __("student.pro") }}" />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.grade")
            }}</label>
            <div class="col-sm-10 d-flex gap-3">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="grade"
                  id="gridRadios1"
                  value="passed"
                  checked
                />
                <label class="form-check-label" for="gridRadios1">
                  {{ __("student.pass") }}
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="grade"
                  id="gridRadios2"
                  value="failed"
                />
                <label class="form-check-label" for="gridRadios2">
                  {{ __("student.faile") }}
                </label>
              </div>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.gyear")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="number"
                class="form-control"
                placeholder="2019"
                value="{{ $student->graded_year}}"
                name="graded_year"
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.glevel")
            }}</label>
            <div class="input-group mb-3">
              <div class="w-100">
                <select class="form-select" name="graded_level" required>
                  <option value="{{ $student->graded_level}}" selected>
                    {{ strtoupper($student->graded_level)}}
                  </option>
                  <option value="a">A</option>
                  <option value="b">B</option>
                  <option value="c">C</option>
                  <option value="d">D</option>
                  <option value="e">E</option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("student.payment")
            }}</label>
            <div class="mb-3 form-check">
              <input
                type="checkbox"
                class="form-check-input"
                value="complete"
                name="payment"
                checked
              />
              <label class="form-check-label" for="exampleCheck1">{{
                __("student.payment")
              }}</label>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="basic-url" class="form-label">{{
            __("student.img")
          }}</label>
          <div class="input-group mb-3">
            <div class="w-100">
              <img
                src="{{$student->image ? asset('uploads/student/'.$student->image) : asset('images/defaul.webp')}}"
                id="imagePreview"
                style="height: 150px"
                class="rounded-3 shadow"
              />
              <input
                type="file"
                name="image"
                id="image"
                class="form-control mt-2"
                accept="image/*"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">
          {{ __("global.submit") }}
        </button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">{{
          __("global.cancel")
        }}</a>
      </div>
    </div>
  </form>
  <script>
    const imageInput = document.getElementById("image");
    const imagePreview = document.getElementById("imagePreview");

    imageInput.addEventListener("change", function (event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          imagePreview.src = e.target.result;
          imagePreview.style.display = "block";
        };
        reader.readAsDataURL(file);
        URL;
      } else {
        imagePreview.style.display = "none";
      }
    });
  </script>
</x-layout>
