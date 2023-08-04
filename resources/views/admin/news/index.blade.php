@extends('layouts.app')

@section('title')
    الاخبار
@endsection

@section('content')
    <div class="col-md-11 my-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">ادارة الاخبار</h5>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>القسم</th>
                            <th>التفاصيل</th>
                            <th>الصور</th>
                            <th>تحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->catogry->name }}</td>
                                <td>{{ substr($item->description, 150) }}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="avatar avatar-md">
                                            <img src="{{ asset('images') . '/' . $item->image_1 }}" alt="..."
                                                class="avatar-img rounded-circle">
                                        </div>
                                        @if ($item->image_2)
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/') . '/' . $item->image_2 }}" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                        @endif
                                        @if ($item->image_3)
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/') . '/' . $item->image_3 }}" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                        @endif
                                        @if ($item->image_4)
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/') . '/' . $item->image_4 }}" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('news.edit', $item->id) }}"
                                            class="btn btn-warning text-white">تعديل</a>
                                        <form action="{{ route('news.destroy', $item->id) }}" method="post"
                                            id="delete-user-{{ $item->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger text-white delete" type="submit">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $news->links() !!}
            </div>
        </div>
    </div>
@endsection
