<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto my-auto">
        <div class="float-right">
            <a href="{{route('student.add')}}" class="px-10 py-3 bg-green-500 text-zinc-200 text-center font-bold font-serif hover:text-white hover:uppercase
             hover:bg-green-900 rounded-md ">Add Student</a>
        </div>
        <table class="border-collapse border-slate-400 mt-4">
            <thead>
                <tr class="border border-slate-400">
                    <th class="border border-slate-300">Id</th>
                    <th class="border border-slate-300">Name</th>
                    <th class="border border-slate-300">Roll No</th>
                    <th class="border border-slate-300">D.O.B</th>
                    <th class="border border-slate-300">Class</th>
                    <th class="border border-slate-300">Contact</th>
                    <th class="border border-slate-300" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $stu)
                    <tr>
                        <td class="border border-slate-300">{{$stu['id']}}</td>
                        <td class="border border-slate-300">{{$stu->name}}</td>
                        <td class="border border-slate-300">{{$stu->roll}}</td>
                        <td class="border border-slate-300">{{$stu->dob}}</td>
                        <td class="border border-slate-300">{{$stu->class}}</td>
                        <td class="border border-slate-300">{{$stu->contact}}</td>
                        <td class="border border-slate-300"><a  href="{{route('student.delete',$stu->id)}}">Delete</a></td>
                    <td class="border border-slate-300"><a href="{{route('student.update',$stu->id)}}">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>