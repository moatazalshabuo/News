@extends('layouts.app')

@section('title')
    اضافة خبر
@endsection

@section('content')
    <div class="col-6">
        <h2 class="page-title">اضافة خبر</h2>
        <div class="card-deck">
            <div class="card shadow mb-4 ">
                <div class="card-header">
                    <strong class="card-title">حفظ البيانات</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('news.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">عنوان الخبر</label>
                                <input type="text" class="form-control" id="inputEmail4" required name="title"
                                    value="{{ old('title') }}" placeholder="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">التفاصيل</label>
                                <textarea name="description" class="form-control " rows="10">{{old("description")}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">الاقسام</label>
                            <select class="form-control" name="catogry_id" required>
                                @foreach ($catogries as $item)
                                    <option @selected($item->id == old('catogry_id')) value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('image1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">الصورة الرئيسية</label>
                            <input type="file" class="form-control" id="inputAddress" accept="image/*" required name="image_1"
                                placeholder="كلمة المرور">
                            @error('image1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">الصورة 2</label>
                                <input type="file" class="form-control" accept="image/*"  id="inputAddress" name="image_2"
                                    >
                                @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">الصورة 3</label>
                                <input type="file" class="form-control" accept="image/*"  id="inputAddress" name="image_3"
                                    >
                                @error('image3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">الصورة 4</label>
                                <input type="file" class="form-control" accept="image/*" id="inputAddress" name="image_4"
                                    >
                                @error('image4')
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
