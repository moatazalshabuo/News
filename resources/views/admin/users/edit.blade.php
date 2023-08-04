@extends('layouts.app')

@section('title')
    تعديل مستخدم
@endsection

@section('content')
    <div class="col-6">
        <h2 class="page-title">تعديل مستخدم</h2>
        <div class="card-deck">
            <div class="card shadow mb-4 ">
                <div class="card-header">
                    <strong class="card-title">حفظ البيانات</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update',$user->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">البريد الالكتروني</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email"
                                    value="{{ old('email',$user->email) }}" required placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">الاسم</label>
                                <input type="text" class="form-control" id="inputPassword4" name="name"
                                    value="{{ old('name',$user->name) }}" required placeholder="Password">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">كلمة المرور</label>
                            <input type="text" class="form-control" id="inputAddress" name="password"
                                placeholder="كلمة المرور">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </form>
                </div>
            </div>
        </div> <!-- / .card-desk-->
    </div>
@endsection
