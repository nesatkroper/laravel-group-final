<x-layout>
  <form
    action="{{ route('staff.update', $staff->staff_id ) }}"
    method="post"
    enctype="multipart/form-data"
  >
    @csrf @method('put')
    <div class="card card-warning card-outline mb-4">
      <div class="card-header">
        <div class="card-title">{{ __("staff.add") }}</div>
      </div>
      <div class="card-body">
        <!--   -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.fname")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Sok"
                name="fname"
                value="{{$staff->fname}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.lname")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="San"
                name="lname"
                value="{{$staff->lname}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.gender")
            }}</label>
            <div class="input-group mb-3">
              <div class="w-100">
                <select class="form-select" name="gender" required>
                  <option value="{{$staff->gender}}" selected>
                    {{ __("staff.$staff->gender") }}
                  </option>
                  <option value="male">
                    {{ __("staff.male") }}
                  </option>
                  <option value="female">
                    {{ __("staff.female") }}
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.dob")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="date"
                class="form-control"
                name="dob"
                value="{{$staff->dob}}"
                required
              />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.phone")
            }}</label>
            <div class="input-group mb-3">
              <span class="input-group-text">+855</span>
              <input
                type="number"
                class="form-control"
                placeholder="10 280 xxx"
                name="phone"
                value="{{$staff->phone}}"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.email")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="email"
                class="form-control"
                placeholder="example@example.com"
                value="{{$staff->email}}"
                name="email"
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.department")
            }}</label>
            <div class="input-group mb-3">
              <div class="w-100">
                <select class="form-select" name="department" required>
                  <option selected value="{{ $staff->department}}">
                    {{ __("staff.$staff->department") }}
                  </option>
                  <option value="it">
                    {{ __("staff.it") }}
                  </option>
                  <option value="en">
                    {{ __("staff.en") }}
                  </option>
                  <option value="ac">
                    {{ __("staff.ac") }}
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.salary")
            }}</label>
            <div class="input-group mb-3">
              <span class="input-group-text">$</span>
              <input
                type="number"
                class="form-control"
                placeholder="600"
                name="salary"
                value="{{$staff->salary}}"
                required
              />
              <span class="input-group-text">.00</span>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("staff.address")
            }}</label>
            <textarea name="address" class="form-control" rows="5">
 {{$staff->address}}</textarea
            >
          </div>
        </div>
        <!--  -->
        <div class="mb-3">
          <label for="basic-url" class="form-label">{{
            __("staff.image")
          }}</label>
          <div class="input-group mb-3">
            <div class="w-100">
              <img
                src="{{$staff->image? asset('uploads/staff/'.$staff->image):asset('images/defaul.webp')}}"
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
        <a href="{{ route('staff.index') }}" class="btn btn-secondary">{{
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
