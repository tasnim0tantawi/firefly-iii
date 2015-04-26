@extends('layouts.default')
@section('content')
{!! Breadcrumbs::renderIfExists(Route::getCurrentRoute()->getName(), $category) !!}
{!! Form::model($category, ['class' => 'form-horizontal','id' => 'update','url' => route('categories.update',$category->id)]) !!}
<input type="hidden" name="id" value="{{$category->id}}" />
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-exclamation"></i> Mandatory fields
            </div>
            <div class="panel-body">
                {!! ExpandedForm::text('name') !!}
            </div>
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">


        <!-- panel for options -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bolt"></i> Options
            </div>
            <div class="panel-body">
                {!! ExpandedForm::optionsList('update','category') !!}
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>
            <button type="submit" class="btn btn-lg btn-success">
                Update category
            </button>
        </p>
    </div>
</div>

{!! Form::close() !!}
@stop
