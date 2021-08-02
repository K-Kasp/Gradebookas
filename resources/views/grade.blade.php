@extends('layout')
@section('title')
    Pažymiai
@endsection

@section('content')
    @include('add-grade')

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Paskaita</th>
                    <th scope="col">Komentaras</th>
                    <th scope="col">Pažymys</th>
                </tr>
                </thead>

                @php
                    $sum=0;
                @endphp
                @foreach($student->grade as $grade)
                    <span style="display:none">{{$sum += $grade->grade}}</span>
                    <tr>
                        <td></td>
                        <td>{{$grade->lecture->title}}</td>
                        <td>{{$grade->comment}}</td>
                        <td>{{$grade->grade}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
    
    </div>

@endsection
