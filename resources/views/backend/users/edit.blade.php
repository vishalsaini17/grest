@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit User</h5>
    <div class="card-body">
      <form method="post" action="{{route('users.update',$user->id)}}">
        @csrf 
        @method('PATCH')
        {{-- @dd($user) --}}
        <div class="row">
          <div class="form-group col-lg-3 col-md-6 col-6">
            <label for="inputTitle" class="col-form-label">First Name</label>
          <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$user->first_name}}" class="form-control">
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class="form-group col-lg-3 col-md-6 col-6">
            <label for="inputTitle" class="col-form-label">Last Name</label>
          <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$user->last_name}}" class="form-control">
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>

          <div class="form-group col-lg-3 col-md-6 col-6">
              <label for="inputEmail" class="col-form-label">Email</label>
            <input id="inputEmail" type="email" name="email" placeholder="Enter email"  value="{{$user->email}}" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
         
          <div class="form-group col-lg-3 col-md-6 col-6">
              <label for="inputPhone" class="col-form-label">Mobile</label>
            <input id="inputPhone" type="tel" name="phone" placeholder="Enter mobile"  value="{{$user->phone}}" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group col-lg-6 col-md-6 col-6">
            <label for="inputPhoto" class="col-form-label">Photo</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$user->photo}}">
            </div>
            <img id="holder" src="{{$user->photo}}" style="margin-top:15px;max-height:100px;">
              @error('photo')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>
          @php 
          $roles=DB::table('users')->select('role')->where('id',$user->id)->get();
          // dd($roles);
          @endphp
          <div class="form-group col-lg-3 col-md-6 col-6">
              <label for="role" class="col-form-label">Role</label>
              <select name="role" class="form-control">
                  <option value="">-----Select Role-----</option>
                  @foreach($roles as $role)
                      <option value="admin" {{(($role->role=='admin') ? 'selected' : '')}}>Admin</option>
                      <option value="user" {{(($role->role=='user') ? 'selected' : '')}}>User</option>
                  @endforeach
              </select>
            @error('role')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group col-lg-3 col-md-6 col-6">
              <label for="status" class="col-form-label">Status</label>
              <select name="status" class="form-control">
                  <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                  <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
              </select>
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

        </div>

        <div class="form-group col-lg-3 col-md-6 col-6 mb-3">
           <button class="btn btn-success px-5" type="submit">Update</button>
        </div>


      </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush