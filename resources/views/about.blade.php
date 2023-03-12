@extends('layouts.main')

@section('container')
<head>
    <style>

        body{
    padding: 0;
    margin: 0;
    font-family: 'Josefin Sans', sans-serif;
    box-sizing: border-box;
    background-color: #191919;
    background-size: cover;
    
    
}

.about{
    width: 100%;
    padding: 78px 0px;
    background-color: #191919;
    background-size: cover;
}

h5{
    color: white;
    font-weight: bold;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 25px;
    text-transform: capitalize;
    margin-bottom: 25px;
    letter-spacing: 2px;
}

.main{
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display : flex;
    align-items: center;
    justify-content: space-around;
}

p{
    color: #fcfc;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
    margin-bottom: 45px;
}
.about-text{
    width: 550px;
}

h1{
    color: white;
    font-size: 80px;
    font-weight: bold;
    text-transform: capitalize;
    margin-bottom: 20px;
}

button{
    background: #f9004d;
    color: white;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 13px 30px;
    border-radius : 30px;
    transition: .4s;
}
</style>
</head>
<body>
    <section class="about">
        <div class="main">
            <img src="{{ asset('admin/images/icon/myself.jpg')}}" style="height: 420px" >
            <div class ="about-text">
                <h1>About Us</h1>
                <h5>Isabel The Library</h5>
                <p>Isabel The Library is a website that provides information about books. The website was created
                     by Isabella Christiani Rumbewas, a student of Telkom Purwokerto Vocational High School. 
                     She intended for users to be able to view information about books. However, in order to improve 
                     the website further, users are encouraged to send messages so that the website can be developed better. 
                     Enjoy the new experience :) </p>
                     <button type="button" onclick="window.location.href='{{ route('contacts.create') }}'">Click on me!</button>

            </div>    
        </div>
        </section>        
</body>

@endsection

