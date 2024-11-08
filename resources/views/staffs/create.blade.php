<x-layout>
  <form
    action="{{ route('staff.store') }}"
    method="post"
    enctype="multipart/form-data"
  >
    @csrf
    <input type="text" name="name" id="" />
    <input type="file" name="image" id="" />
    <button type="submit">Submit</button>
  </form>
</x-layout>
