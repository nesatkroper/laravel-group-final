<x-layout>
  <form
    action="{{ route('class.store') }}"
    method="post"
    enctype="multipart/form-data"
  >
    @csrf
    <div class="card card-success card-outline mb-4">
      <div class="card-header">
        <div class="card-title">{{ __("class.addc") }}</div>
      </div>
      <div class="card-body">
        <!--   -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("class.name")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="A-10x"
                name="name"
                required
              />
            </div>
          </div>
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("class.code")
            }}</label>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="example"
                name="code"
              />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="d-flex gap-2">
          <div class="mb-3 w-100">
            <label for="basic-url" class="form-label">{{
              __("class.des")
            }}</label>
            <textarea name="des" class="form-control" rows="5"> </textarea>
          </div>
        </div>
        <!--  -->
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">
          {{ __("global.submit") }}
        </button>
        <a href="{{ route('class.index') }}" class="btn btn-secondary">{{
          __("global.cancel")
        }}</a>
      </div>
    </div>
  </form>
</x-layout>
