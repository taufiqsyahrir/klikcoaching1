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
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                        </div>

                        <!-- Body -->
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" rows="4" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Id</label>
                            <input class="form-control" rows="4" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Pilih Room</label>
                            <select name="room_id">
                                @foreach($rooms as $item)
                                    <option name="room_id" value="{{$item->id}}">{{$item->tentor}} | {{$item->deskripsi}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <input type="button" onclick="window.location.href='/belajar'" class="btn btn-success btn-block" type="" value="Submit belajar">
                        </div>

                    </form>

                    <div class="col-md-8 col-md-offset-2">
                        <h1>Coach</h1>
                        <hr>
                        <center>
                        @foreach($rooms as $item)
                            <!-- <div class="attachment-block clearfix">-->

                                <div class="col-md-4">
                                    <img class="img-circle"
                                         style="width:150px;height:150px;"
                                         src="https://scontent.fcgk9-1.fna.fbcdn.net/v/t1.0-9/12553098_10205683056024300_1040902790279448911_n.jpg?oh=2d38f2df84dc9e9e3dab047c5d39a539&oe=599CAEED"
                                         alt="Attachment Image">
                                    <br>
                                    <div class="">
                                        <h4 class="attachment-heading"><a href="{{url('rooms/'.$item->id)}}">{{$item->title}}</a>
                                        </h4>

                                        <div class="attachment-text">
                                            <h3>{{$item->tentor}}<h3>
                                        </div>
                                        <div class="attachment-text">
                                            {{$item->deskripsi}}
                                        </div>
                                        <div class="attachment-text">
                                            {{$item->tanggal}}
                                        </div>
                                        <div class="attachment-text">
                                            {{$item->jam}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </center>
                        <br>
                    </div>


                </div>
            </div>

            <a href="#" class="btn btn-default">Back</a>

        </div>
    </div>

@endsection