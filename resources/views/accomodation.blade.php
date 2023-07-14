@extends('navbar')

@section('content')
<div>
    <div>
        <h1>Accomodation Information</h1><br>
    </div>
    <div class="center-table">
            <table>
            <tbody>
                <tr>
                    <td>Hostel</td>
                    <td>Block</td>
                    <td>level</td>
                    <td>Room Type</td>
                    <td>Room Number</td>
                    <td>Remark</td>
                    <td>Key</td>
                    <td>Key Number</td>
                </tr>
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--<div>
        @for($i=1; $i<10 ;$i++)
         <p><h2>The Values of I are {{$i}}</h2></p>
         @endfor
       
    </div>-->
</div>  
@endsection