@extends('layouts.app-snow')
@section('title', 'Class Offerings | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div style="background: white;">
        <div class="container py-5">
            <h1 class="text-center text-dark"><strong>24-25 Class Offerings</strong></h1>
            <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=551313&Hidecols=gender,description,openings,session,tuition&style=font-family:Arial"></script>
        </div>
    </div>
@endsection
