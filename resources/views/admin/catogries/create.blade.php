@extends('layouts.app')

@section('title')
    اضافة قسم
@endsection

@section('content')
    <div class="col-6">
        <h2 class="page-title">اضافة قسم</h2>
        <div class="card-deck">
            <div class="card shadow mb-4 ">
                <div class="card-header">
                    <strong class="card-title">حفظ البيانات</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('catogries.store') }}" method="POST">
                        @csrf
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">الاسم</label>
                                <input type="text" class="form-control" id="inputPassword4" name="name"
                                    value="{{ old('name') }}" placeholder="name" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </form>
                </div>
            </div>
        </div> <!-- / .card-desk-->
    </div>
@endsection
