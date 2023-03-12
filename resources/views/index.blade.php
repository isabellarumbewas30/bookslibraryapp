@extends('layouts.main')

@section('container')
<head>
    <style>
        /*untuk teks heading di tag <body>*/
 
        body
        {
            background-image: url('images/coverofweb.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .row{
            display: flex;
            height: 100%;
            align-items: center;
        }

        .col{
            flex-basis: 50%
        }

        h1{
            
            color: #fff;
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 120px;
            text-align: justify;
            
        }

        p{
            color: #fff;
            font-size: 20px;
            line-height: 15px;
            text-align: justify;
        }

        button{
            width: 180px;
            color: #000;
            font-size: 12px;
            padding: 12px;
            background: #fff;
            border: 0;
            border-radius: 20px;
            outline: none;
            margin-top: 70px;
            font-size: 20px;
        }
    </style>
</head>
<body>
 
    <div class="row">
        <div class="col" style= "flex-basis: 50%">
            <h1>Isabel</h1>
            <h1> The Library</h1>
                <p>Find your book of choice.</p>
                <button type="button" onclick="window.location.href='{{ route('gallery') }}'">View Books</button>

            </div>
        <div class="col">
        </div>
    </div>        
 
</body>
@endsection