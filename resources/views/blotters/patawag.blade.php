@extends('layouts.app')
@section('title')
    Blotter Patawag Letter
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="d-flex justify-content-between" style="width: 100%;">
                <div>
                    <h3 class="page__heading">Blotter Patawag Letter</h3>
                </div>
                <div>
                    <button class="btn btn-sm btn-icon icon-left btn-success mr-5" onclick="generatepdf()">Download</button>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="card" id = "border-blue">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="certificate-container">
                            <div class="page" style="width: 8.3in; hieght: 11.7in; border: 1px solid black;"
                                id="element-to-print">
                                <div class="wrapper">
                                    <div class="header">
                                        <img id="logo-img" src="{{ asset('../img/brgy-bayog-logo.png') }}"
                                            alt="brgy-bayog-logo"
                                            style="position: absolute; margin-left: 110px; width:80px; height:auto;">
                                        <p>REPUBLIC OF THE PHILIPPINES</p>
                                        <p> PROVINCE OF LAGUNA </p>
                                        <p> MUNICIPLITY LOS BAÑOS </p>
                                        <p> BARANGAY BAYOG </p>

                                        <div class="title-wrapper">
                                            <h1 class="mb-0" style="margin-top: 30px;">Tanggapan ng Lupong
                                                Tagapamayapa</h1>
                                        </div>
                                    </div>
                                    <div class="body" style="padding: 50px;">
                                        <div class="petsa">
                                            <p style="text-align: right; margin-right: 3.5rem;">Petsa:
                                                @if (date('F', strtotime($date)) == 'January')
                                                    Enero
                                                @elseif (date('F', strtotime($date)) == 'February')
                                                    Pebrero
                                                @elseif (date('F', strtotime($date)) == 'March')
                                                    Marso
                                                @elseif (date('F', strtotime($date)) == 'April')
                                                    Abril
                                                @elseif (date('F', strtotime($date)) == 'May')
                                                    Mayo
                                                @elseif (date('F', strtotime($date)) == 'June')
                                                    Hunyo
                                                @elseif (date('F', strtotime($date)) == 'July')
                                                    Hulyo
                                                @elseif (date('F', strtotime($date)) == 'August')
                                                    Agosto
                                                @elseif (date('F', strtotime($date)) == 'September')
                                                    Setyembre
                                                @elseif (date('F', strtotime($date)) == 'October')
                                                    Octobre
                                                @elseif (date('F', strtotime($date)) == 'November')
                                                    Nobyembre
                                                @elseif (date('F', strtotime($date)) == 'December')
                                                    Disyembre
                                                @else

                                                @endif

                                                {{ \Carbon\Carbon::today()->format('d, Y') }}
                                            </p>
                                            <p style="margin-top: 50px;">Usapin Blg. {{ $blotter->case_number }}</p>
                                            <p>Tungkol sa: Paglilinaw</p>
                                            <h2 style="text-align: center; margin-top: 20px;">PAABISO NG PAGDINIG</h2>
                                            <p style="margin-top: 50px;">Kay:
                                                @foreach ($blotter->residents as $resident)
                                                    {{ $resident->last_name }} {{ $resident->first_name }}
                                                    {{ $resident->middle_name }}, <span class=mx-2></span>
                                                @endforeach
                                                {{ $blotter->complained_resident }}
                                            </p>
                                            <p>(Mga) Inerereklamo</p>


                                            <p style="text-align: center; padding: 0px 20px 0px 20px; margin-top: 50px;">
                                                Ikaw ay hinihilingan na humarap sa akin sa
                                                @if (date('F', strtotime($date)) == 'January')
                                                    Enero
                                                @elseif (date('F', strtotime($date)) == 'February')
                                                    Pebrero
                                                @elseif (date('F', strtotime($date)) == 'March')
                                                    Marso
                                                @elseif (date('F', strtotime($date)) == 'April')
                                                    Abril
                                                @elseif (date('F', strtotime($date)) == 'May')
                                                    Mayo
                                                @elseif (date('F', strtotime($date)) == 'June')
                                                    Hunyo
                                                @elseif (date('F', strtotime($date)) == 'July')
                                                    Hulyo
                                                @elseif (date('F', strtotime($date)) == 'August')
                                                    Agosto
                                                @elseif (date('F', strtotime($date)) == 'September')
                                                    Setyembre
                                                @elseif (date('F', strtotime($date)) == 'October')
                                                    Octobre
                                                @elseif (date('F', strtotime($date)) == 'November')
                                                    Nobyembre
                                                @elseif (date('F', strtotime($date)) == 'December')
                                                    Disyembre
                                                @else

                                                @endif

                                                {{ date(' d, Y', strtotime($date)) }}. Sa
                                                ganap na ika {{ date('h:i', strtotime($date)) }} ng
                                                {{ date('A', strtotime($date)) == 'AM' ? 'umaga' : 'hapon' }} para sa
                                                pagdinig sa isang usapin.
                                            </p>

                                            <div style="margin-right: 50px; margin-top: 100px;">
                                                <p style="text-align: right;  line-height: 10px;"> <strong>Hon.
                                                        @foreach ($b_officials as $b_official)

                                                            @if ($b_official->brgy_official_position == 'Barangay Chairman')
                                                                
                                                                        {{ $b_official->brgy_official_name }}
                                                                        
                                                            @endif
                                                        @endforeach
                                                    </strong></p>
                                                <p style="text-align: right; margin-right: 20px;">Punong Barangay</p>
                                            </div>



                                            <p style="margin-top: 50px;">Ipinagbibigay alam ngayong darating na @if (date('F', strtotime($date)) == 'January')
                                                    Enero
                                                @elseif (date('F', strtotime($date)) == 'February')
                                                    Pebrero
                                                @elseif (date('F', strtotime($date)) == 'March')
                                                    Marso
                                                @elseif (date('F', strtotime($date)) == 'April')
                                                    Abril
                                                @elseif (date('F', strtotime($date)) == 'May')
                                                    Mayo
                                                @elseif (date('F', strtotime($date)) == 'June')
                                                    Hunyo
                                                @elseif (date('F', strtotime($date)) == 'July')
                                                    Hulyo
                                                @elseif (date('F', strtotime($date)) == 'August')
                                                    Agosto
                                                @elseif (date('F', strtotime($date)) == 'September')
                                                    Setyembre
                                                @elseif (date('F', strtotime($date)) == 'October')
                                                    Octobre
                                                @elseif (date('F', strtotime($date)) == 'November')
                                                    Nobyembre
                                                @elseif (date('F', strtotime($date)) == 'December')
                                                    Disyembre
                                                @else

                                                @endif
                                                {{ date(' d, Y', strtotime($date)) }}.
                                            </p>

                                            <p style="margin-top: 50px;">(Mga) Nagrereklamo: </p>
                                            <p>{{ $blotter->complainant_name }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <style>
        p {
            color: black;

            padding: 0;
            margin: 0;
        }

        .screen {
            display: flex;
            justify-content: center;
        }

        .certificate-container {
            width: 60vw;
            display: flex;
            justify-content: center;
            font-family: 'STIX Two Text', serif;
            color: black;
        }


        /* wrapper */
        .wrapper {
            margin-top: 30px;
        }

        .title-wrapper {
            margin: 20px 10px 0px 10px;
        }

        .title-wrapper h1 {
            font-family: 'STIX Two Text', serif;
        }

        /* header */

        .header {}

        .header p {
            text-align: center;
            line-height: 18px;
        }

        .header h1 {
            padding: 10px;
            text-align: center;
            border-bottom: 2px solid black;
        }

        /* body page */
        .body {
            display: flex;
            justify-content: center;
            padding: 10px;
            font-family: 'STIX Two Text', serif;

        }

        .body p {
            font-family: 'Montserrat', sans-serif !important;
        }

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"
        integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        function generatepdf() {
            var element = document.getElementById('element-to-print');
            var opt = {
                margin: 0,
                filename: 'BarangayPatawag.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };
            html2pdf().set(opt).from(element).save();
        };
    </script>
@endsection
