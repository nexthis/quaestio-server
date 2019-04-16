@extends('layouts.layout')

@section('content') 

    {{-- Hero  --}}
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

    {{-- App --}}
    <v-container>
        <h1 class="display-2 text-xs-center">Lorem Ipsum</h1>
        <v-layout row wrap class="mt-5" align-center fill-height>
            <v-flex xs12 md5 >
                <v-img contain max-height="500px" src="{{mix('image/phone.png')}}"></v-img>
            </v-flex>
            <v-flex xs12 md6 class="hidden-sm-and-down">
                <v-card flat  class="v-card--border" >
                    <v-card-title>
                        <div>
                            <span class="grey--text caption">Body 2</span>
                            <div class="title mb-2">Headline 5</div>
                            <v-icon color="grey">favorite</v-icon> <span>Greyhound divisively hello coldly</span>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card flat  class="v-card--border mt-4">
                    <v-card-title>
                        <div>
                            <span class="grey--text caption">Body 2</span>
                            <div class="title mb-2">Headline 5</div>
                            <v-icon color="grey">favorite</v-icon> <span>Greyhound divisively hello coldly</span>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card flat  class="v-card--border mt-4">
                    <v-card-title >
                        <div>
                            <span class="grey--text caption">Body 2</span>
                            <div class="title mb-2">Headline 5</div>
                            <v-icon color="grey">favorite</v-icon> <span>Greyhound divisively hello coldly</span>
                        </div>
                    </v-card-title>
                </v-card>

                <v-img class="mt-3" contain max-height="90px" src="{{mix('image/google-play.png')}}"/>

            </v-flex>
        </v-layout>
    </v-container>

    <i-divider>Jak To Działa?</i-divider>

@endsection