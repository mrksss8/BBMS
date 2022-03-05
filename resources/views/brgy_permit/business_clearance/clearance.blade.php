@extends('layouts.app')
@section('title')
    Barangay Business Clearance
@endsection
@section('content')

    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h3 class="page__heading">Barangay Business Clearance</h3>
            <button class="btn btn-lg btn-icon icon-left btn-success mr-5" onclick="generatepdf()">Download</button>
        </div>
        <div class="d-flex justify-content-center">
            <div id = "border-blue">
                <div class="certificate-container">
                    <div class="page" style="width: 8.3in;" id="element-to-print">
                        <div class="wrapper">
                            <div class="header">

                                <p>REPUBLIC OF THE PHILIPPINES <br>
                                    PROVINCE OF LAGUNA <br>
                                    MUNICIPLITY LOS BAÑOS <br>
                                    BARANGAY BAYOG <br>
                                </p>
                                <div class="title-wrapper">
                                    <h1 style="border-left: 2px solid black; border-right: 2px solid black;">Barangay Business Clearance</h1>
                                </div>
                            </div>

                            <div class="body">

                                <div class="officials" style="width: 2.75in; border-left: 2px solid black;">
                                    <div class="official-wrapper">
                                        <img id="logo-img" src="{{ asset('../img/brgy-bayog-logo.png') }}"
                                            alt="brgy-bayog-logo">
                                        <p style="margin-bottom: 20px;"> <strong> Barangay Bayog </strong></p>
                                        @foreach ($b_officials as $b_official)

                                            @if ($b_official->brgy_official_position == 'Barangay Chairman')
                                                <p>
                                                    <strong>Hon. {{ $b_official->brgy_official_name }}</strong><br>
                                                    {{ $b_official->brgy_official_position }}
                                                </p>

                                                <p id="councelor-label">
                                                    <strong>COUNCILORS</strong><br>
                                                </p>


                                            @elseif($b_official->brgy_official_position == 'Barangay Secretary')
                                                <p>
                                                    <strong>{{ $b_official->brgy_official_name }}</strong><br>
                                                    {{ $b_official->brgy_official_role }}
                                                </p>

                                            @elseif($b_official->brgy_official_position == 'Barangay Treasurer')
                                                <p>
                                                    <strong>{{ $b_official->brgy_official_name }}</strong><br>
                                                    {{ $b_official->brgy_official_role }}
                                                </p>

                                            @elseif($b_official->brgy_official_position == 'Barangay Clerk')
                                                <p>
                                                    <strong>{{ $b_official->brgy_official_name }}</strong><br>
                                                    {{ $b_official->brgy_official_role }}
                                                </p>

                                            @else
                                                <p>
                                                    <strong>Hon. {{ $b_official->brgy_official_name }}</strong><br>
                                                    {{ $b_official->brgy_official_role }}
                                                </p>

                                            @endif

                                        @endforeach


                                    </div>
                                </div>

                                <div class="content" style="width: 5.55in; border-right: 2px solid black;">
                                    <div class="content-wrapper">
                                        <div class="top-part">
                                            {{-- <p style="margin-left:auto; margin-right:50px;">
                                                {{ $business->business_number }}</p> --}}
                                        </div>

                                        <div class="text-part">
                                            <p style="text-align:center; line-height:10px;  text-transform: uppercase;">
                                                {{ $business->business_name }}
                                            <p style="text-align:center;"><strong> BUSINESS NAME </strong></p> <br>
                                            </p>

                                            <p style="text-align:center; line-height:10px; text-transform: uppercase;">
                                                {{ $business->business_address }} </p>
                                            <p style="text-align:center;"> <strong> BUSINESS ADDRESS </strong> </p> <br>
                                            </p>
                                            <p>
                                                @if ($business->business_owner_id != null)
                                                    <p style="text-align:center; line-height:10px; text-transform: uppercase;">
                                                        {{ $business->residence->first_name }}
                                                        {{ $business->residence->middle_name }}
                                                        {{ $business->residence->last_name }}</p>
                                                    </p>
                                                @endif

                                                <p style="text-align:center; line-height:10px; text-transform: uppercase;">{{$business->business_owner_not_resident}} </p>
                                            <p style="text-align:center;"><strong> NAME OF OWNER</strong></p>

                                            </p>
                                            <P id="issue-for">
                                                This certifies that the above Business Establishment conforms to the
                                                requirement for putting up business enterprises with the jurisdiction of
                                                this Barangay.
                                            </P>
                                            <br>
                                            <p style="text-align:center; font-size: 18px;">
                                                Issued this {{ \Carbon\Carbon::today()->format('jS \\of F Y') }}.
                                            </p>

                                            <p id="witness" style="margin-top: 30px;">
                                                CONFORMED BY:
                                            </p>
                                            <br>
                                            <br>
                                         
                                            <p>
                                                @if ($business->business_owner_id != null)
                                                <strong>
                                                    <p style="line-height:10px; margin-left:50px; text-transform: uppercase;">
                                                        {{ $business->residence->first_name }}
                                                        {{ $business->residence->middle_name }}
                                                        {{ $business->residence->last_name }}
                                                    </p>
                                                </strong>
                                                @endif
                                                <p style="line-height:10px; margin-left:50px; text-transform: uppercase;">

                                                </p>
                                                {{$business->business_owner_not_resident}}
                                                <p style="margin-left:120px;"> APPLICANT</p> <br>
                                            </p>
                                            

                                            </p>
                                        </div>


                                        <div class="cap-sign-part">
                                            <div class="cap-sign-wrapper">

                                                <p>
                                                    @foreach ($b_officials as $b_official)

                                                        @if ($b_official->brgy_official_position == 'Barangay Chairman')
                                                            <p style="text-transform: uppercase;">
                                                                <strong>Hon.
                                                                    {{ $b_official->brgy_official_name }}</strong><br>

                                                            </p>

                                                        @endif
                                                    @endforeach
                                                </p>
                                                <p>
                                                    Barangay Chairman
                                                </p>
                                            </div>
                                        </div>
                                        <p id="witness" style="margin-top: 30px; text-align:center;">
                                            RELEASE BY:
                                        </p>
                                        <br>
                                        <div class="cap-sign-part">
                                            <div class="cap-sign-wrapper">
                                                @foreach ($b_officials as $b_official)

                                                    @if ($b_official->brgy_official_position == 'Barangay Treasurer')
                                                        <p style="text-transform: uppercase;">
                                                            <strong>
                                                                {{ $b_official->brgy_official_name }}</strong><br>

                                                        </p>

                                                    @endif
                                                @endforeach
                                                <p>
                                                    Treasurer
                                                </p>
                                            </div>
                                        </div>
                                        <div class="issued">
                                            <div class="issued-wrapper">
                                                <p style="font-size: 20px; text-transform: uppercase; margin-left: 20px;">
                                                    <strong>OR. No.:</strong> <u>{{ $or_number }} </u><br>
                                                    <strong>Amount: </strong><u>{{ $amount }}</u>
                                                </p>
                                                <p id="year">
                                                    {{ \Carbon\Carbon::today()->format('Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="camera-container d-flex mt-5 border border-dark p-3">
        
                <div class="camera-wrapper">
                    <h3 class = "text-center">Take a Picture</h3>
                    
                    <div class="video-wrap">
                        <video id="video" playsinline autoplay></video>
                    </div>
             
                    <div class="download-container d-flex justify-content-center mt-3">
                        <button id="snap" class="btn btn-lg btn-icon icon-left btn-success text-dark mr-3">Capture</button>
                        <button class="btn btn-lg btn-icon icon-left btn-success" onclick="generatepdf()">Download</button>
                    </div>
                  
                </div>
            </div> --}}
        </div>
        <div>
            <div class="camera-container d-flex mt-5 justify-content-center">

                <div class="camera-wrapper">



                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"
                integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript">
            function generatepdf() {
                var element = document.getElementById('element-to-print');
                var opt = {
                    margin: 0,
                    filename: 'BusinessClearance.pdf',
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
    </section>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap');

        p {

            color: black;
            font-family: 'Tinos', serif;
            padding: 0;
            margin: 0;
        }

        .screen {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .certificate-container {
            width: 60vw;
            display: flex;
            justify-content: center;
            font-family: 'STIX Two Text', serif;
            color: black;
        }



        .page {
            /* padding: 10px; */
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
        .header p {
            text-align: center;
            line-height: 18px;
        }

        .header h1 {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        /* body page */
        .body {
            display: flex;
            justify-content: center;
            margin: 10px;
        }

        /* officials */
        .officials {
            /* background-color: rgb(85, 197, 241); */
            /* background-image: linear-gradient(to bottom right, rgb(28, 50, 245), rgb(75, 174, 240)); */
            background: #a0c4e4;
            border: 1px solid black;
            margin-right: 5px;
        }

        .official-wrapper {
            padding: 5px;
            text-align: center;
        }

        #logo-img {
            width: 80px;
            height: auto;
        }


        .officials p {
            padding-top: 6px;
            line-height: 20px;


            font-size: 16px;
            margin-bottom: 10px;
        }


        #councelor-label {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        /* content */
        .content {
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .content-wrapper {
            margin: 10px;
        }

        /* content top-part */
        .content-wrapper .top-part {
            display: flex;
            justify-content: space-between;
        }

        #bayog {
            margin-left: 20px;
            padding-top: 20px;
        }

        #resident-picture {
            width: 120px;
            height: 120px;
            border: 1px solid black;
            margin-right: 50px;
            margin-left: auto;
        }

        /* content text-part */
        .content-wrapper .text-part {
            margin-top: 50px;
        }

        .text-part p {
            font-size: 16px;
        }


        #to-whom {
            margin-left: 20px;
        }

        #content {
            margin-top: 20px;
            text-indent: 50px;
            line-height: 28px;
            font-weight: 500;
        }

        #issue-for {
            text-indent: 50px;
            margin-top: 20px;
            line-height: 25px;
        }

        #transform-upppercase {
            text-transform: uppercase;
        }

        #witness {
            text-indent: 50px;
            margin-top: 20px;
            line-height: 25px;
        }

        /* content sign-part */
        .sign-part {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .sign-part .sign-wrapper {
            margin-top: auto;
        }

        #signature {
            padding: 0 20px;
            border-top: 1px solid black;
        }

        .sign-part .tumb-wrapper {}

        #tumb-box {
            margin: 0 auto;
            width: 90px;
            height: 75px;
            border: 1px solid black;
        }

        /* content cap-sign-part */
        .cap-sign-part {
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
        }

        .cap-sign-part .cap-sign-wrapper {
            text-align: center;
            margin-right: 70px;
            line-height: 17px;
        }

        .cap-sign-part .cap-sign-wrapper p {
            line-height: 18px;
        }

        /* content issue */
        .issued {
            margin-top: 40px;
        }

        .issued-wrapper {
            display: flex;
            justify-content: space-between;
        }

        #year {
            font-size: 48px;
            padding: 15px;
            border: 1px solid green;
            margin-right: 50px;
        }

    </style>
@endsection
