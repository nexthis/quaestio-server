@extends('layouts.layout')

@section('content') 
    <i-hero>
        <v-layout row wrap>
            <v-flex xs12 md6>
                <h1 class="display-2 white--text mt-5">Teb Edukacja</h1>
                <h1 class="display-1 white--text mt-5">Lorem ipsum dolor sit amet, consectetur </h1>
                <p class="subheading white--text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                <v-btn color="warning" round large class="ml-0 elevation-0" >Pobierz Teraz</v-btn>
            </v-flex>
            <v-flex xs6 class="hidden-sm-and-down">
                <i-city-maps></i-city-maps>
            </v-flex>
        </v-layout>
    </i-hero>
    <v-container>
        <v-card flat class="v-card--border">
            <v-card-title primary-title>
                <div>
                    <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                    <div> adasasdd </div>
                </div>
            </v-card-title>
        </v-card>
    </v-container>
@endsection