@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reg Key
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($regKey, ['route' => ['regKeys.update', $regKey->id], 'method' => 'patch']) !!}

                        @include('reg_keys.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection