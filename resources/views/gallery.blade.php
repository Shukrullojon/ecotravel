@extends('layouts.app')

@section('content')

    <div class="page-top" id="templatemo_events">
    </div> <!-- /.page-header -->

    <div class="middle-content">
        <div class="container">

            <div class="row"><!-- second row -->
                <div class="col-md-4"><!-- first column -->
                    <div class="widget-item">
                        <h3 class="widget-title">Attractions</h3>
                        <div class="sample-thumb">
                            <img src="{{ asset('template/images/event_3.jpg')}}" alt="New Event" title="New Event">
                        </div> <!-- /.sample-thumb -->
                        <h4 class="consult-title">Donec auctor iaculis libero ut ullamcorper</h4>
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4"><!-- second column -->
                    <div class="widget-item">
                        <h3 class="widget-title">Promotions</h3>
                        <div class="sample-thumb">
                            <img src="{{ asset('template/images/event_4.jpg')}}" alt="New Event" title="New Event">
                        </div> <!-- /.sample-thumb -->
                        <h4 class="consult-title">Donec auctor iaculis libero ut ullamcorper</h4>
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4"><!-- third column -->
                    <div class="widget-item">
                        <h3 class="widget-title">Best Hotels</h3>
                        <div class="sample-thumb">
                            <img src="{{ asset('template/images/event_5.jpg')}}" alt="Special Eve" title="Special Eve">
                        </div> <!-- /.sample-thumb -->
                        <h4 class="consult-title">Donec auctor iaculis libero ut ullamcorper</h4>
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row second -->

        </div> <!-- /.container -->
    </div> <!-- /.middle-content -->

@endsection
