<x-layout>
    <table class="table table-bordered border-white table-sm">
      <thead class="table-hover">
        <tr >
            <th>Category Name</th>
            <th>Category Slug</th>
            <th>Action</th>
        </tr>
      </thead>
        <tbody class="table table-dark">

       @foreach($categories as $category)
          <tr>
              <td>{{ $category->name }}</td>
              <td>{{ $category->slug }}</td>
              <td>
                  <form action="{{ route('categories.edit', $category->id) }}" method="get">
                  <button type="Submit" class="btn btn-success btn-sm"  > Update</button>
              </form>
              </td>
          </tr>

        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-info" href="{{route('categories.create')}}">Create Category</a>
        </div>
    </div>
</x-layout>
