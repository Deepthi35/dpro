<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Image Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image_url', 'Image Url:') !!}
    {!! Form::textarea('image_url', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

{{-- <!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div> --}}

@include('common.image.single-image', [
    'field_label' => 'product Image:',
    'field_name' => 'image',
    'data' => isset($product) ? $product->image : null,
    'path' => PRODUCT_IMAGE_PATH,
])
<div class="clearfix"></div>

<!-- Img Alt Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_alt_text', 'Img Alt Text:') !!}
    {!! Form::text('img_alt_text', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control numbers-input' , 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Short Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    {!! Form::textarea('short_description', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Long Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('long_description', 'Long Description:') !!}
    {!! Form::textarea('long_description', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Product Categorie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_categorie_id', 'Product Categorie Id:') !!}
    {!! Form::number('product_categorie_id', null, ['class' => 'form-control select2']) !!}
</div>