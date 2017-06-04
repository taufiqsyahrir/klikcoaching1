@extends('layouts.app')

@section('content')

    <div class="row">

        <!--html error-->
        <div class="col-md-12">
            @if($errors->first())
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4><i class="icon fa fa-times"></i> Alert!</h4>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <!--end html error-->


        <div class="col-md-8 col-md-offset-2">
            <h1>Make Room as Coach</h1>
            <br>
            <div class="box box-success">
                <div class="box-body">
                    <form role="form" method="post" action="{{url('belajar')}}">
                        <!-- token untuk keamanan form csrf -->
                    {{csrf_field()}}
                    <!-- Tittle -->
                        <div class="form-group">
                            <label>Tentor</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="tentor">
                        </div>

                        <!-- Body -->
                        <div class="form-group">
                            <label>Country of Study</label>
                            <input class="form-control" rows="4" placeholder="Enter country of study" name="negara"></input>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" rows="4" placeholder="Enter description" name="deskripsi"></input>
                        </div>

                        <div class="form-group">
                            <label>Date of Coaching</label>
                            <input class="form-control" rows="4" placeholder="Enter date" name="tanggal"></input>
                        </div>

                        <div class="form-group">
                            <label>Time of Coaching</label>
                            <input class="form-control" rows="4" placeholder="Enter Time" name="jam"></input>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-success btn-block" type="submit" value="Submit belajar">
                        </div>

                    </form>
                </div>
            </div>

            <a href="#" class="btn btn-default">Back</a>

        </div>
    </div>

@endsection