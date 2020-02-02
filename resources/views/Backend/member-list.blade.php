@extends('layouts.master')


@section('title')

    Member List

@endsection


@section('content')

    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title">List of Members</h4>
                {{--<p class="category"> Here is a subtitle for this table</p>--}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead class=" text-primary">
                        <th class=" th-sm">
                            First
                        </th>
                        <th class="th-sm">
                            Last
                        </th>
                        <th class = "th-sm">
                            Phone
                        </th>
                        <th class = "th-sm">
                            Institution
                        </th>
                        <th class="th-sm">
                            Programme
                        </th>
                        <th class="th-sm">
                            District
                        </th>
                        <th class="th-sm">
                            Country
                        </th>
                        <th class="th-sm">
                            Update
                        </th>
                        <th class="th-sm">
                            Delete
                        </th>
                        </thead>

                        <tbody>

                        @foreach($member  as $user)                                                                                                                                                                                                                                                                                                                                                              as $user)
                        <tr>
                            <td>
                                {{$user->first}}
                            </td>
                            <td>
                                {{$user->last}}
                            </td>
                            <td>
                                {{$user->phone}}
                            </td>
                            <td >
                                {{$user->institution}}
                            </td>
                            <td >
                                {{$user->programme}}
                            </td>
                            <td >
                                {{$user->district}}
                            </td>
                            <td >
                                {{$user->country}}
                            </td>
                            <td >
                                <a class = "btn btn-success" href = "/update-member/{{$user->id}}">EDIT</a>
                            </td>

                            <td >
                                <a class = "btn btn-danger" href="/delete-member/{{$user->id}}">DELETE</a>
                            </td>


                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>


        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection


@section('scripts')




@endsection