@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Note') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Action</th>
                            <th scope="col">Note</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $index => $item)
                                <tr>
                                    <th scope="row">{{ ++$index }}</th>
                                    <td>
                                        <a class="btn btn-warning btn-sm mb-2" href="{{ route('note.edit', $item->id) }}">Edit</a>
                                        <form action="{{ route('note.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                    <td>{{ $item->title }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{ $datas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
