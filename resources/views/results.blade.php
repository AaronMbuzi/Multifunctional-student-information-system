@extends('navbar')

@section('content')
<div>
    <div>
        <h1>Examination Results</h1><br>
    </div>
    <div class="center-table">
            <table>
            <tbody>
                <tr>
                    <td><b>PROGRAMME</b></td>
                    <td><b>YEAR OF STUDY</b></td>
                    <td><b>COURSE</b></td>
                    <td><b>GRADE</b></td>
                    <td><b>COMMENT</b></td>
                </tr>
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>--</td> 
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
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