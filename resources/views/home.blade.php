@extends("layouts.public")
@section("title", "Trains - Homepage")

@section("content")
<h1 class="text-center text-senape mt-5 mb-2">Train list from Database!</h1>
<div class="container pt-5 pb-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Train brand:</th>
                <th scope="col">Train:</th>
                <th scope="col">From:</th>
                <th scope="col">To:</th>
                <th scope="col">Departs at:</th>
                <th scope="col">Arrives at:</th>
                <th scope="col">Wagons:</th>
                <th scope="col">In time:</th>
                <th scope="col">Cancelled</th>            
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <th scope="row">{{$train->id}}</th>
                <td>{{$train->azienda}}</td>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->stazione_partenza}}</td>
                <td>{{$train->stazione_arrivo}}</td>
                <td>{{$train->orario_partenza}}</td>
                <td>{{$train->orario_arrivo}}</td>
                <td>{{$train->numero_carrozze}}</td>
                <td>{{$train->in_orario}}</td>
                <td>{{$train->cancellato}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
