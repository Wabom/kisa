@extends('layouts.master')


@section('title')

Update Member Details
@endsection


@section('content')

    <div class="container">

        <div class="row">
            <div class="column-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Member Details</h4>
                        <div class="card-body">
                            <form action = "/member-save" method = "POST">
                                {{csrf_field()}}
                                {{--{{method_field()}}--}}
                                <div class="form-group">
                                    <label for="First Name">First Name</label>
                                    <input type="text" class="form-control" name = "first" value = {{$update->first}}>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" class="form-control" name = "last" value = {{$update->last}}>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">phone</label>
                                    <input type="text" class="form-control" name = "phone" value = {{$update->phone}}>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Institution</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name = "institution" value ={{$update->institution}}>
                                        <option>Cochin University of Science & Technology</option>
                                        <option>Mahatma Ghandhi University</option>
                                        <option>Kerala University</option>
                                        <option>Calicut University</option
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Programme</label>
                                    <input type="text" class="form-control" name = "programme" value = {{$update->programme}}>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select District</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name = "district" value = {{$update->district}}>
                                        <option>Ernakulam</option>
                                        <option>Kozhikode</option>
                                        <option>Thrisur</option>
                                        <option>Trivandrum</option>
                                        <option>Kollam</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Country</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name = "country" value = {{$update->country}}>
                                        <option>Ghana</option>
                                        <option>Lesotho</option>
                                        <option>Kenya</option>
                                        <option>Afghanistan</option>
                                        <option>Malawi</option>
                                        <option>Turkmenistan</option>
                                        <option>Zimbabwe</option>
                                        <option>South Africa</option>
                                        <option>Namibia</option>
                                        <option>Mozambique</option>
                                    </select>
                                </div>




                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@yield('scripts')