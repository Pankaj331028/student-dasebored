<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<a href="{{route('fee.create')}}"><button>Add Fee</button> </a>
   <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Date</th>
            <th>Fee</th>            
        </tr>
        @foreach($feeData as $_fee)
		<tr>
			
			<td>{{$_fee->students->name}}</td>
            <td>{{$_fee->fee_date}}</td>
            <td>{{$_fee->fee}}</td>
          
			
			
		</tr>
        @endforeach
   </table>
  
</body>
</html>