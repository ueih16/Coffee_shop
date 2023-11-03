@extends('commons.admin.dashboard_home')

@section('title', 'Admin Home')

@push('css')
@endpush

@push('up_js')
@endpush

@section('content')
    <table class="border border-gray-400 w-full">
        <tr>
            <th class="font-semibold border border-gray-400">#</th>
            <th class="font-semibold border border-gray-400">name</th>
            <th class="font-semibold border border-gray-400">guard_name</th>
        </tr>
        @foreach($roles as $key => $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->guard_name }}</td>
                <td>
                    <a  class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded"
                        href="{{ route('admin.role.edit', ['id' => $role->id]) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@push('down_js')
    <script>
    </script>
@endpush
