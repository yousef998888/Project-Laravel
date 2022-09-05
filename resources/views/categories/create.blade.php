<x-layout >

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
     <div class="col-12">
        <div class="row">
            <div class="col-12 form-group">
                <strong>Category Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="category-name">
                @error('name')
                <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
            </div>
            </div>
            <div class="row">
            <div class="col-12 form-group">
                <strong>Category Slug:</strong>
                <input type="text" name="slug" class="form-control" placeholder="category-slug">
                @error('slug')
                <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
            </div>
        </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
    </form>

</x-layout>
