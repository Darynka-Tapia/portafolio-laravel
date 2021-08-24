@extends('layouts.web')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                    Habilidades del proyecto
                </li>

                @foreach($skils as $skil)
                    <li class="font-medium text-sm text-gray-800 uppercase mb-4">
                        ♦ {{$skil->name}}
                    </li>
                @endforeach
                
            </ul>

            @if($course->link!=null)
            <a href="{{$course->link}}" target="_blank">
                <img src="" alt="Enlace">
            </a>
            @endif
            @if($course->link_github != null)
            <a href="{{$course->link_github}}" target="_blank">
                <img src="" alt="Github">
            </a>
            @endif
        </div>
        <div class="text-gray-700 col-span-2">

            <img src="../{{$course->img}}" alt="">
            <h2 class="text-4xl">{{$course->name}}</h2>
            <p>{{$course->description}}</p>
            

        </div>
    </div>
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos cursos</h1>
        <h2 class="text-xl text-gray-700 ">Fórmate online como profesional en tecnología Wooo</h2>
    </div>

@endsection