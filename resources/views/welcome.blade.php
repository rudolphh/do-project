@extends('layouts.app')

@section('content')
<style type="text/css">
            
    .title-container {
        margin: 0;
        padding: 0;
        width: 100%;
        font-weight: 100;
        font-family: 'Lato';
        text-align: center;
        display: inline-block;
    }
    .title { font-size: 96px; }
    .message { font-size: 20px; }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div class="title-container">
                        <div class="title">fITnITs</div>
                        <div class="message">Currently in Development</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
