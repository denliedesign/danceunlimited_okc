@extends('layouts.app-snow')
@section('title', 'Class Offerings | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div style="background: white;">
        <div class="container py-5">
            <h1 class="text-center text-dark"><strong>Class Offerings</strong></h1>
            <div class="d-flex justify-content-center my-4">
                <div>
                    <img src="/images/24-fall-juniors.png" alt="" class="img-fluid">
                    <img src="/images/24-fall-teens.png" alt="" class="img-fluid">
                </div>
            </div>
            <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=551313&Hidecols=gender,description,openings,session,tuition&style=font-family:Arial"></script>
        </div>
    </div>
@endsection
