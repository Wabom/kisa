@extends('layouts.master')


@section('title')
    Membership Add

@endsection


@section('content')

    <div class="container">

        <div class="row">
            <div class="column-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Enter User Details</h4>
                        <div class="card-body">
                            <form action = "/member-save" method = "POST">
                                {{csrf_field()}}
                                {{--{{method_field()}}--}}
                                <div class="form-group">
                                    <label for="First Name">First Name</label>
                                    <input type="text" class="form-control" name = "first">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" class="form-control" name = "last">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">phone</label>
                                    <input type="text" class="form-control" name = "phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Institution</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name = "institution">
                                        <option>Cochin University of Science & Technology</option>
                                        <option>Mahatma Ghandhi University</option>
                                        <option>Kerala University</option>
                                        <option>Calicut University</option
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Programme</label>
                                    <input type="text" class="form-control" name = "programme">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select District</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name = "district">
                                        <option>Ernakulam</option>
                                        <option>Kozhikode</option>
                                        <option>Thrisur</option>
                                        <option>Trivandrum</option>
                                        <option>Kollam</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Country</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name = "country">
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
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@yield('scripts')






