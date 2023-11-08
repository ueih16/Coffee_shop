@extends('commons.admin.dashboard_home')

@section('title', 'Admin Home')

@push('css')
@endpush

@push('up_js')
@endpush

@section('content')
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table
                        class="min-w-full border text-center text-base font-light dark:border-neutral-500">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                #
                            </th>
                            <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                Name
                            </th>
                            <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                Guard_name
                            </th>
                            <th scope="col" class="px-6 py-4">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $key => $role)
                        <tr class="border-b dark:border-neutral-500">
                            <td
                                class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                {{ $role->id }}
                            </td>
                            <td
                                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                {{ $role->name }}
                            </td>
                            <td
                                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                {{ $role->guard_name }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <a  class="px-4 py-2 bg-blue-400 text-white rounded hover:bg-blue-500 transition-all duration-300 ease-in-out"
                                    href="{{ route('admin.role.edit', ['id' => $role->id]) }}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('down_js')
    <script>
    </script>
@endpush
