@extends('layouts.app-snow')
@section('title', 'Class Offerings | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div style="background: white;">
        <div class="container py-5">
            <h1 class="text-center text-dark"><strong>2025 Summer Classes</strong></h1>
            <h1 class="text-center text-dark"><strong>25/26 Season</strong></h1>
            <div class="d-flex justify-content-center"><a class="text-white text-center text-decoration-none" target="_blank" href="/images/tuition.png"><div class="btn btn-secondary">Tuition Info</div></a></div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                <img src="/images/summer-dance-25.jpg" class="img-fluid my-3" alt="">
                <img src="/images/schedule-25-a.png" class="img-fluid my-3" alt="">
                <img src="/images/schedule-25-b.png" class="img-fluid my-3" alt="">
{{--                <img src="/images/fall-dance-25-a.jpg" class="img-fluid my-3" alt="">--}}
{{--                <img src="/images/fall-dance-25-b.jpg" class="img-fluid my-3" alt="">--}}
{{--                <img src="/images/fall-dance-25-c.jpg" class="img-fluid my-3" alt="">--}}
            </div>
            <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=551313&Hidecols=gender,description,openings,session,tuition&style=font-family:Arial"></script>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const observer = new MutationObserver(() => {
                const table = document.querySelector("#JR_OpeningsTable");
                if (!table) return;

                const rows = Array.from(table.querySelectorAll("tbody tr"));

                // Find the index of the "Class Starts" column
                const headers = Array.from(table.querySelectorAll("thead th"));
                const startDateIndex = headers.findIndex(th =>
                    th.textContent.trim().toLowerCase().includes("class starts")
                );

                if (startDateIndex === -1) return;

                // Sort rows by date (assuming MM/DD/YYYY format)
                rows.sort((a, b) => {
                    const dateA = new Date(a.cells[startDateIndex].textContent.trim());
                    const dateB = new Date(b.cells[startDateIndex].textContent.trim());
                    return dateA - dateB;
                });

                // Re-append sorted rows
                const tbody = table.querySelector("tbody");
                rows.forEach(row => tbody.appendChild(row));

                observer.disconnect(); // Stop observing once sorted
            });

            observer.observe(document.body, { childList: true, subtree: true });
        });
    </script>

@endsection
