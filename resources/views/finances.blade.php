@extends('navbar')

@section('content')
<div>
    <div>
        <h1>Financial Information</h1><br>
    </div>
    <h7>For a student to register, he/she MUST pay All Outstanding balances in full + Required (25%) of Tuition Fees + All the other fees (Medical, Union, Accommodation, etc)</h7>
    <div class="center-table">
            <table>
            <tbody>
                <tr class="center">
                    <td><b>Fee Description</b></td>
                    <td><b>Currency</b></td>
                    <td><b>Amount</b></td>
                    <td><b>Paid</b></td>
                </tr>
                <tr>
                    <td>Examination</td>
                    <td>ZMW</td>
                    <td>400.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Medical</td>
                    <td>ZMW</td>
                    <td>200.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Recreation</td>
                    <td>ZMW</td>
                    <td>150.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Student Union</td>
                    <td>ZMW</td>
                    <td>45.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Internet</td>
                    <td>ZMW</td>
                    <td>194.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Registration</td>
                    <td>ZMW</td>
                    <td>40.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Maintenance</td>
                    <td>ZMW</td>
                    <td>165.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Library fee</td>
                    <td>ZMW</td>
                    <td>100.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Academic fee</td>
                    <td>ZMW</td>
                    <td>10.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td>ZMW</td>
                    <td>80.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Tuition</td>
                    <td>ZMW</td>
                    <td>31,878.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td><b>Totals</b></td>
                    <td>ZMW</td>
                    <td>33,262.00</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td><b>Balance</b></td>
                    <td>ZMW</td>
                    <td></td>
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