@extends('layouts.accueil')

@section('content')
    <div class="logo">
        {{Html::image('images/logo.png',"JC Lemay photographe",['style'=>'width:350px','title'=>'JC Lemay Photo'])}}
    </div>


    <div class="center-text">

       <h1>{{Html::link('en/galleries','WELCOME ',['class'=>'text-accueil','title'=>'English section','style'=>'color:black;text-decoration:overline;onmouseover:lightgray'] )}}
           /
           {{Html::link(url('fr/galleries'),'BIENVENUE',['class'=>'text-accueil','title'=>'Section française','style'=>'color:black ;text-decoration:overline'])}}</h1>
    </div>

@endsection