@extends('user.layouts.master')

@section('title','Admin Profile')

@section('main-content')

<div class="card shadow mb-4">
    <div class="row">
        <div class="col-md-12">
           @include('backend.layouts.notification')
        </div>
    </div>
   <div class="card-header py-3">
     <h4 class=" font-weight-bold">Profile</h4>
     <ul class="breadcrumbs">
         <li><a href="{{route('admin')}}" style="color:#999">Dashboard</a></li>
         <li><a href="" class="active text-primary">Profile Page</a></li>
     </ul>
   </div>
   <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="image">
                      {{-- @dd($profile) --}}
                        @if($profile->photo)
                        <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{$profile->photo}}" alt="profile picture">
                        @else 
                        <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{asset('backend/img/avatar.png')}}" alt="profile picture">
                        @endif
                    </div>
                    <div class="card-body mt-4 ml-2">
                      <h5 class="card-title text-left"><small><i class="fas fa-user"></i> {{$profile->name}}</small></h5>
                      <p class="card-text text-left"><small><i class="fas fa-envelope"></i> {{$profile->email}}</small></p>
                      <p class="card-text text-left"><small class="text-muted"><i class="fas fa-hammer"></i> {{$profile->role}}</small></p>
                    </div>
                  </div>
            </div>
            <div class="col-md-8">
                <form class="border px-4 pt-2 pb-3" method="POST" action="{{route('user-profile-update',$profile->id)}}">
                    @csrf

                    <div class="row">
                      <div class="form-group col-lg-4 col-md-6 col-6">
                        <label for="first_name" class="col-form-label">First Name</label>
                        <input id="first_name" type="text" name="first_name" placeholder="Enter name"  value="{{$profile->first_name}}" class="form-control">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-4 col-md-6 col-6">
                        <label for="last_name" class="col-form-label">Last Name</label>
                        <input id="last_name" type="text" name="last_name" placeholder="Enter name"  value="{{$profile->last_name}}" class="form-control">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <input type="hidden" name="name" value="">
                      <div class="form-group col-lg-4 col-md-6 col-6">
                        <label for="inputEmail" class="col-form-label">Email</label>
                        <input id="inputEmail" disabled type="email" name="email" placeholder="Enter email"  value="{{$profile->email}}" class="form-control">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-4 col-md-6 col-6">
                        <label for="phone" class="col-form-label">Contact Number</label>
                        <input id="phone" type="tel" maxlength="10" pattern="[1-9]{1}[0-9]{9}" name="phone" placeholder="Enter mobile number"  value="{{$profile->phone}}" class="form-control">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                        <div class="form-group col-lg-4 col-md-6 col-6">
                        <label for="inputPhoto" class="col-form-label">Profile Pic</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                  <i class="fas fa-images"></i>Choose
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$profile->photo}}">
                        </div>
                          @error('photo')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                    </div>
                      {{-- <div class="form-group">
                          <label for="role" class="col-form-label">Role</label>
                          <select name="role" class="form-control">
                              <option value="">-----Select Role-----</option>
                                  <option value="admin" {{(($profile->role=='admin')? 'selected' : '')}}>Admin</option>
                                  <option value="user" {{(($profile->role=='user')? 'selected' : '')}}>User</option>
                          </select>
                            @error('role')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div> --}}

                        <button type="submit" class="btn btn-success mt-5">Update</button>
                        <a href="{{route('manage.profile')}}" class="btn btn-dark mt-5 ml-4">Back to pervious Page</a>

                </form>
            </div>
        </div>
   </div>
</div>

@endsection

<style>
    .breadcrumbs{
        list-style: none;
    }
    .breadcrumbs li{
        float:left;
        margin-right:10px;
    }
    .breadcrumbs li a:hover{
        text-decoration: none;
    }
    .breadcrumbs li .active{
        color:red;
    }
    .breadcrumbs li+li:before{
      content:"/\00a0";
    }
    .image{
        background:url('{{asset('backend/img/background.jpg')}}');
        height:150px;
        background-position:center;
        background-attachment:cover;
        position: relative;
    }
    .image img{
        position: absolute;
        top:55%;
        left:35%;
        margin-top:30%;
    }
    i{
        font-size: 14px;
        padding-right:8px;
    }
  </style> 

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');

    const setName = (f,l)=> $('input[name="name"]').val(`${f} ${l}`)
    var f = $('input[name="first_name"]').val(), l=$('input[name="last_name"]').val()
    setName(f,l)
    $('input[name="first_name"]').keyup(function(){
      f = $(this).val()
      setName(f,l)
    })
    $('input[name="last_name"]').keyup(function(){
      l = $(this).val()
      setName(f,l)
    })

</script>
@endpush