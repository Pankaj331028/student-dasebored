<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <table>
            <tr>
                <td>Roll No</td>
                <td><input type="text" name="rollno" id="" value="{{$student->rollno}}"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="" value="{{$student->name}}"></td>
            </tr>
            <tr>
                <td>Contect</td>
                <td><input type="text" name="contect" id="" value="{{$student->contect}}"></td>
            </tr>
            <tr>
                <td>Class</td>
                <td><input type="text" name="class" id="" value="{{$student->class}}" ></td>
            </tr>
            <tr>
                <td>photo</td>
                <td><input type="file" name="image" id="">
                <img src="{{$student->getFirstMediaUrl('image', 'thumb')}}" / width="120px">
                </td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject" id="">
                        <option value="">---Please Select---</option>
                        <option value="Maths" {{$student->subject==='Maths'?'selected':''}}>Maths</option>
                        <option value="English" {{$student->subject==='English'?'selected':''}}>English</option>
                        <option value="Hindi" {{$student->subject==='Hindi'?'selected':''}}>Hindi</option>
                        <option value="Punjabi" {{$student->subject==='Punjabi'?'selected':''}}>Punjabi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit">Update</button></td>
            </tr>
        </table>
    </form>
</body>
</html>