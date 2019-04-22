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
                <v-img class="mt-3 hidden-sm-and-up" contain max-height="90px" src="{{mix('image/google-play.png')}}"/>
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

    {{-- Carousel --}}
    <v-container fluid>
        <i-carousel>
            <v-window-item >
                <v-layout row wrap>
                    <v-flex sm7>
                        <h1 class="display-1 text-xs-center py-3 hidden-sm-and-up">Znajdź Swój Cel</h1>
                        @svg('undraw_road_sign_mfpo','img-carousel')
                        <p class="mt-3 text-xs-center title hidden-sm-and-up">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </v-flex>
                    <v-flex sm5 class="hidden-sm-and-down">
                        <h1 class="display-3 text-xs-center py-3 mt-4">Znajdź Swój Cel</h1>
                        <p class="mt-3 text-xs-center display-1">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </v-flex>
                </v-layout>
            </v-window-item>
            <v-window-item >
                <v-layout row wrap>
                    <v-flex sm7>
                        <h1 class="display-1 text-xs-center py-3 hidden-sm-and-up">Znajdź Swój Cel</h1>
                        @svg('undraw_road_sign_mfpo','img-carousel')
                    </v-flex>
                    <v-flex sm5 class="hidden-sm-and-down">
                        <h1 class="display-3 text-xs-center py-3 mt-4">Znajdź Swój Cel</h1>
                        <p class="mt-3 text-xs-center display-1">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </v-flex>
                </v-layout>
            </v-window-item>
            <v-window-item >
                <v-layout row wrap>
                    <v-flex sm7>
                        <h1 class="display-1 text-xs-center py-3 hidden-sm-and-up">Znajdź Swój Cel</h1>
                        @svg('undraw_road_sign_mfpo','img-carousel')
                    </v-flex>
                    <v-flex sm5 class="hidden-sm-and-down">
                        <h1 class="display-3 text-xs-center py-3 mt-4">Znajdź Swój Cel</h1>
                        <p class="mt-3 text-xs-center display-1">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </v-flex>
                </v-layout>
            </v-window-item>
        </i-carousel>
    </v-container>

    <i-divider>Co oferujemy?</i-divider>

    {{-- Offer --}}
    <v-container grid-list-lg>
        <v-layout row wrap align-center>
            <v-flex sm6>
                @svg('undraw_around_the_world_v9nu','img-fluid')
            </v-flex>
            <v-flex sm6>
                <h1 class="display-3 responsive-3 text-xs-center py-3">Gdziekolwiek Jesteś</h1>
                <p class="mt-3 text-xs-center display-1 responsive-1">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </v-flex>
            <v-flex sm6>
                @svg('undraw_online_page_cq94','img-fluid')
            </v-flex>
            <v-flex sm6>
                <h1 class="display-3 responsive-3 text-xs-center py-3">Wybierz Swój Styl</h1>
                <p class="mt-3 text-xs-center display-1 responsive-1">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </v-flex>
            <v-flex sm6>
                @svg('undraw_code_review_l1q9','img-fluid')
            </v-flex>
            <v-flex sm6>
                <h1 class="display-3 responsive-3 text-xs-center py-3">Bądź unikalny</h1>
                <p class="mt-3 text-xs-center display-1 responsive-1">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </v-flex>
        </v-layout>
    </v-container>

    <i-divider>Zmiany</i-divider>

    {{-- Changes --}}
    <i-changes></i-changes>

    <i-divider>Autorzy</i-divider>
    <v-container grid-list-lg>
        <v-layout row wrap align-center>

            <v-flex sm4>
                <v-card>
                    <v-img src="{{asset('image/pawel-romanowski.jpg')}}" ></v-img>
                    <v-card-title primary-title>
                        <div style="width: 100%" class="text-xs-center">
                            <h1 class="display-1 ">Paweł</h1>
                            <h1 class="headline ">Romanowski</h1>
                            <h5 class="subheading mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h5>
                        </div>
                    </v-card-title>
                    <v-card-actions>

                        <v-btn fab  color="primary">
                            <v-icon dark>share</v-icon>
                        </v-btn>

                        <v-spacer></v-spacer>

                        <v-btn fab  color="primary">
                            <v-icon dark>share</v-icon>
                        </v-btn>

                        <v-spacer></v-spacer>

                        <v-btn fab  color="primary">
                            <v-icon dark>share</v-icon>
                        </v-btn>
                        
                    </v-card-actions>
                </v-card>
            </v-flex>

            <v-flex sm4>

            </v-flex>

            <v-flex sm4>

            </v-flex>

        </v-layout>
    </v-container>
    
@endsection