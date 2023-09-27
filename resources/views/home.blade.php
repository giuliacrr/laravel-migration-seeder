@extends("layouts.public")
@section("title", "Trains - Homepage")

@section("content")
<h1 class="text-center text-senape mt-5 mb-2">Train list from Database!</h1>
<div class="container pt-5 pb-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Train brand:</th><!--Marca treno-->
                <th scope="col">Train:</th><!--numero treno-->
                <th scope="col">From:</th><!--parte da-->
                <th scope="col">To:</th><!--arriva a-->
                <th scope="col">Departs at:</th><!--parte alle-->
                <th scope="col">Arrives at:</th><!--arriva alle-->
                <th scope="col">Date:</th><!--data di partenza-->
                <th scope="col">Wagons:</th><!--vagoni-->
                <th scope="col">In time:</th><!--se è in tempo-->
                <th scope="col">Cancelled</th><!--cancellato-->         
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <td>{{$train->azienda}}</td><!--Marca treno-->
                <td>{{$train->codice_treno}}</td><!--numero treno-->
                <td>{{$train->stazione_partenza}}</td><!--parte da-->
                <td>{{$train->stazione_arrivo}}</td><!--arriva a-->
                <td>{{$train->orario_partenza}}</td><!--parte alle-->
                <td>{{$train->orario_arrivo}}</td><!--arriva alle-->
                <td>{{$train->data_partenza}}</td><!--data di partenza-->
                <td>{{$train->numero_carrozze}}</td><!--vagoni-->
                <td>{{$train->in_orario}}</td><!---->
                <td>{{$train->cancellato}}</td><!---->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
