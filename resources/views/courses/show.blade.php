@extends('layouts.app')

@section('content')
    <section class="content-header">
       
    </section>
    <div class="content">

        <div class="clearfix"></div>
           @include('flash::message')
        <div class="clearfix"></div>


        <div class="box box-primary">
            
            <div class="box-body">
 
                    @include('courses.header')

                    @include('courses.menu')

                <div class="row" style="padding-left: 20px">

                    @if(isset($items) AND $items == 'yes')
                         @include('courses.show-item')
                    @elseif(isset($subscribers) AND $subscribers == 'yes')
                         @include('courses.subscribers')
                    @elseif(isset($contents) AND $contents == 'yes')
                         @include('courses.contents')
                    @elseif(isset($description) AND $description == 'yes')
                        @include('courses.show_fields')
                    @elseif(isset($comments) AND $comments == "yes")
                     <h2 class="col-md-12">Comments and Reviews</h2>
                        @include('comments.table')
                    @endif


                   
                    






                   

                    
                </div>
            </div>
        </div>
    </div>
@endsection
