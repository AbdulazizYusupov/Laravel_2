@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create</h1>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6 mt-2">
                        <a href="{{route('role')}}" class="btn btn-primary">Roles</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <form action="{{ route('role.store') }}"
                              method="POST">
                            @csrf
                            <div class="mb-3">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control"
                                       name="name" value="{{old('name')}}">
                            </div>
                            <div class="mb-3">
                                @error('permission')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @foreach($groups as $group)
                                    <h1>{{$group->name}} :</h1><br>
                                    @foreach($group->permissions as $permission)
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   name="permission[]"
                                                   value="{{$permission->id}}">
                                            <label class="form-check-label">
                                                {{$permission->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-outline-info">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
