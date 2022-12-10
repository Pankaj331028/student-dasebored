<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Roll No</td>
                <td><input type="text" name="rollno" id="rollno" readonly></td>
            </tr>
        
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Contect</td>
                <td><input type="text" name="contect" id=""></td>
            </tr>
            <tr>
                <td>Class</td>
                <td><input type="text" name="class" id=""></td>
            </tr>
            <tr>
                <td>photo</td>
                <td><input type="file" name="image" id=""></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject" id="">
                        <option value="">---Please Select---</option>
                        <option value="1">Maths</option>
                        <option value="2">English</option>
                        <option value="3">Hindi</option>
                        <option value="4">Punjabi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<script>
    $.ajax({
        url : '{{route('student.get-rollno')}}',
        success : function(data) {
            $('#rollno').val(data['new-rollno']);
        }
    });
</script>