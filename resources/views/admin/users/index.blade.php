@extends('layouts.app')

@section('title')
    اضافة مستخدم
@endsection

@section('content')
    <div class="col-md-8 my-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">ادارة المستخدمين</h5>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>الاسم</th>
                            <th>البريد الالكتروني</th>

                            <th>تحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td  class="d-flex">
                                    <a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning text-white">تعديل</a>


                                    <form action="{{ route('users.destroy', $item->id) }}" method="post"
                                        id="delete-user-{{ $item->id }}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger text-white delete" type="submit">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
