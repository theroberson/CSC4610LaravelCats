@extends('layouts.layout')

@section('content')
<h4 class="center grey-text">Cats</h4>

    <div class="container">
        <h6 class="brand-text">Welcome to the site, Person Name</h6>
        <div class="row">

            
                <div class="col s6 m4">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6>HM Queen Katherine Hepburn</h6>
                            <ul class="grey-text">
                                <li>Age: 13</li>
                                <li>Brand: Tuxedo</li>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="{{ URL::route('details', ['id' => 1]) }}">more info</a>
                        </div>
                    </div>
                </div>

            
                <div class="col s6 m4">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6>HRH Princess Eliza Cuddlebutt</h6>
                            <ul class="grey-text">
                                <li>Age: 3</li>
                                <li>Brand: Nebelung</li>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="{{ URL::route('details', ['id' => 2]) }}">more info</a>
                        </div>
                    </div>
                </div>

            
                <div class="col s6 m4">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6>HRH Princess Peggy Poofytail</h6>
                            <ul class="grey-text">
                                <li>Age: 3</li>
                                <li>Brand: Nebelung</li>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="{{ URL::route('details', ['id' => 3]) }}">more info</a>
                        </div>
                    </div>
                </div>

            
                <div class="col s6 m4">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6>Bob the Cat</h6>
                            <ul class="grey-text">
                                <li>Age: 3</li>
                                <li>Brand: DMH Unknown Cuteness</li>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="{{ URL::route('details', ['id' => 4]) }}">more info</a>
                        </div>
                    </div>
                </div>

            
        </div>
    </div>
@endsection