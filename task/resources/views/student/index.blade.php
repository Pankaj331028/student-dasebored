<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<a href="{{route('student.create')}}"><button>Add Student</button> </a>
<a href="{{route('fee.index')}}"><button>Dashboard Fee</button> </a>
   <table border="1">
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Contect</th>
            <th>Photo</th>
            <th>Subject</th>
            <th>Action</th>

        </tr>
        @foreach($studentData as $_student)
		<tr>
			
			<td>{{$_student->rollno}}</td>
            <td>{{$_student->name}}</td>
            <td>{{$_student->class}}</td>
            <td>{{$_student->contect}}</td>
			
			<td><img src="{{$_student->getFirstMediaUrl('image', 'thumb')}}" / width="120px"></td>
			<td>{{$_student->subject}}</td>
			<td class="action"> 
				<a href="{{route('student.edit',$_student->id)}}"><button>edit</button></a>
			
               <form action="{{route('student.destroy',$_student->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <!-- <input type="submit" class="delete"value="Delete"> -->
					<button type="submit" class="delete">Delete</button>
                </form>
			</td>
		</tr>
        @endforeach
   </table>
   <script>
		$(document).ready(function(){
			$('.delete').click(function(e){
				var confirmation=confirm("Are You Want to Delete this Record...");
				if(!confirmation){
					e.preventDefault();
				}
			});
		});
		
	</script>
</body>
</html>