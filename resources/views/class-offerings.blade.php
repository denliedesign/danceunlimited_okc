@extends('layouts.app-snow')
@section('title', 'Class Offerings | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div style="background: white;">
        <div class="container py-5">
{{--            <h1 class="text-center text-dark"><strong>2025 Summer Classes</strong></h1>--}}
            <h1 class="text-center text-dark mb-3"><strong>26/27 Season</strong></h1>
            <div class="d-flex justify-content-center mb-5">
                <a class="btn btn-secondary text-white text-decoration-none" href="#tuition-breakdown">View Tuition Breakdown</a>
            </div>
{{--            <div class="d-flex justify-content-center"><a class="text-white text-center text-decoration-none" target="_blank" href="/images/tuition.png"><div class="btn btn-secondary">Tuition Info</div></a></div>--}}
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
{{--                <img src="/images/summer-dance-25.jpg" class="img-fluid my-3" alt="">--}}
{{--                <img src="/images/schedule-8-16-25-a.jpg" class="img-fluid my-3" alt="">--}}
{{--                <img src="/images/schedule-8-16-25-b.jpg" class="img-fluid my-3" alt="">--}}
{{--                <img src="/images/fall-dance-25-a.jpg" class="img-fluid my-3" alt="">--}}
{{--                <img src="/images/fall-dance-25-b.jpg" class="img-fluid my-3" alt="">--}}
{{--                <img src="/images/fall-dance-25-c.jpg" class="img-fluid my-3" alt="">--}}
            </div>
            <div>
                <h3 class="fw-bold text-black">Starlette Dance</h3>
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=551313&Session=2026-2027%20Starlette%20Dance&Hidecols=gender,description,openings,session,tuition&style=font-family:Arial"></script>
            </div>
            <div>
                <h3 class="fw-bold text-black">Jr/Tn Dance</h3>
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=551313&Session=2026%20-%202027%20Jr%2FTn%20Dance&Hidecols=gender,description,openings,session,tuition&style=font-family:Arial"></script>
            </div>
            <section id="tuition-breakdown" class="mt-5 pt-4" style="scroll-margin-top: 2rem;">
                <div class="text-center mb-4">
                    <h2 class="text-dark"><strong>Tuition Breakdown</strong></h2>
                    <p class="lead text-dark mb-0">Enrollment Fee: $45</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle text-dark">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">Class Time Per Week</th>
                            <th scope="col">Monthly Tuition</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>30 mins. of class x/wk</td>
                            <td>$55 per month</td>
                        </tr>
                        <tr>
                            <td>45 mins. of class x/wk</td>
                            <td>$70 per month</td>
                        </tr>
                        <tr>
                            <td>1 hour of class x/wk</td>
                            <td>$80 per month</td>
                        </tr>
                        <tr>
                            <td>1 hour &amp; 15 mins. of class x/wk</td>
                            <td>$100 per month</td>
                        </tr>
                        <tr>
                            <td>1 hour &amp; 30 mins. of class x/wk</td>
                            <td>$120 per month</td>
                        </tr>
                        <tr>
                            <td>1 hour &amp; 45 mins. of class x/wk</td>
                            <td>$135 per month</td>
                        </tr>
                        <tr>
                            <td>2 hours of class x/wk</td>
                            <td>$150 per month</td>
                        </tr>
                        <tr>
                            <td>2 hours &amp; 15 mins. of class x/wk</td>
                            <td>$165 per month</td>
                        </tr>
                        <tr>
                            <td>2 hours &amp; 30 mins. of class x/wk</td>
                            <td>$180 per month</td>
                        </tr>
                        <tr>
                            <td>2 hours &amp; 45 mins. of class x/wk</td>
                            <td>$195 per month</td>
                        </tr>
                        <tr>
                            <td>3 hours of class x/wk</td>
                            <td>$210 per month</td>
                        </tr>
                        <tr>
                            <td>3 hours &amp; 15 mins. of class x/wk</td>
                            <td>$225 per month</td>
                        </tr>
                        <tr>
                            <td>3 hours &amp; 30 mins. of class x/wk</td>
                            <td>$240 per month</td>
                        </tr>
                        <tr>
                            <td>3 hours &amp; 45 mins. of class x/wk</td>
                            <td>$255 per month</td>
                        </tr>
                        <tr>
                            <td>4 hours of class x/wk</td>
                            <td>$280 per month</td>
                        </tr>
                        <tr>
                            <td>4 hours &amp; 15 mins. of class x/wk</td>
                            <td>$295 per month</td>
                        </tr>
                        <tr>
                            <td>4 hours &amp; 30 mins. of class x/wk</td>
                            <td>$310 per month</td>
                        </tr>
                        <tr>
                            <td>4 hours &amp; 45 mins. of class x/wk</td>
                            <td>$325 per month</td>
                        </tr>
                        <tr>
                            <td>5 hours of class x/wk</td>
                            <td>$345 per month</td>
                        </tr>
                        <tr>
                            <td>5 hours &amp; 15 mins. of class x/wk</td>
                            <td>$360 per month</td>
                        </tr>
                        <tr>
                            <td>5 hours &amp; 30 mins. of class x/wk</td>
                            <td>$375 per month</td>
                        </tr>
                        <tr>
                            <td>5 hours &amp; 45 mins. of class x/wk</td>
                            <td>$390 per month</td>
                        </tr>
                        <tr>
                            <td>6 hours of class x/wk</td>
                            <td>$400 per month</td>
                        </tr>
                        <tr>
                            <td>6 hours &amp; 15 mins. of class x/wk</td>
                            <td>$430 per month</td>
                        </tr>
                        <tr>
                            <td>6 hours &amp; 30 mins. of class x/wk</td>
                            <td>$450 per month</td>
                        </tr>
                        <tr>
                            <td>6 hours &amp; 45 mins. of class x/wk</td>
                            <td>$480 per month</td>
                        </tr>
                        <tr>
                            <td>7 plus hours</td>
                            <td>Tuition Cap - $500 per month</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
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
