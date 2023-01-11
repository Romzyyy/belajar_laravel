@extends('layouts.mainlayout')

@section('name', 'Students')

@section('content')
<h1>ini adalah halaman Students</h1>
<h3>Student List</h3>
    <table class="table">
        @foreach($studentList as $data)
        <tr>
            <th>Nama</th>
            <th>Gender</th>
            <th>NIS</th>
        </tr>
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->nis }}</td>
           
        </tr>
        @endforeach
    </table>
@endsection

         
