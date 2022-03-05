@extends('layouts.app')
@section('title')
Brgy Good Moral Issuance
@endsection
@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Brgy Good Moral Certificate</h3>
        </div>
        <div class="d-flex justify-content-around">
            <div class="certificate-container">
                <div id = "border-blue">
                <div class="page" style="width: 8.3in;" id="element-to-print">
                    <div class="wrapper">
                        <div class="header">  
                            <p>REPUBLIC OF THE PHILIPPINES</p>
                            <p> PROVINCE OF LAGUNA </p>
                            <p>   MUNICIPLITY LOS BAÑOS </p>
                            <p> BARANGAY BAYOG  </p>
                            <div class="title-wrapper" >
                                <h1 style="border-left: 2px solid black; border-right: 2px solid black;">Barangay Good Moral Certificate</h1>
                            </div>
                        </div>
    
                        <div class="body">
                            <div class="officials" style="width: 2.75in; border-left: 2px solid black;">
                                <div class="official-wrapper">
                                        <img id="logo-img" src="{{ asset('../img/brgy-bayog-logo.png') }}"
                                        alt="brgy-bayog-logo" >
                                    <p style = "margin-bottom: 20px;"> <strong> Barangay Bayog </strong></p>
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
    
                            <div class="content" style="width: 5.55in; border-right: 2px solid rgb(5, 4, 4);">
                                <div class="content-wrapper">
                                    <div class="top-part">
                                        {{-- <img id="resident-picture" src="{{ asset('../img/brgy-logo.jpg') }}" alt=""> --}}
                                        <div id="resident-picture">
                                            {{-- webcam video snapshot --}}
                                            <canvas id="canvas" width="120" height="120"></canvas>
                                        </div>
                                    </div>
    
                                    <div class="text-part">
                                        <p id="to-whom">To Whom It May Concern:</p>
                                        <p id="content">
                                            This is to certify that <strong>{{ $resident->first_name }} {{ $resident->middle_name }}
                                                {{ $resident->last_name }} {{ $resident->suffix_name }}</strong> of legal age and bonafide resident of <strong>Purok-{{ $resident->purok}} {{ $resident->street}}, Barangay Bayog, Los Baños, Laguna.</strong>  has not been charged of any misconduct in violation of Barangay rules and policies. Neither had I received any information that he/she has no pending case in court. He/she is observed to be of <strong>Good Moral Character</strong> .
                                           
                                        <P id="issue-for">
                                            This certification is being issued upon the request of <strong>{{ $resident->first_name }} {{ $resident->middle_name }}
                                                {{ $resident->last_name }} {{ $resident->suffix_name }}</strong> for <strong>{{$purpose}}</strong>.
                                        </P>
                                        
                                        <p id="witness">
                                            Given this <strong> {{ \Carbon\Carbon::today()->format('jS \\of F Y') }} </strong>
                                        </p>
    
                                       
                                        <p id="witness" style="margin-top: 70px;">
                                            Certify By:
                                         </p>
                                    </div>


                                    <div class="cap-sign-part">           
                                        <div class="cap-sign-wrapper">
                                            @foreach ($b_officials as $b_official)

                                            @if ($b_official->brgy_official_position == 'Barangay Chairman')
                                                <p>
                                                    <strong>Hon.
                                                        {{ $b_official->brgy_official_name }}</strong><br>
                                                    {{ $b_official->brgy_official_position }}
                                                </p>
                                   
                                            @endif
                                        @endforeach
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </div>
            <div class="camera-container d-flex p-3" id = "border-blue">
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
                    margin: 0,
                    filename: 'Goodmoral {{ $resident->last_name }}, {{ $resident->first_name }}.pdf',
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
         <script>
            'use strict';

            const video = document.getElementById('video');
            const canvas = document.getElementById('canvas');
            const snap = document.getElementById('snap');
            const errorMsgElement = document.getElementById('spanErrorMsg');

            const constraints = {
                audio: false,
                video: {
                    width: 300,
                    height: 300
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
            width: 56vw;
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

        .title-wrapper h1{
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
            /* background-image: linear-gradient(to bottom right, rgb(28, 50, 245), rgb(75, 174, 240)); */

            background-color: #a0c4e4;
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
