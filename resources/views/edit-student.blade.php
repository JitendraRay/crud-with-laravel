<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto mt-20">
        {{-- @if (session::has('success'))
        <div class="bg-green-100 border border-green-400 text-red-700 px-4 py-3 rounded relative" role="alert">
             {{session::get('success')}}
        </div>
        @endif --}}
            
        <form action="{{route('student.edit')}}" method="POST">
            @csrf
            <input type="text" name="id" value="{{$data->id}}">
            <div class="">
                <label for="">Name</label><br>
                <input type="text" name="name" value="{{$data['name']}}" class="caret-pink-300 px-4 py-2 border border-pink-500 rounded-md w-96">
                @error('name')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-96" role="alert">
                    {{$message}}
               </div>              
                @enderror
            </div>
            <div class="">
                <label for="">Roll No</label><br>
                <input type="text" name="roll" value="{{$data['roll']}}" class="caret-pink-300 px-4 py-2 border border-pink-500 rounded-md w-96">
                @error('roll')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-96" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="">
                <label for="">D.O.B</label><br>
                <input type="date" name="dob" value="{{$data['dob']}}" class="caret-pink-300 px-4 py-2 border border-pink-500 rounded-md w-96">
                @error('dob')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-96" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="">
                <label for="">Class</label><br>
                <input type="text" name="class" value="{{$data['class']}}" class="caret-pink-300 px-4 py-2 border border-pink-500 rounded-md w-96">
                @error('class')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-96" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="">
                <label for="">Contact</label><br>
                <input type="text" name="contact" value="{{$data['contact']}}" class="caret-pink-300 px-4 py-2 border border-pink-500 rounded-md w-96">
                @error('contact')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-96" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="px-14 py-2 bg-green-500 hover:bg-green-800 hover:text-white rounded-md mt-2 w-96">Update Data</button>
                {{-- <button type="reset" class="px-14 py-2 bg-green-500 hover:bg-green-800 hover:text-white rounded-md mt-2">Reset Data</button> --}}
            </div>
        </form>
    </div>    
</body>
</html>