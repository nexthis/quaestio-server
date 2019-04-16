@extends('layouts.layout')

@section('content') 
    <i-hero>
        <v-layout row wrap>
            <v-flex xs12 md6>
                <h1 class="display-2 responsive-2 white--text" :class="{'mt-2': $vuetify.breakpoint.xsOnly, 'mt-5': $vuetify.breakpoint.smAndUp}">Quaestio</h1>
                <h1 class="display-1 responsive-1 white--text" :class="{'mt-4': $vuetify.breakpoint.xsOnly, 'mt-5': $vuetify.breakpoint.smAndUp}">Lorem ipsum dolor sit amet, consectetur </h1>
                <p class="subheading white--text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                <v-btn color="accent" round large class="ml-0 elevation-0" >Pobierz Teraz</v-btn>
            </v-flex>
            <v-flex xs6 class="hidden-sm-and-down">
               @svg('undraw_order_confirmed_1m3v','img-fluid')
            </v-flex>
        </v-layout>
    </i-hero>
    <v-container>
        <h1 class="display-2 text-xs-center">Lorem Ipsum</h1>
    </v-container>
@endsection