@extends('layouts.app')

@section('title')
    ادارة الاقسام
@endsection

@section('content')
    <div class="col-md-8 my-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">ادارة الاقسام</h5>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>الاسم</th>
                            <th>تحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($catogries as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->name }}</td>
                                <td  class="d-flex">
                                    <a href="{{ route('catogries.edit', $item->id) }}" class="btn btn-warning text-white">تعديل</a>
                                    <form action="{{ route('catogries.destroy', $item->id) }}" method="post"
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
