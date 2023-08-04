@extends('layouts.app')

@section('title')
    تعديل خبر
@endsection

@section('content')
<style>
    .avatar-md img {
    width: 80px;
}
</style>
    <div class="col-6">
        <h2 class="page-title">تعديل خبر</h2>
        <div class="card-deck">
            <div class="card shadow mb-4 ">
                <div class="card-header">
                    <strong class="card-title">حفظ البيانات</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('news.update',$news->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">عنوان الخبر</label>
                                <input type="text" class="form-control" id="inputEmail4" required name="title"
                                    value="{{ old('title', $news->title) }}" placeholder="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">التفاصيل</label>
                                <textarea name="description" class="form-control " rows="10">{{ old('description', $news->description) }}</textarea>
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
                                <option value="">اختر القسم</option>
                                @foreach ($catogries as $item)
                                    <option @selected($item->id == old('catogry_id', $news->catogry_id)) value="{{ $item->id }}">{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('catogry_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <span>اضف صورة في حال اردت تغيير احد الصور</span>
                        <div class="form-group">
                            <div class="avatar avatar-md">
                                <img src="{{ asset('images') . '/' . $news->image_1 }}" alt="..."
                                    class="avatar-img rounded-circle">
                            </div>
                            <label for="inputAddress">الصورة الرئيسية</label>
                            <input type="file" class="form-control" id="inputAddress"
                                accept="image/*" name="image_1" placeholder="كلمة المرور">
                            @error('image_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                @if ($news->image_2)
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('images') . '/' . $news->image_2 }}" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                @endif
                                <label for="inputAddress">الصورة 2</label>
                                <input type="file" class="form-control" accept="image/*"
                                    id="inputAddress" name="image_2">
                                @error('image_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                @if ($news->image_3)
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('images') . '/' . $news->image_3 }}" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                @endif
                                <label for="inputAddress">الصورة 3</label>
                                <input type="file" class="form-control" accept="image/*"
                                    id="inputAddress" name="image_3">
                                @error('image_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                @if ($news->image_4)
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('images') . '/' . $news->image_4 }}" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                @endif
                                <label for="inputAddress">الصورة 4</label>
                                <input type="file" class="form-control" accept="image/*"
                                    id="inputAddress" name="image_4">
                                @error('image_4')
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
