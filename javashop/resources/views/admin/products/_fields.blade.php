<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{Form::label('product_name', 'Product   Name')}}
    {{Form::text('name', $product->name, ['class'=>'form-control border-input', 'placeholder'=>'Macbook pro'])}}
    <span class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </span>
    <!--
        drugi '' su za default vrijednost pa '$product->name ima smisla jer kad ga znamo onda mozemo editat'
    <label>Product Name:</label>
    <input type="text" class="form-control border-input" placeholder="Macbook pro">
    -->
</div>

<div class="form-group {{$errors->has('price') ? 'has-error' : '' }}">
    {{Form::label('price', 'Price')}}
    {{Form::text('price', $product->price, ['class'=>'form-control border-input', 'placeholder'=>'$2500'])}}
    <span class="text-danger"> {{$errors->has('price') ? $errors->first('price') : '' }} <span>
    <!--
    <label>Product Price:</label>
    <input type="text" class="form-control border-input" placeholder="$2500">
    -->
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', $product->description, ['class'=>'form-control border-input', 'placeholder'=>'Description'])}}
    <span class="text-danger"> {{$errors->has('description') ? $errors->first('description') : '' }} <span> 
    <!--
    <label>Product Description:</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control border-input" placeholder="Product Description"></textarea>
    -->
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }} ">
    {{Form::label('file', 'File')}}
    {{Form::file('image', ['class'=>'form-control border-input', 'id' => 'image'])}}
    <div id="thumb-output"></div>
    <span class="text-danger"> {{$errors->has('image') ? $errors->first('image') : '' }} <span>  
    <!--
    <label>Product Image:</label>
    <input type="file" class="form-control boarder-input">
    -->
</div>