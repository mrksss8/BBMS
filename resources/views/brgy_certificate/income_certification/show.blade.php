@extends('layouts.app')
@section('title')
Brgy Income Issuance
@endsection
@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Brgy Income Certificate</h3>
        </div>
        <div class="d-flex">
            <div class="certificate-container">
                <div class="page" style="width: 8in;" id="element-to-print">
                    <div class="wrapper">
                        <div class="header">
    
                            <p>REPUBLIC OF THE PHILIPPINES <br>
                                PROVINCE OF LAGUNA <br>
                                MUNICIPLITY LOS BAÑOS <br>
                                BARANGAY BAYOG <br>
                            </p>
                            <div class="title-wrapper">
                                <h1>Barangay Income Certificate</h1>
                            </div>
                        </div>
       
                        <div class="body">
                            <div class="officials" style="width: 2.95in;">
                                <div class="official-wrapper">
                                    <img id="logo-img" src="{{ asset('../img/brgy-bayog-logo.png') }}" alt="brgy-bayog-logo">
                                    <p>
                                        <strong> HON. {{ $b_cap->brgy_official_name }}</strong><br>
                                        {{ $b_cap->brgy_official_position }}
                                    </p>

                                    </p>
                                    <p id="councelor-label">
                                        <strong>COUNCILORS</strong><br>
                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_councelor1->brgy_official_name }}</strong><br>
                                        {{ $b_councelor1->brgy_official_role }}
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_councelor2->brgy_official_name }}</strong><br>
                                        {{ $b_councelor2->brgy_official_role }}
                                    </p>
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_councelor3->brgy_official_name }}</strong><br>
                                        {{ $b_councelor3->brgy_official_role }}
                                    </p>
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_councelor4->brgy_official_name }}</strong><br>
                                        {{ $b_councelor4->brgy_official_role }}
                                    </p>
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_councelor5->brgy_official_name }}</strong><br>
                                        {{ $b_councelor5->brgy_official_role }}
                                    </p>
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_councelor6->brgy_official_name }}</strong><br>
                                        {{ $b_councelor6->brgy_official_role }}
                                    </p>
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_councelor7->brgy_official_name }}</strong><br>
                                        {{ $b_councelor7->brgy_official_role }}
                                    </p>
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_sk->brgy_official_name }}</strong><br>
                                        {{ $b_sk->brgy_official_position }} – {{ $b_sk->brgy_official_role }}
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_sec->brgy_official_name }}</strong><br>
                                        {{ $b_sec->brgy_official_position }}
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_tres->brgy_official_name }}</strong><br>
                                        {{ $b_tres->brgy_official_position }}
                                    </p>

                                    </p>
                                    <p>
                                        <strong> HON. {{ $b_clerk->brgy_official_name }}</strong><br>
                                        {{ $b_clerk->brgy_official_position }}
                                    </p>
                                </div>
                            </div>
    
                            <div class="content" style="width: 5.55in;">
                                <div class="content-wrapper">
                                    <div class="top-part">
                                        {{-- <img id="resident-picture" src="{{ asset('../img/brgy-logo.jpg') }}" alt=""> --}}
                                        <div id="resident-picture">
                                            {{-- webcam video snapshot --}}
                                            <canvas id="canvas" width="120" height="120"></canvas>
                                        </div>
                                    </div>
    
                                    <div class="text-part">
                                        <p id="to-whom">Sa Kinauukulan,</p>
                                        <p id="content">
                                            Ito ay pagpapatunay na si <strong>{{ $resident->first_name }} {{ $resident->middle_name }}
                                                {{ $resident->last_name }}</strong>,   <strong>{{ \Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') }}</strong> taong gulang  ipinanganak noong <strong>{{ date('M d, Y', strtotime($resident->birthday)) }} sa BIÑAN LAGUNA at nakatira sa <strong>Purok-{{ $resident->purok}} {{ $resident->street}}</strong>, Barangay Bayog, Los Baños, Laguna.</strong>.                                                                                
                               
                                           
                                        <P id="issue-for">
                                            Pagpapatunay din na si  <strong>{{ $resident->first_name }} {{ $resident->middle_name }}
                                                {{ $resident->last_name }}</strong>, ay {{ $resident->occupation}}  na kanyang pinagkakakitaan requirement para sa <strong>{{ $purpose}}</strong>.
                                        </P>
                                        
                                        <p id="witness">
                                            Given this <strong> {{ \Carbon\Carbon::today()->format('l jS \\of F Y') }} </strong>
                                        </p>
    
                                       
                                        <p id="witness" style="margin-top: 70px;">
                                            Certify By:
                                         </p>
                                    </div>


                                    <div class="cap-sign-part">           
                                        <div class="cap-sign-wrapper">
                                            
                                            <p>
                                                <strong> HON. CRISANTO A. TANDANG </strong>
                                            </p>
                                            <p>
                                                Barangay Chairman
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="camera-container d-flex mt-5 border border-dark p-3">
                <div class="camera-wrapper">
                    <h3 class="text-center">Take a Picture</h3>
                    {{-- stream video via webcam --}}
                    <div class="video-wrap">
                        <video id="video" playsinline autoplay></video>
                    </div>
                    {{-- Trigger canvas web API --}}
                    <div class="controller d-flex justify-content-center mt-3">
                        <button id="snap" class="btn btn-lg btn-icon icon-left btn-success text-dark mr-3">Capture</button> 
                        <button class="btn btn-md btn-icon icon-left btn-success" onclick="generatepdf()">Download</button> 
                    </div>
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
                    margin: .25,
                    filename: 'Income.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                };
                html2pdf().set(opt).from(element).save();
            };
        </script>

    <script>
    'use strict';

    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const snap = document.getElementById('snap');
    const errorMsgElement = document.getElementById('spanErrorMsg');

    const constraints = {
        audio: false,
        video: {
            width: 400,
            height: 400
        }
    };

    async function init() {
        try {
            const stream = await navigator.mediaDevices.getUserMedia(constraints);
            handleSuccess(stream);
        } catch (e) {
            errorMsgElement.innerHTML = `navigator.getUserMedia.error:${e.toString()}`;
        }
    }
    //success
    function handleSuccess(stream) {
        window.stream = stream;
        video.srcObject = stream;
    }

    //load init()
    init();

    //draw image
    var context = canvas.getContext('2d');
    snap.addEventListener("click", function() {
        context.drawImage(video, 0, 0, 120, 120);
    });
    </script>
    </section>
    <style>
        p {
            color: black;
            font-family: 'STIX Two Text', serif;
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
        .wrapper {}
    
        .title-wrapper {
            margin: 0 10px;
        }
    
        .title-wrapper h1{
            font-family: 'STIX Two Text', serif;
        }
    
        /* header */
        .header p {
            text-align: center;
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
            margin-top: 10px;
        }
    
        /* officials */
        .officials {
            background-color: rgb(85, 197, 241);
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
            font-size: 15px;
        }
    
        #councelor-label{
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
    
        .sign-part .tumb-wrapper {
            
        }
    
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
            margin-top: 70px;
        }
    
        .cap-sign-part .cap-sign-wrapper {
            text-align: center;
            margin-right: 60px;
            line-height: 17px;
        }
    
        .cap-sign-part .cap-sign-wrapper p{
            line-height: 18px;
        }
    
        /* content issue */
        .issued {
            margin-top: 40px;
        }
    </style>
@endsection