<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('fee.store')}}" method="post" >
        @csrf
        <table>
         <tr>
                <td>Student Name</td>
                <td>
                    <select name="student_id">
                    @foreach($studentData as $_student)
                        
                        <option value="{{$_student->id}}">{{$_student->name}}</option>
                    @endforeach
                    </select>
                
                </td>
            </tr>
           <tr>
                <td>Fee</td>
                <td><input type="text" name="fee" id=""></td>
            </tr>
            <tr>
                <td>Fee Date</td>
                <td><input type="date" name="fee_date" value="{{now()->format('Y-m-d')}}" id=""></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>