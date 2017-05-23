@extends('layouts.master')

@section('title')
Bladetest page

@endsection


@section('body')

 <div class="row marketing">

         <div class="col-lg-6">
          Your gender is {{ $gender}}
          </br>
          if else testing </br>
          @if($gender == 'male')
          yes, he is a male
          @else
          no, she is a woman
          @endif
          < <div class="col-lg-6">
        </br>
        testing unless with text var</br>
        @unless(empty($text))
           {{$text}}
           @endif
           <div>
           <p>{{ isset($vardoesnotexist)? 'variable does not exist' : 'exists'}}</p>
           </div>
        </div>
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

      </div>

@endsection